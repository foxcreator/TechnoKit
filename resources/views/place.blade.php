@extends('layouts.master')

@section('title', 'basket')

@section('content')

<div class="container">
    <div class="starter-template">
        <h1>Подтвердите заказ:</h1>
        <div class="container">
            <div class="row justify-content-center">
                <p>Общая стоимость: <b>{{ $order->getFullPrice() }}</b></p>
                <form action="{{ route('basket-confirm') }}" method="POST">
                    <div>
                        <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
{{--                            <div class="form-group col-lg-4">--}}
{{--                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Имя: </label>--}}
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Имя Фамилия</span>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Введите вашу Фамилию и имя" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                        <br>
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Номер телефона</span>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="0991234567" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                        <br>
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Область</span>
                                        <input type="text" name="region" id="region" class="form-control" placeholder="Днепропетровская область" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Город</span>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="Город" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                    <br>
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Отделение Новой почты</span>
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
                            <input type="submit" class="btn btn-success" value="Подтвердите заказ">
                            <br>
                            <br>
                            <br>
                        </div>
{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="phone" class="control-label col-lg-offset-3 col-lg-2">Номер телефона: </label>--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <input type="text" name="phone" id="phone" value="" class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <br>--}}
{{--                            <br>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="name" class="control-label col-lg-offset-3 col-lg-2">Email: </label>--}}
{{--                                <div class="col-lg-4">--}}
{{--                                    <input type="text" name="email" id="email" value="" class="form-control">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <input type="submit" class="btn btn-success" value="Подтвердите заказ">--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

@endsection

