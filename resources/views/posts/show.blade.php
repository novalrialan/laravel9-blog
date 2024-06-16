<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <title>Blog | Judul: {{ $post[1] }}</title>
</head>

<body>
    <div class="container">
        <div class="col-md-8">


            <article class="blog-post">
                <h2 class="blog-post-title">{{ $post[1] }}</h2>
                <p class="blog-post-meta"> {{ date('d M Y H:i', strtotime($post[3])) }} by <a href="#">Mark</a>
                </p>

                <p>{{ $post[2] }}</p>
                <a href="{{ url('posts') }}" class="btn btn-danger">
                    Kembali</a>
                <hr>
            </article>


        </div>
    </div>

</body>

</html>
