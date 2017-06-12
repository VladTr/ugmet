// установка стилей для виджета категорий

$('.widget').css('background-color', '#73823D');
$('.widget a').css('color', 'white');
$('.parent').css('margin-left', '10px');


$('.parent').mouseover(function(){
    $(this).css('cursor', 'default');
});

$('.child').css('margin-left', '10px');
$('.child').hide();

function toggle(){
    $('.child').toggle();
}


$('.parent').mouseover(function(){
    $(this).children().show();

});

$('.child').mouseover(function(){
    $(this).children().show();
});

$('.widget').mouseleave(function(){
    $('.child').hide();
});


// скрипт сохранения заказа
$('#saveOrder').click(function () {
    var basketOrder=[];
    $.cookie.json = true;
    var itemExsists=false;
    var orderNum=0;
    if (Object.keys(order).length==0) return;
    if 	($.cookie('basket')==undefined){
        console.log('basket is empty');
        basketOrder[basketOrder.length]=order;
        orderNum=1;
        order={}
        console.log('order added');
    } else{
        console.log('basket is full');
        basketOrder=$.cookie('basket');
        orderNum=basketOrder.length;
        console.log(orderNum);
        for (var i = 0; i < basketOrder.length; i++) {
            if (basketOrder[i].id==order.id && basketOrder[i].len==order.len){
                basketOrder[i].amount++;
                console.log('=');
                itemExsists=true;
            }
        }
        if(!itemExsists){basketOrder[basketOrder.length]=order;}
    }
    $.cookie('basket', basketOrder, {expires:7, path: '/'} );
    var span = document.getElementById('cartAmount');
    span.innerHTML = basketOrder.length;

});





