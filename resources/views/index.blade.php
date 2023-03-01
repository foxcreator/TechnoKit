@extends('master')

@section('title', 'Головна')

@section('content')
    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
<div class="container justify-contant-center" >
    <img class="view" src="{{ asset('Images/Component.jpg') }}">
</div>

<div class="container-fluid" style="width: 100%">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 news" style="background: #E6E8AD">На ринку понад 10 років</div>
        <div class="col-lg-4 news" style="background: #B1CCE3">Безкоштовна доставка по всій Україні</div>
        <div class="col-lg-4 news" style="background: #BCE9A6">Працюємо 24/7</div>

    </div>
</div>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="productNav">Популярні товари</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
        @foreach($products as $product)
             @include('card', compact('product'))
        @endforeach
        </div>
    </div>
</main>

@endsection
