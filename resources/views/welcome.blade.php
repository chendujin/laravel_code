<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Thomas</title>

        <link href="{{ asset('css/app.css')  }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <welcome-component></welcome-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>