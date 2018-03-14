<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="D'ACEN setzt sech zanter Juni 2014 fir d’Rechter an d’Interessie vun de Chargées de cours, d’éducation, d’enseignement an de remplacement an">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/ACEN_logo_website.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#317EFB"/>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset("css/plugins/plugins.css")}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    @yield('css')
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        $('document').ready(function () {
            let location = window.location.pathname;
            $("a.nav-link[href$='"+location+"']").addClass('active');
            @if(Auth::check())
            $('.navbar li:eq(0)').after('<li class="nav-item"><a href="/category/demandes" target="_self" style="" class="nav-link">Demanden</a></li>');
            @endif
        })
    </script>
    <style>
        .logo{
            margin-left: 100%;
        }
    </style>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-faded">
        <a class="navbar-brand" href="/"><span class="logo">ACEN</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
                {{ menu("main","bootstrap") }}
        </div>
    </nav>
    @yield('content')
</div>
<footer class="footer " style="margin-top: 50px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <img src="{{asset('/images/ACEN_logo_website_xsmall.png')}}" class="">
            </div>
            <div class="col-md-6 col-lg-3">
                <h4>ACEN</h4>
                <p>
                    Siège Social<br>
                    BP116 L-7202<br>
                    Bereldange<br>
                </p>
            </div><!--/.column-->
            <div class="col-md-6 col-lg-3">
                <h4>Quick Links</h4>
                <ul class="list-unstyled">
                    <li><a href="/" class="btn btn-underline">Home</a></li>
                    <li><a href="/informations" class="btn btn-underline">Informatiounen</a></li>
                    <li><a href="/au-public" class="btn btn-underline">Public</a></li>
                    <li><a href="/pages/liens" class="btn btn-underline">Links</a></li>
                    <li><a href="/login" class="btn btn-underline">Umellen</a></li>
                </ul>

            </div><!--/.column-->
            <div class="col-md-6 col-lg-3">
            </div><!--/.column-->
            <div class="col-md-6 col-lg-3">
                <div class="mb30">

                </div>
            </div><!--/.column-->
        </div><!--/.row-->
    </div><!--/.container-->
</footer><!--/.footer-->
</body>
@yield('js')
<script src="{{asset('js/bundle/bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('js/versa.custom.js')}}"></script>
<!-- Master Slider -->
<script src="{{asset('plugins/masterslider/masterslider.min.js')}}"></script>
<!--dz parallaxer-->
<script type="text/javascript" src="{{asset('plugins/dzsparallaxer/dzsparallaxer.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/dzsparallaxer/scroller.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/dzsparallaxer/advancedscroller/plugin.js')}}"></script>
<script src="{{asset('js/master-slider-home.js')}}"></script>
<!-- load cubeportfolio -->
<script type="text/javascript" src="{{asset('plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- init cubeportfolio -->
<script type="text/javascript" src="{{asset('js/cube-portfolio-home.js')}}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</html>
