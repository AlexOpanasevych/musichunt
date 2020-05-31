@extends('template.template')

@section('title', $title)

@section('page-content')
    <div class="container order-content">
        <div class="flex-row-reverse row">
            <div class="col-md-5 order_tab" style="background-color: #5B5B5B; margin-bottom: 20px; height: auto;">
                <h3>Кiлькiсть товарiв: {{$data->count()}}</h3>
                <hr class="order-hr">
                <div class="order_tab col-md-7 order-form" style="background-color: #5B5B5B; margin-top: 20px; margin-bottom: 20px; height: auto;">
                    <div class="container-column">
                        @for($i = 0; $i < $data->count(); $i++)
                            <div class="product d-flex flex-row justify-content-around">
                                <img src="{{$data[$keys[$i]]->thumbnail}}" style="height: 200px;">
                                <div class="d-flex flex-column ">
                                    <div class="product_info"><strong>Цiна: {{$data[$keys[$i]]->cost * (1 - $data[$keys[$i]]->discount / 100)}}</strong></div>
                                    <div class="product_info">{{$data[$keys[$i]]->name}}</div>
                                    <div class="product_info">Кiлькiсть: {{$counts[$i]}}</div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-md-7 order-form">
                @if($errors->any())
                    <div class="order_tab container-sm d-flex flex-column">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
                <form action="{{route('make-order', ['data' => $data])}}" method="post">
                    @csrf
                    <div class="order_tab container-sm d-flex flex-column">
                        <label for="name" class="order_h3">Iм'я</label>
                        <input class="input_text" name="name" type="text" size="40">
                        <label for="surname" class="order_h3">Прiзвище</label>
                        <input class="input_text" name="surname" type="text" size="40">
                        <label for="email" class="order_h3">Email</label>
                        <input class="input_text" name="email" type="text" size="40">
                        <label for="phone" class="order_h3">Номер телефону</label>
                        <input class="input_text" name="phone" type="tel" size="40" style="margin-bottom: 30px;">
                    </div>
                    <div class="order_tab container-sm d-flex flex-column">
                        <label for="cour" class="order_h3">Спосiб доставки</label>
                        <select name="cour" >
                            <option value="Ukrposhta">Укрпошта</option>
                            <option value="Novaposhta">Нова пошта</option>
                            <option value="Self">Самовивiз</option>
                        </select>
                        <label for="address" class="order_h3">Адреса</label>
                        <input class="input_text" name="address" type="text" size="40">
                        <label for="postindex" class="order_h3">Поштовий iндекс</label>
                        <input class="input_text" name="postindex" type="text" size="40">
                        <label for="buy" class="order_h3">Спосiб оплати</label>
                        <select name="buy" style="margin-bottom: 30px;">
                            <option value="Cash">Готiвкою при отриманнi</option>
                            <option value="Card">VISA/Master Card</option>
                        </select>
                        <button type="submit" class="order_button btn btn-outline-dark">Замовити</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
