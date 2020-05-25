@extends('template.template')

@section('page-content')
    <div class="file_address d-flex flex-column text-center justify-content-center">
        Головна > Гiтари > Гiтара акустична Yamaha F310
    </div>
    <div class="info container d-flex flex-row justify-content-center">
        <div class="d-flex flex-row align-items-center">
            <div>
                <img src="images/yamaha_f310_images_94874409.jpg" style="height: 400px;">
            </div>
            <div class="info_content d-flex flex-column align-items-left justify-content-between" style="color: #EEEFA9;">
                <div class="d-flex flex-column justify-content-between" style="height: 230px;">
                    <h2 class="order_h2" style="color: whitesmoke;">Гiтара акустична Yamaha F310</h2>
                    <h3 class="order_h3">3800,00 грн</h3>
                    <h3 class="order_h3">Тип: акустична шестиструнна</h3>
                    <h3 class="order_h3">Код товару: 1231231</h3>
                    <h3 class="order_h3">Дата додавання: 03.05.2020</h3>
                </div>
                <div class="info_buttons d-flex flex-row" style="height: 80px;">
                    <button type="button" class="info_button btn btn-outline-dark">Придбати</button>
                    <button type="button" class="btn btn-warning btn-circle"><i class="far fa-heart" style="font-size: 30px;"></i></button>
                </div>
            </div>
        </div>
    </div>

@endsection
