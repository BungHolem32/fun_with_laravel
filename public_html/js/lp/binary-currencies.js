$(document).ready(function(){
   $('.select').on('mousedown',function(){
      $(this).addClass('focus');
   }).on('mouseup',function(){
       $(this).removeClass('focus');
   });
});