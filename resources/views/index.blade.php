<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
    <x-header />
    <main>
        @if(!Auth::user())
        <button><a style="text-decoration: none; color:black" href="{{ route('viewreg') }}">Зарегистрироваться</a></button>
        <button><a style="text-decoration: none; color:black" href="{{ route('viewlog') }}">Войти</a></button>
        @endif
        @auth
        @if(Auth::user()->role == 'admin')
        <button><a style="text-decoration: none; color:black" href="{{ route('viewadminpanel') }}">Панель админа</a></button>
        @else
        <button><a style="text-decoration: none; color:black" href="{{ route('viewprofile') }}">Профиль</a></button>
        <button><a style="text-decoration: none; color:black" href="{{ route('vieworder') }}">Заказать</a></button>
        @endif
        <button><a style="text-decoration: none; color:black" style="text-decoration: none;" href="{{ route('logout') }}">Выйти</a></button>
        @endauth
    </main>
    <x-footer />
</body>

</html>