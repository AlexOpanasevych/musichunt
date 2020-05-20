
@php
$pages = ['Головна' => 'my-account',
'Моя інформація'=>'my-account/my-info',
'Мої замовлення'=>'my-account/my-orders',
'Обране'=>'my-account/chosen',
'Відгуки про сайт'=>'my-account/feedback',
'Вийти'=>'/logout']
@endphp

<div class="d-flex flex-column justify-content-center account-greeting">
    <p>Вітаю,</p>
    <p class = "account-username">@if(auth()->check()) {{auth()->user()->name}} @endif</p>
</div>


@if(\Illuminate\Support\Facades\Request::path() == $pages['Головна'])
    @foreach($pages as $page_name => $page_url)
        @if(\Illuminate\Support\Facades\Request::path() == $page_url)
            <a class="account-current-button"><div class="d-flex align-items-center">{{$page_name}}</div></a>
        @else
            <a href="{{$page_url}}"><div class="d-flex align-items-center">{{$page_name}}</div></a>
        @endif
    @endforeach
@else
    @foreach($pages as $page_name => $page_url)
        @if($page_url == $pages['Головна'])
            <a href="/{{$page_url}}"><div class="d-flex align-items-center">{{$page_name}}</div></a>
        @elseif(\Illuminate\Support\Facades\Request::path() == $page_url)
            <a class="account-current-button hide-button"><div class="d-flex align-items-center">{{$page_name}}</div></a>
        @else
            <a href="/{{$page_url}}" class="hide-button"><div class="d-flex align-items-center">{{$page_name}}</div></a>
        @endif
    @endforeach
@endif
