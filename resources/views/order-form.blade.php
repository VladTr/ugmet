@extends('main')

@section('head')


@section('content')
    <div class="col-md-12">
        <div class="page-header">
             <h3><small>Заполните, пожалуйста форму и мы сможем оформить Ваш заказ:</small></h3>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form-horizontal" method="post" action="{{route('order-post')}}">
            <div class="form-group">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Ваше имя</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите свое имя">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tel" class="col-sm-2 control-label">Телефон</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="tel" id="tel" placeholder="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-mysuccess">Отправить</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')