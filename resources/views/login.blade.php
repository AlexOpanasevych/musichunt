@extends('template.template')

@section('page-content')
    <div class="login_content d-flex flex-column justify-content-center align-middle">
        <div class="login_tab container d-flex flex-column justify-content-center">
            <label for="nameoremail" class="order_h3">Iм'я або пошта</label>
            <input class="input_text" name="nameoremail" type="text" size="40">
            <label for="pass" class="order_h3">Пароль</label>
            <input class="input_text" name="pass" type="text" size="40">
            <div class="remember form-check">
                <input type="checkbox" class="form-check-input" id="materialIndeterminate2" checked>
                <label class="form-check-label" for="materialIndeterminate2">Запам'ятати?</label>
            </div>
            <button type="button" class="login_button btn btn-outline-dark">Ввiйти</button>
            <div class="d-flex flex-row justify-content-between">
                <h3 class="order_h3" style="text-align: right; padding-bottom: 20px;">Зареєструватися</h3>
                <h3 class="order_h3" style="text-align: left; padding-bottom: 20px;">Забули пароль?</h3>
            </div>
        </div>
    </div>
@endsection
