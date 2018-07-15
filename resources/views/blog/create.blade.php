@extends('layouts.master')

@section('title', 'blog')

@section('content')
    <h1>Edit content blog</h1>

    <form action="{{ route('blog.store') }}" method="post">
      {{ csrf_field() }}
      <input type="text" name="title" value=""><br>
      <textarea name="description" rows="8" cols="80"></textarea>
      <br>
      <input type="submit" name="save" value="Save">
    </form>
@endsection
