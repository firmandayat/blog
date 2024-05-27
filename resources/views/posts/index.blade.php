<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <div class="container">
        <h1 style="margin-top: 100px" class="mb-3">Blog codepolitan<a type="button" class="btn btn-sm btn-success"
                href="{{ route('create') }}">+ Buat Postingan</a></h1>
        @foreach ($posts as $post)
            {{-- @php ($post = explode(",", $post)) --}}
            <div class="card mb-3">
                <div class="card-body">
                    <form method="POST" action="{{ route('delete', ['id' => $post->id]) }}">
                        @method('DELETE')
                        @csrf
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated at
                                {{ $post->created_at }}</small></p>
                        <a href="{{ url("posts/$post->id") }}" type="button"
                            class="btn btn-sm btn-primary">Selengkapnya</a>
                        <a href="{{ route('edit', ['id' => $post->id]) }}" type="button"
                            class="btn btn-sm btn-warning">Edit</a>
                        <button
                            onclick='return confirm("Apakah Anda yakin mau hapus postingan dengan judul {{ $post->title }} ?")'
                            type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach

        <br>
        {{ $posts->links('pagination::bootstrap-5') }}

    </div>

@endsection
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Blog</title>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgray;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mb-3">Blog codepolitan<a type="button" class="btn btn-sm btn-success" href="{{route("create")}}">+ Buat Postingan</a></h1>
        @foreach ($posts as $post)
        @php ($post = explode(",", $post))
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post[1] }}</h5>
                    <p class="card-text">{{ $post[2] }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated at {{$post[3]}}</small></p>
                    <a href="{{url("posts/$post[0]")}}" type="button" class="btn btn-sm btn-primary">Selengkapnya</a>
                </div>
            </div>
    @endforeach
    </div>
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
