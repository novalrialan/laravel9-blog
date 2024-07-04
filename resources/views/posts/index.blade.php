@extends('layout.app')

@section('title', 'Blog')


@section('content')
    <h1 class="bold">Ini Halaman Blog <a href="{{ url('posts/create') }}" class="btn btn-success">+ Buat Postingan
            Baru</a>
    </h1>
    <br>
    @foreach ($posts as $post)
        <div class="card mb-3">

            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><small class="text-muted">Last updated
                        {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
                <a href="{{ url("posts/{$post->id}") }}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{ url("posts/{$post->id}/edit") }}" class="btn btn-warning">Edit</a>
            </div>

        </div>
    @endforeach
@endsection
