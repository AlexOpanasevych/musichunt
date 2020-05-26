<div style="margin-bottom: 40px">
    <div class="chosen-item d-flex flex-column justify-content-between">
        <div class="chosen-item-photo">
            <img src="@if(isset($data[$i]->thumbnail)){{asset($data[$i]->thumbnail)}}@else{{asset('/images/no-photo.png')}}@endif">
            <a href="{{route('cansel-choose', $idx[$i])}}" id="del-from-chosen"><img src={{asset('images/cancel-chosen.svg')}}></a>
        </div>
        <div>
            <P>
                @if(isset($data[$i]->name)){{$data[$i]->name}}@endif
            </P>
            @if(isset($data[$i]->cost))
                @if(isset($data[$i]->discount) && $data[$i]->discount > 0)
                    <span class="chosen-item-price" style="text-decoration: line-through; color: #e3342f; text-decoration-color: #DDD92A">{{$data[$i]->cost}} грн</span><br>
                    <span class="chosen-item-price">{{$data[$i]->cost - $data[$i]->cost / 100 * $data[$i]->discount}} грн</span>
                @else
                    <span class="chosen-item-price">{{$data[$i]->cost}} грн</span><br>
                @endif
            @endif
            <a href="{{route('add-cart', ['type' => $data[$i]->type, 'id' => $data[$i]->id])}}"><button id="add-to-basket" style="margin-top: 10px; width: 100%; height: 50px">Додати до кошика</button></a>
        </div>
    </div>
</div>
