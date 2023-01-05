@extends('layouts.app')

@section('content')

<section class="jumbotron">
    <div class="banner">
        <h3>current series</h3>
    </div>
</section>

<section class="comics bg-dark">
    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-3">
            @foreach($comics as $comic)
            <div class="col">
                <a href="">
                    <div class="my-card text-white text-uppercase border-0">
                        <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                        <p class="m-0 pt-4">{{$comic['title']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="button mt-5">
        <p>load more</p>
    </div>
</section>

<section class="main-banner">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-5">
            <div class="col d-flex align-items-center py-5 justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <p class="mb-0 ms-3"><a href="#">DIGITAL COMICS</a></p>
            </div>
            <div class="col d-flex align-items-center py-5 justify-content-center">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                <p class="mb-0 ms-3"><a href="#">DC MERCHANDISE</a></p>
            </div>
            <div class="col d-flex align-items-center py-5 justify-content-center">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <p class="mb-0 ms-3"><a href="#">SUBSCRIPTION</a></p>
            </div>
            <div class="col d-flex align-items-center py-5 justify-content-center">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
                <p class="mb-0 ms-3"><a href="#">COMICS SHOP LOCATOR</a></p>
            </div>
            <div class="col d-flex align-items-center py-5 justify-content-center">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                <p class="mb-0 ms-3"><a href="#">DC POWER VISA</a></p>
            </div>
        </div>
    </div>
</section>

@endsection