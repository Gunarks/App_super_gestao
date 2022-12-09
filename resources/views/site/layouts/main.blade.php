<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Super Gestão - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('assets/css/basic_style.css') }}">
    </head>

    <body>
        @include('site.layouts._partials.header')
        @yield('main_page')
        @yield('about_content')
        @yield('contact')

    </body>

</html>