@extends('layouts.app')

@section('page_title')
    DC - Homepage
@endsection

@section('content')
    @include('partials.jumbotron')
    <div id="comics">
        <div class="container">
            <div class="comics-container">
                @foreach ($comics as $comic)
                    <a href="#">
                        <div class="comic">
                            <img src="{{$comic['thumb']}}" alt="">
                            <p>{{$comic['series']}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
