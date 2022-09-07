@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
        <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="css/style.css"/>
        <title>@yield('title', config('app.name'))</title>

    </head>

      <body class="form-v10-content">
         @yield('content')

      </body>


        <!--Footer-->
        <footer class="page-footer text-center font-small mt-4 wow fadeIn">


            <!--Copyright-->
            <div class="footer-copyright py-3">
            © 2022 Copyright:
            <a href="https://moodle.ifnti.com" target="_blank"> gofadila.com </a>
            </div>
            <!--/.Copyright-->

        </footer>


</html>
@endsection

