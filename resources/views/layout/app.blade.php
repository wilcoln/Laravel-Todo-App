<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo list</title>
</head>
<body>
  @include('inc.navbar')
  <div class="container mt-4">
    @include('inc.alerts')
    @yield('content')
  </div>

  <footer  class="text-center mt-4" id="footer">
      <p>Copyright &copy; 2017 Todolist</p>
  </footer>
  <script src="/js/app.js"></script>
  @yield('scripts')
</body>
</html>