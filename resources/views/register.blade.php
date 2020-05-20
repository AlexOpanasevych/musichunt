@extends('template.template')

@section('page-content')
    <div class="login_content d-flex flex-column justify-content-center align-middle">
        <form action="/register" method="post" class="login_tab container d-flex flex-column justify-content-center">
            @csrf
            @if($errors->any())
                <div class="alert">
                    @foreach($errors->all() as $message)
                        <p style="font-size: 15px">{{$message}}</p>
                    @endforeach
                </div>
            @endif
            <label for="name" class="order_h3">Iм'я</label>
            <input class="input_text" name="name" type="text" size="40">
            <label for="email" class="order_h3">Пошта</label>
            <input class="input_text" name="email" type="text" size="40">
            <label for="password" class="order_h3">Пароль</label>
            <input class="input_text" name="password" type="password" size="40">
            <label for="password-repeat" class="order_h3">Пiдтвердження пароля</label>
            <input class="input_text" name="password-repeat" type="password" size="40">
            <button type="submit" class="login_button btn btn-outline-dark" style="margin-top: 20px;">Зареєструватися</button>
        </form>
    </div>
@endsection
