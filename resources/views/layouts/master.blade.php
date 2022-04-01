<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Video Club</title>
  </head>
  <body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ url('/assers/bootstrap/js/bootstrap.min.css') }}"></script>

  </body>
</html>