@extends('layouts.master')

@section('title', 'home')

@section('content')
  <h1>Selamat Datang di home blog</h1>

  @foreach ($blogs as $blog)
    <li> <a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a> </li>
  @endforeach
@endsection
