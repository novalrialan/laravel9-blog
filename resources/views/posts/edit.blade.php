<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
    <title>Blog | Edit Postingan</title>
</head>

<body>
    <div class="container">
        <h1> Edit Postingan Baru</h1>

    </div>
    <div class="container">

        <form action="{{ url("posts/{$posts[0]->id}/edit") }}" method="post" class="form-control">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>

                <input type="text" class="form-control" id="title"value="{{ $posts[0]->title }}" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>

                <textarea class="form-control" id="content" name="content" rows="3">
                {{ $posts[0]->content }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-success">Pembaruan</button>
        </form>
    </div>



</body>

</html>
