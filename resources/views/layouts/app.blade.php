<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('partials.head')

  <title>{{ env('APP_NAME') }}</title>

  
</head>

<body>

    <div class="container">
        <h1 class="text-center text-uppercase"> {{ env('APP_NAME') }} </h1>
        <div class="card-container">

            @yield('movies')
        </div>
    </div>

  
</body>

</html>