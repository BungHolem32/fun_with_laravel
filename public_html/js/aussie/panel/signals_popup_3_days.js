function showPromotion (){
    var dateStr = data.data[0].firstDepositDate.split(' ');
    var dayParams = dateStr[0].split('-');
   
    var dateDeposited = new Date();
    dateDeposited.setYear(dayParams[0]);
    dateDeposited.setMonth(dayParams[1] - 1);
    dateDeposited.setDate(dayParams[2]);
    var timestamp = dateDeposited.getTime() / 1000;

    if (dateDeposited.getFullYear() < 1980) {
            console.log('no-date');
            $('#welcomeModal').modal('show');
        return;
        
    }
    
     if(timestamp < ((new Date).getTime() / 1000) - 259200) {
          setTimeout(function(){
            setTimeout(function(){
                showSignalModal()
            }, 1000)

        }, 3000);

           $('.signal-modal-link').removeClass('hidden');
             
    }
    else {
           setTimeout(function(){
                $('#welcomeModal').modal('show');
          }, 3000);
    }
 
};

$(function(){
    setTimeout(showPromotion, 0);
});
