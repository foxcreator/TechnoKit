@extends('master')

@section('title', 'basket')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-5 product">
                <h2>Корзина</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 product" >
                <<div class="container">
                    <div class="starter-template">
                        <p class="alert alert-success">Добавлен товар iPhone X 256GB</p>
                        <h1>Корзина</h1>
                        <p>Оформление заказа</p>
                        <div class="panel">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Кол-во</th>
                                    <th>Цена</th>
                                    <th>Стоимость</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->products as $product)
                                <tr>
                                    <td>
                                        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                            <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg">
                                            {{ $product->name }}
                                        </a>
                                    </td>
                                    <td><span class="badge">1</span>
                                        <div class="btn-group form-inline">
                                            <form action="http://internet-shop.tmweb.ru/basket/remove/2" method="POST">
                                                <button type="submit" class="btn btn-danger" href=""><span
                                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                                <input type="hidden" name="_token" value="uJxGNxe52yCdgEz9pIZAnphsgwvLb8BS8i05tld9">                            </form>
                                            <form action="{{ route('basket-add', $product) }}" method="POST">
                                                <button type="submit" class="btn btn-success"
                                                        href="{{ route('basket-add', $product) }}"><span
                                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                                @csrf
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>{{ $product->price }} </td>
                                    <td>{{ $product->price }} </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3">Общая стоимость:</td>
                                    <td>89990 ₽</td>
                                </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="btn-group pull-right" role="group">
                                <a type="button" class="btn btn-success" href="http://internet-shop.tmweb.ru/basket/place">Оформить заказ</a>
                            </div>
            </div>
            <div class="col-lg-5 product">
                <h2>Описание, Характеристики</h2>
            </div>
        </div>

    </div>
</div>

@endsection

