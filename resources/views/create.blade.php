<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}" />
</head>

<body>
    <x-header />
    <main>
        <label>
            <H2>Создание коонфы</H2>
        </label>
        <form action="{{ Route('viewcreate') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <label for="exampleInputPassword1" class="form-label">Название места</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputPassword1" placeholder="Помещение">
                </div>
                <div>
                    <label for="exampleInputPassword1" class="form-label">Описание</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputPassword1" placeholder="Помещение">
                </div>

                
            </div>
        </form>
    </main>
    <x-footer />
</body>

</html>