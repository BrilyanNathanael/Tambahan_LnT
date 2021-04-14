<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Halaman Utama</title>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Halo, Pengguna</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, magnam deserunt impedit asperiores itaque cumque quisquam harum ad qui quibusdam voluptatum aspernatur eaque distinctio veritatis officiis eius! Incidunt tempora maiores deserunt beatae illum, consectetur facere quae maxime omnis consequatur quis cum repellat saepe unde ullam praesentium ut iste sit nisi ea molestiae hic laudantium numquam. Autem, rerum assumenda blanditiis tempora iusto atque dolor optio hic quae nostrum ut unde veniam at consequuntur? Doloribus consequu</p>
        </div>

        <div class="container pb-4">
            <a href="/create" class="btn btn-primary">+ Insert New</a>
            @foreach($items as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{asset('/asset/dummy.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->nama}}</h5>
                    <p class="card-text">{{$item->harga}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            @endforeach
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>