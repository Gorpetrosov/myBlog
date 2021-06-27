<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name')}} | @yield('title')</title>
    @yield('css')
</head>
<body>
    <div class="container-fluid p-0">
        @include('layout.notify')
        @include('layout.follow')
        @include('layout.navbar')
        @yield('body')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
  @yield('js')
</body>
</html>
