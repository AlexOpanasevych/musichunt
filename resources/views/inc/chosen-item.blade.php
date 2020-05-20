<div style="margin-bottom: 40px">
    <div class="chosen-item d-flex flex-column justify-content-between">
        <div class="chosen-item-photo">
            <img src={{asset($elem->thumbnail)}}>
            <a href="{{route('cansel-choose')}}" id="del-from-chosen"><img src={{asset('images/cancel-chosen.svg')}}></a>
        </div>
        <div>
            <P>
                @if(isset($elem->name)){{$elem->name}}@endif
            </P>
            @if(isset($elem->cost))
                <span class="chosen-item-price">{{$elem->cost}} грн</span><br>
                @if(isset($elem->discount))
                    <span class="chosen-item-price">Знижка: {{$elem->cost - $elem->cost / 100 * $elem->discount}} грн</span>
                @endif
            @endif
            <button id="add-to-basket" style="margin-top: 10px; width: 100%; height: 50px">Додати до кошика</button>
        </div>
    </div>
</div>
