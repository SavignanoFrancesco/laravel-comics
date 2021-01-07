@extends('layouts.app')

@section('page_title')
    DC - Homepage
@endsection

@section('content')
    @include('partials.jumbotron')
    <div id="comics">
        <div class="container">
            @foreach ($comics as $comic)
                <p>{{$comic['title']}}</p>
            @endforeach
        </div>
    </div>
@endsection
