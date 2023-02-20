@extends('master')

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
                                    <span class="input-group-text" id="addon-wrapping">Имя</span>
                                    <input type="text" class="form-control" placeholder="Введите ваше имя" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                    <br>
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping">Имя</span>
                                    <input type="text" class="form-control" placeholder="Введите ваше имя" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                    <br>
                                <div class="input-group flex-nowrap ">
                                    <span class="input-group-text" id="addon-wrapping">Имя</span>
                                    <input type="text" class="form-control" placeholder="Введите ваше имя" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-5">
                                    <div class="input-group flex-nowrap ">
                                        <span class="input-group-text" id="addon-wrapping">Имя</span>
                                        <input type="text" class="form-control" placeholder="Введите ваше имя" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            @csrf
                            <input type="submit" class="btn btn-success" value="Подтвердите заказ">
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

