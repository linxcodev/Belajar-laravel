<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/main.css">
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

    <script src="/js/main.js"></script>
  </body>
</html>
