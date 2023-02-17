@extends('master')

@section('title', $product)

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-5 product">
                <h2>Iphone 14 Pro Max</h2>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-3 product">
                <button type="button" class="btn btn-success cart">Добавить в корзину</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 product" >
                <div><img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg" style="max-width: 100%;"></div>
            </div>
            <div class="col-lg-5 product">
                <h2>Описание, Характеристики</h2>
            </div>
        </div>

    </div>
</div>

@endsection

