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
