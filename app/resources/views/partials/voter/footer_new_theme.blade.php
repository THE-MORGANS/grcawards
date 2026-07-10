<!-- =============== FOOTER =============== -->
<footer class="site">
    <div class="wrap">
        <div class="top">
            <div class="brand"><img src="{{ asset('assets/images/grclogo.png') }}" alt="GRC & FinCrime Prevention Awards & Summit">
                <p>Celebrating global excellence in governance, risk, compliance and financial crime prevention — across two
                    annual editions.</p>
                <div class="eds"><span class="e"><span class="pin af"></span>Africa · Nairobi 2026</span><span class="e"><span
                            class="pin eu"></span>Europe · London · 6 Nov 2026</span></div>
            </div>
            <div>
                <h5>Editions</h5>
                <ul>
                    <li><a href="{{ route('edition.africa') }}">Africa — Nairobi</a></li>
                    <li><a href="{{ route('edition.europe') }}">Europe — London</a></li>
                    <!-- <li><a href="{{ route('summit_programme') }}">Summit Programme</a></li> -->
                    <li><a href="{{ route('show_tickets') }}">Tickets &amp; Booking</a></li>
                </ul>
            </div>
            <div>
                <h5>The Award</h5>
                <ul>
                    <li><a href="{{ route('about_the_award') }}">About the Award</a></li>
                    <li><a href="{{ route('about_the_award') }}#mission">Vision &amp; Mission</a></li>
                    <li><a href="{{ route('show_sect_cat') }}">Sectors &amp; Categories</a></li>
                    <li><a href="{{ route('judging_process') }}">Judges &amp; Process</a></li>
                </ul>
            </div>
            <div>
                <h5>Partner</h5>
                <ul>
                    <li><a href="{{ route('show_sponsors') }}">Sponsorship</a></li>
                    <li><a href="{{ route('show_sponsors') }}#packages">Packages</a></li>
                    <li><a href="{{ route('show_contact') }}">Speak at the Summit</a></li>
                    <!-- <li><a href="{{ route('show_faqs') }}">FAQs</a></li> -->
                </ul>
            </div>
        </div>
        <div class="offices">
            <div class="off">
                <div class="c">Africa — Lagos</div>
                <p>1 Adeola Adeoye Street, Ikeja, Lagos, Nigeria<br>+234 915 341 4314 · events@grcfincrimeawards.com</p>
            </div>
            <div class="off">
                <div class="c">United Kingdom — London</div>
                <p>85 Great Portland Street, First Floor, London W1W 7LT<br>+44 20 7856 0149 · events@grcfincrimeawards.com
                </p>
            </div>
            <div class="off">
                <div class="c">Republic of Ireland — Cork</div>
                <p>21 Gillabbey Terrace, Gillabbey Street, Cork, T12 KPN4<br>+353 87 712 3968 · events@grcfincrimeawards.com
                </p>
            </div>
        </div>
        <div class="base"><span>THE MORGANS · in association with the IGRCFP © {{ date('Y') }}. All rights
                reserved.</span><span>events@grcfincrimeawards.com · grcfincrimeawards.com</span></div>
    </div>
</footer>