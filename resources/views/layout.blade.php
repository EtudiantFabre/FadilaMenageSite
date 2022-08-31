@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

        <style>
            table,
            th,
            td {
              padding: 10px;
              border: 1px solid black;
              border-collapse: collapse;
            }

            th{
                background-color: orangered;
            }

            #title{
                text-align: center;
                color: #fff;
                margin: auto;

            }


        </style>
    </head>
      <body>



        <main role="main" class="container-fluid">
            @yield('content')
        </main>


        <!--Footer-->
        <footer class="page-footer text-center font-small mt-4 wow fadeIn">


            <!--Copyright-->
            <div class="footer-copyright py-3">
            © 2022 Copyright:
            <a href="https://moodle.ifnti.com" target="_blank"> gofadila.com </a>
            </div>
            <!--/.Copyright-->

        </footer>




      </body>

</html>

