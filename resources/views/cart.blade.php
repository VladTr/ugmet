@extends('main')

@section('head')


@section('content')
    <div>
        @if(sizeof($products)>0)
            @php
                $i=0
            @endphp

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-10">
                        <table id="cart" class="table table-condensed table-hover table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td><td>name</td>
                                    <td>len</td><td>qty</td>
                                    <td>cost per unit</td><td>total cost</td>
                                    <td>delete</td>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($products as $product)
                                        @php
                                            $i++
                                        @endphp
                                            <tr id="{{$i }}">
                                                <td>{{$i}}</td><td>{{$product->name}} {{$product->carrying}} тн.</td>
                                                <td>{{ $product->len }}</td>
                                                <td>
                                                    <button onclick="toggleAmount({{$i}}, false)" class="{{$i}}">-</button>
                                                    <span>{{$product->amount}}</span>
                                                    <button onclick="toggleAmount({{$i}}, true)" class="{{$i}}">+</button>
                                                </td>
                                                <td>{{$product->price}} грн.</td><td>{{$product->amount*$product->price}} грн.</td>
                                                <td><a  id="{{ $product->id }}" href="#" >X</a></td>
                                            </tr>
                                    @endforeach
                            </tbody>
                        </table>
                            <a href="{{route('order')}}" class="btn btn-primary">Оформить заказ</a>
                     </div>
                    </div>
                </div>

         @else
            Корзина пуста
         @endif


    </div>

@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')
    @parent
    <script src="/js/cart.js"></script>
@endsection