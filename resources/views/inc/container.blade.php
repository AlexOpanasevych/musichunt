<div class="container">
    @foreach($data->chunk(3) as $chunk)
        <div class="row">
        @foreach($chunk as $elem)
                <div class="col-sm container-column">
                    @if(isset($elem->thumbnail))<img id="container-image" src="{{$elem->thumbnail}}">@endif
                    @if(isset($elem->name))<h4>{{$elem->name}}</h4>@endif

                    @if(isset($elem->type))<h6>Вид товару: {{$elem->type}}</h6>@endif
                </div>
        @endforeach
        </div>
    @endforeach
</div>
