<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
</head>

<body>
    <div class="container">

        <h1 class="bold">Ini Halaman Blog <a href="{{ url('posts/create') }}" class="btn btn-success">+ Buat Postingan
                Baru</a></h1>





        <br>
        @foreach ($posts as $post)
            <div class="card mb-3">
                @php
                    $post = explode(',', $post);
                @endphp
                <div class="card-body">
                    <h5 class="card-title">{{ $post[1] }}</h5>
                    <p class="card-text">{{ $post[2] }}</p>
                    <p class="card-text"><small class="text-muted">Last updated
                            {{ date('d M Y H:i', strtotime($post[3])) }}</small></p>
                    <a href="{{ url("posts/{$post[0]}") }}" class="btn btn-primary">Selengkapnya</a>
                </div>

            </div>
        @endforeach

    </div>

</body>

</html>
