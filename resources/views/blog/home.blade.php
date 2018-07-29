@extends('layouts.app')

@section('title', 'home')

@section('content')
  <a href="{{ route('home') }}">Home</a>
  <h1>Selamat Datang di home blog</h1>

  <button type="button">
    <a id="btn" href="{{ route('blog.create') }}">Tambah</a>
  </button>
  <button type="button">
    <a id="btn" href="{{ route('blog.restore') }}">Restore</a>
  </button><br><br>

  @foreach ($blogs as $blog)
    <li>
      <a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
      <form action="{{ route('blog.destroy', $blog->id) }}" method="post">
        <button type="submit" name="button">Delete</button>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
      </form>
      <button type="button">
        <a id="btn" href="{{ route('blog.fc', $blog->id) }}">fc</a>
      </button>
    </li>
  @endforeach

  {{ $blogs->links() }}
@endsection
