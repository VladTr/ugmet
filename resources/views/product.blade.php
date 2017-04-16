
<? header("Content-type: text/javascript"); ?>
<script>
    var arr = JSON.parse('<?=$res?>');
    var order={};
    $('#inputLenght').hide();
    $('#saveOrder').hide();
    $('table').click(function(event) {
        var clk = $(event.target).attr('id');
        console.log(clk);
        if (clk!=undefined){
            arr.forEach(function(item, index){
                if (item.id==clk){
                    order.id=item.id;
                    order.name=item.name;
                    order.carrying=item.carrying;
                    order.price=item.price;
                    order.amount=1;
                }
            });

            $('#inputLenght').show();
            $('#inputLenght span').text(order.name+'  '+order.carrying+" тн."+'Введите длину, мм : ');
        }
    });


    $('#len').blur(function () {
        if($('#len').val()=='') {
            $('#cost').append('<br>Введите длину, мм');
            return;
        }
        order.len=parseInt($('#len').val());
        $('#cost').empty();
        $('#saveOrder').show();

        var res = order.price+(order.len-1000)/rateCalculate(order.name, order.carrying);
        $('#cost').append('Цена стропа составляет: ' +res.toFixed(2)+' грн');
        console.log(rateCalculate(order.name, order.carrying));

    });


    function rateCalculate (orderName, orderCarrying) {
        var types=[
            {name:'СКП',rate:[{carrying:0.63, ratio:65},{carrying:1.25, ratio:60}, {carrying:1.60, ratio:59},
            {carrying:2.00, ratio:58}, {carrying:3.2, ratio:59}, {carrying:4.0, ratio:59}, {carrying:5.0, ratio:59},
            {carrying:6.0, ratio:59}, {carrying:8.0, ratio:59}, {carrying:10.0, ratio:59}
            ]},

            {name:'1СК',rate:[{carrying:0.63, ratio:65},{carrying:1.25, ratio:60}, {carrying:1.60, ratio:59},
                {carrying:2.00, ratio:58},{carrying:2.50, ratio:15}, {carrying:3.2, ratio:13}, {carrying:4.0, ratio:15}, {carrying:5.0, ratio:10},
                {carrying:6.30, ratio:7}, {carrying:8.0, ratio:7}, {carrying:10.0, ratio:7}
            ]},

            {name:'2СК',rate:[{carrying:0.8, ratio:30},{carrying:1.6, ratio:20},
                {carrying:2.00, ratio:20},{carrying:2.50, ratio:15}, {carrying:3.2, ratio:13}, {carrying:4.0, ratio:15}, {carrying:5.0, ratio:10},
                {carrying:6.30, ratio:7}, {carrying:8.0, ratio:7}, {carrying:10.0, ratio:7}
            ]},

            {name:'4СК',rate:[{carrying:1.6, ratio:20},{carrying:3.2, ratio:13}, {carrying:4.0, ratio:15},
            {carrying:5.0, ratio:10}, {carrying:6.30, ratio:7}, {carrying:8.0, ratio:7}, {carrying:10.0, ratio:7},{carrying:12.5, ratio:7}
            ]},

            {name:'СТП',rate:[{carrying:1.0, ratio:30},{carrying:2.0, ratio:30}, {carrying:3.0, ratio:20},
                {carrying:4.0, ratio:15}, {carrying:5.0, ratio:15}, {carrying:8.0, ratio:30}, {carrying:10.0, ratio:30}
            ]},

            {name:'2СТ',rate:[{carrying:1.0, ratio:20},{carrying:2.0, ratio:20}, {carrying:3.2, ratio:15},
                {carrying:4.0, ratio:10}, {carrying:5.0, ratio:10}, {carrying:6.3, ratio:6}, {carrying:8.0, ratio:4}
            ]},

            {name:'4СТ',rate:[{carrying:1.6, ratio:15},{carrying:2.0, ratio:15}, {carrying:3.2, ratio:10},
                {carrying:4.0, ratio:6}, {carrying:5.0, ratio:6}, {carrying:6.3, ratio:6}, {carrying:8.0, ratio:4}
            ]},

            {name:'СТК',rate:[{carrying:1.0, ratio:30},{carrying:2.0, ratio:25}, {carrying:3.0, ratio:10},
                {carrying:4.0, ratio:6}, {carrying:5.0, ratio:6}, {carrying:8.0, ratio:6}, {carrying:10.0, ratio:4}
            ]},

            {name:'1СЦ',rate:[{carrying:1.12, ratio:8},{carrying:2.0, ratio:7}, {carrying:3.15, ratio:5},
                {carrying:5.3, ratio:5}, {carrying:8.0, ratio:2}, {carrying:12.5, ratio:2}
            ]},

            {name:'2СЦ',rate:[{carrying:1.60, ratio:8},{carrying:2.8, ratio:7}, {carrying:4.24, ratio:5},
                {carrying:7.5, ratio:5}, {carrying:11.2, ratio:3}, {carrying:17.0, ratio:2}
            ]},

            {name:'4СЦ',rate:[{carrying:2.36, ratio:2},{carrying:4.25, ratio:2}, {carrying:6.70, ratio:1},
                {carrying:11.2, ratio:0.9}, {carrying:17.0, ratio:0.6}, {carrying:26.5, ratio:0.6}
            ]},

            {name:'УСЦ',rate:[{carrying:1.80, ratio:7},{carrying:3.15, ratio:5}, {carrying:5.0, ratio:3},
                {carrying:8.5, ratio:3}, {carrying:12.5, ratio:3}, {carrying:20.0, ratio:3}
            ]},

        ];
        var result=null;
        types.forEach(function(el){
            if(orderName.indexOf(el.name)>=0){
                el.rate.forEach(function (rate) {
                    if (rate.carrying==orderCarrying){
                        result=rate.ratio;
                    }
                });
            }
        });
        return result||1;
    }
</script>

