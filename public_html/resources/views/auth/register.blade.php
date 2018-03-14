@extends('layouts.app')
@section('css')
    <link href="plugins/dzsparallaxer/dzsparallaxer.css" rel="stylesheet">
    <link href="plugins/dzsparallaxer/scroller.css" rel="stylesheet">
    <link href="plugins/dzsparallaxer/advancedscroller/plugin.css" rel="stylesheet">
@endsection
@section('content')
    <div class="dzsparallaxer auto-init height-is-based-on-content "  data-options='{   direction: "reverse"}'>
        <div class="divimage dzsparallaxer--target " style="width: 101%; height: 130%; background-image: url(/images/nathan-anderson-253717.jpg)">
        </div>

        <div class="container pt100">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto wow bounceIn" data-wow-delay=".2s">
                    <h3 class="h3 mb30 text-center pt100 pb100 font300 text-white">Registreiren</h3>
                </div>
            </div>
        </div>

    </div><!--parallax-->
    <!--/.page-title-->
    <div class='container pb50 pt50-md'>
        <div class='row'>
            <div class='col-md-6 col-lg-5 mr-auto ml-auto'>
                <div class='card card-account'>
                    <div class='card-body'>
                        <form action="{{ route('register') }}" method="post">
                            {{ csrf_field() }}
                            <div class='form-group'>
                                <label for='name'>Name</label>
                                <input id='name' type='text' name='name' class='form-control' placeholder='John' value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class='form-group{{ $errors->has('email') ? ' has-error' : '' }}'>
                                <label for='username'>Email</label>
                                <input id='username' type='text' placeholder='JohnDoe007' class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class='form-group{{ $errors->has('password') ? ' has-error' : '' }}'>
                                <label for='password'>Passwuert</label>
                                <input id='password' type='password' class='form-control' placeholder='......' name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class='form-group'>
                                <label for='passwordc'>Passwuert</label>
                                <input id='passwordc' type='password' class='form-control' placeholder='......' name="password_confirmation" required>
                            </div>
                            <button type='submit' class='btn btn-block btn-secondary btn-rounded btn-xl'>Registreiren</button>
                        </form>
                        <br>
                        <p class='mb0 text-small'>Schon en Account? <a href='/login' class='btn btn-underline'>Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
