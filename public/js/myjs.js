
$(window).resize(function(){
  var width=$(document).width();
  if (width<760){
	$('#menu').css('background-image', 'none').css('background-color', '#73823D');      
  }
});    

$(document).ready(function() {
    if ($.cookie('basket')){
        var basketOrder=JSON.parse($.cookie('basket'));
        console.log( basketOrder.length+'--');
    }
    var span = document.getElementById('cartAmount');
    span.innerHTML = basketOrder ? basketOrder.length : 0;
});