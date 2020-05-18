@foreach([0,1,2,3] as $i) {{--Here should be models from DB. They must be added in @include--}}
<div class="col-md-4 my-order-item">
    <div class="chosen-item d-block d-md-flex flex-column justify-content-between ">
        <div class="chosen-item-photo">
            <img src={{asset('images/yamaha_f310_images_94874409.jpg')}}>
        </div>
        <div>
            <P>
                Акустична гітара Yamaha F310 (TBS)
            </P>
            <span class="chosen-item-price">3600 </span>
            <span class="chosen-item-price">грн</span>
            <p>
                <span class="chosen-item-price">Кількість: </span>
                <span>1 шт.</span>
            </p>
        </div>
    </div>
</div>
@endforeach
