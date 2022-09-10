@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Posts</h1>
    @foreach ($posts as $post )
        <article class="mb-5 border-bottom pb-4"    >
            {{-- Judul posts --}}
            <h2><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>

            {{-- Judul category --}}
            <p>By. <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a  class="text-decoration-none" href="/categories/{{ $post->category->slug  }}">{{ $post->category->name }}</a></p>

            <p>{{ $post->singkat }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none  ">Detail Posts</a>
        </article>
    @endforeach
@endsection

