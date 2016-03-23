// @web-memory.ru 2014
$.fn.myClock = function(setup){
  var settings = $.extend( {
    'endDate'         : '0',
    'endTime'         : '0',
    'circle'          : '0',
    'cookie'          : '0',
    'cookieTime'      : '30',
    'dateOff'         : '0',
    'separDate'       : '',
    'separTime'       : ''
  }, setup);

  var elem = this;
  var timeMess='';
  if(settings.dateOff == 1) timeMess += '<span class="block-clock"><span class="line"></span><span class="clock-date"></span></span>'+settings.separDate;
  timeMess += '<span class="block-clock"><span class="line"></span><span class="clock-hours"></span></span>'+settings.separTime;
  timeMess += '<span class="block-clock"><span class="line"></span><span class="clock-minutes"></span></span>'+settings.separTime;
  timeMess += '<span class="block-clock"><span class="line"></span><span class="clock-seconds"></span></span>';
  timeMess += '<span class="block-clock"><span class="line"></span><span class="clock-1">You Must Enter Your Details In The Form</strong> Before The Clock Hits Zero. There Are Currently 1591 People In Israel Waiting To Take Your FREE License.</span></span>';
  $(elem).html(timeMess);

  if($(this).attr("id")){  	var elemCookie = $(this).attr("id");  }else{  	var elemCookie = $(elem).children().parent().attr('class');  }

  if(settings.endDate != 0) startDate = new Date(settings.endDate);
  else startDate = new Date();
  var startTime = startDate;
  if(getCookie(elemCookie) && settings.cookie == 1) cookieTimeUTC =  getCookie(elemCookie);
  else cookieTimeUTC = Math.floor(startTime.getTime()+(settings.endTime*60*1000));

  var startTimeUTC = cookieTimeUTC;

  var zoneTime = startTime.getTimezoneOffset()*60*1000;

  if(settings.cookie == 1){
    if(!getCookie(elemCookie))setCookie(elemCookie, cookieTimeUTC, {expires: settings.cookieTime*60});
  }
  stopClock = new Array();
  if(!stopClock[elemCookie]){
    stopClock[elemCookie] = '0';
  }
  var intervalID = setInterval(
    function(){
      endTime = new Date();
      endTimeUTC = endTime.getTime();
      ostTime = new Date(startTimeUTC-endTime+zoneTime);
      d = Math.floor(ostTime.getDate()-1);
      h = Math.floor(ostTime.getHours());
      m = Math.floor(ostTime.getMinutes());
      s = Math.floor(ostTime.getSeconds());
      if(startTimeUTC <= endTimeUTC+1*1000){
        s = m = h = d = '00';
       	if(settings.circle == 1){
       	  startTimeUTC = Math.floor(endTimeUTC+(settings.endTime*60*1000));
       	}else{stopClock[elemCookie] = '1';clearInterval(intervalID);}
      }
      if(settings.dateOff == 1) $(elem).children('.block-clock').children('.clock-date').html(addZero(d));
      $(elem).children('.block-clock').children('.clock-hours').html(addZero(h));
      $(elem).children('.block-clock').children('.clock-minutes').html(addZero(m));
      $(elem).children('.block-clock').children('.clock-seconds').html(addZero(s));
    }
  ,10);

  function addZero(num){
    str = num+'';
    if(str.length < 2)num = '0'+num;
    return num;
  }

  function setCookie(name, value, options) {
    options = options || {};
    var expires = options.expires;

    if (typeof expires == "number" && expires) {
      var d = new Date();
      d.setTime(d.getTime() + expires*1000);
      expires = options.expires = d;
    }

    if (expires && expires.toUTCString) {
  	  options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);
    var updatedCookie = name + "=" + value;

    for(var propName in options) {
      updatedCookie += "; " + propName;
      var propValue = options[propName];
      if (propValue !== true) {
        updatedCookie += "=" + propValue;
       }
    }

    document.cookie = updatedCookie;

  }

  function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  return stopClock;
};