<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/log.css') }}" />
</head>

<body>
    <x-header />
    <main>
        <label for="">
            <H2>Вход</H2>
        </label>
        <form action="{{ Route('login') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="seredina">
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
            </div>
        </form>
    </main>
    <x-footer />
</body>

</html>