<div class="container doener-form hidden" style="position: absolute; top: 0; padding: 0;">
    <div class="fullscreen-form-background" style="pointer-events: none;"></div>
        <div class="fs-form-wrap" id="fs-form-wrap">
            <form method="POST" id="myform" class="fs-form fs-form-full" autocomplete="off" action="{{URL::to('/doener')}}" enctype="multipart/form-data">
                <ol class="fs-fields">
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="full_name">Naam</label>
                        <input class="fs-anim-lower" name="full_name" type="text" @if(old('full_name')) value="{{ old('full_name') }}" @endif placeholder="Graag je voor en achternaam" required/>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="email" data-info="Je gebruikt je email ook als loginnaam">Email</label>
                        <input class="fs-anim-lower" id="q2" name="email"  type="email" @if(old('email')) value="{{ old('email') }}" @endif placeholder="doener@doe.nl" required/>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="email" data-info="Als je dit zichtbaar maakt kunnen anderen makkelijk contact opnemen.">Mag je email voor iedereen zichtbaar zijn? </label>
                        <div class="fs-anim-lower radio-box">
                            <input type="radio" name="email_visibility" checked="checked" value="yes"><span>Ja</span>
                            <input type="radio" name="email_visibility" value="no"><span>Nee</span>
                        </div>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="company_name">Bedrijfsnaam</label>
                        <input class="fs-anim-lower" id="q2" name="company_name" type="text" @if(old('company_name')) value="{{ old('company_name') }}" @endif placeholder="bijv DOENER BV Of sla over" />
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="phone_number">Telefoon</label>
                        <input class="fs-anim-lower" id="q2" name="phone_number" type="number" @if(old('phone_number')) value="{{ old('phone_number') }}" @endif placeholder="1234567890 (alleen cijfers gebruiken)" required/>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="phone_number" data-info="Als je dit zichtbaar maakt kunnen anderen makkelijk contact met je opnemen.">Mag je telefoonnummer voor iedereen zichtbaar zijn?</label>
                        <div class="fs-anim-lower radio-box">
                            <input type="radio" name="phone_number_visibility" checked="checked" value="yes">Ja
                            <input type="radio" name="phone_number_visibility" value="no">Nee
                        </div>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="short_description">Jouw experiment in enkele woorden</label>
                        <input class="fs-anim-lower" id="q2" name="short_description" type="text" @if(old('short_description')) value="{{ old('short_description') }}" @endif maxlength="50" placeholder="Schrijf hier maximaal vijf woorden" required/>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="description">Beschrijf wat je graag wilt gaan doen</label>
                        <textarea class="fs-anim-lower" id="q2" name="description" type="textarea" placeholder="Schrijf hier een uitgebreidere toelichting op jouw experiment. Wat? Waarom? Hoe? Wat wil je testen? Hoeveel tijd heb je nodig? En alles wat je kwijt wilt. Deel het!" rows="4" cols="50" required/>@if(old('description')){{ old('description') }}@endif</textarea>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="video" data-info="Je kunt ook later nog een video toevoegen.">Een beeld zegt meer dan duizend woorden, dus deel je video!</label>
                        <input class="fs-anim-lower" name="video" type="text" @if(old('video')) value="{{ old('video') }}" @endif placeholder="Kopieer hier je Youtube url"/>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="profile_image" data-info="Deze foto is de eerste foto die mensen zien van jou en jouw experiment, dus zoek een mooie uit. En ja dat is verplicht en ja dat mag ieder plaatje zijn wat je wilt.">Profielfoto</label>
                        <input class="fs-anim-lower photo-input" id="q2" name="profile_image" type="file" placeholder="Een link opnemen naar bestand kiezen"/>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="password" data-info="Met dit wachtwoord kan je later je profiel nog wijzigen">Wachtwoord</label>
                        <input class="fs-anim-lower pass" id="q2" name="password" type="password" placeholder="Super geheim wachtwoord (minimaal 8 tekens)" required/>
                        <input class="fs-anim-lower pass" id="q2" name="password_confirmation" type="password" placeholder="en graag nog een keer" required/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </li>
                </ol><!-- /fs-fields -->
            <button class="fs-submit" type="submit">Aanmelden</button>
        </form><!-- /fs-form -->
    </div><!-- /fs-form-wrap -->
</div><!-- /container -->
