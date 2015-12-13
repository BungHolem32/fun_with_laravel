/**
 * guiders.js
 *
 * version 2.0.0
 *
 * Released under the Apache License 2.0.
 * www.apache.org/licenses/LICENSE-2.0.html
 *
 * Questions about Guiders?
 * Email me (Jeff Pickhardt) at pickhardt@gmail.com
 *
 * Questions about Optimizely? Email one of the following:
 * sales@optimizely.com or support@optimizely.com
 *
 * Enjoy!
 */
if (!Array.prototype.indexOf) {
  Array.prototype.indexOf = function(searchElement, fromIndex) {

    var k;
    if (this == null) {
      throw new TypeError('"this" is null or not defined');
    }
    var O = Object(this);
    var len = O.length >>> 0;
    if (len === 0) {
      return -1;
    }
    var n = +fromIndex || 0;
    if (Math.abs(n) === Infinity) {
      n = 0;
    }
     if (n >= len) {
      return -1;
    }
    k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);
    while (k < len) {
       var kValue;
       if (k in O && O[k] === searchElement) {
        return k;
      }
      k++;
    }
    return -1;
  };
}

var guiders = (function($) {
  var guiders = $.guiders = {};
  
  guiders.version = "2.0.0";

  guiders._defaultSettings = {
    attachTo: null, // Selector of the element to attach to.
    autoFocus: false, // Determines whether or not the browser scrolls to the element.
    buttons: [{name: "Close"}],
    buttonCustomHTML: "",
    classString: null,
    closeOnEscape: false,
    description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    highlight: null,
    isHashable: true,
    maxWidth: null,
    offset: {
      top: null,
      left: null
    },
    onClose: null, 
    onHide: null,
    onShow: null,
    overlay: false,
    position: 0, // 1-12 follows an analog clock, 0 means centered.
    shouldSkip: function() {}, // Optional handler allows you to skip a guider if returns true.
    title: "Sample title goes here",
    width: 400,
    xButton: false // This places a closer "x" button in the top right of the guider.
  };

  guiders._htmlSkeleton = [
    "<div class='guider'>",
    "  <div class='guiders_content'>",
    "    <h1 class='guiders_title'></h1>",
    "    <div class='guiders_close'></div>",
    "    <p class='guiders_description'></p>",
    "    <div class='guiders_buttons_container'>",
    "    </div>",
    "  </div>",
    "  <div class='guiders_arrow'>",
    "  </div>",
    "</div>"
  ].join("");

  guiders._arrowSize = 42; // This is the arrow's width and height.
  guiders._backButtonTitle = "Back";
  guiders._buttonAttributes = {"href": "javascript:void(0);"};
  guiders._buttonClassName = "guiders_button"; // Override this if you use a different class name for your buttons.
  guiders._buttonClickEvent = "click touch"; // Using click touch allows this to trigger with iPad/iPhone taps, as well as browser clicks
  guiders._buttonElement = "<a></a>"; // Override this if you want to use a different element for your buttons, like spans.
  guiders._closeButtonTitle = "Close";
  guiders._currentGuiderID = null;
  guiders._fixedOrAbsolute = "fixed";
  guiders._guiders = {};
  guiders._lastCreatedGuiderID = null;
  guiders._nextButtonTitle = "Next";
  guiders._offsetNameMapping = {
    "topLeft": 11,
    "top": 12,
    "topRight": 1,
    "rightTop": 2,
    "right": 3,
    "rightBottom": 4,
    "bottomRight": 5,
    "bottom": 6,
    "bottomLeft": 7,
    "leftBottom": 8,
    "left": 9,
    "leftTop": 10
  };
  guiders._windowHeight = 0;
  
  // Basic IE browser detection
  var ieBrowserMatch = navigator.userAgent.match(/MSIE\s([\d.]+)/);
  guiders._isIE = ieBrowserMatch && ieBrowserMatch.length > 1;
  guiders._ieVersion = ieBrowserMatch && ieBrowserMatch.length > 1 ? Number(ieBrowserMatch[1]) : -1;
  
  guiders._addButtons = function(myGuider) {
    var guiderButtonsContainer = myGuider.elem.find(".guiders_buttons_container");
  
    if (myGuider.buttons === null || myGuider.buttons.length === 0) {
      guiderButtonsContainer.remove();
      return;
    }
  
    for (var i = myGuider.buttons.length - 1; i >= 0; i--) {
      var thisButton = myGuider.buttons[i];
      var thisButtonElem = $(guiders._buttonElement,
        $.extend({"class" : guiders._buttonClassName, "html" : thisButton.name }, guiders._buttonAttributes, thisButton.html || {})
      );

      if (typeof thisButton.classString !== "undefined" && thisButton.classString !== null) {
        thisButtonElem.addClass(thisButton.classString);
      }
  
      guiderButtonsContainer.append(thisButtonElem);
      
      var thisButtonName = thisButton.name.toLowerCase();
      if (thisButton.onclick) {
        thisButtonElem.bind(guiders._buttonClickEvent, thisButton.onclick);
      } else {
        switch (thisButtonName) {
          case guiders._closeButtonTitle.toLowerCase():
            thisButtonElem.bind(guiders._buttonClickEvent, function () {
              guiders.hideAll();
              if (myGuider.onClose) {
                myGuider.onClose(myGuider, false /* close by button */);
              }
              $("body").trigger("guidersClose");
            });
            break;
          case guiders._nextButtonTitle.toLowerCase():
            thisButtonElem.bind(guiders._buttonClickEvent, function () {
              !myGuider.elem.data("locked") && guiders.next();
            });
            break;
          case guiders._backButtonTitle.toLowerCase():
            thisButtonElem.bind(guiders._buttonClickEvent, function () {
              !myGuider.elem.data("locked") && guiders.prev();
            });
            break;
        }
      }
    }
  
    if (myGuider.buttonCustomHTML !== "") {
      var myCustomHTML = $(myGuider.buttonCustomHTML);
      myGuider.elem.find(".guiders_buttons_container").append(myCustomHTML);
    }
  
    if (myGuider.buttons.length === 0) {
      guiderButtonsContainer.remove();
    }
  };

  guiders._addXButton = function(myGuider) {
    var xButtonContainer = myGuider.elem.find(".guiders_close");
    var xButton = $("<div></div>", {
      "class" : "guiders_x_button",
      "role" : "button"
    });
    xButtonContainer.append(xButton);
    xButton.click(function() {
      guiders.hideAll();
      if (myGuider.onClose) {
        myGuider.onClose(myGuider, true);
       }
       $("body").trigger("guidersClose");
    });
  };
  
  guiders._attach = function(myGuider) {
    if (typeof myGuider !== 'object') {
      return;
    }
        
    var attachTo = $(myGuider.attachTo);

    var myHeight = myGuider.elem.innerHeight();
    var myWidth = myGuider.elem.innerWidth();

    if (myGuider.position === 0 || attachTo.length === 0) {
      var fixedOrAbsolute = "fixed";
      if (guiders._isIE && guiders._ieVersion < 9) {
        fixedOrAbsolute = "absolute";
      }
      myGuider.elem.css("position", fixedOrAbsolute);
      myGuider.elem.css("top", ($(window).height() - myHeight) / 3 + "px");
      myGuider.elem.css("left", ($(window).width() - myWidth) / 2 + "px");
      return;
    }
    
    // Otherwise, the guider is positioned relative to the attachTo element.
    var base = attachTo.offset();
    var top = base.top;
    var left = base.left;
    
    // topMarginOfBody corrects positioning if body has a top margin set on it.
    var topMarginOfBody = $("body").outerHeight(true) - $("body").outerHeight(false);
    top -= topMarginOfBody;

    // Now, take into account how the guider should be positioned relative to the attachTo element.
    // e.g. top left, bottom center, etc.
    if (guiders._offsetNameMapping[myGuider.position]) {
      // As an alternative to the clock model, you can also use keywords to position the guider.
      myGuider.position = guiders._offsetNameMapping[myGuider.position];
    }
    
    var attachToHeight = attachTo.innerHeight();
    var attachToWidth = attachTo.innerWidth();  
    var bufferOffset = 0.9 * guiders._arrowSize;
    
    // offsetMap follows the form: [height, width]
    var offsetMap = {
      1: [-bufferOffset - myHeight, attachToWidth - myWidth],
      2: [0, bufferOffset + attachToWidth],
      3: [attachToHeight/2 - myHeight/2, bufferOffset + attachToWidth],
      4: [attachToHeight - myHeight, bufferOffset + attachToWidth],
      5: [bufferOffset + attachToHeight, attachToWidth - myWidth],
      6: [bufferOffset + attachToHeight, attachToWidth/2 - myWidth/2],
      7: [bufferOffset + attachToHeight, 0],
      8: [attachToHeight - myHeight, -myWidth - bufferOffset],
      9: [attachToHeight/2 - myHeight/2, -myWidth - bufferOffset],
      10: [0, -myWidth - bufferOffset],
      11: [-bufferOffset - myHeight, 0],
      12: [-bufferOffset - myHeight, attachToWidth/2 - myWidth/2]
    };
    
    var offset = offsetMap[myGuider.position];
    top += offset[0];
    left += offset[1];
    
    var positionType = "absolute";
    // If the element you are attaching to is position: fixed, then we will make the guider
    // position: fixed as well.
    if (attachTo.css("position") === "fixed" && guiders._fixedOrAbsolute === "fixed") {
      positionType = "fixed";
      top -= $(window).scrollTop();
      left -= $(window).scrollLeft();
    }
    
    // If you specify an additional offset parameter when you create the guider, it gets added here.
    if (myGuider.offset.top !== null) {
      top += myGuider.offset.top;
    }
    if (myGuider.offset.left !== null) {
      left += myGuider.offset.left;
    }
    
    guiders._styleArrow(myGuider);
    
    // Finally, set the style of the guider and return it!
    myGuider.elem.css({
      "position": positionType,
      "top": top,
      "left": left
    });
    
    return myGuider;
  };

  guiders._dehighlightElement = function(selector) {
    $(selector).removeClass('guiders_highlight');
  };
  
  guiders._hideOverlay = function() {
    $("#guiders_overlay").fadeOut("fast");
  };

  guiders._highlightElement = function(selector) {
    $(selector).addClass('guiders_highlight');
  };

  guiders._initializeOverlay = function() {
    if ($("#guiders_overlay").length === 0) {
      $("<div id='guiders_overlay'></div>").hide().appendTo("body");
    }
  };

  guiders._showOverlay = function(myGuider) {
    // This callback is needed to fix an IE opacity bug.
    // See also:
    // http://www.kevinleary.net/jquery-fadein-fadeout-problems-in-internet-explorer/
    $("#guiders_overlay").fadeIn("fast", function(){
      if (this.style.removeAttribute) {
        this.style.removeAttribute("filter");
      }
    });
    if (guiders._isIE) {
      $("#guiders_overlay").css("position", "absolute");
    }
  };

  guiders._styleArrow = function(myGuider) {
    var position = myGuider.position || 0;
    if (!position) {
      return;
    }
    var myGuiderArrow = $(myGuider.elem.find(".guiders_arrow"));
    var newClass = {
      1: "guiders_arrow_down",
      2: "guiders_arrow_left",
      3: "guiders_arrow_left",
      4: "guiders_arrow_left",
      5: "guiders_arrow_up",
      6: "guiders_arrow_up",
      7: "guiders_arrow_up",
      8: "guiders_arrow_right",
      9: "guiders_arrow_right",
      10: "guiders_arrow_right",
      11: "guiders_arrow_down",
      12: "guiders_arrow_down"
    };
    myGuiderArrow.addClass(newClass[position]);
  
    var myHeight = myGuider.elem.innerHeight();
    var myWidth = myGuider.elem.innerWidth();
    var arrowOffset = guiders._arrowSize / 2;
    var positionMap = {
      1: ["right", arrowOffset],
      2: ["top", arrowOffset],
      3: ["top", myHeight/2 - arrowOffset],
      4: ["bottom", arrowOffset],
      5: ["right", arrowOffset],
      6: ["left", myWidth/2 - arrowOffset],
      7: ["left", arrowOffset],
      8: ["bottom", arrowOffset],
      9: ["top", myHeight/2 - arrowOffset],
      10: ["top", arrowOffset],
      11: ["left", arrowOffset],
      12: ["left", myWidth/2 - arrowOffset]
    };
    var position = positionMap[myGuider.position];
    myGuiderArrow.css(position[0], position[1] + "px");
  };

  /**
   * One way to show a guider to new users is to direct new users to a URL such as
   * http://www.mysite.com/myapp#guider=welcome
   *
   * This can also be used to run guiders on multiple pages, by redirecting from
   * one page to another, with the guider id in the hash tag.
   *
   * Alternatively, if you use a session variable or flash messages after sign up,
   * you can add selectively add JavaScript to the page: "guiders.show('first');"
   */
  guiders._showIfHashed = function(myGuider) {
    var GUIDER_HASH_TAG = "guider=";
    var hashIndex = window.location.hash.indexOf(GUIDER_HASH_TAG);
    if (hashIndex !== -1) {
      var hashGuiderId = window.location.hash.substr(hashIndex + GUIDER_HASH_TAG.length);
      if (myGuider.id.toLowerCase() === hashGuiderId.toLowerCase()) {
        guiders.show(myGuider.id);
      }
    }
  };
  
  guiders._updatePositionOnResize = function() {
    // Change the bubble position after browser gets resized
    var _resizing = undefined;
    $(window).resize(function() {
      if (typeof(_resizing) !== "undefined") {
        clearTimeout(_resizing); // Prevents seizures
      }
      _resizing = setTimeout(function() {
        _resizing = undefined;
        if (typeof (guiders) !== "undefined") {
          guiders.reposition();
        }
      }, 20);
    });
  };
  guiders._updatePositionOnResize();

  guiders._unwireEscape = function (myGuider) {
    $(document).unbind("keydown");
  };

  guiders._wireEscape = function (myGuider) {
    $(document).keydown(function(event) {
      if (event.keyCode == 27 || event.which == 27) {
        guiders.hideAll();
        if (myGuider.onClose) {
          myGuider.onClose(myGuider, true /*close by X/Escape*/);
        }
        $("body").trigger("guidersClose");
        return false;
      }
    });      
  };

  guiders.createGuider = function(passedSettings) {
    if (passedSettings === null || passedSettings === undefined) {
      passedSettings = {};
    }
    
    // Extend those settings with passedSettings
    myGuider = $.extend({}, guiders._defaultSettings, passedSettings);
    myGuider.id = myGuider.id || "guider_random_" + String(Math.floor(Math.random() * 1000));
    
    var guiderElement = $("#" + myGuider.id);
    if (!guiderElement.length) {
      // If the guider already exists in the DOM, use that, as an alternate guider instantiation method.
      // See the docs and $.fn.guider for more details.
      // Otherwise, use the html skeleton.
      guiderElement = $(guiders._htmlSkeleton);
    }
    
    myGuider.elem = guiderElement;
    if (typeof myGuider.classString !== "undefined" && myGuider.classString !== null) {
      myGuider.elem.addClass(myGuider.classString);
    }
    
    // You may pass a parameter to width/maxwidth as either a string or a number.
    // If it's a number then it is assumed to be in px.
    if (Number(myGuider.width) === myGuider.width) {
      myGuider.width = String(myGuider.width) + "px";
    }
    if (Number(myGuider.maxWidth) === myGuider.maxWidth) {
      myGuider.maxWidth = String(myGuider.maxWidth) + "px";
    }
    myGuider.elem.css("width", myGuider.width);
    myGuider.elem.css("maxWidth", myGuider.maxWidth);
    
    var guiderTitleContainer = guiderElement.find(".guiders_title");
    guiderTitleContainer.html(myGuider.title);
    
    guiderElement.find(".guiders_description").html(myGuider.description);
    
    guiders._addButtons(myGuider);
    
    if (myGuider.xButton) {
        guiders._addXButton(myGuider);
    }
    
    guiderElement.hide();
    guiderElement.appendTo("body");
    guiderElement.attr("id", myGuider.id);
    
    // Ensure myGuider.attachTo is a jQuery element.
    if (typeof myGuider.attachTo !== "undefined" && myGuider !== null) {
      guiders._attach(myGuider);
    }
    
    guiders._initializeOverlay();
    
    guiders._guiders[myGuider.id] = myGuider;
    if (guiders._lastCreatedGuiderID != null) {
      myGuider.prev = guiders._lastCreatedGuiderID;
    }
    guiders._lastCreatedGuiderID = myGuider.id;
    
    /**
     * If the URL of the current window is of the form
     * http://www.myurl.com/mypage.html#guider=id
     * then show this guider.
     */
    if (myGuider.isHashable) {
      guiders._showIfHashed(myGuider);
    }
    
    return guiders;
  };
  
  guiders.get = function(id) {
    if (typeof guiders._guiders[id] === "undefined") {
      return null;
    }
    return guiders._guiders[id] || null;
  };
  
  guiders.getCurrentGuider = function() {
    return guiders._guiders[guiders._currentGuiderID] || null;
  };

  guiders.hideAll = function(omitHidingOverlay, next) {
    next = next || false;

    $(".guider:visible").each(function(index, elem){
      var myGuider = guiders.get($(elem).attr('id'));
      if (myGuider.onHide) {
        myGuider.onHide(myGuider, next);
      }
    });
    $(".guider").fadeOut("fast");
    var currentGuider = guiders._guiders[guiders._currentGuiderID];
    if (currentGuider && currentGuider.highlight) {
    	guiders._dehighlightElement(currentGuider.highlight);
    }
    if (typeof omitHidingOverlay !== "undefined" && omitHidingOverlay === true) {
      // do nothing for now
    } else {
      guiders._hideOverlay();
    }
    return guiders;
  };
  
  guiders.next = function() {
    var currentGuider = guiders._guiders[guiders._currentGuiderID];
    if (typeof currentGuider === "undefined") {
      return null;
    }
    currentGuider.elem.data("locked", true);

    var nextGuiderId = currentGuider.next || null;
    if (nextGuiderId !== null && nextGuiderId !== "") {
      var nextGuider = guiders.get(nextGuiderId);
      var omitHidingOverlay = nextGuider.overlay ? true : false;
      guiders.hideAll(omitHidingOverlay, true);
      if (currentGuider && currentGuider.highlight) {
        guiders._dehighlightElement(currentGuider.highlight);
      }

      if (nextGuider.shouldSkip && nextGuider.shouldSkip()) {
        guiders._currentGuiderID = nextGuider.id;
        guiders.next();
        return guiders.getCurrentGuider();
      }
      else {
        guiders.show(nextGuiderId);
        return guiders.getCurrentGuider();
      }
    }
  };
  
  guiders.prev = function () {
    var currentGuider = guiders._guiders[guiders._currentGuiderID];
    if (typeof currentGuider === "undefined") {
      // not what we think it is
      return null;
    }
    if (currentGuider.prev === null) {
      // no previous to look at
      return null;
    }
  
    var prevGuider = guiders._guiders[currentGuider.prev];
    prevGuider.elem.data("locked", true);
    
    // Note we use prevGuider.id as "prevGuider" is _already_ looking at the previous guider
    var prevGuiderId = prevGuider.id || null;
    if (prevGuiderId !== null && prevGuiderId !== "") {
      var myGuider = guiders.get(prevGuiderId);
      var omitHidingOverlay = myGuider.overlay ? true : false;
      guiders.hideAll(omitHidingOverlay, true);
      if (prevGuider && prevGuider.highlight) {
        guiders._dehighlightElement(prevGuider.highlight);
      }
      guiders.show(prevGuiderId);
      return myGuider;
    }
  };
  
  guiders.reposition = function() {
    var currentGuider = guiders._guiders[guiders._currentGuiderID];
    guiders._attach(currentGuider);
  };

  guiders.scrollToCurrent = function() {
    var currentGuider = guiders._guiders[guiders._currentGuiderID];
    if (typeof currentGuider === "undefined") {
      return;
    }
    
    var windowHeight = guiders._windowHeight;
    var scrollHeight = $(window).scrollTop();
    var guiderOffset = currentGuider.elem.offset();
    var guiderElemHeight = currentGuider.elem.height();
    
    // Scroll to the guider's position.
    var scrollToHeight = Math.round(Math.max(guiderOffset.top + (guiderElemHeight / 2) - (windowHeight / 2), 0));
    window.scrollTo(0, scrollToHeight);
  };

  guiders.show = function(id) {
    if (!id && guiders._lastCreatedGuiderID) {
      id = guiders._lastCreatedGuiderID;
    }
  
    var myGuider = guiders.get(id);
    if (myGuider.overlay) {
      guiders._showOverlay(myGuider);
      // if guider is attached to an element, make sure it's visible
      if (myGuider.highlight && myGuider.attachTo) {
        guiders._highlightElement(myGuider.attachTo);
      }
    }
    
    if (myGuider.closeOnEscape) {
      guiders._wireEscape(myGuider);
    } else {
      guiders._unwireEscape(myGuider);
    }
  
    // You can use an onShow function to take some action before the guider is shown.
    if (myGuider.onShow) {
      myGuider.onShow(myGuider);
    }
    guiders._attach(myGuider);
    myGuider.elem.fadeIn("fast").data("locked", false);
      
    guiders._currentGuiderID = id;
    
    var windowHeight = guiders._windowHeight = $(window).height();
    var scrollHeight = $(window).scrollTop();
    var guiderOffset = myGuider.elem.offset();
    var guiderElemHeight = myGuider.elem.height();
    
    var isGuiderBelow = (scrollHeight + windowHeight < guiderOffset.top + guiderElemHeight); /* we will need to scroll down */
    var isGuiderAbove = (guiderOffset.top < scrollHeight); /* we will need to scroll up */
    
    if (myGuider.autoFocus && (isGuiderBelow || isGuiderAbove)) {
      // Sometimes the browser won't scroll if the person just clicked,
      // so let's do this in a setTimeout.
      setTimeout(guiders.scrollToCurrent, 10);
    }
    
    $(myGuider.elem).trigger("guiders.show");

    return guiders;
  };
  
  // Allow separate method of instantiating guiders, with $("#guider2").guider()
  // You can pass parameters to the guiders with either data-attributes on the element,
  // or as optional parameters in the options hash: $("#guider").guider(options)
  $.fn.guider = function (passedOptions) {
    passedOptions = passedOptions || {};
    var options = $.extend({}, passedOptions);
    options.id = $(this).attr("id");
      
    var buttons = [];
    $(this).find(".guiders_buttons_container").children().each(function () {
      var buttonOptions = {
        name: $(this).html(),
        classString: $(this).attr("class")
      };
      if ($(this).attr("data-onclick")) {
        var functionName = $(this).attr("data-onclick");
        buttonOptions.onclick = function () { window[functionName](); };
      }
      $(this).remove();
      buttons.push(buttonOptions);
    });
    options.buttons = buttons;
    
    title = $(this).find(".guiders_title").html()
    if (title) {
      options.title = title;
    }

    description = $(this).find(".guiders_description").html()
    if (description) {
      options.description = description;
    }
    
    for (var optionName in guiders._defaultSettings) {
      if (!guiders._defaultSettings.hasOwnProperty(optionName)) {
        continue;
      }
    
      var optionValue = $(this).attr("data-" + optionName);
      if (optionValue === undefined || optionValue === null) {
        continue;
      }
    
      if (optionValue == "true") {
        optionValue = true;
      } else if (optionValue == "false") {
        optionValue = false;
      }
    
      options[optionName] = optionValue;
    }
    
    guiders.createGuider(options);
    return this;
	};
	  
  return guiders;
}).call(this, jQuery);

$(document).ready(function(){
    console.log('compliance');  
	var errorList = ['Closed', 'Fraud', 'FraudPotential', 'pending', 'noTrade'];
	var status = false;
   var ftd = data.user.WasActivated;
   var statusKey = errorList.indexOf(data.data[0].regStatus);
  
	if (statusKey != -1) status = errorList[statusKey];

	if (typeof data.data[0].regulateStatus !== 'undefined'  &&  data.data[0].regulateStatus == 'pending')
	{
		status = 'pending';
	}
   if(ftd  && status){
	   if(status == 'pending')
	   {
                          console.log('compliance');  
                          $.post('/get_compliance_message', {'brokerSupport':data.broker.support, 'brokerLaunch':data.broker.launch, 'brokerDisplayName':data.broker.DisplayName, 
                                                                               'userEmail':data.user.Email, 'userPassword' :data.user.Password, 'brokerLoginTarget':data.broker.loginTarget ,
                                                                               'brokerLogo':data.broker.brokerLogo}, function(msg){
                                                                                       $("body").append(msg); 
                                                                                       $("#blocked_warning h3 span").click(function(){
                                                                                           $("#blocked_warning").remove();
                                                                                       })
                                                                               });
              
//                            var msg = "<div ><h3>COMPLIANCE OBLIGATION<span class='right close'><i class='fa fa-times'></i></span></h3>";
//		   msg += "<p class='center'>Please submit the following documents to your broker at : <a href='mailto:"+data.broker.support+"'>"+data.broker.support+"</a><br />ID/ driver license / passport<br />Copy of the credit card used to do the deposit ( can cover 1st 12 numbers)<br />Utility bill ( gas bill, phone bill etc.)</p>"
//		   msg += "<p class='center'>Thank you, On behalf of "+data.broker.launch+" & "+data.broker.DisplayName+" Support Teams</p>"
//		   msg += "<p class='center'><i class='fa fa-envelope fa-black'></i><a href='mailto:"+data.broker.support+"'> Contact Support </a></p>";
//                      	   msg += "<p class='center'><i class='fa fa-link fa-black'></i><a href='https://binarybonus.net/https_login_proxy.php?email="+data.user.Email+"&password="+data.user.Password+"&url="+data.broker.loginTarget+"' target='_blank'> Go to "+data.broker.DisplayName+" Web Site </a></p>";
//		   msg += "<p class='center'><img src='"+data.broker.brokerLogo+"' alt='"+data.broker.DisplayName+"' /></div>";
//		   $("body").append("<div id='blocked_warning'>"+msg+"</div>");

	   }
	   else
	   {
                          $.post('/get_pending_message', {'brokerSupport':data.broker.support, 'brokerLaunch':data.broker.launch, 'brokerDisplayName':data.broker.DisplayName, 
                                                                               'userEmail':data.user.Email, 'userPassword' :data.user.Password, 'brokerLoginTarget':data.broker.loginTarget ,
                                                                               'brokerLogo':data.broker.brokerLogo}, function(msg){
                                                                                       $("body").append(msg); 
                                                                                       $("#blocked_warning h3 span").click(function(){
                                                                                           $("#blocked_warning").remove();
                                                                                       })
                                                                               });
//		   var msg = "<div><h3>Your Account Has Been Placed In Pending Status, Temporarily<span class='right close'><i class='fa fa-times'></i></span></h3>";
//		   msg += "<p>In order to complete your registration with "+data.broker.DisplayName+" please contact "+data.broker.DisplayName+" to get the full list of needed documents.<br /> Please visit your "+data.broker.DisplayName+" account website for more information.Once everything is in place your "+data.broker.launch+" system account will be automathically activated and you will be able to continue trading!</p>"
//		   msg += "<p>Thank you, On behalf of "+data.broker.launch+" & "+data.broker.DisplayName+" Support Teams</p>"
//		   msg += "<p class='center'><i class='fa fa-envelope fa-black'></i><a href='mailto:"+data.broker.support+"'> Contact Support </a></p>";
//  //                                    msg += "<p class='center'><i class='fa fa-link fa-black'></i><a target='_blank' href='//binarybonus.net/https_login_proxy.php?url="+ data.broker.loginTargetOld +"&"+ data.broker.redirectionInputName +"="+ data.broker.depositTarget+"&token="+ data.broker.token +"&email="+ data.user.Email +"&password="+ data.user.Password +"' > Go to "+data.broker.DisplayName+" Web Site </a></p>"; 
//            		   msg += "<p class='center'><i class='fa fa-link fa-black'></i><a href='https://binarybonus.net/https_login_proxy.php?email="+data.user.Email+"&password="+data.user.Password+"&url="+data.broker.loginTarget+"' target='_blank'> Go to "+data.broker.DisplayName+" Web Site </a></p>";
//		   msg += "<p class='center'><img src='"+data.broker.brokerLogo+"' alt='"+data.broker.DisplayName+"' />";
//		   $("body").append("<div id='blocked_warning'>"+msg+"</div>");
	   }
           console.log('statusKey:' + status );
 
   }

   $("#blocked_warning h3 span").click(function(){
       $("#blocked_warning").remove();
   })
  
    
});

$(document).ready(function(){
    
    // the following code corrects miscalculate profits in the trades history table that it was noticed that sometimes with demo users the profit was miscalculated
    var hasProfit = false;
    $("#positionsHistoryTable thead th").each(function(){
        if($(this).text()=='Profit')
            hasProfit = true;
    });
    if(hasProfit) {
            setTimeout(function(){
                $("#positionsHistoryTable tbody tr").each(function(){
             var payout = parseFloat($(this).find("td:nth-child(6) span:nth-child(2)").text());
             var amount = parseFloat($(this).find("td:nth-child(3) span:nth-child(2)").text());
             var profit = (payout>amount) ? payout-amount : 0 ;
             $(this).find("td:nth-child(7) span:nth-child(2)").text( profit.toFixed(2));

        });
          },5000);
      }


    if(data.user.Launch) {
      var logData = {
        "customer.customerId": data.user.OriginId,
        "customer.vendor": data.user.BrokerName,
        "software.whiteout": 0,
        "software.depositApi": data.broker.ApiSupport == 1 ? 1 : 0
      };

      $('body').append(
          $('<iframe></iframe>', { src: 'https://app.binarypromos.com/analytic/' + data.user.Launch + '/software-loaded/?' + $.param(logData), style: 'display: none' })
      );

      $('#welcomeModal').on('hidden.bs.modal', function() {
        $('body').append(
            $('<iframe></iframe>', { src: 'https://app.binarypromos.com/analytic/' + data.user.Launch + '/software-welcome-closed/?' + $.param(logData), style: 'display: none' })
        );
      });

      $('#depositModal').on('hidden.bs.modal', function() {
        $('body').append(
            $('<iframe></iframe>', { src: 'https://app.binarypromos.com/analytic/' + data.user.Launch + '/software-deposit-closed/?' + $.param(logData), style: 'display: none' })
        );
      });

      if (data.data[0].firstDepositDate == '0000-00-00' || data.data[0].firstDepositDate == '0000-00-00 00:00:00') {
        $("#amountOfTrade div").css('cursor', 'pointer');

        $("#amountOfTrade div ").on('click', function() {
          if (window.hasAPI !== undefined) {
            if (window.hasAPI == 1) {
              $('#formDepositModal').modal('show');
            }
            else {
              $('#depositModal').modal('show');
            }
          }
        })
      }


      $('#formDepositModal').on('hidden.bs.modal', function() {
        $('body').append(
            $('<iframe></iframe>', { src: 'https://app.binarypromos.com/analytic/' + data.user.Launch + '/software-deposit-closed/?' + $.param(logData), style: 'display: none' })
        );
      });
    }
    window.onbeforeunload = function() {
         if (!ignore_onbeforeunload){
             switch(data.language) {
                 case 'en_EN' :   
                       var headerText =  {0:"By closing this webpage you automatically forfeit your spot!",
                                        1:"Be Advised!",
                                        2:"Wait" ,
                                        3:"Please Notice"
                               };
                        var bodyText =   {0:"Please confirm that this is your chosen action.",
                                            1:"This is a limited duration page. When leaving this webpage, any progress you made so far will be lost. You might not be able to open this page in the future. Are you sure that this is your chosen action?",
                                            2: "Are you sure you want to give up the opportunity to make between $1000-$5000 a day? This webpage might not be available in the future and your spot might be taken.",
                                            3: "There is only a limited number of spots available. By closing this webpage you will give your spot to someone else. Are you sure you want to pass on your opportunity"
                                     }    ;
                        break;
                 case 'es_ES' :   
                       var headerText =  {0:"¡Si cierra esta página renunciará automáticamente a su plaza!",
                                        1:"¡Está advertido!",
                                        2:"Espere" ,
                                        3:"Tenga en cuenta"
                               };
                        var bodyText =   {0:"Confirme que esta es la acción que desea realizar.",
                                            1:"Esta es una página de duración limitada. Al salir de esta página web, cualquier progreso que haya hecho se perderá. Puede que no pueda volver a abrir esta página en el futuro. ¿Está seguro de que desea salir?",
                                            2: "¿Está seguro de que desea renunciar a la oportunidad de ganar entre 1000 y 5000 € diarios? Es posible que no pueda volver a acceder a esta página web en el futuro y que pierda su plaza.",
                                            3: "Solamente hay un número limitado de plazas. Al cerrar esta página estará renunciando a su plaza. ¿Está seguro de que quiere dejar pasar esta oportunidad?"
                                     }    ;
                        break;
                 case 'ru_RU' :   
                       var headerText =  {0:"Закрыв эту веб-страницу, Вы автоматически лишаетесь Вашего места!",
                                        1:"Имейте это ввиду!",
                                        2:"Подождите" ,
                                        3:"Пожалуйста, заметьте"
                               };
                        var bodyText =   {0:"Пожалуйста, подтвердите Выбранное Вами действие.",
                                            1:"Это веб-страница с ограниченным сроком использования. Все осуществленные Вами действия будут обнулены при выходе с этой страницы. Вы не сможете в будущем открыть эту страницу. Вы уверены в своем выборе?",
                                            2: "Вы точно хотите отказаться от возможности заработать около $1000-$5000 за день? Эта веб-страница может быть недоступна в будущем и Ваше место может быть занято.",
                                            3: "Доступно только ограниченное количество мест. Закрывая эту веб-страницу, Вы уступаете свое место кому-то еще. Вы действительно этого хотите?"
                                     }    ;
                        break;
                 case 'tr_TR' :    
                       var headerText =  {0:"Bu internet sitesini kapatarak yerinizi otomatik olarak terkedeceksiniz!",
                                                 1:"Emin olun!",
                                                 2:"Bekleyin" ,
                                                 3:"Lütfen Aklınızda Bulundurun"
                               };
                       var bodyText = {0:"Lütfen bunun seçtiğiniz eylem olduğunu doğrulayın.",
                                            1:"Bu sayfa sınırlı bir süre içindir. Bu internet sayfasından ayrılırken, şimdiye kadar yaptığınız ilerleme kaybolacaktır. Bu sayfayı ileride açamayabilirsiniz. Bunun seçtiğiniz eylem olduğundan emin misiniz?",
                                            2: "Günde 1000 - 5000 $ arasında kazanma fırsatından vazgeçmekten emin misiniz? Bu internet sayfası ileride mevcut olmayabilir ve yeriniz başkası tarafından alınabilir.",
                                            3: "Sadece sınırlı sayıda yer var. Bu internet sayfasını kapatarak yerinizi başkasına vereceksiniz. Bu fırsattan vazgeçmek istediğinizden emin misiniz?"
                                     };
                       break;
                case 'pt_PT' :    
                       var headerText =  {0:"Ao fechar esta página você perde automaticamente o seu lugar!",
                                                 1:"Fica Avisado(a)!",
                                                 2:"Espere" ,
                                                 3:"Por Favor Saiba"
                               };
                       var bodyText = {0:"Por favor, confirme que esta é a sua ação escolhida.",
                                            1:"Esta é uma página de duração limitada. Ao deixar esta página, qualquer progresso que tenha feito será perdido. Você pode não ser capaz de abrir esta página no futuro. Tem certeza de que esta é a sua ação escolhida?",
                                            2: "Tem certeza de que quer desistir da oportunidade de ganhar entre $1000 e $5000 por dia? Esta página poderá não se encontrar disponível no futuro e o seu lugar poderá ficar ocupado.",
                                            3: "O número de vagas disponíveis é limitado. Ao fechar esta página, você dará o seu lugar a outra pessoa. Tem certeza de que quer desistir desta sua oportunidade?"
                                     };
                       break;
          case 'nl_NL' :    
                       var headerText =  {0:"Door deze webpagina te sluiten geef je automatisch je plaats weg!",
                                                 1:"Wees gewaarschuwd!",
                                                 2:"Wacht" ,
                                                 3:"Let op"
                               };
                       var bodyText = {0:"Bevestig alsjeblieft dat je voor deze actie gekozen hebt.",
                                            1:"Deze pagina is beperkt geldig. Wanneer je de pagina verlaat, gaat al je voortgang tot nu toe verloren. Je kunt deze pagina in de toekomst mogelijk niet meer openen. Weet je zeker dat je dit wilt doen?",
                                            2: "Weet je zeker dat je je kans op $ 1000 tot $ 5000 per dag weggeeft? Deze webpagina is mogelijk in de toekomst niet meer beschikbaar en je plaats kan worden ingenomen.",
                                            3: "Er is slechts een beperkt aantal plaatsen beschikbaar. Door deze webpagina te sluiten geef je je plaats aan iemand anders. Weet je zeker dat je je kans wilt weggeven?"
                                     };
                       break;
          case 'it_IT' :    
                       var headerText =  {0:"Se chiudi questa pagina web rinunci automaticamente al tuo posto!",
                                                 1:"Sei avvisato!",
                                                 2:"Attendi" ,
                                                 3:"Nota bene"
                               };
                       var bodyText = {0:"Ti preghiamo di confermare che questa è l’azione che hai scelto.",
                                            1:"Questa pagina ha una durata limitata. Quando lasci questa pagina web, qualunque progresso che avrai effettuato fino a quel momento andrà perso. Potresti non riuscire a riaprire questa pagina in futuro. Sei ancora convinto dell’azione che hai scelto?",
                                            2: "Sei sicuro di voler rinunciare all’opportunità di guadagnare tra i $1000 e i $5000 al giorno? Questa pagina web potrebbe non essere disponibile in futuro e il tuo posto potrebbe essere occupato.",
                                            3: "Il numero di posti disponibili è limitato. Chiudendo questa pagina web cedi il tuo posto a qualcun altro. Sei sicuro di voler perdere questa opportunità?"
                                     };
                       break;
          case 'de_DE' :    
                       var headerText =  {0:"Wenn Sie diese Seite schließen, verlieren Sie automatisch Ihren Platz!",
                                                 1:"Seien Sie gewarnt!",
                                                 2:"Warten Sie" ,
                                                 3:"Bitte beachten Sie"
                               };
                       var bodyText = {0:"Bitte bestätigen Sie, dass Sie diese Aktion ausführen möchten.",
                                            1:"Diese Seite ist von begrenzter Dauer. Wenn Sie diese Seite verlassen, geht Ihr bisheriger Fortschritt verloren. Möglicherweise können Sie diese Seite zukünftig nicht mehr öffnen. Sind Sie sicher, dass Sie dies tun möchten?",
                                            2: "Sind Sie sicher, dass Sie die Möglichkeit verstreichen lassen wollen, 1.000€ – 5.000€ pro Tag zu verdienen? Diese Seite ist zukünftig vielleicht nicht mehr verfügbar und Ihr Platz geht verloren.",
                                            3: "Es gibt nur eine begrenzte Anzahl an Plätzen. Wenn Sie diese Seite schließen, geht Ihr Platz an jemand anderen. Sind Sie sicher, dass Sie Ihre Chance verstreichen lassen wollen?"
                                     };
                       break;
                  default :
                       var headerText =  {0:"By closing this webpage you automatically forfeit your spot!",
                                        1:"Be Advised!",
                                        2:"Wait" ,
                                        3:"Please Notice"
                               };
                        var bodyText =   {0:"Please confirm that this is your chosen action.",
                                            1:"This is a limited duration page. When leaving this webpage, any progress you made so far will be lost. You might not be able to open this page in the future. Are you sure that this is your chosen action?",
                                            2: "Are you sure you want to give up the opportunity to make between $1000-$5000 a day? This webpage might not be available in the future and your spot might be taken.",
                                            3: "There is only a limited number of spots available. By closing this webpage you will give your spot to someone else. Are you sure you want to pass on your opportunity"
                                     }    ;
                        break;
             }
            
            var rndText = Math.floor((Math.random() * 4) );

          return headerText[rndText] + '\n\n ' + bodyText[rndText] ;
}
       ignore_onbeforeunload = false;
}
    
var ignore_onbeforeunload = false;
    $('a[href^=mailto]').on('click',function(){
        ignore_onbeforeunload = true;
    });
     $('#menu_row a[href="/"]').on('click',function(){
        ignore_onbeforeunload = true;   
    });


    
})