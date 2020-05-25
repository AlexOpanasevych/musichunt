@extends('template.template')

@section('page-content')
    <div class="login_content d-flex flex-column justify-content-center align-middle">
        <div class="login_tab container d-flex flex-column justify-content-center">
            <label for="name" class="order_h3">Iм'я</label>
            <input class="input_text" name="name" type="text" size="40">
            <label for="email" class="order_h3">Пошта</label>
            <input class="input_text" name="email" type="text" size="40">
            <label for="pass" class="order_h3">Пароль</label>
            <input class="input_text" name="pass" type="text" size="40">
            <label for="pass2" class="order_h3">Пiдтвердження пароля</label>
            <input class="input_text" name="pass2" type="text" size="40">
            <button type="button" class="login_button btn btn-outline-dark" style="margin-top: 20px;">Зареєструватися</button>
        </div>
    </div>
@endsection
