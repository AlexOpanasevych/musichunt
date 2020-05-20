@extends('template.template')

@section('page-content')
    <div class="container-sm d-flex flex-row">
        <div class="container-sm d-flex flex-column">
            <div class="order_tab container-sm d-flex flex-column">
            <h3 class="order_h3">Iм'я</h3>
                <input type="text" size="40">
            <h3 class="order_h3">Прiзвище</h3>
                <input type="text" size="40">
            <h3 class="order_h3">Email</h3>
                <input type="text" size="40">
            <h3 class="order_h3">Номер телефону</h3>
                <input type="text" size="40" style="margin-bottom: 30px;">
            </div>
            <div class="order_tab container-sm d-flex flex-column">
                <h3 class="order_h3">Спосiб доставки</h3>
                <select>
                    <option>Укрпошта</option>
                    <option>Нова пошта</option>
                    <option>Самовивiз</option>
                </select>
                <h3 class="order_h3">Адреса</h3>
                <input type="text" size="40">
                <h3 class="order_h3">Поштовий iндекс</h3>
                <input type="text" size="40">
                <h3 class="order_h3">Спосiб оплати</h3>
                <select style="margin-bottom: 30px;">
                    <option>Готiвкою при отриманнi</option>
                    <option>VISA/Master Card</option>
                </select>
                <button type="button" class="order_button btn btn-outline-dark">Замовити</button>
            </div>
        </div>
        <div class="order_tab container-sm d-flex flex-column" style="background-color: #5B5B5B; margin-top: 20px; margin-bottom: 20px; height: auto;">
            <h3>Кiлькiсть товарiв: #</h3>
            <hr class="order-hr">
        </div>
    </div>
@endsection
