@extends('template.template')

@section('page-content')
    <form action="/login" method="post" class="login_content d-flex flex-column justify-content-center align-middle">
        @csrf
        <div class="login_tab container d-flex flex-column justify-content-center">
            <label for="usernameEmail" class="order_h3">Iм'я або пошта</label>
            <input type="text" name="usernameEmail" placeholder="Введіть сюди ім'я користувача або ел. пошту" size="40">
            <label for="password" class="order_h3">Пароль</label>
            <input type="password" name="password" placeholder="Введіть сюди пароль" size="40">
            <p><input type="checkbox" name="remember" value="remember">Запам'ятати?</p>
            <button type="submit" class="login_button btn btn-outline-dark">Увiйти</button>
            <div class="d-flex flex-row justify-content-between">
                <a href="{{route('register')}}"><label class="order_h3" style="text-align: right; padding-bottom: 20px;">Зареєструватися</label></a>
                <a href="{{route('password-reset')}}"><label class="order_h3" style="text-align: right; padding-bottom: 20px;">Забули пароль?</label></a>
            </div>


        </div>
    </form>
@endsection
