<div class="d-flex justify-content-between" style="margin-bottom: 20px; width: 100%">
    <div class="d-flex justify-content-start">
        <img style="width: 45%" src=@if(isset($products[$keys_array[$i]]->thumbnail)){{asset($products[$keys_array[$i]]->thumbnail)}}@else{{asset('/images/no-photo.png')}}@endif>
        <div class="d-flex flex-column justify-content-between cart-item-info ml-3">
            <div>
                @if(isset($products[$keys_array[$i]]->cost))
                    @if(isset($products[$keys_array[$i]]->discount) && $products[$keys_array[$i]]->discount > 0)
                        <p class="chosen-item-price" style="text-decoration: line-through; color: #e3342f">{{$products[$keys_array[$i]]->cost}} грн</p><br>
                        <p class="chosen-item-price" style="color: #DDD92A"> {{$products[$keys_array[$i]]->cost - $products[$keys_array[$i]]->cost / 100 * $products[$keys_array[$i]]->discount}} грн</p>
                    @else
                        <p class="chosen-item-price" style="color: #DDD92A">{{$products[$keys_array[$i]]->cost}} грн</p><br>
                    @endif
                @endif
            </div>
            <p class="cart-item-name">@if(isset($products[$keys_array[$i]]->type) && isset($products[$keys_array[$i]]->name)){{$products[$keys_array[$i]]->type}} {{$products[$keys_array[$i]]->name}}@endif</p>
            <div class="item-amount">
                <span class="down">-</span>
                <input name="{{'item'. $i}}" style="width: 30px" type="text" value="1" />
                <span class="up">+</span>
            </div>
            <div><a href="{{route('like', ['type' => $products[$keys_array[$i]]->type, 'id' => $products[$keys_array[$i]]->id])}}"><img style="width: 60px" src={{asset('images/cart-like.svg')}}></a></div>
        </div>
    </div>
    <div>
        <a id="cart-cancel" href="{{route('cart-remove', ['id' => $cart_idx[$i]])}}"><img id="cart-cancel" style="width: 20px" src={{asset('images/cancel.svg')}}></a>
    </div>
</div>
