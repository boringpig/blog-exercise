<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>建立文章</title>

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
                <form method="POST" action="/post-store">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">標題</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">內容</label>
                        <input type="text" name="content" class="form-control" id="exampleFormControlInput2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">狀態</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option selected>請選擇</option>
                            <option value="0">草稿</option>
                            <option value="1">等待公開</option>
                            <option value="2">公開</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">預計發佈時間</label>
                        <input type="date" name="published_at" class="form-control" id="exampleFormControlInput4">
                    </div>
                    <button type="submit" class="btn btn-success">送出</button>
                </form>
            </div>
        </div>
    </body>
</html>
