@extends('layouts.app')

@section('title', 'blog')

@section('content')
    <h2>{{ $blogs->title }}</h2>
    <hr>
    <p>
      {{ $blogs->description }}
    </p>

    <button type="button" name="button">
      <a id="btn" href="{{ route('blog.edit', $blogs->id) }}">Edit</a>
    </button>
    <button type="button" name="button">
      <a id="btn" href="{{ route('blog.index') }}">back</a>
    </button>
@endsection
