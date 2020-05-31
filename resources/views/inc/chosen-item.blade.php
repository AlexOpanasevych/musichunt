<div style="margin-bottom: 40px">
    <div class="chosen-item d-flex flex-column justify-content-between">
        <div class="chosen-item-photo">
            <img src="@if(isset($result[$keys_array[$i]]->thumbnail)){{asset($result[$keys_array[$i]]->thumbnail)}}@else{{asset('/images/no-photo.png')}}@endif">
            <a href="{{route('cansel-choose', $idx[$i])}}" id="del-from-chosen"><img src={{asset('images/cancel-chosen.svg')}}></a>
        </div>
        <div>
            <P>
                @if(isset($result[$keys_array[$i]]->name)){{$result[$keys_array[$i]]->name}}@endif
            </P>
            @if(isset($result[$keys_array[$i]]->cost))
                @if(isset($result[$keys_array[$i]]->discount) && $result[$keys_array[$i]]->discount > 0)
                    <span class="chosen-item-price" style="text-decoration: line-through; color: #e3342f; text-decoration-color: #DDD92A">{{$result[$keys_array[$i]]->cost}} грн</span><br>
                    <span class="chosen-item-price">{{$result[$keys_array[$i]]->cost - $result[$keys_array[$i]]->cost / 100 * $result[$keys_array[$i]]->discount}} грн</span>
                @else
                    <span class="chosen-item-price">{{$result[$keys_array[$i]]->cost}} грн</span><br>
                @endif
            @endif
            <a href="{{route('add-cart', ['type' => $result[$keys_array[$i]]->type, 'id' => $result[$keys_array[$i]]->id])}}"><button id="add-to-basket" style="margin-top: 10px; width: 100%; height: 50px">Додати до кошика</button></a>
        </div>
    </div>
</div>
