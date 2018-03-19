<!-- OPEN NAV BUTTON -->
<div class="col-1 flex-r align-v justify-c menu-bg">
    <button class="hamburger hamburger--slider" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
</div>

<!-- MENU  -->
<div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn">&times;</a>
	<div class="overlay-content col-12 row" style="height: 100vh;">
        <a class="menu-button col-4 offset-2 flex-r align-v justify-c big-john invisible" style="z-index: 2; height: 33.3%;" href="/agenda">WAT IS ER TE DOEN?</a>
		<a class="menu-button col-4 big-john flex-r align-v justify-c invisible" style="z-index: 2; height: 33.3%;" href="/wat-is-de-experimenteerbuurt">EXPERIMENTEERBUURT?</a>
        <a class="menu-button col-6 big-john flex-r align-v justify-c invisible" style="z-index: 2; height: 33.3%;" href="/inspiratie">INSPIRATIE</a>
        <a class="menu-button col-6 big-john flex-r align-v justify-c invisible" style="z-index: 2; height: 33.3%;" href="/nieuws">NIEUW(S)</a>
        <a class="menu-button col-4 offset-2 big-john flex-r align-v justify-c invisible" style="z-index: 2; height: 33.3%;" href="/doener/create">DOE MEE!</a>
        <a class="menu-button col-4 big-john flex-r align-v justify-c invisible" style="z-index: 2; height: 33.3%;" href="/contact">CONTACT</a>
        <div class="logo-wrapper flex-c align-v justify-c" style="position: absolute; top: 0; left: 0; height: 100vh; width: 100vw;">
			<div class="flex-c align-v justify-c col-lg-6">
                <img class="img-fluid experimenteerbuurt-logo invisible " style="width: 25%;" src="{{ asset('/images/menu-logo.png') }}">
                <a href="/" class="menu-button home big-john invisible" style="margin-top: 25px; z-index: 10000;">Home</a>
            </div>
		</div>
	</div>
</div>
