<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Next Challenge</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="bg-blue-500">
    <div id="app">
       <app></app>
    </div>
    <script src="{{asset('js/app.js')}}" defer></script>
    </body>
</html>
