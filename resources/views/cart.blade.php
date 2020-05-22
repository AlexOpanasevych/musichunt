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
                <div style="color: #ededed; font-size: 25px; font-weight: bold; margin-top: 50px">
                    @for($i = 0; $i < $products->count(); $i++)
                        <div style="margin-bottom: 40px">
                            <div class="chosen-item d-flex flex-column justify-content-between">
                                <div class="chosen-item-photo">
                                    <img src="@if(isset($products[$i]->thumbnail)){{asset($products[$i]->thumbnail)}}@else{{asset('/images/no-photo.png')}}@endif">
                                    <a href="{{route('cart-remove', ['id' => $cart_idx[$i]])}}" id="del-from-chosen"><img src={{asset('images/cancel-chosen.svg')}}></a>
                                </div>
                                <div>
                                    <P>
                                        @if(isset($products[$i]->name)){{$products[$i]->name}}@endif
                                    </P>
                                    @if(isset($products[$i]->cost))
                                        @if(isset($products[$i]->discount) && $products[$i]->discount > 0)
                                            <span class="chosen-item-price" style="text-decoration: line-through; color: #e3342f">{{$products[$i]->cost}} грн</span><br>
                                            <span class="chosen-item-price"> {{$products[$i]->cost - $products[$i]->cost / 100 * $products[$i]->discount}} грн</span>
                                        @else
                                            <span class="chosen-item-price">{{$products[$i]->cost}} грн</span><br>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-5 cart-change-box">
                <div class ='cart-right'>
                    <h2>Підсумок</h2>
                    <div class="my-order-line"></div>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <p style="color: #DDD92A; font-size: 20px; font-weight: bold">Всього:</p>
                        <p style="color: #DDD92A; font-size: 20px; font-weight: bold">@if(isset($products)){{array_sum($total_costs)}}@else{{0}}@endif грн.</p>
                    </div>
                    <div class="d-flex justify-content-center"><button><a style="text-decoration: blink; color: #312f2f" href="{{route('order', ['products' => $products])}}">Замовити</a></button></div>
                </div>
            </div>
        </div>
    </div>
@endsection

