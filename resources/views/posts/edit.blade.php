@extends('layout.app')

@section('title', 'Blog | Edit Postingan')



@section('content')
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

@endsection
