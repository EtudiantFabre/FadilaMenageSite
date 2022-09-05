@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('title', config('app.name'))</title>

        <style>


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



            @yield('content')
        </div>



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
@endsection

