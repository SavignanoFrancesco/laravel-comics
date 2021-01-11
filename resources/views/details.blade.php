@extends('layouts.app')

@section('content')
    @include('partials.jumbotron')
    <div id="cover-container">
        <div class="details-container">
            <div class="cover">
                <img src="{{$comic['thumb']}}" alt="">
                <div class="comic-book">
                    <span class="uppercase">Comic book</span>
                </div>
                <div class="view-gallery">
                    <span class="uppercase">View gallery</span>
                </div>
            </div>
        </div>
    </div>
    <div class="details-container">
        <div id="price-and-description">
            <div id="left-box">
                <h1 class="uppercase">{{$comic['title']}}</h1>
                <div class="availability-box">
                    <div class="price">
                        <h3>U.S. Price: </h3>
                        <span>{{$comic['price']}}</span>
                    </div>
                    <div class="available">
                        <h3 class="uppercase">Available</h3>
                    </div>
                    <div class="check">
                        <a href="#"><span>Check Availability▾</span></a>
                    </div>
                </div>
                <p>{{$comic['description']}}></p>
            </div>

            <div id="advertisement">
                <h3 class="uppercase">Advertisement</h3>
                <a href="#"><img src="{{asset('/images/adv.jpg')}}" alt=""></a>
            </div>
        </div>

    </div>
    <div id="talent-and-specs">
        <div class="details-container">
            <div class="talent">
                <div class="">
                    <h3>Talent</h3>
                </div>
                <div class="art-by">
                    <h4>Art by:</h4>
                    <div class="artists">
                        @foreach ($comic['artists'] as $artist)
                               <a href="#">{{ $artist }}</a>{{ !$loop->last ? ',' : '' }}
                           @endforeach
                    </div>
                </div>
                <div class="written-by">
                    <h4>Written by:</h4>
                    <div class="writers">
                        @foreach ($comic['writers'] as $writer)
                               <a href="#">{{ $writer }}</a>{{ !$loop->last ? ',' : '' }}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs">
                <div class="">
                    <h3>Specs</h3>
                </div>
                <div class="series">
                    <h4>Series:</h4>
                    <div class="">
                        <a class="uppercase" href="#">{{$comic['series']}}</a>
                    </div>
                </div>
                <div class="price">
                    <h4>U.S. Price:</h4>
                    <span>{{$comic['price']}}</span>
                </div>
                <div class="sale-date">
                    <h4>On Sale Date: :</h4>
                    <span> {{ DateTime::createFromFormat('Y-m-d', $comic['sale_date'])->format('M d Y') }}</span>
                </div>
            </div>
        </div>
    </div>
    <div id="shop-icons">
        <div class="details-container">

            <div class="icon-box-container">
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <h4 class="">Digital Comics</h4>
                        <span class="icon-box-image"></span>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <h4 class="">Shop DC</h4>
                        <div class="icon-box-image"></div>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <h4 class="">Comic Shop Locator</h4>
                        <div class="icon-box-image"></div>
                    </a>
                </div>
                <div class="icon-box">
                    <a href="#" class="uppercase">
                        <h4 class="">Subscriptions</h4>
                        <div class="icon-box-image"></div>
                    </a>
                </div>
            </div>

        </div>
   </div>


@endsection

@section('page_title', 'DC - Comic Details')
