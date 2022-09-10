@extends('layouts.main')

@section('container')
<article class="mb-5">

</article>
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="" class="text-decoration-none"> {{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug  }}">{{ $post->category->name }}</a></p>

    <p>{!! $post->body !!}</p>

    <a href="/posts" class="d-block mt-3">Back to posts</a>
@endsection

