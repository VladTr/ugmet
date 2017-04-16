@extends('main')

@section('head')


@section('content')
    <div>

            @foreach($articles as $article)
                <div class="row">
                    <div class="col-md-8">
                        <h3> {{$article->title}} </h3>
                        <p> {{$article->text}} </p>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <p><img src="{{$article->img}}" alt=""></p>
                    </div>
                </div>
            @endforeach



    </div>

@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')