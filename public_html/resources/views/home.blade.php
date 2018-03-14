@extends('layouts.app')
@section('css')
    <link href="plugins/dzsparallaxer/dzsparallaxer.css" rel="stylesheet">
    <link href="plugins/dzsparallaxer/scroller.css" rel="stylesheet">
    <link href="plugins/dzsparallaxer/advancedscroller/plugin.css" rel="stylesheet">
@endsection
@section('content')
    <section
            class="dzsparallaxer auto-init use-loading mode-scroll loaded dzsprx-readyall"
            style="position: relative; height: 372px;" data-options="{  mode_scroll: &quot;normal&quot; }">
        <div class="divimage dzsparallaxer--target " data-src="{{asset('/images/Home-Slider-2.jpg')}}"
             style="width: 100%; height: 100%; background-image: url({{asset('/images/Home-Slider-2.jpg')}}); transform: translate3d(0px, -72.5963px, 0px);">
            <div class="content-table">
                <div class="content-middle pt80 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 ml-auto mr-auto text-center">
                                <h2 class="font300 text-white h1">Wie si mir?</h2>
                                <p class="lead text-white text-muted" style="text-transform:none;">
                                D'ACEN setzt sech zanter Juni 2014 fir d’Rechter an d’Interessie vun de Chargées de cours,
                                d’éducation, d’enseignement an de remplacement an. Sidd dir Chargée ?
                                

                                </p>
                                <div class="circle-button">
                                    <a href="/register" class="btn btn-light btn-xl btn-rounded">
                                    Da gitt Member !
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--hero inner-->

            </div><!--parallax hero-->
        </div><!--parallax image div-->
        <div class="mouse-down"><a data-scroll="" href="#about"><i class="fa fa-angle-down fa-3x text-white"></i></a>
        </div>
    </section>
    <div class="container">
        <div class="row" style="">
            <h1 style="    padding-top: 4%;
    padding-left: 2%;
    padding-bottom: 1%;">Neiegkeeten</h1>
        </div>
        @foreach($posts as $post)
            <div class="card mb30 card-post">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5 align-self-center">
                        <a href="blog-single.html"><img class="img-fluid"
                                                        src="{{ Voyager::image( $post->image ) }}"></a>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="card-body">
                            <h4 class="card-title font400">{{ $post->title }}</h4>
                            <p class="card-text">{{$post->excerpt}}</p>
                            <a class="font600 btn btn-underline" href="/post/{{$post->slug}}">Weider liesen <i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="card-bottom">
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
