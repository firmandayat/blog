<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Buat postingan')

@section('content')

    <div class="container">
        <form method="POST" action="{{route('store')}}">
            @csrf
            <h1 style="margin-top: 100px" class="mb-4">Buat postingan baru</h1>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Buat Postingan Baru</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{route('store')}}">
            @csrf
            <h1 class="mb-4">Buat postingan baru</h1>
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
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
<<<<<<< HEAD

@endsection
=======
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
>>>>>>> 94c45572ad11fcb56b33e9f3156f2df734d25b98
