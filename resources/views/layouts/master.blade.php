<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style media="screen">
      a#btn {
        color: black;
        text-decoration: inherit;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <a href="#">Home</a>
        <a href="#">blog</a>
      </nav>
    </header>

    @yield('content')

    <footer>
      <p>&copy; laravel linxcodev</p>
    </footer>
  </body>
</html>
