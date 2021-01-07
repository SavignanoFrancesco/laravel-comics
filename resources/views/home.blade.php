@extends('layouts.app')

@section('page_title')
    DC - Homepage
@endsection

@section('content')
    @include('partials.jumbotron')
    <div id="comics">
        <div class="container">
            <div class="section-title">
                <h2 class="uppercase">Current Series</h2>
            </div>
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
            <div class="btn1">
                <h3 class="uppercase">Load more</h3>
            </div>
        </div>
    </div>
@endsection
