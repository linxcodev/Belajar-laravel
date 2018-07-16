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
      strong {
        color: red;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <a href={{ route('blog.index') }}>Home</a>
      </nav>
    </header>

    @yield('content')

    <footer>
      <p>&copy; laravel linxcodev</p>
    </footer>
  </body>
</html>
