Вы получили следующий заказ:<br>
<hr>
@if(isset($request->gost))
    Канат<br>
    ГОСТ: {{$request->gost}} <br>
    диаметр: {{$request->diam}}<br>
@endif

@if(isset($request->width))
    Стяжной ремень<br>
    Ширина ленты,мм: {{$request->width}} <br>
    Длина ремня,м: {{$request->len}}<br>
@endif

@if(isset($request->type))
    Трос металлополимерный<br>
    Тип: {{$request->type}} <br>
    Длина,м: {{$request->len}}<br>
@endif

@if(isset($request->typeCompl))
    Элемент крепежа<br>
    Тип: {{$request->typeCompl}} <br>
    Описание: {{$request->params}}<br>
@endif

@if(isset($request->id))
   Заказ в базе данных
@endif


<hr>
Заказ разместил: <br>
Имя: {{$request->name}} <br>
телефон: {{$request->tel}} <br>

