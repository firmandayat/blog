@extends('layouts.app')

@section('title', 'Buat postingan')

@section('content')

    <div class="container">
        <form method="POST" action="{{route('store')}}">
            @csrf
            <h1 style="margin-top: 100px" class="mb-4">Buat postingan baru</h1>
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <input type="text" class="form-control" id="content" name="konten" placeholder="Masukkan konten">
            </div>
            <a href="{{ route('beranda') }}" type="button" class="btn btn-sm btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </form>
    </div>

@endsection
