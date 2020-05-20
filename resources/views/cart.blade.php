@extends('template.template')

@section('title', 'Кошик')

@section('page-content')
    <div class="container cart" style="min-height: 100vh">
        <div class="row">
            <div class="col-md-7 cart-left">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h2>Мій кошик</h2>
                    <p class="cart-warn" style="font-size: 14px; color: #DDD92A">Товари резервуватимуться 60 хв.</p>
                </div>
                <div class="my-order-line"></div>
                <p style="color: #ededed; font-size: 25px; font-weight: bold; margin-top: 50px">Упсс... Зараз кошик недоступний</p>
            </div>
            <div class="col-md-5 cart-change-box">
                <div class ='cart-right'>
                    <h2>Підсумок</h2>
                    <div class="my-order-line"></div>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <p style="color: #DDD92A; font-size: 20px; font-weight: bold">Всього:</p>
                        <p style="color: #DDD92A; font-size: 20px; font-weight: bold">---- грн.</p>
                    </div>
                    <div class="d-flex justify-content-center"><button>Замовити</button></div>
                </div>
            </div>
        </div>
    </div>
@endsection

