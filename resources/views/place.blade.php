@extends('master')

@section('title', 'basket')

@section('content')

<div class="container">
    <div class="starter-template">
        <h1>Підтвердіть замовлення:</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>Загальна вартість: <b>{{ $order->getFullPrice() }} ₴</b></p>
                <form action="{{ route('basket-confirm') }}" method="POST">
                    <div>
                        <p>Вкажіть свої ім'я та номер телефону, щоб наш менеджер міг з вами зв'язатися:</p>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Ім'я Прізвище</span>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Введіть ваше Прізвище та Ім'я" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div><br>

                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Номер телефону</span>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="0__-___-__-__" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                        <br>
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Область</span>
                                        <input type="text" name="region" id="region" class="form-control" placeholder="Дніпропетровська область" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Місто</span>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="Місто" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Відділення Нової пошти</span>
                                        <input type="text" name="novaposhta" id="novaposhta" class="form-control" placeholder="№" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">

                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            @csrf
                            <input type="submit" class="btn btn-success" value="Підтвердьте замовлення">
                            <br>
                            <br>
                            <br>
                        </div>
</div>

@endsection

