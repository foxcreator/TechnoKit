@extends('master')

@section('title', $categoryName)

@section('content')

<div class="container pt-5">
    <div class="row">
            @foreach($categories as $category)
                <div class="col-lg-3 category">
                    <a href="{{ route('category', $category->code) }}">
                        <div class="productNav">{{ $category->name }}</div>
                    </a>
                </div>
            @endforeach
    </div>

    <div class="starter-template">
            <h1 style="margin-bottom: 30px; font-family: Anybody;">
                {{ $categoryName }}
            </h1>
        <div class="row">
            @foreach($products as $product)
                @include('card', compact('product'))
            @endforeach
        </div>
    </div>
</div>

@endsection
