@extends('main')

@section('head')
@endsection

@section('content')

   <h4>{{$categories->name}}</h4>
   <p class="text-justify">{{$categories->description}}</p>

   <div class="col-md-10 col-md-offset-1">
       <div class="row">
           <div class="col-md-4">
               <table class="table table-condensed table-hover table-bordered" id="table-cat">
                   <tbody>
                   @foreach($products as $product)
                       @if($product->type=='СКП' or $product->type=='1СЦ' or $product->type=='СТП')
                           <tr id="tr-cat">
                               <td>{{$product->type}}</td>
                               <td>{{$product->carrying}} тн.</td>
                               <td class="td-btn"><a  id="{{$product->id}}" class="btn btn-primary btn-sm">выбрать</a></td>
                           </tr>
                       @endif
                   @endforeach
                   </tbody>
               </table>
           </div>
           <div class="col-md-4">
               <table class="table table-condensed table-hover table-bordered" id="table-cat">
                   <tbody>
                   @foreach($products as $product)
                       @if($product->type=='1СК' or $product->type=='2СЦ' or $product->type=='2СТ')
                           <tr id="tr-cat">
                               <td>{{$product->type}}</td>
                               <td>{{$product->carrying}} тн.</td>
                               <td class="td-btn"><a  id="{{$product->id}}" class="btn btn-primary btn-sm">выбрать</a></td>
                           </tr>
                       @endif
                   @endforeach
                   </tbody>
               </table>
           </div>
           <div class="col-md-4">
               <div id='inputLenght'>
                   <span></span><input type="tel" id='len' required><br>
               </div>
               <div id="cost"></div>
               <button id="saveOrder" class="btn btn-mysuccess">Добавить в корзину</button>
           </div>
       </div>
       <div class="row">
           <div class="col-md-4">
               <table class="table table-condensed table-hover table-bordered" id="table-cat">
                   <tbody>
                   @foreach($products as $product)
                       @if($product->type=='2СК' or $product->type=='4СЦ' or $product->type=='4СТ')
                           <tr id="tr-cat">
                               <td>{{$product->type}}</td>
                               <td>{{$product->carrying}} тн.</td>
                               <td class="td-btn"><a  id="{{$product->id}}" class="btn btn-primary btn-sm">выбрать</a></td>
                           </tr>
                       @endif
                   @endforeach
                   </tbody>
               </table>
           </div>
           <div class="col-md-4">
               <table class="table table-condensed table-hover table-bordered" id="table-cat">
                   <tbody>
                   @foreach($products as $product)
                       @if($product->type=='4СК' or $product->type=='УСЦ' or $product->type=='СТК')
                           <tr id="tr-cat">
                               <td>{{$product->type}}</td>
                               <td>{{$product->carrying}} тн.</td>
                               <td class="td-btn"><a  id="{{$product->id}}" class="btn btn-primary btn-sm">выбрать</a></td>
                           </tr>
                       @endif
                   @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>


@endsection

@section('sidebar')
    @parent



    @include('product');

@endsection


@section('footer')


@endsection


@section('scripts')
    @parent
    <script src="/js/cart-valid.js"></script>
@endsection
