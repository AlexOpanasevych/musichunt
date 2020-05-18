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
            <img class="icons" src="images/man-avatar.svg">
            <img class="icons" src="images/love-and-romance.svg">
            <img class="icons" src="images/commerce-and-shopping.svg">
        </div>
    </div>
    <div class="header-navbar">
        <a href="{{route('sales')}}">Знижки</a>
        <a href="{{route('news')}}">Новинки</a>
        <a href="{{}}">Гiтари</a>
        <a href="#keyboards">Клавiшнi</a>
        <a href="#winds">Духовi</a>
        <a href="#bows">Смичковi</a>
        <a href="#percussions">Ударнi</a>
        <a href="#accessories">Аксесуари</a>
        <a href="#brands">Бренди</a>
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
                    <a href="#sales"><li>Знижки</li></a>
                    <a href="#news"><li>Новинки</li></a>
                    <a href="#guitars"><li>Гiтари</li></a>
                    <a href="#keyboards"><li>Клавiшнi</li></a>
                    <a href="#winds"><li>Духовi</li></a>
                    <a href="#bows"><li>Смичковi</li></a>
                    <a href="#percussions"><li>Ударнi</li></a>
                    <a href="#accessories"><li>Аксесуари</li></a>
                    <a href="#brands"><li>Бренди</li></a>
                </ul>
            </div>
        </nav>
    <div style="display: flex; flex-direction:row;">
        <div class="header-logo"><img class="logo" src="images/logo.svg"></div>
        <strong class="header-name">MUSIC<br>HUNT</strong>
    </div>
    <div>
        <img class="icons" src="images/man-avatar.svg">
        <img class="icons" src="images/love-and-romance.svg">
        <img class="icons" src="images/commerce-and-shopping.svg">
    </div>
</header>
