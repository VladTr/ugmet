// скрипт управления количеством товаров в корзине
if ($.cookie('basket')!=undefined){
    var basketOrder=JSON.parse($.cookie('basket')); // полчаем массив товаров из cookie
    basketOrder.forEach(function (item, index) {
        item.row=index+1;
    });
}


// удаление товара из корзины и сохранение результата в cookie
$('table#cart a').click(function(){
    $(this).parent().parent().remove();
    //var clk=$(this).attr('id');
    var row=$(this).parent().parent().attr('id');
    var cartAmount=document.querySelector('#cartAmount');
    basketOrder.forEach(function (item, index) {
        if (item.row==row){
            basketOrder.splice(index,1);
        }
    });

    var basketOrder2=JSON.stringify(basketOrder);
    $.cookie('basket', basketOrder2, {path:'/', expires:7});
    if (basketOrder.length==0){
        location.reload();
    }
    cartAmount.innerHTML=basketOrder.length;
});

// изменение количества товара и  сохранение результата в cookie
function toggleAmount(num, sw){
    var old = parseInt($('.'+num).parent().children('span').text());
    var price = parseInt($('.'+num).parent().next().text());
    if( sw ){
        old++;
    } else{
        if(old!=1){old--;}
    }
    $('.'+num).parent().children('span').text(old);
    $('.'+num).parent().next().next().text(old*price+' грн');
    basketOrder.forEach(function(item, index){
        if(item.row==num){
            item.amount=old;
        }
    });
    var basketOrder3=JSON.stringify(basketOrder);
    $.cookie('basket', basketOrder3, {path:'/', expires:7});
}


