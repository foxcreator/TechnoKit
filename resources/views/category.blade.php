@extends('master')

@section('title', $category->name)

@section('content')

<div class="container">
    <div class="row">
        @foreach($categories as $categorys)
            @if($categorys->code == 'catalog')

            @else
            <div class="col-lg-3 cateÏory">
                <a href="{{ route('category', $categorys->code) }}">
                    <div class="productNav">{{$categorys->name}}</div>
                </a>
            </div>
            @endif
        @endforeach
    </div>

    <div class="starter-template">

        <h1 style="margin-bottom: 30px; font-family: Anybody;">
            {{$category->name}}

        </h1>

        <div class="row">
            @include('card')
        </div>
    </div>
</div>

@endsection
