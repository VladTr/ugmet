console.log('hello');
var basketOrder=JSON.parse($.cookie('basket'));

console.log('in basket: '+basketOrder.length+' items');
basketOrder.forEach(function (item, index) {
    item.row=index+1;
});



$('table#cart a').click(function(){
    $(this).parent().parent().remove();
    var clk=$(this).attr('id');
    var row=$(this).parent().parent().attr('id');
    var cartAmount=document.querySelector('#cartAmount');
    console.log('find item.id=> '+clk);
    console.log('find row=> '+row);
    basketOrder.forEach(function (item, index) {
        if (item.row==row){
            basketOrder.splice(index,1);
            console.log('index of del item '+index);
        }
    });

    var basketOrder2=JSON.stringify(basketOrder);
    $.cookie('basket', basketOrder2, {path:'/', expires:7});
    if (basketOrder.length==0){
        location.reload();
    }
    cartAmount.innerHTML=basketOrder.length;
});


function toggleAmount(num, sw){
    var old = parseInt($('.'+num).parent().children('span').text());
    var price = parseInt($('.'+num).parent().next().text());
    //var sum = parseInt($('.'+num).parent().next().next().text());
    console.log(price);

    if(sw){
        old++;
    }else{
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


