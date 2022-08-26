<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{mix("/css/app.css")}}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <title>CIBLE</title>
</head>
<body>
<!-- @include("_partials.header") -->
<!-- @yield('body') -->
</body>
 <!-- @include("_partials._footer") -->

<script src="{{mix("/js/app.js")}}"></script>

</html>
