<div class="container">
    @if(isset($data) && !empty($data))
        @foreach($data->chunk(3) as $chunk)
            <div class="row">
            @foreach($chunk as $elem)
                    <div class="col-sm container-column">
                        @if(isset($elem->thumbnail))<img id="container-image" src="{{$elem->thumbnail}}">@endif
                        @if(isset($elem->name) && isset($elem->type))<h4>{{$elem->type}} {{$elem->name}}</h4>@endif
                            @if(isset($elem->discount))
                                @if(isset($elem->cost))<span style="text-decoration: line-through; text-decoration-color: yellow" class="chosen-item-price">{{$elem->cost}}</span>@endif
                                <span class="chosen-item-price">{{$elem->cost  * (1 - $elem->discount / 100)}} грн</span>
                            @else
                                @if(isset($elem->cost))<span class="chosen-item-price">{{$elem->cost}} грн</span>@endif
                            @endif

                    </div>
            @endforeach

            </div>
        @endforeach
    @else
        <P>Нічого не знайдено</P>
    @endif
</div>
