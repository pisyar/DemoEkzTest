<!DOCTYPE html>
<html lang="en">

<x-head />

<body>
    <x-header />
    <main>
        <label><H2>Заказать</H2></label>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <label for="exampleInputPassword1" class="form-label">Название места</label>
                    <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="exampleInputPassword1" placeholder="Помещение">
                </div>
                <div>
                    
                </div>
            </div>
        </form>
    </main>
    <x-footer />
</body>

</html>