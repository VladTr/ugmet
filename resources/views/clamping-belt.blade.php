@extends('main')

@section('head')


@section('content')
    <div>
        <div class="row">
               <div class="col-md-8">
                   <div class="my-text">
                       <h3>Стяжные ремни</h3>
                       Стяжные ремни обеспечивают надежное крепление перемещаемых грузов. Изготавливаются из эластичной и прочной синтетической ленты. Сама лента практически не подвержена деформации, что определяет износостойкость изделия. Конструктивно стяжные ремни состоят из ленты и натяжного механизма, так называемого храпового замка. Натяжной механизм обеспечивает необходимую степень натяжения и дальнейшую фиксацию груза. Спектр применения стяжных ремней чрезвычайно широк: автомобильные, железнодорожные, контейнерные перевозки. Ремни незаменимы при перевозке хрупкого и крупногабаритного груза, который необходимо надежно зафиксировать. Стяжные ремни изготавливаются по требованиям заказчика исходя из требуемой длины и стяжного усилия.
                   </div>
                   <h4>Выбор ремня:</h4>
                   <form action="/order-post-light" method="post">
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1" >Ширина ленты, мм</span>
                           <input pattern="[0-9]{,2}" name="width" type="text" class="form-control" placeholder="35/50/..." aria-describedby="basic-addon1">
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Длина ремня, м</span>
                           <input pattern="[0-9]{,2}" name="len" type="text" class="form-control" placeholder="1...50" aria-describedby="basic-addon1">
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Ваше имя </span>
                           <input name="name" type="text" class="form-control"aria-describedby="basic-addon1">
                       </div>
                       <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1">Ваш телефон</span>
                           <input  pattern="[0-9]{,10}" name="tel" type="text" class="form-control"  aria-describedby="basic-addon1">
                       </div>

                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <button class="btn btn-primary" type="submit">Заказать</button>
                   </form>
               </div>
               <div class="col-md-4">
                   <img src="/img/sr.png" alt="Стяжные ремни" class="img-responsive img-inside">
               </div>
        </div>
    </div>

@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')