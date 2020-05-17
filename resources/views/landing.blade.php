@extends('template.template')

@section('page-content')
    <div class="landing_image d-flex justify-content-center align-items-center flex-column" style="background-image: url(images/Landing-backgound.jpg);">
        <h1 class="landing_h text-center"><strong>MUSICHUNT</strong></h1>
        <h2 class="landing_h text-center">Знайди свою музику, свій бренд та своє натхнення</h2>
    </div>
    <div class="landing_image d-flex justify-content-center align-items-center flex-column" style="background-image: url(images/Landing-backgound-2.jpg);">
        <h1 class="landing2_h text-center"><strong>НЕ ПРОПУСТИ!</strong></h1>
        <h2 class="landing2_h text-center">ВЕСНЯНИЙ СЕЗОН ЗНИЖОК У НАШОМУ МАГАЗИНІ.<br>ЗНИЖКИ ДО 60% НА ВАШІ УЛЮБЛЕНІ ТОВАРИ</h2>
    </div>
    <div class="landing_image d-flex justify-content-center align-items-center flex-column" style="background-image: url(images/Landing3-background.jpg);">
        <h1 class="landing3_h text-center"><strong>ЗАВЖДИ КЛАСНО ТАМ,<br>ДЕ Є ГІТАРА</strong></h1>
        <button type="button" class="buy_button btn btn-outline-dark">Купити зараз</button>
    </div>
    <div class="landing_image2 d-flex justify-content-center align-items-center flex-column">
        <h1 class="landing4_h text-center"><strong>ВІДОМІ БРЕНДИ</strong></h1>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="brands col-xl-" style="background-image: url(images/b1.png)"></div>
                <div class="brands col-xl-" style="background-image: url(images/b2.png)"></div>
                <div class="brands col-xl-" style="background-image: url(images/b3.png)"></div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="brands col-xl-" style="background-image: url(images/b4.png)"></div>
                <div class="brands col-xl-" style="background-image: url(images/b5.png)"></div>
                <div class="brands col-xl-" style="background-image: url(images/b6.png)"></div>
            </div>
        </div>
    </div>
@endsection
