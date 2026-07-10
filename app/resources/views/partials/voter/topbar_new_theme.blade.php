<div class="nav">
    <div class="nav-in">
        <a class="nav-logo" href="{{route('landing.index')}}"><img src="{{asset('/assets/images/grclogo.png')}}" loading="lazy"
                alt="GR"></a>
        <input type="checkbox" id="nav-check"><label class="nav-toggle"
            for="nav-check"><span></span><span></span><span></span></label>
        <ul class="nav-links">
            <li><a href="{{route('landing.index')}}" class="active">Home</a></li>
            <li class="has-drop"><a href="{{route('landing.index')}}#editions">Editions</a>
                <ul class="drop">
                    <li><a href="{{route('edition.africa')}}"><span class="pin af"></span>Africa Edition — Nairobi</a></li>
                    <li><a href="{{route('edition.europe')}}"><span class="pin eu"></span>Europe Edition — London</a></li>
                </ul>
            </li>
            <li class="has-drop"><a href="{{route('about_the_award')}}">The Award</a>
                <ul class="drop">
                    <li><a href="{{route('about_the_award')}}">About the Award</a></li>
                    <li><a href="{{route('about_the_award')}}#mission">Vision &amp; Mission</a></li>
                    <li><a href="{{route('show_sect_cat')}}">Sectors &amp; Categories</a></li>
                    <li><a href="{{route('judging_process')}}">Judges &amp; Process</a></li>
                </ul>
            </li>
            <li><a href="{{route('show_summit')}}">Summit</a></li>
            <li><a href="{{route('show_sponsors')}}">Sponsors</a></li>
            <li><a href="{{route('show_vote')}}">Vote</a></li>
            <li><a href="{{route('show_tickets')}}">Tickets</a></li>
            <li><a href="{{route('show_contact')}}">Contact</a></li>
        </ul>
        <div class="nav-cta"><a class="btn btn-crimson btn-sm" href="{{route('show_vote')}}">Vote Now →</a></div>
    </div>
</div>