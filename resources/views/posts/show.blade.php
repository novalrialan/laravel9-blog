<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <title>Blog | Judul:{{ $posts[0]->title }} </title>
</head>

<body>
    <div class="container">
        <div class="col-md-8">

            {{-- @php
                dd($posts);
            @endphp --}}
            <article class="blog-post">
                <h2 class="blog-post-title">{{ $posts[0]->title }}</h2>
                <p class="blog-post-meta"> {{ date('d M Y H:i', strtotime($posts[0]->created_at)) }} by <a
                        href="#">Mark</a>
                </p>

                <p>{{ $posts[0]->content }}</p>
                <a href="{{ url('posts') }}" class="btn btn-danger">
                    Kembali</a>
                <hr>
            </article>


        </div>
    </div>

</body>

</html>
