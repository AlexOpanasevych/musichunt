@extends('template.template')

@section('page-content')
    <div class="login_content d-flex flex-column justify-content-center align-middle">
        <div class="login_tab container d-flex flex-column justify-content-center">
            <h3 class="order_h3">Iм'я або пошта</h3>
            <input type="text" size="40">
            <h3 class="order_h3">Пароль</h3>
            <input type="text" size="40">
            <p><input type="checkbox" name="a" value="remember">Запам'ятати?</p>
            <button type="button" class="login_button btn btn-outline-dark">Ввiйти</button>
            <h3 class="order_h3" style="text-align: right; padding-bottom: 20px;">Забули пароль?</h3>
        </div>
    </div>
@endsection
