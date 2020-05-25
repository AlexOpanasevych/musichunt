@for($i = 0; $i < $data->count(); $i++) {{--Here should be models from DB. They must be added in @include--}}
<div class="col-md-4 my-order-item">
    <div class="chosen-item d-block d-md-flex flex-column justify-content-between ">
        <div class="chosen-item-photo">
            <img src={{asset($data[$i]->thumbnail)}}>
        </div>
        <div>
            <P>
                @if(isset($data[$i]->name)){{$data[$i]->name}}@endif
            </P>
            <span class="chosen-item-price">@if(isset($costs[$i])){{$costs[$i]}}@endif</span>
            <span class="chosen-item-price">грн</span>
            <p>
                <span class="chosen-item-price">Кількість: </span>
                <span>@if(isset($counts[$i])){{$counts[$i]}}@endif шт.</span>
            </p>
        </div>
    </div>
</div>
@endfor
