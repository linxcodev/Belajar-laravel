<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
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
