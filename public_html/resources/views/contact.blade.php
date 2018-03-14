@extends('layouts.app')
@section('css')
    <link href="{{asset('contact-form/css/smart-forms.css')}}" rel="stylesheet">
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
@endsection
@section('content')
<div id="map"></div>
    <div class="container pt90 pb50">
        <div class="row">
            <div class="col-md-6 mb40">

                <h4 class="text-capitalize h6 font600">Siège social</h4>
                <p>
                    BP116   L-7202  <br> Bereldange
                </p>
                <br>
                <h4 class="text-capitalize h6 font600">E-Mail:</h4>
                <p>
                    info @ acen.lu
                <br>
                <h4 class="text-capitalize h6 font600">Compte bancaire:</h4>
                <p>
                    <p>ACEN a.s.b.l. Luxembourg<br>
                    IBAN: LU30 0019 4355 6742 6000<br>
                    BIC: BCEELULL<br>
                    <p>
                <br>
            </div>
            <div class="col-md-6">
                <div class="smart-wrap">
                    <div class="smart-forms smart-container">


                        <form method="post" action="contact-form/php/smartprocess.php" id="smart-form" novalidate="novalidate">
                            <div class="form-body">

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                                        <span class="field-icon"><i class="fa fa-user"></i></span>
                                    </label>
                                </div><!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                                        <span class="field-icon"><i class="fa fa-envelope"></i></span>
                                    </label>
                                </div><!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subjec">
                                        <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                                    </label>
                                </div><!-- end section -->

                                <div class="section">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                        <span class="field-icon"><i class="fa fa-comments"></i></span>
                                        <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span>
                                    </label>
                                </div><!-- end section -->

                                <div class="section">
                                    <div class="smart-widget sm-left sml-120">
                                        <label class="field">
                                            <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                                        </label>
                                        <label class="button captcode">
                                            <img src="contact-form/php/captcha/captcha.php?&lt;?php echo time();?&gt;" id="captchax" alt="captcha">
                                            <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                                        </label>
                                    </div><!-- end .smart-widget section -->
                                </div><!-- end section -->

                                <div class="result"></div><!-- end .result  section -->

                            </div><!-- end .form-body section -->
                            <div class="form-footer">
                                <button type="submit" data-btntext-sending="Sending..." class="button btn btn-primary">Submit</button>
                                <button type="reset" class="button"> Reset </button>
                            </div><!-- end .form-footer section -->
                        </form>
                    </div><!-- end .smart-forms section -->
                </div><!-- end .smart-wrap section -->
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{asset('/js/google-map.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT05HIUKPDD6kvwY9Qhna0lpBciWgkufA&callback=initMap"></script>
@endsection
