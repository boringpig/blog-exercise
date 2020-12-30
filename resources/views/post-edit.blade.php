<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>文章編輯畫面</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar w/ text</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <span class="navbar-text">
                Navbar text with an inline element
            </span>
            </div>
            </div>
        </nav>
        <div class="container">
            <div class="row align-items-start">
                <form action="{{ action('PostController@update', ['id' => $post->id]) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">標題</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $post->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">內容</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" value="{{ $post->content }}">
                    </div>
                    <button type="submit" class="btn btn-primary">送出</button>
                </form>
            </div>
        </div>
    </body>
</html>
