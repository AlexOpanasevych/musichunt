<header class="page-header-desktop">
    <div class="header-column-1">
        <div>
            <a class="active" href="{{route('home')}}" class="logo-icon" style="text-decoration: none !important;">
                <div style="display: flex; flex-direction:row;">
                    <img class="logo" src="images/logo.svg">
                    <strong class="header-name">MUSIC<br>HUNT</strong>
                </div>
            </a>
    </div>
        <form action="/search" method="get" class="search">
            <div class="search-line"><input type="text" class="search search-line input-search" name="search" placeholder="Пошук"></div>
            <div class="searching"><input type="image" id="button-search" src="images/magnifying-glass.svg"></div>
        </form>
        <div>
            <a href="{{route('cabinet')}}"><img class="icons" src="images/man-avatar.svg"></a>
            <a href="{{route('likes')}}"><img class="icons" src="images/love-and-romance.svg"></a>
            <a href="{{route('cart')}}"><img class="icons" src="images/commerce-and-shopping.svg"></a>
        </div>
    </div>
    <div class="header-navbar">
        <a href="{{route('sales')}}">Знижки</a>
        <a href="{{route('news')}}">Новинки</a>
        <a href="{{route('guitars')}}">Гiтари</a>
        <a href="{{route('keyboards')}}">Клавiшнi</a>
        <a href="{{route('winds')}}">Духовi</a>
        <a href="{{route('bows')}}">Смичковi</a>
        <a href="{{route('percussions')}}">Ударнi</a>
        <a href="{{route('accessories')}}">Аксесуари</a>
        <a href="{{route('brands')}}">Бренди</a>
    </div>
</header>
<header class="page-header-mob">
        <nav role="navigation" style="width: 30%;">
            <div id="nav-icon">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    <a href="{{route('sales')}}"><li>Знижки</li></a>
                    <a href="{{route('news')}}"><li>Новинки</li></a>
                    <a href="{{route('guitars')}}"><li>Гiтари</li></a>
                    <a href="{{route('keyboards')}}"><li>Клавiшнi</li></a>
                    <a href="{{route('winds')}}"><li>Духовi</li></a>
                    <a href="{{route('bows')}}"><li>Смичковi</li></a>
                    <a href="{{route('percussions')}}"><li>Ударнi</li></a>
                    <a href="{{route('accessories')}}"><li>Аксесуари</li></a>
                    <a href="{{route('brands')}}"><li>Бренди</li></a>
                </ul>
            </div>
        </nav>
    <div style="display: flex; flex-direction:row;">
        <div class="header-logo"><img class="logo" src="images/logo.svg"></div>
        <strong class="header-name">MUSIC<br>HUNT</strong>
    </div>
    <div>
        <a href="{{route('cabinet')}}"><img class="icons" src="images/man-avatar.svg"></a>
        <a href="{{route('likes')}}"><img class="icons" src="images/love-and-romance.svg"></a>
        <a href="{{route('cart')}}"><img class="icons" src="images/commerce-and-shopping.svg"></a>
    </div>
</header>
