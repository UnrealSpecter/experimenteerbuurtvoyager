@section('css')
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
<div class="col-lg-2 col-md-2 hidden-sm hidden-xs col-lg-offset-0 animated fadeInRightBig" style="height: 100vh; z-index: 0;">
    <img src="{{ URL::asset('images/analoog-doer.png') }}" alt="erlenmeyer-background" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 10;">
</div>

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="height: 90%; position: absolute; top: 0; right: 0;">

    <div class="row" style="height: 100%;">

        <img class="fixed-background" src="/images/doer/doer-background.jpg" alt="" />

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 button-container">
            <div class="row" style="height: 100%;">
                <a href="/doener/{{$user->id}}/edit" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 button experimenteerbuurt selected" data-number="0" >
                    <span>Profiel gegevens wijzigen</span>
                </a>
                <a href="/doener/{{$user->id}}/edit-wachtwoord" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 button" style="">
                    <span style="width: 100%; text-align: center; text-transform: uppercase;"> Wachtwoord wijzigen </span>
                </a>
            </div>
        </div>

        <!--  content -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 100%; width: 100%; background-color: #82368c; opacity: 0.75;">
        <div class="content-area" style="height: 90%; top: 10%;">
            <div class="row" style="height: 100%;">
                <div class="container doener-form" style="position: absolute; top: 0;">
                        <div class="fs-form-wrap" id="fs-form-wrap" style="height: 90%;">
                            <form method="POST" id="myform" class="fs-form fs-form-full" autocomplete="off" action="/doener/{{$user->id}}" enctype="multipart/form-data">
                                <ol class="fs-fields">
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="full_name">Naam</label>
                                        <input class="fs-anim-lower" name="full_name" type="text" placeholder="Graag je voor en achternaam" @if(old('full_name')) value="{{ old('full_name') }}" @else value="{{$user->full_name}}" @endif required/>
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="email" data-info="Je gebruikt je email ook als loginnaam">Email</label>
                                        <input class="fs-anim-lower" id="q2" name="email" type="email" @if(old('email')) value="{{ old('email') }}" @else value="{{$user->email}}" @endif  placeholder="doener@doe.nl" required/>
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="email" data-info="Als je dit zichtbaar maakt kunnen anderen makkelijk contact opnemen.">Mag je email voor iedereen zichtbaar zijn? </label>
                                        <div class="fs-anim-lower radio-box" style="display: flex; align-items: center;">
                                            @if($user->email_visibility == 'yes')
                                                <input type="radio" name="email_visibility" checked="checked" value="yes">Ja
                                                <input type="radio" name="email_visibility" value="no">Nee
                                            @else
                                                <input type="radio" name="email_visibility" value="yes">Ja
                                                <input type="radio" name="email_visibility" checked="checked" value="no">Nee
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="company_name">Bedrijfsnaam</label>
                                        <input class="fs-anim-lower" id="q2" name="company_name" type="text" placeholder="Bijv DOENER BV of sla over" @if(old('company_name')) value="{{ old('company_name') }}" @else value="{{$user->company_name}}" @endif />
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="phone_number">Telefoon</label>
                                        <input class="fs-anim-lower" id="q2" name="phone_number" type="number" placeholder="1234567890" @if(old('phone_number')) value="{{ old('phone_number') }}" @else value="{{$user->phone_number}}" @endif required/>
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="phone_number" data-info="Als je dit zichtbaar maakt kunnen anderen makkelijk contact met je opnemen.">Mag je telefoonnummer voor iedereen zichtbaar zijn?</label>
                                        <div class="fs-anim-lower radio-box" style="display: flex; align-items: center;">
                                            @if($user->phone_number_visibility == 'yes')
                                                <input type="radio" name="phone_number_visibility" checked="checked" value="yes">Ja
                                                <input type="radio" name="phone_number_visibility" value="no">Nee
                                            @else
                                                <input type="radio" name="phone_number_visibility" value="yes">Ja
                                                <input type="radio" name="phone_number_visibility" checked="checked" value="no">Nee
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="short_description">Jouw experiment in enkele woorden</label>
                                        <input class="fs-anim-lower" id="q2" name="short_description" type="text" maxlength="50" @if(old('short_description')) value="{{ old('short_description') }}" @else value="{{$user->short_description}}" @endif   placeholder="Schrijf hier maximaal vijf woorden" required/>
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="description">Beschrijf wat je graag wilt gaan doen</label>
                                        <textarea class="fs-anim-lower" id="q2" name="description" type="textarea" placeholder="Schrijf hier een uitgebreidere toelichting op jouw experiment. Wat? Waarom? Hoe? Wat wil je testen? Hoeveel tijd heb je nodig? En alles wat je kwijt wilt. Deel het!" rows="4" cols="50">@if(old('description')) {{ old('description') }} @else {{$user->description}} @endif</textarea>
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="video" data-info="Je kunt ook later nog een video toevoegen.">Een beeld zegt meer dan duizend woorden, dus deel je video!</label>
                                        @if(old('video'))
                                        <input class="fs-anim-lower" name="video" type="text" value="{{ old('video') }}" placeholder="Kopieer hier je Youtube url"/>
                                        @elseif($user->video)
                                        <input class="fs-anim-lower" name="video" type="text" value="https://youtube.com/watch?v={{$user->video}}" placeholder="Kopieer hier je Youtube url"/>
                                        @else
                                        <input class="fs-anim-lower" name="video" type="text" value="" placeholder="Kopieer hier je Youtube url" value=""/>
                                        @endif
                                    </li>
                                    <li>
                                        <label class="fs-field-label fs-anim-upper" for="profile_image" data-info="Deze foto is de eerste foto die mensen zien van jou en jouw experiment, dus zoek een mooie uit. En ja dat is verplicht en ja dat mag ieder plaatje zijn wat je wilt.">Profielfoto</label>
                                        <input class="fs-anim-lower" id="q2" name="profile_image" type="file" placeholder="Een link opnemen naar bestand kiezen"/>
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

    <!-- @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    <script src="{{ URL::asset('/js/frontend/doer/create/youtube-api.js')}}"></script>
@endsection
