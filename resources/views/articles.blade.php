@extends('main')

@section('head')
@endsection

@section('content')
    <div>
        @foreach($articles as $article)
            <div class="row">
                <div class="col-md-8">
                    <h4> {{$article->title}} </h4>
                    <p class="text-justify"> {{$article->text}} </p>
                </div>
                <div class="col-md-4">
                    <br>
                    <p><img class="img-responsive img-inside" src="{{$article->img}}" alt=""></p>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('sidebar')
    @parent
@endsection

@section('scripts')
@endsection