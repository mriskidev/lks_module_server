@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($posts as $post )
        <article class="mb-5">
            <a href="/posts/{{ $post->slug }}"><h2>{{ $post->title }}</a></h2>
            <p>{{ $post->singkat }}</p>

            <a href="/categories">Back o Categories</a>

        </article>
    @endforeach
@endsection

