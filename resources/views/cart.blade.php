@extends('template.template')

@section('title', 'Кошик')

@section('page-content')
    <script>
        $(document).ready(function() {
            $('.down').click(function () {
                var $input = $(this).parent().find('input');

                var result = parseInt($input.val());
                if (isNaN(result) === true){
                    result = 0;
                }
                var count = result - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.up').click(function () {
                var $input = $(this).parent().find('input');

                var result = parseInt($input.val());
                if (isNaN(result) === true){
                    result = 0;
                }
                var count = result + 1;
                $input.val(count);
                $input.change();
                return false;
            });
        });
    </script>
    <div class="container cart" style="min-height: 100vh">
        <div class="row">
            <form method="get" action="{{route('make-order')}}" class="col-md-7 cart-left">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h2>Мій кошик</h2>
                    <p class="cart-warn" style="font-size: 14px; color: #DDD92A">Товари резервуватимуться 60 хв.</p>
                </div>
                <div class="my-order-line"></div>
                @for($i = 0; $i < count($cart_idx); $i++)
                    @if(isset($products[$keys_array[$i]]))
                        @include('inc.cart-item')
                        <div class="my-order-line"></div>
                    @endif
                @endfor
            </form>
            <div class="col-md-5 cart-change-box">
                <div class ='cart-right'>
                    <h2>Підсумок</h2>
                    <div class="my-order-line"></div>
                    <div class="d-flex justify-content-between align-items-baseline">
                        <p style="color: #DDD92A; font-size: 20px; font-weight: bold">Всього:</p>
                        <p style="color: #DDD92A; font-size: 20px; font-weight: bold">@if(isset($products)){{array_sum($total_costs)}}@else{{0}}@endif грн.</p>
                    </div>
                    <div class="d-flex justify-content-center"><button type="submit"><a style="text-decoration: blink; color: #312f2f" href="{{route('order', ['products' => $products])}}">Замовити</a></button></div>
                </div>
            </div>
        </div>
    </div>
@endsection

