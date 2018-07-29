@extends('layouts.app')

@section('title', 'blog')

@section('content')
    <h1>Edit content blog</h1>
    <form action="/blog/{{ $blogs->id }}" method="post">
      <input type="text" name="title" value="{{ $blogs->title }}"><br>
      <textarea name="description" rows="8" cols="80">{{ $blogs->description }}</textarea>
      <br>
      <input type="submit" name="save" value="Save">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
    </form>
@endsection
