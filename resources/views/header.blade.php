<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Latest compiled and minified CSS -->

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- jQuery library -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

        <!-- Latest compiled JavaScript -->
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">