@extends('layouts.master')

@section('title', 'blog')

@section('content')
    <h1>Selamat datang di blog</h1>
    
    <h2>{{ $blogs->title }}</h2>
    <hr>
    <p>
      {{ $blogs->description }}
    </p>
@endsection
