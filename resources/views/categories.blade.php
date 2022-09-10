@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>

@foreach ($categories as $category )
    <ul>
        <li>
            <a href="/categories/{{ $category->slug }}"><h2>{{ $category->name }}</a></h2>
        </li>
    </ul>
@endforeach
<a href="/posts">Back To Posts</a>


@endsection
