@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <h1 class="uppercase">{{$comic['title']}}</h1>
    <img src="{{$comic['thumb']}}" alt="">
@endsection

@section('page_title', 'DC - Comic Details')
