<div class="row justify-content-center">
    @foreach($data->chunk(3) as $chunk)
        @foreach($chunk as $elem)
                <div class="col-md-4">
                    <div class="container-column justify-content-center">
                        <div id="container-image" class="d-flex" style="width: 100%; position: relative">
                            <div><a href="{{route('like', ['type' => $elem->type, 'id' => $elem->id])}}"><img class="container-like" style="width: 60px; height: 60px" src={{asset('images/cart-like.svg')}}></a></div>
                            <div class="container-sale d-flex justify-content-center align-items-center">{{$elem->discount}}%</div>
                            @if(isset($elem->thumbnail))<a href="{{route('info', ['id' => $elem->id, 'type' => $elem->type])}}"><img  style="width: 100%" src="{{asset($elem->thumbnail)}}"></a>@endif
                        </div>
                        <div>
                            @if(isset($elem->name))<a href="{{route('info', ['id' => $elem->id, 'type' => $elem->type])}}"><h4>{{$elem->name}}</h4></a>@endif
                                @if(isset($elem->discount))
                                    @if(isset($elem->cost))<span style="text-decoration: line-through; text-decoration-color: yellow" class="chosen-item-price">{{$elem->cost}}</span>@endif
                                    <span class="chosen-item-price">{{$elem->cost  * (1 - $elem->discount / 100)}} грн</span>
                                @else
                                    @if(isset($elem->cost))<span class="chosen-item-price">{{$elem->cost}} грн</span>@endif
                                @endif
                            @if(isset($elem->type))<h6>Вид товару: {{$elem->type}}</h6>@endif
                            <a href="{{route('add-cart', ['type' => $elem->type, 'id' => $elem->id])}}"><button id="add-to-basket" style="margin-top: 10px; width: 100%; height: 50px">Додати до кошика</button></a>
                        </div>
                    </div>
                </div>
        @endforeach
    @endforeach
</div>
