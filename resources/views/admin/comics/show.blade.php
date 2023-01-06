@extends('layouts.app')

@section('content')

<div class="jumbotron"></div>

<div class="banner-show">
    <div class="container-small">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" width="200px">
    </div>
</div>

<div class="container-small">
    <div class="row">
        <div class="col-7">
            <div class="info-show mt-5">
                <h2>{{$comic->title}}</h2>
                <div class="price-banner bg-success d-flex justify-content-between p-3">
                    <h5 class="m-0">U.S. Price {{$comic->price}}</h5>
                    <h5 class="text-uppercase text-white-50 m-0">Available</h5>
                </div>
                <p class="m-0 pt-4">
                    {{$comic->description}}
                </p>
            </div>
        </div>
        <div class="col-5">
            <img src="../img/adv.jpg" alt="" width="200px">
        </div>
    </div>

</div>



@endsection