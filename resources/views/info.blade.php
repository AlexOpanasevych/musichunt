@extends('template.template')

@section('title', $title)

@section('page-content')
    <div class="info container d-flex flex-row justify-content-center">
        <div class="d-flex flex-row align-items-center">
            <div>
                <img src="{{$data->thumbnail}}" style="height: 400px;">
            </div>
            <div class="info_content d-flex flex-column align-items-left justify-content-between" style="color: #EEEFA9;">
                <div class="d-flex flex-column justify-content-between" style="height: 230px;">
                    <h2 class="order_h2" style="color: whitesmoke;">{{$data->name}}</h2>
                    <h3 class="order_h3">{{$data->cost}},00 грн</h3>
                    <h3 class="order_h3">Вид товару: {{$data->type}}</h3>
                    <h3 class="order_h3">Код товару: {{$data->id}}</h3>
                    <h3 class="order_h3">Дата додавання: {{$data->created_at}}</h3>
                </div>
                <div class="info_buttons d-flex flex-row" style="height: 80px;">
                    <a href="{{route('add-cart', ['type' => $data->type, 'id' => $data->id])}}"><button type="button" class="info_button btn btn-outline-dark">Придбати</button></a>
                    <a href="{{route('like', ['type' => $data->type, 'id' => $data->id])}}"><button type="button" class="btn btn-warning btn-circle"><i class="far fa-heart" style="font-size: 30px;"></i></button></a>
                </div>
            </div>
        </div>
    </div>

@endsection
