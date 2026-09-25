<link rel="stylesheet" href="{{ asset('css/header.css') }}" />
<div class="nach">
    <a style="text-decoration: none; color:black" href="{{ route('homepage') }}">
        <div class="logo">
            <img src="{{ asset('img/etazhi-logotip-vektor-48.jpg') }}" alt="">
        </div>
    </a>
    @if(!Auth::user())
        <button type="submit" class="btn btn-light"><a style="text-decoration: none; color:black" href="{{ route('viewreg') }}">Зарегистрироваться</a></button>
        <button type="submit" class="btn btn-light"><a style="text-decoration: none; color:black" href="{{ route('viewlog') }}">Войти</a></button>
        @endif
        @auth
        @if(Auth::user()->role == 'admin')
        <button type="submit" class="btn btn-light"><a style="text-decoration: none; color:black" href="{{ route('viewadminpanel') }}">Панель админа</a></button>
        <button type="submit" class="btn btn-light"><a style="text-decoration: none; color:black" href="{{ route('viewcreate') }}">Создать</a></button>
        @else
        <button type="submit" class="btn btn-light"><a style="text-decoration: none; color:black" href="{{ route('viewprofile') }}">Профиль</a></button>
        <button type="submit" class="btn btn-light"><a style="text-decoration: none; color:black" href="{{ route('vieworder') }}">Заказать</a></button>
        @endif
        <button type="submit" class="btn btn-light"><a style="text-decoration: none; color:black" style="text-decoration: none;" href="{{ route('logout') }}">Выйти</a></button>
        @endauth
</div>