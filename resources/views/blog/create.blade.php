@extends('layouts.master')

@section('title', 'blog')

@section('content')
    <h1>Tambah content blog</h1>

    <form action="{{ route('blog.store') }}" method="post">
      {{ csrf_field() }}
      <input type="text" name="title" value="{{ old('title') }}">
      <strong>{{ $errors->first('title') }}</strong><br>

      <textarea name="description" rows="8" cols="80">{{ old('description') }}</textarea>
      <strong>{{ $errors->first('description') }}</strong><br>

      <input type="submit" name="save" value="Save">
    </form>
@endsection
