@extends('layouts.master')

@section('title', 'home')

@section('content')
  <h1>Selamat Datang di blog ini</h1>
  <h2> {{ $blog }} </h2> {{-- echo $blog --}}

  <ol type="1">
    @foreach ($users as $user)
        <li>{{ $user }}</li>
    @endforeach
  </ol>

  {!! $unescaped !!} {{-- echo in html --}}<br><br>

  @if (count($users) > 5)
    User lebih dari 5
  @else
    User tidak lebih dari 5
  @endif
@endsection
