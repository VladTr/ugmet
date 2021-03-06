@extends('main')

@section('head')


@section('content')



   <div class="col-md-12">
       <div class="row">
           <div class="col-md-9">
               <h4>Канат ГОСТ 7688-80</h4>
                <p class="my-text">
                    Канат стальной ГОСТ 7668-80 двойной свивки типа лк-ро конструкции 6x36(1+7+7/7+14) + 1 органический сердечник.
                    Канаты ЛК-РО отличаются сравнительно большим числом проволок в прядях и поэтому обладают повышенной гибкостью. Наличие в наружном слое этих канатов толстых проволок позволяет успешно применять их в условиях абразивного износа и агрессивных сред.
                    Используется стальной канат ГОСТ 7668 80 в условиях агрессивных сред и сильного абразивного износа: на экскаваторах, в шахтах, металлургических кранах и скиповых подъемниках доменных печей. Кроме того, канат стальной ГОСТ 7668 80  применяется в качестве ваерных канатов для оснащения траулеров, стреловых канатов для кранов, подъемных канатов мостовых, башенных, портальных, судовых и автокранов, канатов для лебедок горных и землеройных машин.
                    Пример и расшифровка маркировки каната:<br>
                    <img class="img-responsive" src="/img/ex2688.jpg" alt="Пример" >
                </p>
           </div>
           <div class="col-md-3">
               <img class="img-responsive img-inside" src="/img/gost7668-80.png" alt="Канат" >
           </div>
       </div>
       <div class="row">
           <div class="col-md-10">
               <img class="img-responsive" src="/img/7668.jpg" alt="Канат" >
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
