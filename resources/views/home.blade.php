<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Movies</h1>
        </div>
    </header>
    <main>
        <div class="container movies-list">
            @foreach($movies as $movie)
            <div class="card">
                <div class="card-header">
                 {{$movie->title}} 
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>{{$movie->nationality}}</p>
                    <footer class="blockquote-footer">{{$movie->vote}}</cite></footer>
                  </blockquote>
                </div>
              </div>
            @endforeach
        </div>
    </main>
</body>
</html>