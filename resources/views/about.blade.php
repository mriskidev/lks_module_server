@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h5>{{ $name }}</h5>
    <p>{{ $jurusan }}</p>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="100" class="img-thumbnail rounded-circle">
@endsection
