<!DOCTYPE html>
<html lang="en">
@section('title', 'Code of Conduct')

<head>
  @include('partials.voter.head')

  <link rel="stylesheet" href="{{ asset('assets/css/new_theme_design.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/legal_new_theme.css') }}">
</head>

<body>

  @include('partials.voter.preloader')
  @include('partials.voter.topbar_new_theme')

  <header class="page-hero">
    <div class="wrap">
      <div class="crumb"><a href="{{ route('landing.index') }}">Home</a> · Code of Conduct</div>
      <h1>Code of Professional <span class="ac">Conduct.</span></h1>
      <p>The principles and guidelines governing all stakeholders involved in the GRC &amp; Financial Crime
        Prevention Awards process — nominees, judges, advisory board members, sponsors and event organizers.</p>
    </div>
  </header>

  <section class="band white">
    <div class="wrap">
      <div class="legal-content">

        <h3>1. Introduction</h3>
        <p>The GRC &amp; Financial Crime Prevention Awards is committed to maintaining the highest ethical
          standards, integrity, and professionalism in the recognition of individuals and organizations that
          demonstrate excellence in Governance, Risk Management, Compliance (GRC), and Financial Crime Prevention.
          This Code of Professional Conduct sets forth the principles and guidelines governing all stakeholders
          involved in the Awards process, including nominees, judges, advisory board members, sponsors, and event
          organizers.</p>

        <h3>2. Scope &amp; Applicability</h3>
        <p>This Code applies to all participants in the GRC &amp; Financial Crime Prevention Awards, including but
          not limited to:</p>
        <ul>
          <li>Nominees &amp; Award Recipients</li>
          <li>Panel of Judges</li>
          <li>Advisory Board Members</li>
          <li>Organizing Committee</li>
          <li>Sponsors &amp; Partners</li>
          <li>Volunteers &amp; Support Staff</li>
        </ul>
        <p>All individuals and organizations associated with the Awards must uphold these principles throughout
          their participation.</p>

        <h3>3. Core Principles</h3>

        <h4>3.1 Integrity &amp; Fairness</h4>
        <ul>
          <li>All award decisions must be made fairly, transparently, and based solely on merit.</li>
          <li>Any form of bias, favouritism, or conflicts of interest must be avoided.</li>
          <li>No nominee or organization shall engage in fraudulent practices, false representation, or
            misstatements in their submissions.</li>
        </ul>

        <h4>3.2 Confidentiality &amp; Data Protection</h4>
        <ul>
          <li>Judges and committee members must maintain strict confidentiality regarding nominee information and
            deliberations.</li>
          <li>Personal and organizational data must be handled in compliance with applicable data protection
            regulations (e.g., GDPR).</li>
        </ul>

        <h4>3.3 Impartiality &amp; Conflict of Interest</h4>
        <ul>
          <li>Judges and advisory board members must disclose any actual, potential, or perceived conflicts of
            interest.</li>
          <li>Individuals must recuse themselves from evaluating any category where they have a direct or indirect
            relationship with a nominee.</li>
          <li>Any undue influence or attempts to manipulate the judging process will result in disqualification.
          </li>
        </ul>

        <h4>3.4 Ethical Conduct &amp; Professionalism</h4>
        <ul>
          <li>All participants must conduct themselves professionally and ethically.</li>
          <li>Harassment, discrimination, or any form of misconduct will not be tolerated.</li>
          <li>Award recipients must continue to uphold the highest ethical standards in their professional fields.
          </li>
        </ul>

        <h4>3.5 Transparency &amp; Accountability</h4>
        <ul>
          <li>The awards process shall be clearly documented and open to review.</li>
          <li>Any concerns or breaches of this Code should be reported to the Ethics &amp; Compliance
            Sub-Committee.</li>
        </ul>

        <h3>4. Compliance with Laws &amp; Regulations</h3>
        <p>All stakeholders must comply with all applicable laws, industry regulations, and corporate governance
          policies, including:</p>
        <ul>
          <li>Anti-Bribery &amp; Anti-Corruption Laws (e.g., UK Bribery Act, FCPA)</li>
          <li>Financial Crime &amp; AML Regulations</li>
          <li>Corporate Governance Best Practices</li>
          <li>Human Rights &amp; Workplace Ethics Policies</li>
        </ul>

        <h3>5. Conflict of Interest Declaration</h3>
        <ul>
          <li>Judges, board members, and organizers must sign a Conflict of Interest Declaration before
            participating.</li>
          <li>Any undisclosed conflicts discovered post-awards may result in revocation of awards or removal from
            the panel.</li>
        </ul>

        <h3>6. Breach &amp; Enforcement</h3>
        <p>Violations of this Code may result in the following actions:</p>
        <ul>
          <li>Formal Warning</li>
          <li>Disqualification of Nomination or Award</li>
          <li>Removal from the Judging Panel or Advisory Board</li>
          <li>Public Revocation of an Award (if applicable)</li>
          <li>Referral to Legal or Regulatory Authorities (if necessary)</li>
        </ul>
        <p>All breaches will be reviewed by the Ethics &amp; Compliance Sub-Committee, which reserves the right to
          enforce appropriate measures.</p>

        <h3>7. Acknowledgment &amp; Acceptance</h3>
        <div class="sign-block">
          Approved by:<br>
          Advisory Board – GRC &amp; Financial Crime Prevention Awards<br>
          Date: March 2026<br>
          Review Date: March 2026
        </div>

      </div>
    </div>
  </section>

  @include('partials.voter.footer_new_theme')

  @include('partials.voter.scripts')

</body>

</html>
