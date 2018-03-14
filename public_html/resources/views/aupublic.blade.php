@extends('layouts.app')
@section('css')
    <link href="{{asset('plugins/dzsparallaxer/dzsparallaxer.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/dzsparallaxer/scroller.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/dzsparallaxer/advancedscroller/plugin.css')}}" rel="stylesheet">
@endsection
@section('content')
    <div class="dzsparallaxer auto-init height-is-based-on-content mode-scroll dzsprx-readyall under-760"
         data-options="{   direction: &quot;reverse&quot;}">
        <div class="divimage dzsparallaxer--target "
             style="width: 101%; height: 130%; background-image: url({{ asset('/images/media-min.jpg') }}); transform: translate3d(0px, -34.7158px, 0px);">
        </div>

        <div class="container pt100">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto wow bounceIn" data-wow-delay=".2s"
                     style="visibility: visible; animation-delay: 0.2s; animation-name: bounceIn;">
                    <h3 class="h3 mb30 text-center pt100 pb100 font300 text-white">Public</h3>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row" style="height: 50px"></div>
            @foreach($publishers as $publisher)
                <h1>{{$publisher->publisher}}</h1>
                <p>
                    @foreach(App\Publication::all()->where('publisher',$publisher) as $publication)
                        <a href=" {{$publication->Url}}">{{$publication->Title}}</a><br>
                    @endforeach
                </p>
            @endforeach
        </div>
@endsection
