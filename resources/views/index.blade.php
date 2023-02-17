@extends('master')

@section('title', 'Головна')

@section('content')

<div id="carousel-ex" class="carousel slide carousel-fade pt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carousel-ex" data-slide-to="0"></li>
        <li data-bs-target="#carousel-ex" data-slide-to="1"></li>
        <li data-bs-target="#carousel-ex" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view" style="background-image: url('https://images.pexels.com/photos/6214476/pexels-photo-6214476.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
                background-repeat: no-repeat; background-size: cover">
                <div class="mask rgba-black-strong d-flex justify-content-right align-items-center">
                    <div class="text-left mx-5 mb-10 pt-5 wow fadeIn">
                        <h1 class="mb-6 mx-6">
                            <strong>Заказ товара не выходя из дома</strong>
                        </h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="view" style="background-image: url('https://images.pexels.com/photos/5624982/pexels-photo-5624982.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
                background-repeat: no-repeat; background-size: cover">
                <div class="mask rgba-black-strong d-flex justify-content-right align-items-center">
                    <div class="text-left mx-5 mb-10 pt-5 wow fadeIn">
                        <h1 class="mb-6 mx-6">
                            <strong>Заказ товара не выходя из дома</strong>
                        </h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="view" style="background-image: url('https://images.pexels.com/photos/6214476/pexels-photo-6214476.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
                background-repeat: no-repeat; background-size: cover">
                <div class="mask rgba-black-strong d-flex justify-content-right align-items-center">
                    <div class="text-left mx-5 mb-10 pt-5 wow fadeIn">
                        <h1 class="mb-6 mx-6">
                            <strong>Заказ товара не выходя из дома</strong>
                        </h1>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="width: 100%">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 news" style="background: #E6E8AD">На рынке более 10 лет</div>
        <div class="col-lg-4 news" style="background: #B1CCE3">Бесплатная доставка по всей Украине</div>
        <div class="col-lg-4 news" style="background: #BCE9A6">Работаем 24/7</div>

    </div>
</div>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="productNav">Популярные товары</div>
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
