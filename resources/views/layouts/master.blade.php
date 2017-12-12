<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"

</head>
<body>
      @include('includes.header')

      <div class="container">
        @include('includes.message')
        @yield('content')
      </div>

      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
