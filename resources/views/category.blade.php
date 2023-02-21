@extends('master')

@section('title')

@section('content')

<div class="container">
    <div class="row">
        @foreach($categories as $categorys)
            <div class="col-lg-3 cateÏory">
                <a href="{{ route('category', $categorys->code) }}">
                    <div class="productNav">{{$categorys->name}}</div>
                </a>
            </div>

        @endforeach
    </div>

    <div class="starter-template">

        <h1 style="margin-bottom: 30px; font-family: Anybody;">
            {{$category?->name}}

        </h1>

        <div class="row">
            @foreach($products as $product)
                @include('card', compact('product'))
            @endforeach
        </div>
    </div>
</div>

@endsection
