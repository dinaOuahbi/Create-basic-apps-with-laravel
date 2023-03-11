<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>
    </head>
    <body>
        <h1>HELLO FROM DIJON </h1>

        <p>it's currently {{date("F j, Y, g:i a")}}</p>

        <footer>
            <p>
                &copy; Copyright {{date('Y')}} &middot; <a href="/about-us">About Us</a>
            </p>
        </footer>

        
    </body>
</html>
