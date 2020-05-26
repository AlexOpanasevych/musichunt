<div class="d-flex justify-content-between" style="margin-bottom: 20px; width: 100%">
    <div class="d-flex justify-content-start">
        <img style="width: 45%" src=@if(isset($products[$i]->thumbnail)){{asset($products[$i]->thumbnail)}}@else{{asset('/images/no-photo.png')}}@endif>
        <div class="d-flex flex-column justify-content-between cart-item-info ml-3">
            <div>
                @if(isset($products[$i]->cost))
                    @if(isset($products[$i]->discount) && $products[$i]->discount > 0)
                        <p class="chosen-item-price" style="text-decoration: line-through; color: #e3342f">{{$products[$i]->cost}} грн</p><br>
                        <p class="chosen-item-price" style="color: #DDD92A"> {{$products[$i]->cost - $products[$i]->cost / 100 * $products[$i]->discount}} грн</p>
                    @else
                        <p class="chosen-item-price" style="color: #DDD92A">{{$products[$i]->cost}} грн</p><br>
                    @endif
                @endif
            </div>
            <p class="cart-item-name">{{$products[$i]->type}} {{$products[$i]->name}}</p>
            <div class="item-amount">
                <span class="down">-</span>
                <input style="width: 30px" type="text" value="1" />
                <span class="up">+</span>
            </div>
            <div><a href="{{route('like', ['type' => $products[$i]->type, 'id' => $products[$i]->id])}}"><img style="width: 60px" src={{asset('images/cart-like.svg')}}></a></div>
        </div>
    </div>
    <div>
        <a id="cart-cancel" href="{{route('cart-remove', ['id' => $cart_idx[$i]])}}"><img id="cart-cancel" style="width: 20px" src={{asset('images/cancel.svg')}}></a>
    </div>
</div>
