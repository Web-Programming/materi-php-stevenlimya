<<<<<<< HEAD
@extends("layout.master")

@section("content")
    <p>Ini Adalah Halaman Index Materi</p>
    <p>Isinya list materi dari database</p>
@endsection

@section('tile', "Ini Halama List Meteri")
=======
@extends('layouts.master')

@section('title', 'Materi Index')

@section('content')
<h1>Materi Index</h1>
<a href="{{ route('materi.create') }}">Tambah Materi</a>
<!-- Tampilkan daftar materi di sini -->
@endsection
>>>>>>> ce350605ab7ba9f1d37935772789681a1ab8c394
