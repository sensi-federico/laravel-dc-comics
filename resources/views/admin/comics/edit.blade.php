@extends('layouts.app')

@section('content')

<div class="container m-5 py-4 d-flex flex-column align-items-center">
    <h4 class="text-center p-3">CREATE NEW COMICS</h4>
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf

        @method('PUT')
        <div class="title d-flex flex-column">
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" class="p-2 mt-2" value="{{$comic->title}}">
        </div>
        <div class="description d-flex flex-column mt-4">
            <label for="description">
                Description
            </label>
            <input type="text" name="description" id="description" class="p-2 mt-2" value="{{$comic->description}}">
        </div>
        <div class="thumb d-flex flex-column mt-4">
            <label for="thumb">
                Thumb
            </label>
            <input type="text" name="thumb" id="thumb" class="p-2 mt-2" value="{{$comic->thumb}}">
        </div>
        <div class="price d-flex flex-column mt-4">
            <label for="price">
                Price
            </label>
            <input type="text" name="price" id="price" class="p-2 mt-2" value="{{$comic->price}}">
        </div>
        <div class="series d-flex flex-column mt-4">
            <label for="series">
                Series
            </label>
            <input type="text" name="series" id="series" class="p-2 mt-2" value="{{$comic->series}}">
        </div>
        <div class="sale_date d-flex flex-column mt-4">
            <label for="sale_date">
                Sale date
            </label>
            <input type="text" name="sale_date" id="sale_date" class="p-2 mt-2" value="{{$comic->sale_date}}">
        </div>
        <div class="type d-flex flex-column mt-4">
            <label for="type">
                Type
            </label>
            <input type="text" name="type" id="type" class=" p-2 mt-2" value="{{$comic->type}}">
        </div>

        <button type="submit" class="btn btn-danger my-3">Update</button>
    </form>
</div>

@endsection