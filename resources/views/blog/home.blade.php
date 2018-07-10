<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>Selamat Datang di blog ini</h1>
    <h2> {{ $blog }} </h2> {{-- echo $blog --}}

    <ol type="1">
      @foreach ($users as $user)
          <li>{{ $user }}</li>
      @endforeach
    </ol>
  </body>
</html>
