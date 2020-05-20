@foreach($data as $elem) {{--Here should be models from DB. They must be added in @include--}}
<div class="col-md-4 my-order-item">
    <div class="chosen-item d-block d-md-flex flex-column justify-content-between ">
        <div class="chosen-item-photo">
            <img src={{asset($elem->thumbnail)}}>
        </div>
        <div>
            <P>
                @if(isset($elem->name)){{$elem->name}}@endif
            </P>
            <span class="chosen-item-price">@if(isset($elem->price)){{$elem->price}}@endif</span>
            <span class="chosen-item-price">грн</span>
            <p>
                <span class="chosen-item-price">Кількість: </span>
                <span>1 шт.</span>
            </p>
        </div>
    </div>
</div>
@endforeach
