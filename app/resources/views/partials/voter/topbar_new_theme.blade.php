<div class="nav">
    <div class="nav-in">
        <a class="nav-logo" href="{{route('landing.index')}}"><img src="{{asset('/assets/images/grclogo.png')}}" loading="lazy"
                alt="GR"></a>
        <input type="checkbox" id="nav-check"><label class="nav-toggle"
            for="nav-check"><span></span><span></span><span></span></label>
        <ul class="nav-links">
            <li><a class="{{request()->is('/') ? 'active' : '' }}" href="{{route('landing.index')}}">Home</a></li>
            <li class="has-drop"><a class="{{request()->is('edition/*') ? 'active' : '' }}" href="{{route('landing.index')}}#editions">Editions</a>
                <ul class="drop">
                    <li><a class="{{request()->is('edition/africa') ? 'active' : '' }}" href="{{route('edition.africa')}}"><span class="pin af"></span>Africa Edition — Nairobi</a></li>
                    <li><a class="{{request()->is('edition/europe') ? 'active' : '' }}" href="{{route('edition.europe')}}"><span class="pin eu"></span>Europe Edition — London</a></li>
                </ul>
            </li>
            <li class="has-drop"><a class="{{request()->is('the-award/*') || request()->is('judges/*') ? 'active' : '' }}" href="{{route('about_the_award')}}">The Award</a>
                <ul class="drop">
                    <li><a class="{{request()->is('the-award/about-the-award') ? 'active' : '' }}" href="{{route('about_the_award')}}">About the Award</a></li>
                    <li><a href="{{route('about_the_award')}}#mission">Vision &amp; Mission</a></li>
                    <li><a class="{{request()->is('the-award/sectors-and-categories') ? 'active' : '' }}" href="{{route('show_sect_cat')}}">Sectors &amp; Categories</a></li>
                    <li><a class="{{request()->is('judges/judging-process') ? 'active' : '' }}" href="{{route('judging_process')}}">Judges &amp; Process</a></li>
                    <li><a class="{{request()->is('the-award/contact-us') ? 'active' : '' }}" href="{{route('show_contact')}}">Contact us</a></li>
                </ul>
            </li>
            <li><a class="{{request()->is('summit*') ? 'active' : '' }}" href="{{route('show_summit')}}">Summit</a></li>
            <li><a class="{{request()->is('sponsors') ? 'active' : '' }}" href="{{route('show_sponsors')}}">Sponsors</a></li>
            <li><a class="{{request()->is('advisory/governing-council') ? 'active' : '' }}" href="{{route('board_members')}}">Advisory Council </a></li>
            <li><a class="{{request()->is('vote*') ? 'active' : '' }}" href="{{route('show_vote')}}">Vote</a></li>
            <li><a class="{{request()->is('tickets') ? 'active' : '' }}" href="{{route('show_tickets')}}">Tickets</a></li>
            <li class="has-drop"><a class="{{request()->is('code-of-conduct') || request()->is('others/*') ? 'active' : '' }}" href="{{route('show_faqs')}}">Others</a>
                <ul class="drop">
                    <li><a class="{{request()->is('code-of-conduct') ? 'active' : '' }}" href="{{route('CodeOfConduct')}}">Code of Conduct</a></li>
                    <li><a class="{{request()->is('others/terms-and-conditions') ? 'active' : '' }}" href="{{route('show_tc')}}">Terms &amp; Conditions</a></li>
                    <li><a class="{{request()->is('others/privacy-policy') ? 'active' : '' }}" href="{{route('show_policy')}}">Privacy Policy</a></li>
                    <li><a class="{{request()->is('others/faqs') ? 'active' : '' }}" href="{{route('show_faqs')}}">FAQs</a></li>
                </ul>
            </li>
        </ul>
        <div class="nav-cta"><a class="btn btn-crimson btn-sm" href="{{route('show_vote')}}">Vote Now →</a></div>
    </div>
</div>