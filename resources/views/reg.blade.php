<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reg.css') }}" />
</head>

<body>
    <x-header />
    <main>
        <label for="">
            <H2>Регистрация</H2>
        </label>
        <form action="{{ Route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="seredina">
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
            </div>
        </form>
    </main>
    <x-footer />
</body>

</html>