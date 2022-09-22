<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/css/app.css')

        <title>Task Master</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="mainWrapper">
            <h1 class="text-3xl text-center">Task Master</h1>

            <div id="topic-nav">
                <div class="topic-card">
                    <a href="/braille"><h3>Braille</h3></a>
                </div>

                <div class="topic-card">
                    <a href="/morse"><h3>Morse Code</h3></a>
                </div>
            </div>
        </div>
    </body>
</html>
