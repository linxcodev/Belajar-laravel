@extends('layouts.app')

@section('title', 'blog')

@section('content')
    <h1>Tambah content blog</h1>

    {{-- <form action="{{ route('test') }}" method="post"> --}}
    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="text" name="title" value="{{ old('title') }}">
      <strong>{{ $errors->first('title') }}</strong><br>

      <textarea name="description" rows="8" cols="80">{{ old('description') }}</textarea>
      <strong>{{ $errors->first('description') }}</strong><br>

      <input type="file" name="file_img" value="Input File">
      <strong>{{ $errors->first('file_img') }}</strong><br>

      <input type="submit" name="save" value="Save">
    </form>
    <button onclick="goBack()">Go Back</button>
@endsection

<script>
  function goBack() {
      window.history.back();
  }
</script>
