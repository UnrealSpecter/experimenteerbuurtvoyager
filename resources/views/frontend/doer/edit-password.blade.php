@section('css')
    <!-- fullscreen form -->
    <link rel="shortcut icon" href="../favicon.ico">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/fullscreen-form/css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/fullscreen-form/css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/fullscreen-form/css/component.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/fullscreen-form/css/cs-select.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/fullscreen-form/css/cs-skin-boxes.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/frontend/doer/edit/style.css') }}" />
@endsection
@section('js')
    <script src="{{ URL::asset('plugins/fullscreen-form/js/modernizr.custom.js') }}"></script>
    <script src="{{ URL::asset('plugins/fullscreen-form/js/classie.js') }}"></script>
    <script src="{{ URL::asset('plugins/fullscreen-form/js/selectFx.js') }}"></script>
    <script src="{{ URL::asset('plugins/fullscreen-form/js/fullscreenForm.js') }}"></script>
    <script src="{{ UrL::asset('js/frontend/doer/edit/script.js') }}"></script>
@endsection
@extends('experimenteerbuurt-layout')
@section('content')
<div class="col-lg-2 hidden-sm hidden-xs col-lg-offset-0 animated fadeInRightBig" style="height: 100vh; z-index: 0;">
    <img src="{{ URL::asset('images/analoog-doer.png') }}" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100%; z-index: 10;">
</div>
<div class="col-lg-8" style="height: 100vh;">

    <div class="row" style="height: 100%;">

        <img class="fixed-background" src="/images/doer/doer-background.jpg" alt="" />

        <div class="col-lg-12 button-container">
            <div class="row" style="height: 100%;">
                <a href="/doener/{{$user->id}}/edit" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 button experimenteerbuurt" data-number="0" >
                    <span>Profiel gegevens wijzigen</span>
                </a>
                <a href="/doener/{{$user->id}}/edit-wachtwoord" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 button selected" style="">
                    <span style="width: 100%; text-align: center; text-transform: uppercase;"> Wachtwoord wijzigen </span>
                </a>
            </div>
        </div>
        <!--  content -->
        <div class="col-lg-12 content-area" style="height: 90%;">
            <div class="row" style="height: 100%;">
                <div class="container doener-form" style="position: absolute; top: 0;">
                        <div style="top: 0; position: absolute; height: 100%; width: 100%; background-color: #82368c; opacity: 0.75;">
                        <div class="fs-form-wrap" id="fs-form-wrap">
                            <form method="POST" id="myform" class="fs-form fs-form-full" autocomplete="off" action="/doener/{{$user->id}}/edit-wachtwoord" enctype="multipart/form-data">
                                <ol class="fs-fields">
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="password">Wijzig hier je wachtwoord</label>
                                        <input class="fs-anim-lower pass" id="q2" name="old_password" type="password" placeholder="Oud wachtwoord" required/>
                                        <input class="fs-anim-lower pass" id="q2" name="new_password" type="password" placeholder="Nieuw supergeheim wachtwoord" required/>
                                        <input class="fs-anim-lower pass" id="q2" name="new_password_confirmation" type="password" placeholder="En graag nog een keer" required/>
                                        <input type="hidden" name="_method" value="PUT"/>
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </li>
                                </ol><!-- /fs-fields -->
                                <button class="fs-submit" type="submit">Aanmelden</button>
                            </form><!-- /fs-form -->
                        </div><!-- /fs-form-wrap -->
                    </div><!-- /container -->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ URL::asset('/js/frontend/doer/create/youtube-api.js')}}"></script>
@endsection
