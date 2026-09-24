<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
    <x-header />
    <main>
        <label for=""><H2>Вход</H2></label>
        <form action="{{ Route('login') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="exampleInputPassword1" class="form-label">Никнейм</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputPassword1" placeholder="nickname">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="text" value="{{ old('password') }}" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
            Нет аккаунта? <a href="{{ Route('viewreg') }}"> Регистрация</a>
        </form>
    </main>
    <x-footer />
</body>

</html>