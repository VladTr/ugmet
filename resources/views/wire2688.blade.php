@extends('main')

@section('head')


@section('content')



   <div class="col-md-12">
       <div class="row">
           <div class="col-md-9">
               <h4>Канат ГОСТ 2688-80</h4>
                <p class="my-text">
                    Канат ГОСТ 2688-80 (трос грузовой) предназначен для подъема и перемещения грузов, также этот трос применяется на кранах, горных и землеройных машинах, гидравлических лифтах, на судовых и металлургических кранах, для подвесных дорог и кабель-кранах и т.д. 
                    ГОСТ 2688-80 регламентирует характеристики троса из стали двойной свивки, конструкция 6х19 (1+6+6\+)+1, тип ЛК-р с одним органическим сердечником. От 3,6мм до 56,0 мм диаметр каната. 
                    Подъем людей и грузов осуществляют канатами с маркировкой по назначению: <br>
                    - ГЛ грузо-людской <br>
                    - Г- грузовой. <br>
                    По механическим свойствам делят на В повышенное качество, 1 нормальное, и ВК высокое. 
                    Канаты отличают и по направлению и способу свивки, по точности изготовления др. 
                    Расшифруем: 2688 20,5-Г-ВК-Н-Т-1700: грузовой диаметр каната 20,5 мм, марка ВК, нераскручивающийся, повышеннойточности, группа разрывного усилия 1770. 
                    Преимущество канатов этого ГОСТа в сочетании прочности и повышенной гибкостью. <br>
                    Пример и расшифровка маркировки каната:<br>
                    <img class="img-responsive" src="/img/ex2688.jpg" alt="Пример" >
                </p>
           </div>
           <div class="col-md-3">
               <img class="img-responsive img-inside" src="/img/gost2688_80.png" alt="Канат" >
           </div>
       </div>
       <div class="row">
           <div class="col-md-10">
               <img class="img-responsive" src="/img/2688.jpg" alt="Канат" >
           </div>
       </div>
   </div>


@endsection

@section('sidebar')
    @parent

@endsection


@section('footer')


@endsection


@section('scripts')
    @parent
    <script src="/js/cart-valid.js"></script>
@endsection
