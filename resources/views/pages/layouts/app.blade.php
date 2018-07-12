<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
        <title>{{config('app.name','Laravel App')}}</title>
    <body>
        @include('pages.inc.navbar')
        <div class="container">
            @include('pages.inc.messages')
            @yield('content')
        </div>
    </body>
</html>