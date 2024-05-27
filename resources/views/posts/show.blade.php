<!DOCTYPE html>
<html lang="en">

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
