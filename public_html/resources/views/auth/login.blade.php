@extends('layouts.app')
@section('css')
    <!--suppress ALL -->
    <link href="plugins/dzsparallaxer/dzsparallaxer.css" rel="stylesheet">
    <link href="plugins/dzsparallaxer/scroller.css" rel="stylesheet">
    <link href="plugins/dzsparallaxer/advancedscroller/plugin.css" rel="stylesheet">
@endsection
@section('content')
    <div class="dzsparallaxer auto-init height-is-based-on-content " data-options='{   direction: "reverse"}'>
        <div class="divimage dzsparallaxer--target "
             style="width: 101%; height: 130%; background-image: url(/images/nathan-anderson-253717.jpg)">
        </div>

        <div class="container pt100">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto wow bounceIn" data-wow-delay=".2s">
                    <h3 class="h3 mb30 text-center pt100 pb100 font300 text-white"><span style="text-transform:none;">Mellt Iech un</span></h3>
                </div>
            </div>
        </div>

    </div><!--parallax-->
    <!--/.page-title-->
    <div class='container pb50  pt50-md'>
        <div class='row'>
            <div class='col-md-6 col-lg-5 mr-auto ml-auto'>
                <div class='card card-account'>
                    <div class='card-body'>
                        <form action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                            <div class='form-group {{ $errors->has('email') ? ' has-error' : '' }}'>
                                <label for='email'>E-Mail</label>
                                <input name="email" id='email' type='text' class='form-control'
                                       placeholder='John.Doe@gmail.com' required>
                            </div>

                            <div class='form-group {{ $errors->has('password') ? ' has-error' : '' }}'>
                                <label for='password'>Passwuert</label>
                                <input name='password' id='password' type='password' class='form-control'
                                       placeholder='......'>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong style="color: red;text-align: center;">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong style="color: red;text-align: center;">{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <button type='submit' class='btn btn-block btn-secondary btn-rounded'>Unmellen</button>

                        </form>
                        <br>
                        <p class='mb0 text-small'>Nach net Member<a href='/register' class='btn btn-underline'>Sign
                                Up</a></p>
                        <p class=' text-small mb0'>Passwuert vergies? <a href='{{ route('password.request') }}'
                                                                            class='btn btn-underline'>Recover</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
