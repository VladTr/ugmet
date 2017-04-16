@extends('main')

@section('head')


@section('content')

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif
    <h4>Доставка продукции</h4>
    После того как Вы определились с параметрами изделия и заказали его, наши специалисты приступают к выполению заказа (порезка каната определенной длины, изготовление стропов и стяжных ремней исходя из требуемой грузоподъемности и длины)
    Срок исполнения: от 1 до 3-х рабочих дней (в зависимости от объема заказа)
    <p>Осуществляем доставку продукции в любой регион Украины (за исключением АР Крым) следующими перевозчиками:</p>
    <br>
    <table class="table-condensed table-delivery">
        <tr>
            <td><a href="http://www.sat.ua/" target="_blank"><img src="img/sat.png" alt="САТ" width="100" height="100";></a></td>
            <td><a href="http://novaposhta.ua/" target="_blank"><img align="left" src="img/np.png" alt="Новая Почта" width="300" height="60";></a></td>
        </tr>
        <tr>
            <td><a href="http://www.delivery-auto.com/" target="_blank"><img src="img/del.png" alt="Деливери" width="130" height="60" ;></a></td>
            <td><a href="http://www.intime.ua/" target="_blank"><img src="img/intime.png" alt="Интайм" width="100" height="60";></a></td>
        </tr>
    </table>
@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')