<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}" />
</head>

<body>
    <x-header />
    <main>
        <label>
            <H2>Заказать помещение</H2>
        </label>
        <form action="{{ Route('order') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="seredina">
                <div>
                    <label for="exampleInputPassword1" class="form-label">Название места</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputPassword1" placeholder="Помещение">
                </div>
                <div class="form-label">
                    <label>Дата и время доставки</label>
                    <input type="datetime-local" value="{{ old('date') }}" name="date">
                </div>
                <div class="form-label">
                    <label>Способ оплаты</label>
                    <select name="oplata">
                        <option value="nal">СБП</option>
                        <option value="perevod">Очно</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Сделать заказ</button>
            </div>
        </form>
    </main>
    <x-footer />
</body>

</html>