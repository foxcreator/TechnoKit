@extends('master')

@section('title', 'Контакти')

@section('content')


    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="productNav">Про нас</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-5" style="font-size: 20px">
                <p style="width: 50%;"><h2>Умови доставки</h2>
                <br>
                ● Доставка по Україні здійснюється перевізником Нова Пошта: кур‘єрська доставка; доставка у зручне для Вас відділення, або поштомат (доставка іншими перевізниками обговорюється індивідуально).
                <br>
                ● Доставка по м. Києву здійснюється нашими кур'єрами. Ви зможете оплатити товар мобільними терміналами.
                    <br>
                ● Доставку сплачує замовник. Вартість доставки по Україні розраховується виходячи з об‘єму та ваги товару згідно тарифів перевізника.
                    <br>
                ● Ми відвантажуємо товар перевізнику протягом 1-3 днів від дня узгодження замовлення із менеджером.
                    <br>
                ● Доставка Новою Поштою відбувається з понеділка по неділю.
                <br>
                <br>
                <br>
                </div>
                <div class="col-lg-5 link-secondary text-center">
                    <h4 class="links"><a class="link-secondary" href="{{ asset('') }}" download>Договір оферти</a></h4>
                    <h4 class="links"><a class="link-secondary" href="{{ asset('') }}" download>Політика конфіденційності</a></h4>
                </div>

            </div>
        </div>
    </main>

@endsection

