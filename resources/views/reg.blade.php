<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
    <x-header />
    <main>
        <label for=""><H2>Регистрация</H2></label>
        <form action="{{ Route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="exampleInputPassword1" class="form-label">Имя</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputPassword1" placeholder="nickname">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="exampleInputPassword1" class="form-label">Почта</label>
                <input type="text" value="{{ old('email') }}" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="exampleInputPassword1" class="form-label">ФИО</label>
                <input type="text" value="{{ old('fio') }}" name="fio" class="form-control" id="exampleInputPassword1" placeholder="fio">
                @error('fio')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="exampleInputPassword1" class="form-label">Номер телефона</label>
                <input type="text" value="{{ old('number') }}" name="number" class="form-control" id="exampleInputPassword1" placeholder="number">
                @error('number')
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
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            Есть аккаунт?<a href="{{ Route('viewlog') }}"> Вход в аккаунт</a>
        </form>
    </main>
    <x-footer />
</body>

</html>