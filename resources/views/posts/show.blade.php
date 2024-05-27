<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Details postingan')

@section('content')

    <div class="container">
        <article style="margin-top: 100px" class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->content }}</p>
            <p>{{ $post->created_at }}</p>

            <small class="text-mute">{{ $totalKomen }} Komentar</small>
            @foreach ($comments as $comment)
                <div class="card mb-3">
                    <div class="card-body">
                        <p style="font-size: 10px">{{ $comment->comment }}</p>
                    </div>
                </div>
            @endforeach
            <a href="{{ route('beranda') }}" type="button" class="btn btn-sm btn-secondary">Kembali</a>
            <div style="margin-top: 100px">
        </article>
    </div>

@endsection
=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" crossorigin="anonymous">
    <title>Blog | Judul: {{ $post[1] }}</title>
</head>

<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $post[1] }}</h2>
            <p class="blog-post-meta">{{ $post[3] }}</p>
            <p>{{ $post[2] }}</p>
            <a href="{{ route('beranda') }}" type="button" class="btn btn-sm btn-secondary">Kembali</a>
        </article>
    </div>
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
