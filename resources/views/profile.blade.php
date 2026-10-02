<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
</head>

<body>
    <x-header />
    <main>
        <div id="maindiv">
            <div class="sidediv"></div>
            <div id="osnova">
                <div id="zagolovok">
                    <label>
                        <H2>Мои заявки</H2>
                    </label>
                </div>
                <article class="post">
                    <div id="zakazes">
                        <div class="zakaz">
                            <ul>
                                <li>ID</li>
                                <li>Место</li>
                                <li>Дата заказа</li>
                                <li>Оплата</li>
                                <li>Статус</li>
                            </ul>
                        </div>
                        @isset($orders)
                        @foreach ($orders as $order)
                        <div class="zakaz">
                            <ul class="list-group list-group-horizontal" style="width: 100%;">
                                <li class="list-group-item zid">{{$order->id}}</li>
                                <li class="list-group-item zname">{{$order->name}}</li>
                                <li class="list-group-item ztime">{{$order->date}}</li>
                                @if($order->payment == "perevod")
                                <li class="list-group-item zoplata">СБП</li>
                                @else
                                <li class="list-group-item zoplata">Наличные</li>
                                @endif
                                <li class="list-group-item zstatus" style="display:flex; flex-direction: column;">
                                    <h4 style="height: 25%; display: flex; align-items: center; justify-content: center;">
                                        @if($order->status == "New")
                                        Новая
                                        @elseif($order->status == "Naznach")
                                        Назначено
                                        @elseif($order->status == "End")
                                        Закончно
                                        @endif
                                    </h4>
                                </li>
                            </ul>
                            <div id="comments">
                                <div style="width:100%; display: flex; flex-direction:column; justify-content:start; margin-left: 50px;">
                                    <label for="">Отзывы:</label>
                                    @isset($comments)
                                    @foreach ($comments as $comment)
                                    @if ($comment->order_id == $order->id)
                                    <div style="margin-left: 20px;">
                                        <p style="font-size:20px;">{{ $comment->user->name }}</p>
                                        <p style="margin-left: 10px; margin-bottom: 15px; margin-top: 5px; color:rgb(55,55,55);">{{ $comment->description }}</p>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endisset
                                </div>
                                @if($order->status == "done")
                                <label for="">Оставить отзыв</label>
                                <form action="{{ Route('comment', [$order->id]) }}" method="post">
                                    <input name="description" id="" />
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <button style="margin-bottom:10px;" type="submit">Оставить</button>
                                </form>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        @endisset
                    </div>
                </article>
            </div>
            <div class="sidediv"></div>
        </div>
    </main>
    <x-footer />
</body>

</html>