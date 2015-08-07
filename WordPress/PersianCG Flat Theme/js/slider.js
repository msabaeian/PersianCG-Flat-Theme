$(document).ready(function(){
  var interval;  
  var mem = 100;
  var idmem = "imag1";
  var idmem2 = "";
  $(function(){
    $('#animate div:gt(0)').hide();
});
interval_function =  function(){
          idmem =  $('#animate div:first').next('div').attr('id');
          $('#animate div:first').fadeOut(trantime)
         .next('div').fadeIn(trantime)
         .end().appendTo('#animate');
         $('.ws_selbull').removeClass('ws_selbull');
         $('.ws_bullets').find(":contains('"+idmem+"')").addClass('ws_selbull');
}
$('#slidercode').mouseover(function(){
			$('.thethe-image-slider-controls').css({ 'display' : 'block' })
});
$('#slidercode').mouseout(function(){
			$('.thethe-image-slider-controls').css({ 'display' : 'none' })
});
interval = setInterval(interval_function, ttime);
$('.thethe-image-slider-controls-pause').click(function(){
  if($(this).attr('class').indexOf('thethe-pause') >=0 ){
            clearInterval(interval);
			$(this).removeClass('thethe-pause');
			$(this).addClass('thethe-play');
}else{
            interval = setInterval(interval_function, ttime);
			$(this).removeClass('thethe-play');
			$(this).addClass('thethe-pause');
}
});
$('.thethe-image-slider-controls-next').click(function(){
    clearInterval(interval);
    mem = trantime;
    trantime = 200;
    interval_function();
    trantime = mem;
    if($('.thethe-image-slider-controls-pause').attr('class').indexOf('thethe-pause') >=0 ){
    interval = setInterval(interval_function, ttime);
    }
});
$('.thethe-image-slider-controls-prev').click(function(){
    clearInterval(interval);
    mem = trantime;
    trantime = 200;
    idmem =  $('#animate div:last').attr('id');
    $('#animate div:first').fadeOut(trantime);
    $('#animate div:last').fadeIn(trantime).insertBefore('#animate div:first');
    $('.ws_selbull').removeClass('ws_selbull');
    $('.ws_bullets').find(":contains('"+idmem+"')").addClass('ws_selbull');
    trantime = mem;
    if($('.thethe-image-slider-controls-pause').attr('class').indexOf('thethe-pause') >=0 ){
    interval = setInterval(interval_function, ttime);
    }
});
$('.ws_bullets a').click(function(){
   clearInterval(interval);
   idmem2 = $(this).html();
   if ( $('#animate #'+idmem2+'' ).css('display') == "none" ){
   mem = trantime;
   trantime = 1;
   while( idmem2 !=  $('#animate div:first').attr('id')){
   interval_function();
   }
   trantime = mem;
   }
   if($('.thethe-image-slider-controls-pause').attr('class').indexOf('thethe-pause') >=0 ){
    interval = setInterval(interval_function, ttime);
    }
});
});
