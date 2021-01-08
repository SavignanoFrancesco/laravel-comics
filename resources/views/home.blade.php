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
                @foreach ($comics as $id => $comic)
                    <a href="{{Route('details', ['id' => $id])}}">
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

    <div id="shopping-links">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <div class="imgs">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-comics-digital-comics.png" alt="">
                        </div>
                        <h4 class="uppercase">Digital Comics</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="imgs">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-comics-merchandise.png" alt="">
                        </div>
                        <h4 class="uppercase">DC Merchandise</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="imgs">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-comics-subscriptions.png" alt="">
                        </div>
                        <h4 class="uppercase">Subscription</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="imgs">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-comics-shop-locator.png" alt="">
                        </div>
                        <h4 class="uppercase">Comic Shop Locator</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="imgs">
                            <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/images/buy-dc-power-visa.svg" alt="">
                        </div>
                        <h4 class="uppercase">DC Power Visa</h4>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
