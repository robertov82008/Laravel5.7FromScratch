<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <title>@yield('title', 'Laracasts')</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <style>
            .is-completed {
                text-decoration: line-through;
            }
        </style>
    </head>

    <body>
        <div id="app">
            <div class="columns">
                <div class="column"></div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
