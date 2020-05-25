<div class="container">
    @if(isset($data) && !empty($data))
        @foreach($data->chunk(3) as $chunk)
            <div class="row">
            @foreach($chunk as $elem)
                <div style="margin-bottom: 40px">
                    <div class="chosen-item d-flex flex-column justify-content-between">
                        <div class="chosen-item-photo">
                            <img src="@if(isset($elem->thumbnail)){{asset($elem->thumbnail)}}@else{{asset('/images/no-photo.png')}}@endif">
                            <a href="{{route('like', ['type' => $elem->type, 'id' => $elem->id])}}" id="del-from-chosen"><img src={{asset('/images/love-and-romance.svg')}}></a>
                        </div>
                        <div>
                            <div>
                                @if(isset($elem->name) && isset($elem->type))<h4>{{$elem->type}} {{$elem->name}}</h4>@endif
                                @if(isset($elem->discount))
                                    @if(isset($elem->cost))<span style="text-decoration: line-through; text-decoration-color: yellow" class="chosen-item-price">{{$elem->cost}}</span>@endif
                                    <span class="chosen-item-price">{{$elem->cost  * (1 - $elem->discount / 100)}} грн</span>
                                @else
                                    @if(isset($elem->cost))<span class="chosen-item-price">{{$elem->cost}} грн</span>@endif
                                @endif
                            </div>
                            <a href="{{route('add-cart', ['type' => $elem->type, 'id' => $elem->id])}}"><button id="add-to-basket" style="margin-top: 10px; width: 100%; height: 50px">Додати до кошика</button></a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        @endforeach
    @else
        <P>Нічого не знайдено</P>
    @endif
</div>
