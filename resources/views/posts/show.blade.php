@extends('layout.app')

@section('title', 'Blog | Judul ')



@section('content')
    <div class="container">
        <div class="col-md-8">


            <article class="blog-post">
                <h2 class="blog-post-title">{{ $posts->title }}</h2>
                <p class="blog-post-meta"> {{ date('d M Y H:i', strtotime($posts->created_at)) }} by <a
                        href="#">Mark</a>
                </p>


                <p>{{ $posts->content }}</p>

                <div class="container">
                    <a href="{{ url('posts') }}" class="btn btn-secondary">
                        Kembali</a>
                    <br>

                    <form action="{{ url("posts/{$posts->id}") }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger align-baseline">Hapus</button>
                    </form>
                </div>


                <hr>

                <small class="text-muted">{{ $comments->count() }} Komentar</small>
                <br>
                @foreach ($comments as $comment)
                    <div class="container">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p>{{ $comment->comment }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
            </article>

        </div>
    </div>

@endsection
