<!DOCTYPE html>
<html lang="en">
@section('title', 'Africa Edition — GRC & Financial Crime Prevention Awards & Summit 2026 | Nairobi')

<head>
    @include('partials.voter.head')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Inter:wght@300;400;500;600&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth;font-size:16px}

:root{
  --ink:#0B0E14;
  --parchment:#F8F2E6;
  --gold:#C5881E;
  --amber:#E8A83A;
  --deep:#1A0E04;
  --warm:#3D1F00;
  --terracotta:#A8511E;
  --teal:#0A6B60;
  --off-white:#FDFBF6;
  --rule:#E0D3BC;
  --text:#2A2420;
  --mid:#6B5E52;
  --light:#A0948A;
  --white:#FFFFFF;
  --font-display:'Cormorant Garamond',serif;
  --font-body:'Inter',sans-serif;
  --font-mono:'DM Mono',monospace;
}

body{background:var(--off-white);color:var(--text);font-family:var(--font-body);line-height:1.6;overflow-x:hidden}

/* ── NAV ──────────────────────────────────────────── */
.site-nav{
  position:fixed;top:0;left:0;right:0;z-index:200;
  display:flex;align-items:center;justify-content:space-between;
  padding:14px 48px;
  background:rgba(11,14,20,0.92);
  backdrop-filter:blur(16px);
  border-bottom:1px solid rgba(197,136,30,0.2);
}
.nav-logo{font-family:var(--font-display);font-size:17px;font-weight:600;color:var(--gold);text-decoration:none;letter-spacing:0.02em}
.nav-links{display:flex;gap:28px;align-items:center}
.nav-link{font-size:12px;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.55);text-decoration:none;font-family:var(--font-mono);transition:color .2s}
.nav-link:hover{color:var(--gold)}
.nav-cta{font-size:11px;letter-spacing:0.12em;text-transform:uppercase;font-family:var(--font-mono);padding:8px 20px;background:var(--gold);color:var(--ink);text-decoration:none;border-radius:1px;font-weight:600;transition:background .2s}
.nav-cta:hover{background:var(--amber)}

/* ── HERO ─────────────────────────────────────────── */
.hero{
  min-height:100vh;background:var(--ink);
  display:flex;flex-direction:column;justify-content:center;
  padding:120px 48px 80px;position:relative;overflow:hidden;
}
.hero::before{
  content:'';position:absolute;inset:0;
  background:
    radial-gradient(ellipse 70% 60% at 75% 30%,rgba(197,136,30,0.12) 0%,transparent 60%),
    radial-gradient(ellipse 50% 50% at 15% 80%,rgba(10,107,96,0.08) 0%,transparent 60%),
    radial-gradient(ellipse 60% 40% at 50% 0%,rgba(168,81,30,0.08) 0%,transparent 65%);
}
.hero::after{
  content:'';position:absolute;top:0;right:0;bottom:0;width:42%;
  background:linear-gradient(150deg,transparent 0%,rgba(61,31,0,0.35) 100%);
  border-left:1px solid rgba(197,136,30,0.08);
}
.hero-inner{position:relative;z-index:2;max-width:1200px;margin:0 auto;width:100%}
.hero-kicker{
  font-family:var(--font-mono);font-size:11px;letter-spacing:0.22em;
  color:var(--gold);text-transform:uppercase;margin-bottom:28px;
  display:flex;align-items:center;gap:14px;
}
.hero-kicker::before{content:'';display:block;width:32px;height:1px;background:var(--gold)}
.hero-edition-flag{
  display:inline-flex;align-items:center;gap:10px;
  padding:8px 18px;border:1px solid rgba(197,136,30,0.4);
  background:rgba(197,136,30,0.08);margin-bottom:32px;
  font-family:var(--font-mono);font-size:11px;letter-spacing:0.16em;
  color:var(--amber);text-transform:uppercase;
}
.hero-title{
  font-family:var(--font-display);font-weight:300;
  font-size:clamp(48px,7.5vw,100px);line-height:0.98;
  color:var(--white);letter-spacing:-0.02em;margin-bottom:8px;
}
.hero-title strong{font-weight:700;display:block}
.hero-title em{font-style:italic;color:var(--gold)}
.hero-location{
  font-size:clamp(16px,2vw,22px);color:rgba(255,255,255,0.55);
  font-weight:300;margin-bottom:36px;
}
.hero-location strong{color:var(--white);font-weight:500}
.hero-theme-box{
  max-width:680px;padding:24px 28px;margin-bottom:48px;
  background:rgba(197,136,30,0.06);
  border-left:3px solid var(--gold);
}
.hero-theme-label{font-family:var(--font-mono);font-size:9px;letter-spacing:0.18em;color:var(--gold);text-transform:uppercase;margin-bottom:10px}
.hero-theme-text{font-family:var(--font-display);font-style:italic;font-size:clamp(17px,2.2vw,22px);line-height:1.45;color:var(--amber)}
.hero-meta-row{display:flex;gap:1px;flex-wrap:wrap;max-width:760px;background:rgba(255,255,255,0.06)}
.hero-meta-item{padding:18px 22px;background:var(--ink);border:1px solid rgba(255,255,255,0.05);flex:1;min-width:140px}
.hm-label{font-family:var(--font-mono);font-size:9px;letter-spacing:0.14em;color:rgba(255,255,255,0.3);text-transform:uppercase;margin-bottom:6px}
.hm-val{font-size:14px;color:var(--white);font-weight:500;line-height:1.35}

/* ── SECTION SHARED ───────────────────────────────── */
.section{padding:96px 48px}
.section-inner{max-width:1200px;margin:0 auto}
.section-kicker{font-family:var(--font-mono);font-size:10px;letter-spacing:0.2em;text-transform:uppercase;margin-bottom:16px;color:var(--gold)}
.section-title{font-family:var(--font-display);font-size:clamp(34px,4vw,54px);font-weight:300;line-height:1.1;margin-bottom:20px;color:var(--ink)}
.section-title em{font-style:italic;color:var(--gold)}
.section-title strong{font-weight:700}
.section-body{font-size:16px;line-height:1.75;color:var(--mid);max-width:680px}
.rule{width:48px;height:2px;background:var(--gold);margin:20px 0 32px}

/* ── ABOUT / THEME ────────────────────────────────── */
.about-section{background:var(--off-white)}
.two-col{display:grid;grid-template-columns:1.1fr 1fr;gap:64px;align-items:start;margin-top:48px}
.theme-card{
  background:var(--deep);padding:44px;position:relative;overflow:hidden;
}
.theme-card::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse 80% 60% at 80% 20%,rgba(197,136,30,0.1) 0%,transparent 65%);
}
.theme-card-label{font-family:var(--font-mono);font-size:10px;letter-spacing:0.2em;color:var(--gold);text-transform:uppercase;margin-bottom:20px;position:relative;z-index:2}
.theme-card-title{font-family:var(--font-display);font-style:italic;font-size:clamp(22px,2.6vw,30px);line-height:1.4;color:var(--amber);margin-bottom:28px;position:relative;z-index:2}
.theme-card-body{font-size:14px;color:rgba(255,255,255,0.55);line-height:1.75;position:relative;z-index:2}
.context-list{display:flex;flex-direction:column;gap:16px;margin-top:28px}
.context-item{display:flex;gap:16px;align-items:flex-start;padding:18px 20px;background:var(--parchment);border-left:3px solid var(--gold)}
.ci-icon{font-size:20px;flex-shrink:0;margin-top:2px}
.ci-text{font-size:13.5px;color:var(--text);line-height:1.6}
.ci-text strong{color:var(--warm)}

/* ── KEY FACTS STRIP ──────────────────────────────── */
.facts-strip{background:var(--ink);padding:60px 48px}
.facts-inner{max-width:1200px;margin:0 auto;display:grid;grid-template-columns:repeat(5,1fr);gap:2px}
.fact{padding:28px 22px;background:rgba(255,255,255,0.03);text-align:center;border:1px solid rgba(255,255,255,0.05)}
.fact-val{font-family:var(--font-display);font-size:38px;font-weight:700;color:var(--gold);line-height:1;margin-bottom:8px}
.fact-lbl{font-family:var(--font-mono);font-size:9px;letter-spacing:0.12em;color:rgba(255,255,255,0.4);text-transform:uppercase;line-height:1.5}

/* ── SUMMIT PROGRAMME ─────────────────────────────── */
.programme-section{background:var(--parchment)}
.prog-layout{display:grid;grid-template-columns:1fr 1.3fr;gap:48px;margin-top:48px;align-items:start}
.prog-day{background:var(--white);border:1px solid var(--rule)}
.prog-day-header{background:var(--ink);padding:20px 28px;display:flex;justify-content:space-between;align-items:center}
.pdh-title{font-family:var(--font-display);font-size:20px;font-weight:600;color:var(--white)}
.pdh-time{font-family:var(--font-mono);font-size:11px;color:var(--gold);letter-spacing:0.08em}
.prog-row{display:flex;gap:20px;padding:18px 28px;border-bottom:1px solid var(--rule);align-items:flex-start}
.prog-row:last-child{border-bottom:none}
.prog-row.highlight{background:rgba(197,136,30,0.05)}
.pr-time{font-family:var(--font-mono);font-size:12px;color:var(--gold);flex-shrink:0;width:60px;padding-top:2px}
.pr-text{font-size:14px;color:var(--text);line-height:1.5}
.pr-text strong{font-weight:600}

.sessions-list{display:flex;flex-direction:column;gap:2px}
.session-item{display:flex;gap:20px;padding:20px 24px;background:var(--white);border:1px solid var(--rule);align-items:flex-start;transition:border-color .2s}
.session-item:hover{border-color:var(--gold)}
.session-num{font-family:var(--font-display);font-size:28px;font-weight:700;color:var(--gold);line-height:1;flex-shrink:0;width:42px;opacity:0.5}
.session-content{flex:1}
.session-title{font-size:15px;font-weight:600;color:var(--ink);line-height:1.4;margin-bottom:4px}
.session-tag{display:inline-block;font-family:var(--font-mono);font-size:8.5px;letter-spacing:0.1em;text-transform:uppercase;color:var(--teal);background:rgba(10,107,96,0.08);padding:3px 8px;margin-top:6px}

/* ── AWARD CATEGORIES ─────────────────────────────── */
.awards-section{background:var(--ink);padding:96px 48px}
.awards-inner{max-width:1200px;margin:0 auto}
.awards-title{font-family:var(--font-display);font-size:clamp(34px,4vw,52px);font-weight:300;color:var(--white);line-height:1.1}
.awards-title em{font-style:italic;color:var(--gold)}
.category-pillars{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:48px}
.pillar-card{padding:30px 26px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);transition:background .3s}
.pillar-card:hover{background:rgba(255,255,255,0.07)}
.pc-num{font-family:var(--font-display);font-size:40px;font-weight:700;color:rgba(197,136,30,0.22);line-height:1;margin-bottom:14px}
.pc-name{font-family:var(--font-display);font-size:18px;font-weight:600;color:var(--white);margin-bottom:12px;line-height:1.3}
.pc-cats{display:flex;flex-direction:column;gap:6px}
.pc-cat{font-size:12px;color:rgba(255,255,255,0.45);padding:6px 10px;background:rgba(255,255,255,0.03);display:flex;align-items:center;gap:8px;line-height:1.4}
.pc-cat::before{content:'';display:block;width:4px;height:4px;border-radius:50%;background:var(--gold);flex-shrink:0}

.judging-box{margin-top:40px;padding:32px 36px;background:rgba(255,255,255,0.04);border:1px solid rgba(197,136,30,0.15);display:flex;gap:32px;align-items:start;flex-wrap:wrap}
.jb-col{flex:1;min-width:260px}
.jb-label{font-family:var(--font-mono);font-size:10px;letter-spacing:0.16em;color:var(--gold);text-transform:uppercase;margin-bottom:10px}
.jb-text{font-size:13px;color:rgba(255,255,255,0.5);line-height:1.65}
.jb-cta{flex-shrink:0;align-self:center}

/* ── VOTING PHASE BANNER ──────────────────────────── */
.voting-banner{
  background:linear-gradient(135deg,#0A1F00 0%,#142800 50%,#0D2200 100%);
  border:2px solid rgba(80,200,80,0.35);
  padding:40px 44px;margin-top:0;position:relative;overflow:hidden;
}
.voting-banner::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse 60% 60% at 80% 50%,rgba(80,200,80,0.06) 0%,transparent 65%);
}
.vb-inner{position:relative;z-index:2;display:flex;align-items:center;gap:32px;flex-wrap:wrap}
.vb-pulse{
  width:56px;height:56px;border-radius:50%;
  background:rgba(80,200,80,0.15);border:2px solid rgba(80,200,80,0.5);
  display:flex;align-items:center;justify-content:center;
  font-size:24px;flex-shrink:0;
  animation:pulse 2s infinite;
}
@keyframes pulse{
  0%,100%{box-shadow:0 0 0 0 rgba(80,200,80,0.3)}
  50%{box-shadow:0 0 0 12px rgba(80,200,80,0)}
}
.vb-text{flex:1;min-width:280px}
.vb-live{
  font-family:var(--font-mono);font-size:10px;letter-spacing:0.2em;
  text-transform:uppercase;color:#80D860;margin-bottom:8px;
  display:flex;align-items:center;gap:8px;
}
.vb-dot{width:6px;height:6px;border-radius:50%;background:#80D860;display:inline-block;animation:blink 1.2s infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:0.2}}
.vb-title{font-family:var(--font-display);font-size:24px;font-weight:700;color:#FFFFFF;margin-bottom:6px}
.vb-subtitle{font-size:13px;color:rgba(255,255,255,0.55);line-height:1.6}
.vb-deadline{
  text-align:center;flex-shrink:0;padding:0 24px;
  border-left:1px solid rgba(80,200,80,0.2);border-right:1px solid rgba(80,200,80,0.2);
}
.vb-deadline-val{font-family:var(--font-display);font-size:28px;font-weight:700;color:#80D860;line-height:1;margin-bottom:4px}
.vb-deadline-lbl{font-family:var(--font-mono);font-size:9px;letter-spacing:0.12em;text-transform:uppercase;color:rgba(255,255,255,0.35)}
.vb-cta-btn{
  display:inline-block;padding:14px 32px;
  background:#4CAF50;color:#FFFFFF;font-family:var(--font-mono);
  font-size:11px;letter-spacing:0.12em;text-transform:uppercase;
  text-decoration:none;font-weight:700;flex-shrink:0;
  transition:background .2s;
}
.vb-cta-btn:hover{background:#66BB6A}

/* ── PROCESS TIMELINE ─────────────────────────────── */
.process-section{background:var(--ink)}
.process-strip{
  display:grid;grid-template-columns:repeat(4,1fr);
  gap:2px;margin-top:48px;
  position:relative;
}
.process-step{
  padding:32px 26px 28px;
  position:relative;
  display:flex;flex-direction:column;
}
.process-step.done{background:rgba(255,255,255,0.03)}
.process-step.active{background:rgba(80,200,80,0.08);border:1px solid rgba(80,200,80,0.2)}
.process-step.upcoming{background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.05)}
.ps-status{
  font-family:var(--font-mono);font-size:8.5px;letter-spacing:0.16em;
  text-transform:uppercase;margin-bottom:12px;display:flex;align-items:center;gap:7px;
}
.ps-status.done{color:rgba(255,255,255,0.3)}
.ps-status.active{color:#80D860}
.ps-status.upcoming{color:rgba(255,255,255,0.2)}
.ps-status-dot{width:6px;height:6px;border-radius:50%;flex-shrink:0}
.ps-status.done .ps-status-dot{background:rgba(255,255,255,0.2)}
.ps-status.active .ps-status-dot{background:#80D860;animation:blink 1.2s infinite}
.ps-status.upcoming .ps-status-dot{background:rgba(255,255,255,0.15)}
.ps-num{
  font-family:var(--font-display);font-size:48px;font-weight:700;
  line-height:1;margin-bottom:12px;
}
.process-step.done .ps-num{color:rgba(255,255,255,0.12)}
.process-step.active .ps-num{color:#80D860}
.process-step.upcoming .ps-num{color:rgba(255,255,255,0.07)}
.ps-title{font-size:15px;font-weight:600;margin-bottom:8px;line-height:1.3}
.process-step.done .ps-title{color:rgba(255,255,255,0.4)}
.process-step.active .ps-title{color:#FFFFFF}
.process-step.upcoming .ps-title{color:rgba(255,255,255,0.3)}
.ps-dates{
  font-family:var(--font-mono);font-size:10px;letter-spacing:0.06em;
  margin-bottom:12px;
}
.process-step.done .ps-dates{color:rgba(255,255,255,0.2);text-decoration:line-through;text-decoration-color:rgba(255,255,255,0.1)}
.process-step.active .ps-dates{color:#80D860}
.process-step.upcoming .ps-dates{color:rgba(255,255,255,0.2)}
.ps-body{font-size:12px;line-height:1.6;flex:1}
.process-step.done .ps-body{color:rgba(255,255,255,0.2)}
.process-step.active .ps-body{color:rgba(255,255,255,0.65)}
.process-step.upcoming .ps-body{color:rgba(255,255,255,0.2)}
.ps-check{
  display:inline-flex;align-items:center;gap:6px;
  margin-top:14px;font-family:var(--font-mono);font-size:9px;
  letter-spacing:0.1em;text-transform:uppercase;
  padding:5px 10px;
}
.process-step.done .ps-check{background:rgba(255,255,255,0.04);color:rgba(255,255,255,0.2)}
.process-step.active .ps-check{background:rgba(80,200,80,0.12);color:#80D860}
.process-step.upcoming .ps-check{background:rgba(255,255,255,0.03);color:rgba(255,255,255,0.15)}

/* voting countdown strip */
.countdown-strip{
  display:grid;grid-template-columns:repeat(3,1fr);
  gap:2px;margin-top:28px;
}
.cd-box{
  padding:20px 24px;background:rgba(80,200,80,0.06);
  border:1px solid rgba(80,200,80,0.12);text-align:center;
}
.cd-val{font-family:var(--font-display);font-size:32px;font-weight:700;color:#80D860;line-height:1;margin-bottom:4px}
.cd-lbl{font-family:var(--font-mono);font-size:9px;letter-spacing:0.12em;text-transform:uppercase;color:rgba(255,255,255,0.3)}


.btn-gold{display:inline-block;padding:14px 32px;background:var(--gold);color:var(--ink);font-family:var(--font-mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;font-weight:600;transition:background .2s}
.btn-gold:hover{background:var(--amber)}

/* ── SPOTLIGHT ────────────────────────────────────── */
.highlights-section{background:var(--parchment)}
.highlight-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:48px}
.highlight-card{padding:32px 26px;background:var(--white);border:1px solid var(--rule);position:relative}
.hc-top{width:44px;height:3px;margin-bottom:18px}
.hc-top.gold{background:var(--gold)}
.hc-top.teal{background:var(--teal)}
.hc-top.terracotta{background:var(--terracotta)}
.hc-category{font-family:var(--font-mono);font-size:9px;letter-spacing:0.16em;text-transform:uppercase;color:var(--light);margin-bottom:10px}
.hc-title{font-family:var(--font-display);font-size:19px;font-weight:600;color:var(--ink);margin-bottom:10px;line-height:1.25}
.hc-body{font-size:13px;color:var(--mid);line-height:1.65}

/* ── NOMINEES ─────────────────────────────────────── */
.nominees-section{background:var(--white)}
.nominee-clusters{display:grid;grid-template-columns:repeat(2,1fr);gap:32px;margin-top:48px}
.cluster{}
.cluster-title{font-family:var(--font-mono);font-size:10px;letter-spacing:0.16em;text-transform:uppercase;color:var(--terracotta);margin-bottom:14px;padding-bottom:10px;border-bottom:2px solid var(--rule)}
.cluster-tags{display:flex;flex-wrap:wrap;gap:8px}
.cluster-tag{padding:8px 16px;background:var(--parchment);border:1px solid var(--rule);font-size:12.5px;color:var(--text)}

/* ── VENUE ────────────────────────────────────────── */
.venue-section{background:var(--ink);position:relative;overflow:hidden}
.venue-section::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse 70% 50% at 80% 50%,rgba(197,136,30,0.08) 0%,transparent 65%);
}
.venue-split{display:grid;grid-template-columns:1.1fr 1fr;gap:64px;margin-top:48px;position:relative;z-index:2;align-items:start}
.venue-title{font-family:var(--font-display);font-size:clamp(30px,3.5vw,46px);font-weight:600;color:var(--white);margin-bottom:8px;line-height:1.1}
.venue-location{font-size:15px;color:var(--gold);font-family:var(--font-mono);letter-spacing:0.08em;margin-bottom:24px}
.venue-body{font-size:14px;color:rgba(255,255,255,0.5);line-height:1.75;margin-bottom:24px}
.venue-feature-list{display:flex;flex-direction:column;gap:10px}
.vf-item{display:flex;gap:12px;align-items:flex-start;font-size:13px;color:rgba(255,255,255,0.6);line-height:1.5}
.vf-dot{width:6px;height:6px;border-radius:50%;background:var(--gold);flex-shrink:0;margin-top:6px}

.venue-card{background:rgba(255,255,255,0.04);border:1px solid rgba(197,136,30,0.15)}
.vc-header{background:var(--gold);padding:16px 24px;font-family:var(--font-mono);font-size:10px;letter-spacing:0.16em;text-transform:uppercase;color:var(--ink);font-weight:600}
.vc-item{display:flex;justify-content:space-between;align-items:center;padding:16px 24px;border-bottom:1px solid rgba(255,255,255,0.06)}
.vc-item:last-child{border-bottom:none}
.vc-label{font-family:var(--font-mono);font-size:10px;letter-spacing:0.1em;color:rgba(255,255,255,0.35);text-transform:uppercase}
.vc-val{font-size:13.5px;color:rgba(255,255,255,0.85);font-weight:500;text-align:right}

/* ── GETTING THERE / NEARBY ───────────────────────── */
.location-section{background:var(--off-white)}
.transport-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:48px}
.transport-card{background:var(--white);border:1px solid var(--rule);padding:28px 24px}
.tc-icon{font-size:26px;margin-bottom:14px}
.tc-title{font-size:14px;font-weight:600;color:var(--ink);margin-bottom:8px}
.tc-body{font-size:12.5px;color:var(--mid);line-height:1.6}
.tc-time{
  display:inline-block;margin-top:10px;font-family:var(--font-mono);
  font-size:10px;letter-spacing:0.08em;color:var(--gold);
  padding:4px 10px;background:rgba(197,136,30,0.08);
}

.map-banner{
  margin-top:32px;padding:0;background:var(--deep);
  display:grid;grid-template-columns:1fr 1fr;overflow:hidden;
}
.map-text{padding:40px}
.map-label{font-family:var(--font-mono);font-size:10px;letter-spacing:0.18em;color:var(--gold);text-transform:uppercase;margin-bottom:14px}
.map-title{font-family:var(--font-display);font-size:24px;font-weight:600;color:var(--white);margin-bottom:12px}
.map-address{font-size:14px;color:var(--amber);font-family:var(--font-mono);letter-spacing:0.04em;margin-bottom:16px}
.map-body{font-size:13px;color:rgba(255,255,255,0.5);line-height:1.65;margin-bottom:20px}
.map-visual{
  background:
    repeating-linear-gradient(0deg,rgba(197,136,30,0.06) 0,rgba(197,136,30,0.06) 1px,transparent 1px,transparent 40px),
    repeating-linear-gradient(90deg,rgba(197,136,30,0.06) 0,rgba(197,136,30,0.06) 1px,transparent 1px,transparent 40px),
    linear-gradient(145deg,#241400,#1A0E04);
  display:flex;align-items:center;justify-content:center;position:relative;min-height:280px;
}
.map-pin{display:flex;flex-direction:column;align-items:center;gap:8px}
.map-pin-dot{
  width:24px;height:24px;border-radius:50%;background:var(--gold);
  display:flex;align-items:center;justify-content:center;font-size:12px;
  box-shadow:0 0 0 8px rgba(197,136,30,0.15),0 0 0 16px rgba(197,136,30,0.06);
}
.map-pin-label{font-family:var(--font-mono);font-size:10px;letter-spacing:0.1em;color:var(--gold);text-transform:uppercase;background:rgba(0,0,0,0.4);padding:4px 10px}

/* Amenities */
.amenity-tabs-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:24px;margin-top:48px}
.amenity-group{}
.ag-title{
  font-family:var(--font-mono);font-size:10px;letter-spacing:0.16em;
  text-transform:uppercase;color:var(--terracotta);margin-bottom:16px;
  padding-bottom:10px;border-bottom:2px solid var(--rule);
}
.amenity-item{display:flex;flex-direction:column;gap:2px;padding:12px 0;border-bottom:1px solid var(--rule)}
.amenity-item:last-child{border-bottom:none}
.am-name{font-size:13px;font-weight:600;color:var(--ink)}
.am-dist{font-family:var(--font-mono);font-size:10.5px;color:var(--light)}


.speakers-section{background:var(--ink);position:relative;overflow:hidden}
.speakers-section::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse 70% 50% at 20% 30%,rgba(197,136,30,0.08) 0%,transparent 65%);
}
.speakers-inner{position:relative;z-index:2}

/* Keynotes — 3 featured cards */
.keynotes-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2px;margin-top:48px}
.keynote-card{
  background:rgba(255,255,255,0.04);
  border:1px solid rgba(197,136,30,0.2);
  padding:36px 30px;
  display:flex;flex-direction:column;
  position:relative;overflow:hidden;
  transition:background .3s;
}
.keynote-card:hover{background:rgba(255,255,255,0.07)}
.keynote-card::before{
  content:'';position:absolute;top:0;left:0;right:0;height:3px;
  background:linear-gradient(90deg,var(--gold),var(--amber));
}
.keynote-card.second::before{background:linear-gradient(90deg,var(--teal),var(--gold))}
.keynote-card.third::before{background:linear-gradient(90deg,var(--terracotta),var(--amber))}
.kc-slot{
  font-family:var(--font-mono);font-size:9px;letter-spacing:0.18em;
  text-transform:uppercase;color:var(--gold);margin-bottom:18px;
  display:flex;align-items:center;gap:8px;
}
.kc-slot.second{color:var(--teal)}
.kc-slot.third{color:var(--amber)}
.kc-slot::before{content:'';display:block;width:20px;height:1px;background:currentColor}
.kc-avatar{
  width:80px;height:80px;border-radius:50%;margin-bottom:20px;
  background:linear-gradient(145deg,rgba(197,136,30,0.3),rgba(168,81,30,0.2));
  border:1px solid rgba(197,136,30,0.3);
  display:flex;align-items:center;justify-content:center;
  font-family:var(--font-display);font-size:22px;font-weight:700;color:var(--gold);
  flex-shrink:0;
}
.kc-avatar.second{background:linear-gradient(145deg,rgba(10,107,96,0.3),rgba(197,136,30,0.15));border-color:rgba(10,107,96,0.4);color:var(--teal)}
.kc-avatar.third{background:linear-gradient(145deg,rgba(168,81,30,0.3),rgba(232,168,58,0.15));border-color:rgba(168,81,30,0.4);color:var(--amber)}
.kc-name{font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--white);margin-bottom:5px;line-height:1.2}
.kc-role{font-size:12.5px;color:rgba(255,255,255,0.5);line-height:1.45;margin-bottom:16px}
.kc-bio{font-size:12.5px;color:rgba(255,255,255,0.45);line-height:1.65;flex:1;margin-bottom:16px}
.kc-topic{
  padding:10px 14px;border-left:2px solid var(--gold);
  font-size:12px;color:rgba(255,255,255,0.65);line-height:1.5;
  background:rgba(197,136,30,0.06);margin-top:auto;
}
.kc-topic.second{border-left-color:var(--teal);background:rgba(10,107,96,0.06)}
.kc-topic.third{border-left-color:var(--terracotta);background:rgba(168,81,30,0.06)}
.kc-topic-label{font-family:var(--font-mono);font-size:8.5px;letter-spacing:0.12em;text-transform:uppercase;color:var(--gold);margin-bottom:5px}
.kc-topic.second .kc-topic-label{color:var(--teal)}
.kc-topic.third .kc-topic-label{color:var(--amber)}

/* Panellists — 8 cards in 4x2 grid */
.panel-section-title{
  font-family:var(--font-mono);font-size:10px;letter-spacing:0.18em;
  color:var(--gold);text-transform:uppercase;
  margin-top:64px;margin-bottom:24px;padding-bottom:14px;
  border-bottom:1px solid rgba(197,136,30,0.2);
  display:flex;align-items:center;justify-content:space-between;
}
.panel-section-count{
  font-family:var(--font-display);font-size:36px;font-weight:700;
  color:rgba(197,136,30,0.18);line-height:1;
}
.panellist-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px}
.panellist-card{
  background:rgba(255,255,255,0.03);
  border:1px solid rgba(255,255,255,0.06);
  padding:24px 20px;
  transition:background .3s;
}
.panellist-card:hover{background:rgba(255,255,255,0.07)}
.pc-sector-tag{
  display:inline-block;font-family:var(--font-mono);font-size:8px;
  letter-spacing:0.1em;text-transform:uppercase;
  padding:3px 8px;border-radius:1px;margin-bottom:14px;
}
.pc-sector-tag.banking{background:rgba(197,136,30,0.15);color:var(--amber)}
.pc-sector-tag.fintech{background:rgba(10,107,96,0.15);color:var(--teal)}
.pc-sector-tag.regulatory{background:rgba(11,28,58,0.3);color:#8FA8C4}
.pc-sector-tag.insurance{background:rgba(168,81,30,0.15);color:var(--terracotta)}
.pc-sector-tag.legal{background:rgba(197,136,30,0.1);color:var(--gold)}
.pc-sector-tag.academia{background:rgba(255,255,255,0.08);color:rgba(255,255,255,0.5)}
.pc-sector-tag.regtech{background:rgba(10,107,96,0.12);color:var(--teal)}
.pc-sector-tag.investigations{background:rgba(168,81,30,0.12);color:var(--amber)}
.pc-sector-tag.energy{background:rgba(220,130,0,0.15);color:#E8A020}
.pc-sector-tag.manufacturing{background:rgba(100,120,80,0.2);color:#90B060}
.pc-sector-tag.engineering{background:rgba(60,100,160,0.18);color:#80AADD}
.pc-sector-tag.telecoms{background:rgba(80,40,120,0.2);color:#B080E0}
.pc-sector-tag.healthcare{background:rgba(0,120,100,0.15);color:#40C8A8}
.pc-sector-tag.public{background:rgba(140,60,60,0.18);color:#D08080}
.pc-sector-tag.aviation{background:rgba(40,80,140,0.18);color:#7090C8}
.pc-sector-tag.transport{background:rgba(80,80,40,0.2);color:#B0A860}
.pl-avatar{
  width:56px;height:56px;border-radius:50%;margin-bottom:14px;
  display:flex;align-items:center;justify-content:center;
  font-family:var(--font-display);font-size:16px;font-weight:700;
}
.pl-avatar.banking{background:rgba(197,136,30,0.1);border:1px solid rgba(197,136,30,0.25);color:var(--amber)}
.pl-avatar.fintech{background:rgba(10,107,96,0.1);border:1px solid rgba(10,107,96,0.25);color:var(--teal)}
.pl-avatar.regulatory{background:rgba(143,168,196,0.08);border:1px solid rgba(143,168,196,0.2);color:#8FA8C4}
.pl-avatar.insurance{background:rgba(168,81,30,0.1);border:1px solid rgba(168,81,30,0.25);color:var(--terracotta)}
.pl-avatar.legal{background:rgba(197,136,30,0.08);border:1px solid rgba(197,136,30,0.2);color:var(--gold)}
.pl-avatar.academia{background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.12);color:rgba(255,255,255,0.5)}
.pl-avatar.regtech{background:rgba(10,107,96,0.08);border:1px solid rgba(10,107,96,0.2);color:var(--teal)}
.pl-avatar.investigations{background:rgba(168,81,30,0.08);border:1px solid rgba(168,81,30,0.2);color:var(--amber)}
.pl-avatar.energy{background:rgba(220,130,0,0.08);border:1px solid rgba(220,130,0,0.2);color:#E8A020}
.pl-avatar.manufacturing{background:rgba(100,120,80,0.08);border:1px solid rgba(100,120,80,0.2);color:#90B060}
.pl-avatar.engineering{background:rgba(60,100,160,0.08);border:1px solid rgba(60,100,160,0.2);color:#80AADD}
.pl-avatar.telecoms{background:rgba(80,40,120,0.08);border:1px solid rgba(80,40,120,0.2);color:#B080E0}
.pl-avatar.healthcare{background:rgba(0,120,100,0.08);border:1px solid rgba(0,120,100,0.2);color:#40C8A8}
.pl-avatar.public{background:rgba(140,60,60,0.08);border:1px solid rgba(140,60,60,0.2);color:#D08080}
.pl-avatar.aviation{background:rgba(40,80,140,0.08);border:1px solid rgba(40,80,140,0.2);color:#7090C8}
.pl-avatar.transport{background:rgba(80,80,40,0.08);border:1px solid rgba(80,80,40,0.2);color:#B0A860}
.pl-name{font-size:14px;font-weight:600;color:var(--white);margin-bottom:4px;line-height:1.3}
.pl-role{font-size:11.5px;color:rgba(255,255,255,0.4);line-height:1.45;margin-bottom:12px}
.pl-session{font-size:11px;color:rgba(255,255,255,0.25);font-family:var(--font-mono);font-style:italic}


/* Discussion topics by session */
.topics-section{background:var(--parchment)}
.topic-accordion{display:flex;flex-direction:column;gap:2px;margin-top:48px}
.topic-row{background:var(--white);border:1px solid var(--rule)}
.topic-head{
  display:flex;align-items:center;gap:20px;padding:22px 28px;
  cursor:default;
}
.topic-num{font-family:var(--font-display);font-size:26px;font-weight:700;color:var(--gold);width:42px;flex-shrink:0;opacity:0.6}
.topic-main{flex:1}
.topic-title{font-size:15px;font-weight:600;color:var(--ink);margin-bottom:2px}
.topic-time{font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:var(--light);text-transform:uppercase}
.topic-body{padding:0 28px 24px 90px}
.topic-questions{list-style:none;display:flex;flex-direction:column;gap:8px;margin-bottom:14px}
.topic-questions li{font-size:13px;color:var(--mid);line-height:1.6;padding-left:18px;position:relative}
.topic-questions li::before{content:'?';position:absolute;left:0;color:var(--terracotta);font-weight:700;font-family:var(--font-display)}
.topic-panel-tag{
  display:inline-flex;align-items:center;gap:8px;
  font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;
  color:var(--teal);text-transform:uppercase;
  padding:6px 12px;background:rgba(10,107,96,0.08);margin-right:8px;margin-top:4px;
}

/* CFP / Speaker call */
.cfp-banner{
  margin-top:48px;padding:36px 40px;background:var(--deep);
  display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap;
}
.cfp-text{flex:1;min-width:280px}
.cfp-label{font-family:var(--font-mono);font-size:10px;letter-spacing:0.18em;color:var(--gold);text-transform:uppercase;margin-bottom:10px}
.cfp-title{font-family:var(--font-display);font-size:24px;font-weight:600;color:var(--white);margin-bottom:8px}
.cfp-body{font-size:13px;color:rgba(255,255,255,0.5);line-height:1.6;max-width:520px}


.tickets-section{background:var(--parchment)}
.ticket-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:2px;margin-top:48px}
.ticket-card{background:var(--white);border:1px solid var(--rule);padding:32px 26px;display:flex;flex-direction:column;position:relative}
.ticket-card.featured{background:var(--deep);border-color:var(--gold)}
.ticket-card.featured .ticket-name,
.ticket-card.featured .ticket-includes li{color:rgba(255,255,255,0.85)}
.ticket-card.featured .ticket-desc{color:rgba(255,255,255,0.45)}
.ticket-card.featured .ticket-price{color:var(--gold)}
.ticket-card.featured .ticket-includes li::before{color:var(--gold)}
.ticket-badge{
  position:absolute;top:-1px;right:-1px;
  background:var(--gold);color:var(--ink);
  font-family:var(--font-mono);font-size:8.5px;letter-spacing:0.12em;
  text-transform:uppercase;padding:5px 12px;font-weight:600;
}
.ticket-name{font-family:var(--font-mono);font-size:10px;letter-spacing:0.18em;text-transform:uppercase;color:var(--terracotta);margin-bottom:14px}
.ticket-price{font-family:var(--font-display);font-size:36px;font-weight:700;color:var(--gold);line-height:1;margin-bottom:4px}
.ticket-price span{font-size:13px;font-weight:400;color:var(--light);font-family:var(--font-body)}
.ticket-price-alt{font-family:var(--font-mono);font-size:11px;color:var(--light);margin-bottom:18px}
.ticket-desc{font-size:12.5px;color:var(--mid);line-height:1.55;margin-bottom:18px}
.ticket-includes{list-style:none;display:flex;flex-direction:column;gap:8px;flex:1;margin-bottom:20px}
.ticket-includes li{font-size:12.5px;color:var(--text);line-height:1.45;padding-left:18px;position:relative}
.ticket-includes li::before{content:'✓';position:absolute;left:0;color:var(--teal);font-weight:700;font-size:12px}
.ticket-cta{
  display:block;text-align:center;padding:12px;
  font-family:var(--font-mono);font-size:10.5px;letter-spacing:0.12em;
  text-transform:uppercase;text-decoration:none;font-weight:600;
  border:1px solid var(--gold);color:var(--gold);transition:all .2s;
}
.ticket-cta:hover{background:var(--gold);color:var(--ink)}
.ticket-card.featured .ticket-cta{background:var(--gold);color:var(--ink)}
.ticket-card.featured .ticket-cta:hover{background:var(--amber)}

/* Booking process */
.booking-layout{display:grid;grid-template-columns:1.3fr 1fr;gap:48px;margin-top:64px;align-items:start}
.booking-steps{display:flex;flex-direction:column;gap:0}
.bstep{display:flex;gap:24px;padding:24px 0;border-bottom:1px solid var(--rule)}
.bstep:last-child{border-bottom:none}
.bstep-num{
  font-family:var(--font-display);font-size:32px;font-weight:700;
  color:var(--gold);line-height:1;flex-shrink:0;width:50px;
}
.bstep-content{flex:1}
.bstep-title{font-size:15px;font-weight:600;color:var(--ink);margin-bottom:6px}
.bstep-body{font-size:13px;color:var(--mid);line-height:1.6}

.booking-info-card{background:var(--ink);padding:36px 32px}
.bic-label{font-family:var(--font-mono);font-size:10px;letter-spacing:0.18em;color:var(--gold);text-transform:uppercase;margin-bottom:24px}
.bic-row{display:flex;justify-content:space-between;align-items:flex-start;padding:14px 0;border-bottom:1px solid rgba(255,255,255,0.08);gap:16px}
.bic-row:last-child{border-bottom:none}
.bic-k{font-size:12.5px;color:rgba(255,255,255,0.4);flex-shrink:0}
.bic-v{font-size:12.5px;color:rgba(255,255,255,0.85);font-weight:500;text-align:right}
.bic-note{margin-top:24px;padding:16px 18px;background:rgba(197,136,30,0.08);border-left:3px solid var(--gold);font-size:12px;color:rgba(255,255,255,0.6);line-height:1.6}

/* Group / table booking banner */
.group-banner{
  margin-top:32px;padding:32px 36px;background:var(--ink);
  display:flex;align-items:center;justify-content:space-between;
  gap:24px;flex-wrap:wrap;
}
.gb-text{flex:1;min-width:260px}
.gb-label{font-family:var(--font-mono);font-size:10px;letter-spacing:0.16em;color:var(--gold);text-transform:uppercase;margin-bottom:10px}
.gb-title{font-family:var(--font-display);font-size:22px;font-weight:600;color:var(--white);margin-bottom:8px}
.gb-body{font-size:13px;color:rgba(255,255,255,0.5);line-height:1.6;max-width:520px}
.gb-price{
  text-align:center;flex-shrink:0;padding:0 28px;border-left:1px solid rgba(255,255,255,0.1);border-right:1px solid rgba(255,255,255,0.1);
}
.gb-price-val{font-family:var(--font-display);font-size:32px;font-weight:700;color:var(--gold);line-height:1}
.gb-price-lbl{font-family:var(--font-mono);font-size:9px;letter-spacing:0.1em;color:rgba(255,255,255,0.35);text-transform:uppercase;margin-top:4px}


.cta-section{background:var(--deep);padding:96px 48px;text-align:center;position:relative;overflow:hidden}
.cta-section::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(ellipse 70% 70% at 50% 50%,rgba(197,136,30,0.1) 0%,transparent 70%);
}
.cta-inner{max-width:760px;margin:0 auto;position:relative;z-index:2}
.cta-title{font-family:var(--font-display);font-size:clamp(34px,4.5vw,56px);font-weight:300;color:var(--white);margin-bottom:20px;line-height:1.1}
.cta-title em{font-style:italic;color:var(--gold)}
.cta-body{font-size:15px;color:rgba(255,255,255,0.5);line-height:1.7;margin-bottom:40px}
.cta-buttons{display:flex;gap:16px;justify-content:center;flex-wrap:wrap;margin-bottom:32px}
.cta-btn{padding:14px 32px;font-family:var(--font-mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;transition:all .2s}
.cta-btn.primary{background:var(--gold);color:var(--ink);font-weight:600}
.cta-btn.primary:hover{background:var(--amber)}
.cta-btn.secondary{background:transparent;color:var(--gold);border:1px solid rgba(197,136,30,0.4)}
.cta-btn.secondary:hover{background:rgba(197,136,30,0.08)}
.cta-contact{font-size:13px;color:rgba(255,255,255,0.25);font-family:var(--font-mono);letter-spacing:0.06em}

/* ── FOOTER ───────────────────────────────────────── */
.site-footer{background:#080A0E;padding:48px 48px 32px;border-top:1px solid rgba(197,136,30,0.15)}
.footer-inner{max-width:1200px;margin:0 auto;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:20px}
.footer-brand{font-family:var(--font-display);font-size:16px;color:var(--gold)}
.footer-meta{font-size:11px;color:rgba(255,255,255,0.25);font-family:var(--font-mono);letter-spacing:0.06em}

/* ── RESPONSIVE ───────────────────────────────────── */
@media(max-width:980px){
  .site-nav{padding:14px 24px}
  .nav-links{display:none}
  .hero,.section,.facts-strip,.awards-section,.cta-section{padding:64px 24px}
  .hero::after{display:none}
  .two-col,.prog-layout,.venue-split,.nominee-clusters,.booking-layout{grid-template-columns:1fr;gap:36px}
  .facts-inner{grid-template-columns:repeat(2,1fr)}
  .category-pillars{grid-template-columns:1fr 1fr}
  .highlight-grid{grid-template-columns:1fr 1fr}
  .hero-meta-row{max-width:100%}
  .ticket-grid{grid-template-columns:1fr 1fr}
  .group-banner{flex-direction:column;align-items:flex-start}
  .gb-price{border-left:none;border-right:none;border-top:1px solid rgba(255,255,255,0.1);padding:16px 0 0;width:100%;text-align:left}
  .keynote-banner{grid-template-columns:1fr;text-align:center}
  .keynote-avatar{margin:0 auto}
  .keynotes-grid{grid-template-columns:1fr}
  .panellist-grid{grid-template-columns:repeat(2,1fr)}
  .speaker-grid{grid-template-columns:repeat(2,1fr)}
  .topic-body{padding:0 24px 24px 24px}
  .cfp-banner{flex-direction:column;align-items:flex-start}
  .transport-grid{grid-template-columns:1fr 1fr}
  .map-banner{grid-template-columns:1fr}
  .amenity-tabs-grid{grid-template-columns:1fr 1fr}
  .process-strip{grid-template-columns:1fr 1fr}
  .countdown-strip{grid-template-columns:1fr}
  .vb-inner{flex-direction:column;align-items:flex-start}
  .vb-deadline{border-left:none;border-right:none;border-top:1px solid rgba(80,200,80,0.2);padding:16px 0 0;width:100%;text-align:left}
}
@media(max-width:620px){
  .category-pillars,.highlight-grid,.facts-inner,.ticket-grid,.speaker-grid,.transport-grid,.amenity-tabs-grid,.panellist-grid,.keynotes-grid{grid-template-columns:1fr}
}
</style>
</head>
<body>

<!-- =============== PRELOADER =============== -->
	@include('partials.voter.preloader')
	@include('partials.voter.topbar')



<!-- ── HERO ─────────────────────────────────────────── -->
<section class="hero">
  <div class="hero-inner">
    <div class="hero-kicker">The Morgans Consortium &nbsp;·&nbsp; 7th Annual Edition &nbsp;·&nbsp; 2026</div>
    <div class="hero-edition-flag">✦ Africa Edition</div>
    <h1 class="hero-title">
      <strong>GRC & Financial Crime</strong>
      <em>Prevention Awards</em>
      <span style="color:rgba(255,255,255,0.7);font-weight:300;font-size:0.65em;display:block;margin-top:6px">& Summit 2026</span>
    </h1>
    <div class="hero-location">Nairobi, Kenya &nbsp;·&nbsp; <strong>20 November 2026</strong> &nbsp;·&nbsp; Marriott Hotel</div>

    <div class="hero-theme-box">
      <div class="hero-theme-label">2026 Summit Theme</div>
      <div class="hero-theme-text">"East Africa Rising: Building Resilient Institutions and Compliance Ecosystems Fit for the Future"</div>
    </div>

    <div class="hero-meta-row">
      <div class="hero-meta-item">
        <div class="hm-label">Date</div>
        <div class="hm-val">20 Nov 2026</div>
      </div>
      <div class="hero-meta-item">
        <div class="hm-label">Summit</div>
        <div class="hm-val">10:00–14:00 EAT</div>
      </div>
      <div class="hero-meta-item">
        <div class="hm-label">Gala Ceremony</div>
        <div class="hm-val">16:00–19:00 EAT</div>
      </div>
      <div class="hero-meta-item">
        <div class="hm-label">Dress Code</div>
        <div class="hm-val">Black Tie / African Formal</div>
      </div>
      <div class="hero-meta-item">
        <div class="hm-label">Venue</div>
        <div class="hm-val">Marriott Hotel, Nairobi</div>
      </div>
    </div>
  </div>
</section>

<!-- ── KEY FACTS ────────────────────────────────────── -->
<section class="facts-strip">
  <div class="facts-inner">
    <div class="fact"><div class="fact-val">7th</div><div class="fact-lbl">Annual<br>Edition</div></div>
    <div class="fact"><div class="fact-val">8</div><div class="fact-lbl">Summit<br>Sessions</div></div>
    <div class="fact"><div class="fact-val">6</div><div class="fact-lbl">Award<br>Pillars</div></div>
    <div class="fact"><div class="fact-val">2020</div><div class="fact-lbl">Founded<br>in Lagos</div></div>
    <div class="fact"><div class="fact-val">200</div><div class="fact-lbl">Guests<br>(Target)</div></div>
  </div>
</section>

<!-- ── VOTING PHASE BANNER ─────────────────────────── -->
<section style="background:var(--ink);padding:0 48px 0">
  <div style="max-width:1200px;margin:0 auto;padding:48px 0">

    <!-- Live voting alert -->
    <div class="voting-banner">
      <div class="vb-inner">
        <div class="vb-pulse">🗳️</div>
        <div class="vb-text">
          <div class="vb-live"><span class="vb-dot"></span>Voting is now open</div>
          <div class="vb-title">Cast your vote for the 2026 Africa Edition nominees</div>
          <div class="vb-subtitle">Nominations have closed. The public voting stage is now live — vote for the individuals and organisations you believe deserve recognition at this year's Gala Awards Ceremony in Nairobi. Voting closes <strong style="color:#FFFFFF">15 August 2026.</strong> The top 5 in each category then proceed to independent judging.</div>
        </div>
        <div class="vb-deadline">
          <div class="vb-deadline-val">15 Aug</div>
          <div class="vb-deadline-lbl">Voting<br>Deadline</div>
        </div>
        <a href="https://www.grcfincrimeawards.com/vote" class="vb-cta-btn">Vote Now →</a>
      </div>
    </div>

    <!-- 4-stage process -->
    <div style="margin-top:48px">
      <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);margin-bottom:4px">Awards Process — 2026</div>
      <h2 style="font-family:var(--font-display);font-size:clamp(26px,3vw,38px);font-weight:300;color:var(--white);margin-bottom:32px;line-height:1.1">How nominees become <em style="color:var(--gold)">award recipients.</em></h2>

      <div class="process-strip">

        <!-- STAGE 1 — DONE -->
        <div class="process-step done">
          <div class="ps-status done"><span class="ps-status-dot"></span>Completed</div>
          <div class="ps-num">01</div>
          <div class="ps-title">Nomination Stage</div>
          <div class="ps-dates">May 2026 — Closed</div>
          <div class="ps-body">The public nomination window is now closed. Individuals and organisations from all sectors were invited to self-nominate or nominate peers for recognition across the six award pillars. Nominees have been confirmed across all categories.</div>
          <div class="ps-check">✓ Stage complete</div>
        </div>

        <!-- STAGE 2 — ACTIVE -->
        <div class="process-step active">
          <div class="ps-status active"><span class="ps-status-dot"></span>Live now</div>
          <div class="ps-num">02</div>
          <div class="ps-title">Public Voting Stage</div>
          <div class="ps-dates">15 June – 15 August 2026</div>
          <div class="ps-body">The public are now invited to vote for their preferred nominees in each category. Every vote counts — the <strong>top 5 nominees</strong> by public vote in each category will proceed to the independent judging stage. One vote per person per category. Voting closes at midnight EAT on 15 August 2026.</div>
          <div class="ps-check" style="background:rgba(80,200,80,0.15)">⟶ Vote at grcfincrimeawards.com/vote</div>
        </div>

        <!-- STAGE 3 — UPCOMING -->
        <div class="process-step upcoming">
          <div class="ps-status upcoming"><span class="ps-status-dot"></span>Coming next</div>
          <div class="ps-num">03</div>
          <div class="ps-title">Independent Judging Stage</div>
          <div class="ps-dates">August – October 2026</div>
          <div class="ps-body">The top 5 vote-getters in each category are passed to our independent panel of judges. Judges assess each shortlisted nominee against published sector-specific criteria — independently, without conflict or bias, and without visibility of each other's scoring. Their deliberations are confidential. Judges then recommend the <strong>top 3 finalists</strong> per category to the Awards Gala.</div>
          <div class="ps-check">Begins August 2026</div>
        </div>

        <!-- STAGE 4 — UPCOMING -->
        <div class="process-step upcoming">
          <div class="ps-status upcoming"><span class="ps-status-dot"></span>The finale</div>
          <div class="ps-num">04</div>
          <div class="ps-title">Gala Awards Ceremony</div>
          <div class="ps-dates">20 November 2026 · Nairobi</div>
          <div class="ps-body">The top 3 finalists in each category are invited to attend the black-tie Gala Awards Ceremony at the Marriott Hotel, Nairobi on 20 November 2026. Winners in each category are announced on the night by the MC and presenting judges. All three finalists are publicly recognised — only the winner is revealed at the ceremony.</div>
          <div class="ps-check">20 November 2026</div>
        </div>

      </div>

      <!-- Voting countdown info -->
      <div style="margin-top:24px;padding:28px 32px;background:rgba(80,200,80,0.04);border:1px solid rgba(80,200,80,0.12)">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center;flex-wrap:wrap">
          <div>
            <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.16em;text-transform:uppercase;color:#80D860;margin-bottom:10px">Voting is Open Now</div>
            <p style="font-size:13px;color:rgba(255,255,255,0.55);line-height:1.7">The public voting window runs from <strong style="color:#FFFFFF">15 June 2026</strong> to <strong style="color:#FFFFFF">15 August 2026</strong>. Share the voting link with your colleagues, networks and communities. The more votes a nominee receives, the better their chance of making the top 5 and proceeding to the judges' panel. Your vote directly shapes who reaches the Gala.</p>
            <a href="https://www.grcfincrimeawards.com/vote" style="display:inline-block;margin-top:16px;padding:12px 28px;background:#4CAF50;color:#FFFFFF;font-family:var(--font-mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;font-weight:700">Cast Your Vote →</a>
          </div>
          <div class="countdown-strip">
            <div class="cd-box">
              <div class="cd-val">15 Jun</div>
              <div class="cd-lbl">Voting Opens</div>
            </div>
            <div class="cd-box">
              <div class="cd-val">15 Aug</div>
              <div class="cd-lbl">Voting Closes</div>
            </div>
            <div class="cd-box">
              <div class="cd-val">Top 5</div>
              <div class="cd-lbl">Per category to judges</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Judge independence note -->
      <div style="margin-top:16px;padding:20px 28px;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.06);display:flex;gap:16px;align-items:flex-start">
        <span style="font-size:22px;flex-shrink:0">⚖️</span>
        <div>
          <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.14em;text-transform:uppercase;color:var(--gold);margin-bottom:6px">Judge Independence & Integrity</div>
          <p style="font-size:13px;color:rgba(255,255,255,0.45);line-height:1.65">All judges assess nominees <strong style="color:rgba(255,255,255,0.7)">independently and without knowledge of other judges' scores</strong>. No judge may assess a category in which they have a personal, professional or commercial relationship with any nominee. Judges are required to declare conflicts of interest before the process begins, and recuse themselves from affected categories. Final recommendations reflect consolidated judging scores and are subject to review by the Awards Committee before announcement.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── ABOUT / THEME CONTEXT ─────────────────────────── -->
<section class="section about-section" id="theme">
  <div class="section-inner">
    <div class="section-kicker">About This Edition</div>
    <h2 class="section-title">East Africa is writing<br><em>its own rulebook.</em></h2>
    <div class="rule"></div>
    <p class="section-body">For the first time in its seven-year history, the GRC & Financial Crime Prevention Awards & Summit travels to Nairobi, Kenya — East Africa's foremost financial and innovation hub. The Africa Edition brings together regulators, bankers, fintech leaders, compliance professionals and policymakers from across the region for a day of rigorous dialogue and well-earned recognition.</p>

    <div class="two-col">
      <div class="theme-card">
        <div class="theme-card-label">2026 Summit Theme</div>
        <div class="theme-card-title">"East Africa Rising: Building Resilient Institutions and Compliance Ecosystems Fit for the Future"</div>
        <div class="theme-card-body">The 2026 Africa Edition Summit explores how East African institutions are adapting their governance, risk and compliance frameworks to meet the demands of a rapidly evolving regulatory, digital and financial crime landscape — while building homegrown solutions that reflect the region's unique economic, cultural and institutional realities. This is not a conversation about importing standards from elsewhere. It is a conversation about East Africa setting its own.</div>
      </div>
      <div>
        <div class="context-list">
          <div class="context-item">
            <div class="ci-icon">🏦</div>
            <div class="ci-text"><strong>A maturing financial sector.</strong> East Africa's banking, insurance and capital markets sectors are professionalising rapidly — and with that comes new compliance, risk and governance expectations.</div>
          </div>
          <div class="context-item">
            <div class="ci-icon">📱</div>
            <div class="ci-text"><strong>A mobile-first economy.</strong> Kenya's mobile money ecosystem is a global reference point — and a frontier for new financial crime typologies that demand region-specific solutions.</div>
          </div>
          <div class="context-item">
            <div class="ci-icon">⚖️</div>
            <div class="ci-text"><strong>An evolving regulatory landscape.</strong> ESAAMLG, central bank directives and FATF mutual evaluations are reshaping AML/CFT obligations across East African jurisdictions.</div>
          </div>
          <div class="context-item">
            <div class="ci-icon">🌍</div>
            <div class="ci-text"><strong>A growing community.</strong> Nairobi joins Lagos in the Awards' history — building a genuinely pan-African network of GRC and financial crime prevention professionals.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── PROGRAMME ────────────────────────────────────── -->
<section class="section programme-section" id="programme">
  <div class="section-inner">
    <div class="section-kicker">The Day</div>
    <h2 class="section-title">A morning of ideas.<br><em>An evening of recognition.</em></h2>
    <div class="rule"></div>
    <p class="section-body">20 November 2026 opens with a four-hour Summit exploring the theme of East Africa Rising, followed by a formal Gala Awards Ceremony celebrating the individuals and organisations leading that change.</p>

    <div class="prog-layout">
      <!-- Day schedule -->
      <div class="prog-day">
        <div class="prog-day-header">
          <span class="pdh-title">Event Day Schedule</span>
          <span class="pdh-time">20 Nov 2026</span>
        </div>
        <div class="prog-row">
          <span class="pr-time">09:00</span>
          <span class="pr-text">Registration & Welcome Coffee</span>
        </div>
        <div class="prog-row highlight">
          <span class="pr-time">10:00</span>
          <span class="pr-text"><strong>Summit Opens</strong> — Keynote Address: East Africa Rising</span>
        </div>
        <div class="prog-row">
          <span class="pr-time">10:30</span>
          <span class="pr-text">Summit Sessions & Panel Discussions</span>
        </div>
        <div class="prog-row">
          <span class="pr-time">12:30</span>
          <span class="pr-text">Networking Luncheon</span>
        </div>
        <div class="prog-row">
          <span class="pr-time">13:30</span>
          <span class="pr-text">Afternoon Roundtables & Sessions</span>
        </div>
        <div class="prog-row">
          <span class="pr-time">14:00</span>
          <span class="pr-text"><strong>Summit Closes</strong></span>
        </div>
        <div class="prog-row">
          <span class="pr-time">16:00</span>
          <span class="pr-text">Cocktail Reception & Welcome Drinks</span>
        </div>
        <div class="prog-row highlight">
          <span class="pr-time">17:00</span>
          <span class="pr-text"><strong>Gala Awards Ceremony Opens</strong></span>
        </div>
        <div class="prog-row">
          <span class="pr-time">17:15</span>
          <span class="pr-text">Award Presentations & Formal Dinner</span>
        </div>
        <div class="prog-row highlight">
          <span class="pr-time">19:00</span>
          <span class="pr-text"><strong>Gala Closes</strong></span>
        </div>
      </div>

      <!-- Summit Sessions -->
      <div>
        <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.16em;text-transform:uppercase;color:var(--terracotta);margin-bottom:16px">Summit Sessions — East Africa Rising</div>
        <div class="sessions-list">
          <div class="session-item">
            <div class="session-num">01</div>
            <div class="session-content">
              <div class="session-title">Regulatory Pulse: Navigating East Africa's Evolving AML/CFT and Compliance Landscape</div>
              <span class="session-tag">Regulatory Intelligence</span>
            </div>
          </div>
          <div class="session-item">
            <div class="session-num">02</div>
            <div class="session-content">
              <div class="session-title">Homegrown Solutions: Building GRC Frameworks That Reflect African Market Realities</div>
              <span class="session-tag">Governance & Culture</span>
            </div>
          </div>
          <div class="session-item">
            <div class="session-num">03</div>
            <div class="session-content">
              <div class="session-title">The Financial Crime Threat: From Mobile Money Fraud to Trade-Based Money Laundering</div>
              <span class="session-tag">Financial Crime Disruption</span>
            </div>
          </div>
          <div class="session-item">
            <div class="session-num">04</div>
            <div class="session-content">
              <div class="session-title">Digital Finance & Crypto: Compliance in East Africa's Mobile-First Economy</div>
              <span class="session-tag">Technology & Innovation</span>
            </div>
          </div>
          <div class="session-item">
            <div class="session-num">05</div>
            <div class="session-content">
              <div class="session-title">Governance & Accountability: Board-Level Responsibility in African Institutions</div>
              <span class="session-tag">Governance & Culture</span>
            </div>
          </div>
          <div class="session-item">
            <div class="session-num">06</div>
            <div class="session-content">
              <div class="session-title">Women Leading GRC: Advancing Gender Equity in Africa's Compliance Profession</div>
              <span class="session-tag">Leadership & Diversity</span>
            </div>
          </div>
          <div class="session-item">
            <div class="session-num">07</div>
            <div class="session-content">
              <div class="session-title">RegTech for Africa: Practical Technology Adoption for Resource-Constrained Environments</div>
              <span class="session-tag">Technology & Innovation</span>
            </div>
          </div>
          <div class="session-item">
            <div class="session-num">08</div>
            <div class="session-content">
              <div class="session-title">Building the Next Generation: Talent, Education and the Future of African GRC</div>
              <span class="session-tag">Leadership & Diversity</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── SPEAKERS ─────────────────────────────────────── -->
<section class="section speakers-section" id="speakers">
  <div class="section-inner speakers-inner">
    <div class="section-kicker" style="color:var(--gold)">Speakers — Africa Edition 2026</div>
    <h2 class="section-title" style="color:var(--white)">The voices leading<br><em>East Africa's GRC conversation.</em></h2>
    <div class="rule"></div>
    <p class="section-body" style="color:rgba(255,255,255,0.45)">The 2026 Africa Edition Summit features three keynote addresses and eight expert panellists drawn from banking, fintech, regulation, insurance, legal, RegTech, academia and financial crime investigations — representing the full breadth of the GRC and financial crime prevention profession across East Africa and the continent.</p>

    <!-- ── 3 KEYNOTE SPEAKERS ─────────────────────── -->
    <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.2em;color:var(--gold);text-transform:uppercase;margin-bottom:4px">Keynote Speakers</div>
    <p style="font-size:13px;color:rgba(255,255,255,0.35);margin-bottom:0">Three keynote addresses anchoring the morning Summit — opening, mid-morning, and closing the Summit before the Gala.</p>

    <div class="keynotes-grid">

      <!-- KEYNOTE 1 -->
      <div class="keynote-card">
        <div class="kc-slot">Opening Keynote &nbsp;·&nbsp; 10:00 EAT</div>
        <div class="kc-avatar">K1</div>
        <div class="kc-name">[To Be Announced]</div>
        <div class="kc-role">Governor / Deputy Governor<br>Central Bank of Kenya or equivalent East African central banking authority</div>
        <div class="kc-bio">The Summit opens with a landmark address from a senior East African central banking or regulatory authority, setting the strategic context for the day's theme. The opening keynote will frame East Africa's current regulatory trajectory, the region's performance under FATF mutual evaluations, and the institutional priorities that will define the compliance agenda through 2030.</div>
        <div class="kc-topic">
          <div class="kc-topic-label">Keynote Address</div>
          "From Compliance Burden to Competitive Advantage: East Africa's Institutional Moment"
        </div>
      </div>

      <!-- KEYNOTE 2 -->
      <div class="keynote-card second">
        <div class="kc-slot second">Mid-Morning Keynote &nbsp;·&nbsp; 11:45 EAT</div>
        <div class="kc-avatar second">K2</div>
        <div class="kc-name">[To Be Announced]</div>
        <div class="kc-role">Group CEO / MD<br>Leading Pan-African Financial Institution</div>
        <div class="kc-bio">The mid-morning keynote brings a senior executive perspective from within Africa's financial services sector — addressing the commercial realities of building compliant, resilient institutions in a continent of 54 diverse markets. The speaker will draw on direct experience of navigating regulatory complexity, digital disruption and financial crime pressure at scale across multiple African jurisdictions.</div>
        <div class="kc-topic second">
          <div class="kc-topic-label second">Keynote Address</div>
          "Building for Resilience: What It Really Takes to Lead a Compliant Pan-African Institution"
        </div>
      </div>

      <!-- KEYNOTE 3 -->
      <div class="keynote-card third">
        <div class="kc-slot third">Closing Keynote &nbsp;·&nbsp; 13:30 EAT</div>
        <div class="kc-avatar third">K3</div>
        <div class="kc-name">[To Be Announced]</div>
        <div class="kc-role">Founder / CEO<br>Leading East African Fintech or RegTech Organisation</div>
        <div class="kc-bio">The closing keynote of the Summit programme looks forward — exploring how technology, innovation and homegrown solutions are reshaping the compliance and financial crime prevention landscape across East Africa. The speaker will challenge the audience to think beyond compliance as a cost centre and toward a future where GRC capability is a driver of institutional trust, customer confidence and market growth.</div>
        <div class="kc-topic third">
          <div class="kc-topic-label">Keynote Address</div>
          "The Innovator's Compliance Agenda: Technology, Trust and the East African Opportunity"
        </div>
      </div>

    </div>

    <!-- Announcement note -->
    <div style="margin-top:24px;padding:16px 20px;background:rgba(197,136,30,0.06);border:1px solid rgba(197,136,30,0.15);display:flex;align-items:center;gap:14px">
      <span style="font-size:18px">📢</span>
      <p style="font-size:13px;color:rgba(255,255,255,0.5);line-height:1.6">Keynote speakers will be formally announced via <strong style="color:var(--gold)">grcfincrimeawards.com</strong> and across our social media channels on a rolling basis ahead of the event. Register your interest to receive speaker announcements directly.</p>
    </div>

    <!-- ── PANELLIST SPEAKERS — ALL SECTORS ──────── -->
    <div class="panel-section-title">
      <span>Panellists & Session Chairs — 2026 Africa Edition</span>
      <span class="panel-section-count">16</span>
    </div>
    <p style="font-size:13px;color:rgba(255,255,255,0.4);line-height:1.6;max-width:700px;margin-bottom:36px">Sixteen expert panellists drawn from across every regulated sector of East Africa's economy — from banking and fintech to energy, engineering, manufacturing, healthcare, aviation, telecoms and the public sector. The GRC & Financial Crime Prevention Awards & Summit recognises that compliance, risk and governance are universal professional obligations, not the preserve of financial services alone.</p>

    <!-- Group 1: Financial Services -->
    <div style="font-family:var(--font-mono);font-size:9.5px;letter-spacing:0.2em;text-transform:uppercase;color:var(--amber);margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid rgba(197,136,30,0.15)">Financial Services</div>
    <div class="panellist-grid" style="margin-bottom:24px">

      <div class="panellist-card">
        <span class="pc-sector-tag banking">Banking</span>
        <div class="pl-avatar banking">CCO</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Group Chief Compliance Officer<br>Tier-1 Commercial Bank, Kenya / East Africa</div>
        <div class="pl-session">Session 01 · Regulatory Pulse: East Africa's AML/CFT Landscape</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag banking">Banking</span>
        <div class="pl-avatar banking">MLRO</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Money Laundering Reporting Officer (MLRO)<br>Pan-African Banking Group</div>
        <div class="pl-session">Session 03 · Financial Crime Threat: Fraud, TBML & Emerging Typologies</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag fintech">Fintech</span>
        <div class="pl-avatar fintech">FT</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Head of Compliance & Risk<br>Mobile Money / Digital Finance Platform, East Africa</div>
        <div class="pl-session">Session 04 · Digital Finance & Crypto Compliance</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag insurance">Insurance</span>
        <div class="pl-avatar insurance">CRO</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Chief Risk Officer<br>Insurance or Asset Management Organisation, Africa</div>
        <div class="pl-session">Session 05 · Governance & Accountability: Board-Level Responsibility</div>
      </div>

    </div>

    <!-- Group 2: Regulatory & Legal -->
    <div style="font-family:var(--font-mono);font-size:9.5px;letter-spacing:0.2em;text-transform:uppercase;color:#8FA8C4;margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid rgba(143,168,196,0.15)">Regulatory, Legal & Investigations</div>
    <div class="panellist-grid" style="margin-bottom:24px">

      <div class="panellist-card">
        <span class="pc-sector-tag regulatory">Regulatory</span>
        <div class="pl-avatar regulatory">FIU</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Director / Deputy Director<br>Financial Intelligence Unit, East Africa</div>
        <div class="pl-session">Session 01 · Regulatory Pulse &amp; Session 03 · Financial Crime Threat</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag regulatory">Regulatory</span>
        <div class="pl-avatar regulatory">CB</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Director, Financial Sector Supervision<br>Central Bank of Kenya or East African Equivalent</div>
        <div class="pl-session">Session 01 · Regulatory Pulse &amp; Session 02 · Homegrown GRC Frameworks</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag legal">Legal</span>
        <div class="pl-avatar legal">LA</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Senior Partner, Financial Crime & Compliance Practice<br>Leading Pan-African Law Firm</div>
        <div class="pl-session">Session 02 · Homegrown GRC Frameworks for African Market Realities</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag investigations">Investigations</span>
        <div class="pl-avatar investigations">INV</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Head of Financial Crime Investigations<br>Anti-Corruption or Law Enforcement Agency, East Africa</div>
        <div class="pl-session">Session 03 · Financial Crime Threat: From Mobile Money Fraud to TBML</div>
      </div>

    </div>

    <!-- Group 3: Energy, Engineering & Manufacturing -->
    <div style="font-family:var(--font-mono);font-size:9.5px;letter-spacing:0.2em;text-transform:uppercase;color:#E8A020;margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid rgba(220,130,0,0.15)">Energy, Engineering & Manufacturing</div>
    <div class="panellist-grid" style="margin-bottom:24px">

      <div class="panellist-card">
        <span class="pc-sector-tag energy">Oil & Gas</span>
        <div class="pl-avatar energy">O&G</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Head of Compliance & Ethics<br>Oil & Gas / Extractive Industry Organisation, East Africa</div>
        <div class="pl-session">Session 02 · Homegrown GRC Frameworks &amp; Session 05 · Governance & Accountability</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag energy">Energy</span>
        <div class="pl-avatar energy">EN</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Chief Governance Officer / Head of Risk<br>Energy or Utilities Company, East Africa</div>
        <div class="pl-session">Session 05 · Governance & Accountability: Board-Level Responsibility</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag engineering">Engineering</span>
        <div class="pl-avatar engineering">ENG</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Director of Risk & Compliance<br>Engineering or Infrastructure Group, East Africa</div>
        <div class="pl-session">Session 02 · Homegrown GRC Frameworks for African Market Realities</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag manufacturing">Manufacturing</span>
        <div class="pl-avatar manufacturing">MFG</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Head of Supply Chain Risk & GRC<br>Manufacturing or FMCG Organisation, East Africa</div>
        <div class="pl-session">Session 02 · Homegrown GRC Frameworks &amp; Session 03 · Financial Crime Threat</div>
      </div>

    </div>

    <!-- Group 4: Sector Diversity -->
    <div style="font-family:var(--font-mono);font-size:9.5px;letter-spacing:0.2em;text-transform:uppercase;color:#40C8A8;margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid rgba(0,120,100,0.15)">Healthcare, Telecoms, Aviation, Transport & Public Sector</div>
    <div class="panellist-grid" style="margin-bottom:24px">

      <div class="panellist-card">
        <span class="pc-sector-tag healthcare">Healthcare</span>
        <div class="pl-avatar healthcare">HC</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Chief Compliance Officer<br>Healthcare Group or Hospital Network, East Africa</div>
        <div class="pl-session">Session 02 · Homegrown GRC Frameworks for African Market Realities</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag telecoms">Telecoms</span>
        <div class="pl-avatar telecoms">TEL</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Director, Regulatory Affairs & Compliance<br>Telecommunications Group, East Africa</div>
        <div class="pl-session">Session 04 · Digital Finance & Session 07 · RegTech for Africa</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag aviation">Aviation</span>
        <div class="pl-avatar aviation">AVN</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Head of Risk Management & Safety Compliance<br>Aviation or Airport Authority, East Africa</div>
        <div class="pl-session">Session 05 · Governance & Accountability &amp; Session 02 · GRC Frameworks</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag public">Public Sector</span>
        <div class="pl-avatar public">PSE</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Director of Governance / Anti-Corruption<br>Government Ministry or Public Institution, East Africa</div>
        <div class="pl-session">Session 05 · Governance & Accountability &amp; Session 06 · Women Leading GRC</div>
      </div>

    </div>

    <!-- Group 5: Technology, Innovation & Academia -->
    <div style="font-family:var(--font-mono);font-size:9.5px;letter-spacing:0.2em;text-transform:uppercase;color:var(--teal);margin-bottom:12px;padding-bottom:8px;border-bottom:1px solid rgba(10,107,96,0.2)">Technology, Innovation & Academia</div>
    <div class="panellist-grid" style="margin-bottom:8px">

      <div class="panellist-card">
        <span class="pc-sector-tag regtech">RegTech</span>
        <div class="pl-avatar regtech">RT</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Founder & CEO<br>East Africa-Based RegTech or Compliance Technology Company</div>
        <div class="pl-session">Session 07 · RegTech for Africa: Practical Technology Adoption</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag regtech">Cybersecurity</span>
        <div class="pl-avatar regtech">CS</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Chief Information Security Officer (CISO)<br>Financial Institution or Technology Company, East Africa</div>
        <div class="pl-session">Session 04 · Digital Finance & Crypto &amp; Session 07 · RegTech for Africa</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag academia">Academia</span>
        <div class="pl-avatar academia">AC</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Professor of Governance, Risk & Compliance<br>Leading East African or Pan-African University</div>
        <div class="pl-session">Session 08 · Building the Next Generation: Talent, Education & the Future of GRC</div>
      </div>

      <div class="panellist-card">
        <span class="pc-sector-tag manufacturing">Women in GRC</span>
        <div class="pl-avatar" style="background:rgba(197,136,30,0.1);border:1px solid rgba(197,136,30,0.25);color:var(--amber);width:56px;height:56px;border-radius:50%;margin-bottom:14px;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:16px;font-weight:700">WG</div>
        <div class="pl-name">[To Be Announced]</div>
        <div class="pl-role">Senior Female Executive — Cross-Sector<br>GRC, FinCrime Prevention or Governance Leader, East Africa</div>
        <div class="pl-session">Session 06 · Women Leading GRC: Advancing Gender Equity in Africa's Compliance Profession</div>
      </div>

    </div>

    <p style="margin-top:20px;font-size:12px;color:rgba(255,255,255,0.25);font-family:var(--font-mono);letter-spacing:0.04em">All 16 panellist names and organisations will be confirmed and announced ahead of 20 November 2026. Full speaker profiles will be published at grcfincrimeawards.com as confirmations are received. Speakers span banking, fintech, regulatory, legal, investigations, oil & gas, energy, engineering, manufacturing, healthcare, telecoms, aviation, public sector, RegTech and academia.</p>

    <!-- Call for speakers -->
    <div class="cfp-banner">
      <div class="cfp-text">
        <div class="cfp-label">Speak at the Africa Edition</div>
        <div class="cfp-title">Have a perspective worth sharing?</div>
        <div class="cfp-body">We welcome expressions of interest from senior practitioners, regulators, fintech leaders, academics and innovators who would like to speak, chair a session, or contribute to a roundtable at the 2026 Africa Edition Summit in Nairobi on 20 November 2026.</div>
      </div>
      <a href="mailto:events@grcfincrimeawards.com?subject=Africa Edition 2026 - Speaker Expression of Interest" class="btn-gold">Submit Speaker Interest →</a>
    </div>
  </div>
</section>

<!-- ── DISCUSSION TOPICS ────────────────────────────── -->
<section class="section topics-section">
  <div class="section-inner">
    <div class="section-kicker">Discussion Topics — Session by Session</div>
    <h2 class="section-title">Eight sessions.<br><em>Every sector. Every challenge.</em></h2>
    <div class="rule"></div>
    <p class="section-body">Each Summit session is built around real, pressing questions facing GRC and financial crime prevention professionals across East Africa — spanning financial services, energy, engineering, manufacturing, healthcare, telecoms, aviation, transport and the public sector. Not abstract theory. Conversations that practitioners can take back to their organisations and act on immediately.</p>

    <div class="topic-accordion">

      <!-- SESSION 01 -->
      <div class="topic-row">
        <div class="topic-head">
          <div class="topic-num">01</div>
          <div class="topic-main">
            <div class="topic-title">Regulatory Pulse: Navigating East Africa's Evolving AML/CFT and Compliance Landscape</div>
            <div class="topic-time">10:30 – 11:00 EAT &nbsp;·&nbsp; Opening Plenary Panel &nbsp;·&nbsp; All Sectors</div>
          </div>
        </div>
        <div class="topic-body">
          <ul class="topic-questions">
            <li>What do recent ESAAMLG mutual evaluations mean in practice for banks, fintechs, energy companies and large corporates operating across East Africa?</li>
            <li>How are central banks and sector regulators in Kenya, Uganda, Tanzania, Rwanda and Ethiopia aligning their AML/CFT frameworks — and where do material divergences remain?</li>
            <li>What are the regulatory priorities for 2027 and beyond — and which sectors should be preparing now?</li>
            <li>How does the regulatory burden land differently on large multinationals versus SMEs and community-based institutions?</li>
          </ul>
          <span class="topic-panel-tag">Central Bank Regulator</span>
          <span class="topic-panel-tag">Commercial Bank CCO</span>
          <span class="topic-panel-tag">FIU Director</span>
          <span class="topic-panel-tag">Legal Advisory</span>
        </div>
      </div>

      <!-- SESSION 02 -->
      <div class="topic-row">
        <div class="topic-head">
          <div class="topic-num">02</div>
          <div class="topic-main">
            <div class="topic-title">Homegrown Solutions: Building GRC Frameworks Fit for Every Sector Across Africa</div>
            <div class="topic-time">11:00 – 11:30 EAT &nbsp;·&nbsp; Cross-Sector Panel &nbsp;·&nbsp; Banking · Energy · Engineering · Manufacturing · Healthcare · Public Sector</div>
          </div>
        </div>
        <div class="topic-body">
          <ul class="topic-questions">
            <li>Why do GRC frameworks imported from Western markets often fail to gain traction in African institutions — whether in banking, oil & gas, manufacturing or healthcare — and what actually works?</li>
            <li>How does a "fit for purpose" governance framework differ between a Tier-1 commercial bank, a mid-sized engineering firm, a regional hospital group, and a government ministry?</li>
            <li>What role should industry associations, professional bodies and regulators play in developing sector-specific GRC standards tailored to East Africa's economic realities?</li>
            <li>How can resource-constrained organisations across energy, agriculture and manufacturing implement meaningful GRC programmes without enterprise-scale budgets?</li>
            <li>What lessons can non-financial sectors learn from the banking sector's compliance journey — and where does financial services still have ground to make up?</li>
          </ul>
          <span class="topic-panel-tag">Oil & Gas Compliance Lead</span>
          <span class="topic-panel-tag">Engineering Risk Director</span>
          <span class="topic-panel-tag">Manufacturing GRC Lead</span>
          <span class="topic-panel-tag">Healthcare CCO</span>
          <span class="topic-panel-tag">Public Sector Governance Director</span>
          <span class="topic-panel-tag">Legal Advisory</span>
        </div>
      </div>

      <!-- SESSION 03 -->
      <div class="topic-row">
        <div class="topic-head">
          <div class="topic-num">03</div>
          <div class="topic-main">
            <div class="topic-title">The Financial Crime Threat: Fraud, Trade-Based Money Laundering, Corruption and Sector-Specific Risks</div>
            <div class="topic-time">11:30 – 12:00 EAT &nbsp;·&nbsp; Case Study Session &nbsp;·&nbsp; All Sectors</div>
          </div>
        </div>
        <div class="topic-body">
          <ul class="topic-questions">
            <li>What are the most prevalent fraud and financial crime typologies currently threatening East African institutions — across mobile money, trade finance, procurement, oil & gas revenue and healthcare billing?</li>
            <li>How is trade-based money laundering evolving across East Africa's regional ports, free trade zones and extractive industry supply chains?</li>
            <li>What is the scale of corruption risk in public sector contracts, infrastructure procurement, and energy licensing across the region — and how are compliance teams responding?</li>
            <li>How are criminal networks exploiting weak links in aviation, transportation and logistics supply chains for financial crime purposes?</li>
            <li>What practical detection, investigation and disruption techniques are proving most effective — and what technology is enabling them?</li>
          </ul>
          <span class="topic-panel-tag">Financial Crime Investigator</span>
          <span class="topic-panel-tag">FIU Representative</span>
          <span class="topic-panel-tag">Fintech Risk Lead</span>
          <span class="topic-panel-tag">Anti-Corruption Agency</span>
          <span class="topic-panel-tag">Oil & Gas Compliance</span>
        </div>
      </div>

      <!-- SESSION 04 -->
      <div class="topic-row">
        <div class="topic-head">
          <div class="topic-num">04</div>
          <div class="topic-main">
            <div class="topic-title">Digital Finance, Cybersecurity & Crypto: Compliance in East Africa's Technology-First Economy</div>
            <div class="topic-time">12:00 – 12:30 EAT &nbsp;·&nbsp; Panel Discussion &nbsp;·&nbsp; Fintech · Telecoms · Banking · Engineering · Healthcare</div>
          </div>
        </div>
        <div class="topic-body">
          <ul class="topic-questions">
            <li>How should East African regulators approach crypto-asset and digital payment oversight without stifling fintech innovation or financial inclusion?</li>
            <li>What KYC, eKYC and digital identity models are best suited to East Africa's largely informal and mobile-first economy — and how should non-financial sectors like telecoms and healthcare approach digital identity?</li>
            <li>As engineering, manufacturing and energy companies undergo digital transformation, what new cybersecurity and data governance risks are they inheriting — and who is responsible?</li>
            <li>How can organisations across all sectors build cyber resilience into their GRC frameworks as operational technology (OT) and IT systems converge?</li>
            <li>What does "responsible AI" governance look like for East African institutions deploying AI in compliance, fraud detection and risk management?</li>
          </ul>
          <span class="topic-panel-tag">Fintech CEO</span>
          <span class="topic-panel-tag">Telecoms Compliance Director</span>
          <span class="topic-panel-tag">CISO</span>
          <span class="topic-panel-tag">Digital Asset Regulator</span>
          <span class="topic-panel-tag">RegTech Provider</span>
        </div>
      </div>

      <!-- SESSION 05 -->
      <div class="topic-row">
        <div class="topic-head">
          <div class="topic-num">05</div>
          <div class="topic-main">
            <div class="topic-title">Governance, Accountability & Board Leadership: Setting the Tone Across Every Sector</div>
            <div class="topic-time">12:30 – 13:00 EAT &nbsp;·&nbsp; Boardroom Roundtable &nbsp;·&nbsp; All Sectors</div>
          </div>
        </div>
        <div class="topic-body">
          <ul class="topic-questions">
            <li>What does effective board-level oversight of compliance and financial crime risk actually look like in practice — across banking, energy, manufacturing, healthcare and the public sector?</li>
            <li>How can non-executive directors hold management to meaningful account on GRC matters without overstepping into operations?</li>
            <li>What are the recurring governance failures in African institutional collapses across all sectors — and what structural interventions prevent them?</li>
            <li>How should boards in extractive industries, engineering groups and infrastructure companies approach ESG governance and anti-bribery frameworks when operating in high-risk environments?</li>
            <li>What does "tone at the top" mean in the African context — where family-owned businesses, state-owned enterprises and multinationals co-exist across the same economy?</li>
          </ul>
          <span class="topic-panel-tag">Board Chair / NED</span>
          <span class="topic-panel-tag">Oil & Gas CRO</span>
          <span class="topic-panel-tag">Audit Committee Chair</span>
          <span class="topic-panel-tag">Public Sector Governance Director</span>
          <span class="topic-panel-tag">Insurance CRO</span>
        </div>
      </div>

      <!-- SESSION 06 -->
      <div class="topic-row">
        <div class="topic-head">
          <div class="topic-num">06</div>
          <div class="topic-main">
            <div class="topic-title">Women Leading GRC: Advancing Gender Equity Across Africa's Compliance and Risk Profession</div>
            <div class="topic-time">13:00 – 13:30 EAT &nbsp;·&nbsp; Leadership Panel &nbsp;·&nbsp; All Sectors</div>
          </div>
        </div>
        <div class="topic-body">
          <ul class="topic-questions">
            <li>What structural barriers still prevent women from reaching senior GRC, risk and compliance leadership roles — in banking, energy, engineering, healthcare, aviation and the public sector?</li>
            <li>How do the experiences of women in GRC leadership differ across sectors? Is the compliance profession more or less gender-equal than engineering, finance or law?</li>
            <li>What mentorship, sponsorship and succession planning models are proving most effective in accelerating women into board and C-suite risk roles across East Africa?</li>
            <li>How should organisations measure, set targets for, and publicly report on gender diversity in their compliance and risk leadership?</li>
            <li>What does the next generation of female GRC professionals in East Africa need — from their employers, their professional bodies and their senior peers?</li>
          </ul>
          <span class="topic-panel-tag">Women in GRC Network</span>
          <span class="topic-panel-tag">Senior Female CCO</span>
          <span class="topic-panel-tag">HR Director (Cross-Sector)</span>
          <span class="topic-panel-tag">NED / Board Member</span>
        </div>
      </div>

      <!-- SESSION 07 -->
      <div class="topic-row">
        <div class="topic-head">
          <div class="topic-num">07</div>
          <div class="topic-main">
            <div class="topic-title">RegTech, AI & Practical Technology Adoption: Across Financial Services, Energy, Manufacturing and Beyond</div>
            <div class="topic-time">Concurrent Roundtables &nbsp;·&nbsp; All Sectors</div>
          </div>
        </div>
        <div class="topic-body">
          <ul class="topic-questions">
            <li>What does "right-sized" RegTech look like for institutions — whether a Tier-1 bank, a mid-size energy company, a manufacturer, or a public sector agency — without enterprise-scale compliance budgets?</li>
            <li>How can transaction monitoring, sanctions screening and KYC automation tools be adapted for industries beyond banking — such as oil & gas payments, manufacturing procurement and healthcare billing?</li>
            <li>What is the role of AI and machine learning in detecting corruption, procurement fraud and financial crime across the engineering, construction and extractive industries?</li>
            <li>How can East African-built RegTech solutions outcompete global vendors on local relevance, language, regulation and cost — and what needs to change in the investment landscape to enable that?</li>
            <li>What implementation pitfalls should organisations across all sectors avoid when deploying new GRC and financial crime technology?</li>
          </ul>
          <span class="topic-panel-tag">RegTech Founder</span>
          <span class="topic-panel-tag">CISO</span>
          <span class="topic-panel-tag">IT/Digital Transformation Lead</span>
          <span class="topic-panel-tag">Engineering Risk Director</span>
          <span class="topic-panel-tag">Compliance Technologist</span>
        </div>
      </div>

      <!-- SESSION 08 -->
      <div class="topic-row">
        <div class="topic-head">
          <div class="topic-num">08</div>
          <div class="topic-main">
            <div class="topic-title">Building the Next Generation: Talent, Education, Certification and the Future of GRC Across All Sectors</div>
            <div class="topic-time">Closing Summit Panel &nbsp;·&nbsp; All Sectors</div>
          </div>
        </div>
        <div class="topic-body">
          <ul class="topic-questions">
            <li>What does the GRC and financial crime prevention curriculum of the future need to include — for professionals entering banking, energy, healthcare, engineering, government and technology roles?</li>
            <li>How can universities, polytechnics, vocational institutions, employers and professional bodies collaborate to close East Africa's compliance and risk talent gap at scale?</li>
            <li>What professional certifications and credentials genuinely matter to employers across different sectors in East Africa — and what should the region be building locally?</li>
            <li>How should the "compliance as a career" narrative be reframed to attract talented young professionals from engineering, technology, law and business backgrounds into GRC roles?</li>
            <li>What does the GRC professional of 2030 look like — and what should today's leaders be doing to build that person's skills and confidence right now?</li>
          </ul>
          <span class="topic-panel-tag">University Dean</span>
          <span class="topic-panel-tag">Early-Career GRC Professional</span>
          <span class="topic-panel-tag">Professional Body Representative</span>
          <span class="topic-panel-tag">Employer (Multi-Sector)</span>
          <span class="topic-panel-tag">Certification Provider</span>
        </div>
      </div>

    </div>

    <!-- Cross-sector note -->
    <div style="margin-top:32px;padding:24px 28px;background:var(--parchment);border-left:3px solid var(--gold);display:flex;gap:20px;align-items:flex-start">
      <span style="font-size:22px;flex-shrink:0">🌐</span>
      <div>
        <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.14em;text-transform:uppercase;color:var(--terracotta);margin-bottom:6px">Cross-Sector Participation</div>
        <p style="font-size:13px;color:var(--text);line-height:1.65">The GRC & Financial Crime Prevention Awards & Summit is not a banking conference. It is a professional platform for <strong>every regulated sector</strong> of East Africa's economy — including banking, insurance, fintech, oil & gas, energy & utilities, engineering & construction, manufacturing, healthcare, aviation, transportation, telecoms, legal, real estate, agriculture and the public sector. Every session is designed to deliver value to compliance, risk and governance professionals regardless of their industry.</p>
      </div>
    </div>

  </div>
</section>

<!-- ── AWARD CATEGORIES ─────────────────────────────── -->
<section class="awards-section" id="awards">
  <div class="awards-inner">
    <div class="section-kicker">Africa Edition — Award Categories 2026</div>
    <h2 class="awards-title">Excellence recognised<br>across <em>every sector of the economy.</em></h2>
    <p style="font-size:15px;color:rgba(255,255,255,0.4);max-width:700px;margin-top:16px;line-height:1.6">The Africa Edition award categories span six pillars and every regulated sector — from financial services and fintech to oil & gas, engineering, manufacturing, healthcare, aviation, telecoms and the public sector. If your organisation or profession involves governance, risk, compliance or financial crime prevention, there is a category for you.</p>

    <div class="category-pillars">
      <div class="pillar-card">
        <div class="pc-num">01</div>
        <div class="pc-name">GRC & FinCrime Achievement Awards</div>
        <div class="pc-cats">
          <div class="pc-cat">Commercial Banks — Financial Crime Prevention & GRC</div>
          <div class="pc-cat">Microfinance Bank — Financial Crime Prevention & GRC</div>
          <div class="pc-cat">Fintech / Mobile Money — Financial Crime Prevention & GRC</div>
          <div class="pc-cat">Insurance — Financial Crime Prevention & GRC</div>
          <div class="pc-cat">Asset Management / Pension — Financial Crime Prevention & GRC</div>
          <div class="pc-cat">ESG Initiative of the Year</div>
        </div>
      </div>
      <div class="pillar-card">
        <div class="pc-num">02</div>
        <div class="pc-name">Sector GRC & FinCrime Excellence Awards</div>
        <div class="pc-cats">
          <div class="pc-cat">Energy / Oil & Gas — GRC & FinCrime Excellence</div>
          <div class="pc-cat">Engineering & Construction — GRC Excellence</div>
          <div class="pc-cat">Manufacturing — GRC & Financial Crime Prevention</div>
          <div class="pc-cat">Utilities & Telecoms — GRC & FinCrime Excellence</div>
          <div class="pc-cat">Health Sector — GRC & FinCrime Excellence</div>
          <div class="pc-cat">Aviation & Aerospace — GRC & FinCrime Excellence</div>
          <div class="pc-cat">Transportation & Logistics — GRC Excellence</div>
          <div class="pc-cat">Legal & Real Estate — GRC & FinCrime Excellence</div>
          <div class="pc-cat">Agriculture & Agribusiness — GRC Excellence</div>
          <div class="pc-cat">Public Sector / NGOs / Charities — Excellence Award</div>
        </div>
      </div>
      <div class="pillar-card">
        <div class="pc-num">03</div>
        <div class="pc-name">Individual Leadership Awards</div>
        <div class="pc-cats">
          <div class="pc-cat">GRC & FinCrime Influencer of the Year</div>
          <div class="pc-cat">Financial Crime Prevention Leadership Award</div>
          <div class="pc-cat">Governance Risk & Compliance Leadership Award</div>
          <div class="pc-cat">Cybersecurity & Data Governance Champion</div>
          <div class="pc-cat">Internal Audit & Assurance Champion</div>
          <div class="pc-cat">Emerging Talent / Rising Star Award (Under 35)</div>
          <div class="pc-cat">GRC Team of the Year Award</div>
        </div>
      </div>
      <div class="pillar-card">
        <div class="pc-num">04</div>
        <div class="pc-name">Women in GRC & FinCrime Prevention Awards</div>
        <div class="pc-cats">
          <div class="pc-cat">Financial Crime Prevention Woman of the Year</div>
          <div class="pc-cat">GRC Woman of the Year — Financial Sector</div>
          <div class="pc-cat">GRC Woman of the Year — Non-Financial Sector</div>
          <div class="pc-cat">Women's Leadership & Inclusion Champion</div>
          <div class="pc-cat">Outstanding Woman in Compliance</div>
        </div>
      </div>
      <div class="pillar-card">
        <div class="pc-num">05</div>
        <div class="pc-name">Media & Promoters Awards</div>
        <div class="pc-cats">
          <div class="pc-cat">GRC & Anti-FinCrime Reporter of the Year</div>
          <div class="pc-cat">GRC & Anti-FinCrime TV Station / Media of the Year</div>
          <div class="pc-cat">GRC & Anti-FinCrime Publication of the Year</div>
          <div class="pc-cat">GRC & Anti-FinCrime Podcast / Digital Media of the Year</div>
        </div>
      </div>
      <div class="pillar-card">
        <div class="pc-num">06</div>
        <div class="pc-name">GRC & FinCrime Providers Awards</div>
        <div class="pc-cats">
          <div class="pc-cat">Best GRC & FinCrime Training Provider of the Year</div>
          <div class="pc-cat">Best GRC & FinCrime Advisory Service of the Year</div>
          <div class="pc-cat">Best GRC & FinCrime Recruitment & Talent Firm</div>
          <div class="pc-cat">GRC & FinCrime Solution / RegTech Provider of the Year</div>
          <div class="pc-cat">Anti-Bribery & Corruption Initiative of the Year</div>
          <div class="pc-cat">Lifetime Achievement Award</div>
        </div>
      </div>
    </div>

    <!-- Sector eligibility banner -->
    <div style="margin-top:32px;display:grid;grid-template-columns:repeat(5,1fr);gap:2px">
      <div style="padding:14px 16px;background:rgba(197,136,30,0.1);border:1px solid rgba(197,136,30,0.15);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:var(--amber);text-transform:uppercase;text-align:center">🏦 Banking & Finance</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">⛽ Oil & Gas</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">⚙️ Engineering</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">🏭 Manufacturing</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">🏥 Healthcare</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">✈️ Aviation</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">📡 Telecoms</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">🚢 Transport</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">🏛️ Public Sector</div>
      <div style="padding:14px 16px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);font-family:var(--font-mono);font-size:10px;letter-spacing:0.08em;color:rgba(255,255,255,0.45);text-transform:uppercase;text-align:center">⚡ Energy</div>
    </div>
    <div style="margin-top:2px;padding:14px 20px;background:rgba(80,200,80,0.05);border:1px solid rgba(80,200,80,0.15)">
      <p style="font-size:12.5px;color:rgba(255,255,255,0.5);line-height:1.6">Nominations are now <strong style="color:rgba(255,255,255,0.8)">closed</strong> across all sectors. <strong style="color:#80D860">Public voting is live — vote for your preferred nominees before 15 August 2026</strong> at grcfincrimeawards.com/vote. For questions about nominee status or the judging process, contact events@grcfincrimeawards.com.</p>
    </div>

    <div class="judging-box">
      <div class="jb-col">
        <div class="jb-label">🗳️ Voting Stage — Now Open</div>
        <div class="jb-text">Nominations have closed. <strong style="color:rgba(255,255,255,0.75)">Public voting is now live</strong> (15 June – 15 August 2026). Vote for your preferred nominees across all categories at grcfincrimeawards.com/vote. The top 5 vote-getters per category proceed to independent judging. Your vote directly determines who the judges see.</div>
      </div>
      <div class="jb-col">
        <div class="jb-label">⚖️ After Voting — The Judging Stage</div>
        <div class="jb-text">Following the close of public voting on 15 August 2026, the top 5 nominees in each category are assessed by our independent judges — each scoring separately, without conflict or bias, with no knowledge of other judges' evaluations. Judges recommend the <strong style="color:rgba(255,255,255,0.75)">top 3 finalists</strong> per category to the Gala Awards Ceremony on 20 November 2026.</div>
      </div>
      <div class="jb-cta">
        <a href="https://www.grcfincrimeawards.com/vote" class="btn-gold" style="background:#4CAF50;border:none;color:#FFFFFF">Vote Now →</a>
      </div>
    </div>
  </div>
</section>


<!-- ── SPOTLIGHT ────────────────────────────────────── -->
<section class="section highlights-section">
  <div class="section-inner">
    <div class="section-kicker">Category Spotlight — Africa</div>
    <h2 class="section-title">The categories everyone's<br><em>watching in Nairobi.</em></h2>
    <div class="rule"></div>
    <p class="section-body">These are the categories drawing the strongest interest from East Africa's compliance, banking and fintech communities this year.</p>

    <div class="highlight-grid">
      <div class="highlight-card">
        <div class="hc-top gold"></div>
        <div class="hc-category">Organisational</div>
        <div class="hc-title">Commercial Banks — Financial Crime Prevention & GRC</div>
        <div class="hc-body">Recognising East African and pan-African banks whose AML/CFT programmes, CDD controls and compliance culture set the regional benchmark. Nominees include Equity Bank, KCB Group, Standard Bank and more.</div>
      </div>
      <div class="highlight-card">
        <div class="hc-top teal"></div>
        <div class="hc-category">Organisational</div>
        <div class="hc-title">Fintech — Financial Crime Prevention & GRC</div>
        <div class="hc-body">For the mobile money and digital finance provider that has best balanced financial inclusion with robust financial crime controls — a defining challenge for East Africa's mobile-first economy.</div>
      </div>
      <div class="highlight-card">
        <div class="hc-top terracotta"></div>
        <div class="hc-category">Individual</div>
        <div class="hc-title">Emerging Talent / Rising Star Award</div>
        <div class="hc-body">Celebrating East Africa's next generation of GRC and financial crime prevention professionals — under-35s whose early career impact signals where the profession is heading.</div>
      </div>
      <div class="highlight-card">
        <div class="hc-top gold"></div>
        <div class="hc-category">Individual</div>
        <div class="hc-title">Women in GRC — Woman of the Year</div>
        <div class="hc-body">Honouring female leaders across East Africa's financial services, regulatory and compliance landscape who are advancing both organisational excellence and the role of women in the profession.</div>
      </div>
      <div class="highlight-card">
        <div class="hc-top teal"></div>
        <div class="hc-category">Individual</div>
        <div class="hc-title">GRC & FinCrime Influencer of the Year</div>
        <div class="hc-body">Awarded to a figure whose thought leadership and public advocacy has shaped the GRC and financial crime prevention conversation across Africa. Past recipients include Tony Elumelu (2025).</div>
      </div>
      <div class="highlight-card">
        <div class="hc-top terracotta"></div>
        <div class="hc-category">Lifetime Recognition</div>
        <div class="hc-title">Lifetime Achievement Award</div>
        <div class="hc-body">The Awards' most prestigious honour — recognising a career body of work that has demonstrably advanced GRC and financial crime prevention across Africa. Past recipients include Dr. Ngozi Okonjo-Iweala (2025).</div>
      </div>
    </div>
  </div>
</section>

<!-- ── NOMINEES ─────────────────────────────────────── -->
<section class="section nominees-section" id="nominees">
  <div class="section-inner">
    <div class="section-kicker">Selected 2026 Nominees</div>
    <h2 class="section-title">East Africa's <em>finest</em><br>are in the running.</h2>
    <div class="rule"></div>
    <p class="section-body">A selection of organisations and individuals officially nominated for the 2026 Africa Edition. Full nominee lists are available at grcfincrimeawards.com/vote.</p>

    <div class="nominee-clusters">
      <div class="cluster">
        <div class="cluster-title">Commercial Banks</div>
        <div class="cluster-tags">
          <div class="cluster-tag">Equity Bank Kenya</div>
          <div class="cluster-tag">KCB Group</div>
          <div class="cluster-tag">Standard Bank Group</div>
          <div class="cluster-tag">Access Bank Group</div>
          <div class="cluster-tag">Zenith Bank</div>
          <div class="cluster-tag">Ecobank Transnational</div>
          <div class="cluster-tag">FirstRand Bank</div>
        </div>
      </div>
      <div class="cluster">
        <div class="cluster-title">Fintech & Digital Finance</div>
        <div class="cluster-tags">
          <div class="cluster-tag">Moniepoint</div>
          <div class="cluster-tag">Flutterwave</div>
          <div class="cluster-tag">OPay</div>
          <div class="cluster-tag">TymeBank</div>
          <div class="cluster-tag">Chipper Cash</div>
          <div class="cluster-tag">Cellulant</div>
          <div class="cluster-tag">Yellow Card</div>
        </div>
      </div>
      <div class="cluster">
        <div class="cluster-title">Women in GRC & FinCrime</div>
        <div class="cluster-tags">
          <div class="cluster-tag">Adaora Umeoji</div>
          <div class="cluster-tag">Dr. Amina Sambo-Magaji</div>
          <div class="cluster-tag">Florence Nwabuzo</div>
          <div class="cluster-tag">Beauty Mtonga</div>
          <div class="cluster-tag">Sithembile Songo</div>
          <div class="cluster-tag">Nkiru Balonwu</div>
        </div>
      </div>
      <div class="cluster">
        <div class="cluster-title">Rising Stars — East Africa</div>
        <div class="cluster-tags">
          <div class="cluster-tag">Vanevola Otieno (Kenya)</div>
          <div class="cluster-tag">Emily Mochama (Kenya)</div>
          <div class="cluster-tag">Victor Mutisya (Kenya)</div>
          <div class="cluster-tag">Gilbert Ouko (Kenya)</div>
          <div class="cluster-tag">Bright Anyanwu</div>
          <div class="cluster-tag">Abena Amoah (Ghana)</div>
        </div>
      </div>
      <div class="cluster">
        <div class="cluster-title">Advisory, Audit & Professional Services</div>
        <div class="cluster-tags">
          <div class="cluster-tag">Deloitte Africa</div>
          <div class="cluster-tag">KPMG Africa</div>
          <div class="cluster-tag">PwC Africa</div>
          <div class="cluster-tag">EY Africa</div>
          <div class="cluster-tag">ENSafrica</div>
          <div class="cluster-tag">DLA Piper Africa</div>
        </div>
      </div>
      <div class="cluster">
        <div class="cluster-title">Influencers & Lifetime Recognition</div>
        <div class="cluster-tags">
          <div class="cluster-tag">Tony Elumelu</div>
          <div class="cluster-tag">Dr. Ngozi Okonjo-Iweala</div>
          <div class="cluster-tag">Cecilia Akintomide</div>
          <div class="cluster-tag">Dr. Gregory Jobome</div>
        </div>
      </div>
    </div>

    <p style="margin-top:28px;font-size:13px;color:var(--light)">Nominees shown represent a selection across categories. Nominations are now closed. <strong style="color:var(--white)">Public voting is open 15 June – 15 August 2026.</strong> <a href="https://www.grcfincrimeawards.com/vote" style="color:var(--gold);text-decoration:none;font-weight:500">Vote now at grcfincrimeawards.com/vote →</a></p>
  </div>
</section>

<!-- ── VENUE ────────────────────────────────────────── -->
<section class="section venue-section" id="venue">
  <div class="section-inner">
    <div class="section-kicker">The Venue</div>
    <h2 class="section-title" style="color:var(--white)">Nairobi's address<br>for <em>international excellence.</em></h2>
    <div class="rule"></div>

    <div class="venue-split">
      <div>
        <div class="venue-title">Marriott Hotel, Nairobi</div>
        <div class="venue-location">UPPER HILL, NAIROBI · KENYA</div>
        <p class="venue-body">The Marriott Hotel Nairobi is one of East Africa's most distinguished luxury venues, located in the heart of Nairobi's Upper Hill district — the city's financial and diplomatic centre. The hotel offers world-class conference, banqueting and exhibition facilities, making it the natural home for East Africa's premier GRC and financial crime prevention gathering.</p>
        <p class="venue-body">Nairobi's standing as the region's foremost financial centre — home to leading regional offices of international banks, development finance institutions, regulators and multilaterals — gives the Africa Edition unparalleled convening power.</p>
        <div class="venue-feature-list">
          <div class="vf-item"><span class="vf-dot"></span>Grand ballroom and plenary conference hall</div>
          <div class="vf-item"><span class="vf-dot"></span>Dedicated exhibition and networking spaces</div>
          <div class="vf-item"><span class="vf-dot"></span>High-specification AV and presentation technology</div>
          <div class="vf-item"><span class="vf-dot"></span>Fine dining and premium catering services</div>
          <div class="vf-item"><span class="vf-dot"></span>On-site luxury accommodation for delegates</div>
          <div class="vf-item"><span class="vf-dot"></span>Accessible from Nairobi CBD — approx. 5km, 10 minutes</div>
        </div>
      </div>

      <div class="venue-card">
        <div class="vc-header">Event Details — At a Glance</div>
        <div class="vc-item"><span class="vc-label">Date</span><span class="vc-val">20 November 2026</span></div>
        <div class="vc-item"><span class="vc-label">Registration</span><span class="vc-val">09:00 EAT</span></div>
        <div class="vc-item"><span class="vc-label">Summit</span><span class="vc-val">10:00 – 14:00 EAT</span></div>
        <div class="vc-item"><span class="vc-label">Break</span><span class="vc-val">14:00 – 16:00 EAT</span></div>
        <div class="vc-item"><span class="vc-label">Gala Ceremony</span><span class="vc-val">16:00 – 19:00 EAT</span></div>
        <div class="vc-item"><span class="vc-label">Dress Code</span><span class="vc-val">Black Tie / African Formal</span></div>
        <div class="vc-item"><span class="vc-label">Capacity</span><span class="vc-val">Up to 200 guests</span></div>
        <div class="vc-item"><span class="vc-label">Contact</span><span class="vc-val">events@grcfincrimeawards.com</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ── GETTING THERE & NEARBY ────────────────────────── -->
<section class="section location-section">
  <div class="section-inner">
    <div class="section-kicker">Getting There</div>
    <h2 class="section-title">Finding your way<br>to <em>Upper Hill, Nairobi.</em></h2>
    <div class="rule"></div>
    <p class="section-body">The Marriott Hotel, Nairobi sits in the Upper Hill district — Nairobi's financial and diplomatic heart, just minutes from the Central Business District and well connected to both of the city's airports.</p>

    <div class="transport-grid">
      <div class="transport-card">
        <div class="tc-icon">✈️</div>
        <div class="tc-title">From Jomo Kenyatta Int'l Airport (JKIA)</div>
        <div class="tc-body">Kenya's main international gateway. Take a taxi, Uber/Bolt, or pre-arranged hotel transfer directly to Upper Hill via Mombasa Road and Uhuru Highway.</div>
        <span class="tc-time">~25–40 min drive</span>
      </div>
      <div class="transport-card">
        <div class="tc-icon">🛩️</div>
        <div class="tc-title">From Wilson Airport</div>
        <div class="tc-body">Nairobi's domestic and regional hub — convenient for delegates arriving from elsewhere in East Africa. Short, direct drive to Upper Hill via Lang'ata Road.</div>
        <span class="tc-time">~10–15 min drive</span>
      </div>
      <div class="transport-card">
        <div class="tc-icon">🏙️</div>
        <div class="tc-title">From Nairobi CBD</div>
        <div class="tc-body">A short hop from the city centre via Uhuru Highway or Haile Selassie Avenue. Walkable for guests staying in CBD hotels with time to spare.</div>
        <span class="tc-time">~10 min drive / 25 min walk</span>
      </div>
      <div class="transport-card">
        <div class="tc-icon">🚕</div>
        <div class="tc-title">Ride-hailing & Taxis</div>
        <div class="tc-body">Uber, Bolt and local taxi services operate widely across Nairobi and are the most convenient way to reach the venue. The hotel also offers an airport shuttle service on request.</div>
        <span class="tc-time">Available 24/7</span>
      </div>
    </div>

    <!-- Map / Address banner -->
    <div class="map-banner">
      <div class="map-text">
        <div class="map-label">Venue Address</div>
        <div class="map-title">Marriott Hotel, Nairobi</div>
        <div class="map-address">Upper Hill, Nairobi, Kenya</div>
        <p class="map-body">Located in the heart of Upper Hill — Nairobi's premier business district, home to major banks, multinational corporations, regional regulators and diplomatic missions. The venue is easily identifiable and well signposted from Uhuru Highway and Ralph Bunche Road.</p>
        <p class="map-body" style="margin-bottom:0">For delegates requiring visa or travel letters, or detailed transfer arrangements, please contact <strong style="color:var(--gold)">events@grcfincrimeawards.com</strong>.</p>
      </div>
      <div class="map-visual">
        <div class="map-pin">
          <div class="map-pin-dot">📍</div>
          <div class="map-pin-label">Marriott Hotel · Upper Hill</div>
        </div>
      </div>
    </div>

    <!-- Nearby Amenities -->
    <div style="margin-top:64px">
      <div class="section-kicker">While You're In Nairobi</div>
      <h3 style="font-family:var(--font-display);font-size:28px;font-weight:600;color:var(--ink);margin-bottom:8px">Make the most of your visit</h3>
      <p style="font-size:14px;color:var(--mid);line-height:1.7;max-width:680px">Delegates travelling to Nairobi for the Africa Edition may wish to extend their stay. Upper Hill and the surrounding districts offer excellent dining, shopping, culture and nature — all within easy reach of the venue.</p>

      <div class="amenity-tabs-grid">
        <div class="amenity-group">
          <div class="ag-title">🍽️ Dining & Nightlife</div>
          <div class="amenity-item"><div class="am-name">Restaurants & cafés in Upper Hill & Hurlingham</div><div class="am-dist">5–10 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Yaya Centre (shopping & dining)</div><div class="am-dist">~10 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Westlands dining & nightlife district</div><div class="am-dist">~20 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Hotel restaurants & lounge bar (on-site)</div><div class="am-dist">On-site</div></div>
        </div>

        <div class="amenity-group">
          <div class="ag-title">🛍️ Shopping</div>
          <div class="amenity-item"><div class="am-name">Galleria Shopping Mall</div><div class="am-dist">~25 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Yaya Centre</div><div class="am-dist">~10 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Two Rivers Mall</div><div class="am-dist">~35 min drive</div></div>
          <div class="amenity-item"><div class="am-name">The Hub, Karen</div><div class="am-dist">~25–30 min drive</div></div>
        </div>

        <div class="amenity-group">
          <div class="ag-title">🦒 Culture & Wildlife</div>
          <div class="amenity-item"><div class="am-name">Nairobi National Park</div><div class="am-dist">~20 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Giraffe Centre</div><div class="am-dist">~25 min drive</div></div>
          <div class="amenity-item"><div class="am-name">David Sheldrick Wildlife Trust</div><div class="am-dist">~25 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Karen Blixen Museum</div><div class="am-dist">~30 min drive</div></div>
          <div class="amenity-item"><div class="am-name">National Museum of Kenya</div><div class="am-dist">~15 min drive</div></div>
        </div>

        <div class="amenity-group">
          <div class="ag-title">🌳 Parks & Recreation</div>
          <div class="amenity-item"><div class="am-name">Uhuru Park</div><div class="am-dist">~10 min walk</div></div>
          <div class="amenity-item"><div class="am-name">Nairobi Arboretum</div><div class="am-dist">~15 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Kenya Railway Golf Club</div><div class="am-dist">~5 min drive</div></div>
          <div class="amenity-item"><div class="am-name">Royal Nairobi Golf Club</div><div class="am-dist">~10 min drive</div></div>
        </div>
      </div>

      <div style="margin-top:32px;padding:20px 24px;background:var(--parchment);border-left:3px solid var(--gold);font-size:13px;color:var(--text);line-height:1.65">
        💡 <strong>Tip for international delegates:</strong> Nairobi's altitude (~1,795m) and equatorial climate mean mild temperatures year-round (typically 15–25°C in November). Light layers are recommended for daytime, with a jacket for cooler evenings. A valid passport and, for many nationalities, an eVisa or e-Travel Authorisation are required for entry into Kenya — apply in advance via the official Kenya eTA portal.
      </div>
    </div>
  </div>
</section>

<!-- ── TICKETS & BOOKING ────────────────────────────── -->
<section class="section tickets-section" id="tickets">
  <div class="section-inner">
    <div class="section-kicker">Tickets & Booking</div>
    <h2 class="section-title">Reserve your place<br>in <em>Nairobi.</em></h2>
    <div class="rule"></div>
    <p class="section-body">Delegate tickets cover full access to both the morning Summit and the evening Gala Awards Ceremony on 20 November 2026. A limited number of tickets are available — early booking is strongly recommended as previous editions have sold out in advance of the event date.</p>

    <div class="ticket-grid">
      <div class="ticket-card">
        <div class="ticket-name">Summit Pass</div>
        <div class="ticket-price">USD 150<span> / KES 19,500</span></div>
        <div class="ticket-price-alt">Morning access only</div>
        <div class="ticket-desc">Full access to the morning Summit programme — keynotes, panel discussions and networking luncheon.</div>
        <ul class="ticket-includes">
          <li>Summit sessions, 10:00–14:00 EAT</li>
          <li>Networking luncheon</li>
          <li>Delegate pack & materials</li>
          <li>Digital certificate of attendance</li>
        </ul>
        <a href="mailto:events@grcfincrimeawards.com?subject=Africa Edition - Summit Pass Booking" class="ticket-cta">Reserve Summit Pass</a>
      </div>

      <div class="ticket-card featured">
        <div class="ticket-badge">Most Popular</div>
        <div class="ticket-name">Full Delegate Pass</div>
        <div class="ticket-price">USD 350<span style="color:rgba(255,255,255,0.4)"> / KES 45,500</span></div>
        <div class="ticket-price-alt">Summit + Gala — Full Day</div>
        <div class="ticket-desc">The complete experience — full day Summit access plus the evening Gala Awards Ceremony, dinner and reception.</div>
        <ul class="ticket-includes">
          <li>Full Summit programme, 10:00–14:00 EAT</li>
          <li>Networking luncheon</li>
          <li>Cocktail reception, 16:00 EAT</li>
          <li>Gala Awards Ceremony & formal dinner</li>
          <li>Reserved seating at Gala</li>
          <li>Delegate pack & digital certificate</li>
        </ul>
        <a href="mailto:events@grcfincrimeawards.com?subject=Africa Edition - Full Delegate Pass Booking" class="ticket-cta">Reserve Full Pass</a>
      </div>

      <div class="ticket-card">
        <div class="ticket-name">Gala Only Pass</div>
        <div class="ticket-price">USD 220<span> / KES 28,600</span></div>
        <div class="ticket-price-alt">Evening access only</div>
        <div class="ticket-desc">For guests attending only the Gala Awards Ceremony — ideal for VIPs, nominees' guests and partners.</div>
        <ul class="ticket-includes">
          <li>Cocktail reception, 16:00 EAT</li>
          <li>Gala Awards Ceremony & formal dinner</li>
          <li>Standard seating</li>
          <li>Digital event programme</li>
        </ul>
        <a href="mailto:events@grcfincrimeawards.com?subject=Africa Edition - Gala Only Pass Booking" class="ticket-cta">Reserve Gala Pass</a>
      </div>

      <div class="ticket-card">
        <div class="ticket-name">Student / Academic</div>
        <div class="ticket-price">USD 60<span> / KES 7,800</span></div>
        <div class="ticket-price-alt">Summit access — valid ID required</div>
        <div class="ticket-desc">Discounted access for full-time students and academic staff from accredited institutions across East Africa.</div>
        <ul class="ticket-includes">
          <li>Summit sessions, 10:00–14:00 EAT</li>
          <li>Networking luncheon</li>
          <li>Delegate pack & materials</li>
          <li>Valid student/staff ID required at registration</li>
        </ul>
        <a href="mailto:events@grcfincrimeawards.com?subject=Africa Edition - Student Pass Booking" class="ticket-cta">Reserve Student Pass</a>
      </div>
    </div>

    <!-- Group / Table Booking Banner -->
    <div class="group-banner">
      <div class="gb-text">
        <div class="gb-label">Group & Table Bookings</div>
        <div class="gb-title">Bring your team to Nairobi</div>
        <div class="gb-body">Reserve a full table of 10 at the Gala Awards Ceremony, or book group Full Delegate Passes for your organisation at a preferential rate. Ideal for sponsors, corporate teams and award nominees bringing colleagues to celebrate together.</div>
      </div>
      <div class="gb-price">
        <div class="gb-price-val">10%</div>
        <div class="gb-price-lbl">Off groups of 6+</div>
      </div>
      <a href="mailto:events@grcfincrimeawards.com?subject=Africa Edition - Group/Table Booking Enquiry" class="cta-btn primary" style="flex-shrink:0">Enquire About Groups</a>
    </div>

    <!-- Booking Process -->
    <div class="booking-layout">
      <div>
        <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.16em;text-transform:uppercase;color:var(--terracotta);margin-bottom:8px">How to Book</div>
        <h3 style="font-family:var(--font-display);font-size:26px;font-weight:600;color:var(--ink);margin-bottom:8px">Four steps to your seat in Nairobi</h3>
        <div class="booking-steps">
          <div class="bstep">
            <div class="bstep-num">01</div>
            <div class="bstep-content">
              <div class="bstep-title">Choose your ticket type</div>
              <div class="bstep-body">Select the pass that suits your plans — Summit Pass, Full Delegate Pass, Gala Only, or Student/Academic. Group and table bookings are available for organisations sending multiple delegates.</div>
            </div>
          </div>
          <div class="bstep">
            <div class="bstep-num">02</div>
            <div class="bstep-content">
              <div class="bstep-title">Submit your booking request</div>
              <div class="bstep-body">Email <strong>events@grcfincrimeawards.com</strong> with your chosen ticket type, number of delegates, and organisation name — or use the "Reserve" buttons above to start your request by email directly.</div>
            </div>
          </div>
          <div class="bstep">
            <div class="bstep-num">03</div>
            <div class="bstep-content">
              <div class="bstep-title">Receive confirmation & invoice</div>
              <div class="bstep-body">Our events team will confirm availability and send a formal invoice. Payment can be made via bank transfer (USD or KES) or by card. A confirmation email and e-ticket will be issued upon receipt of payment.</div>
            </div>
          </div>
          <div class="bstep">
            <div class="bstep-num">04</div>
            <div class="bstep-content">
              <div class="bstep-title">Check in on the day</div>
              <div class="bstep-body">Bring your e-ticket (digital or printed) and valid photo ID to registration from 09:00 EAT on 20 November 2026. Our team will issue your delegate badge and welcome pack on arrival.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="booking-info-card">
        <div class="bic-label">Booking Information</div>
        <div class="bic-row"><span class="bic-k">Booking opens</span><span class="bic-v">Now</span></div>
        <div class="bic-row"><span class="bic-k">Early bird deadline</span><span class="bic-v">31 August 2026</span></div>
        <div class="bic-row"><span class="bic-k">Standard booking closes</span><span class="bic-v">14 November 2026</span></div>
        <div class="bic-row"><span class="bic-k">Accepted payment</span><span class="bic-v">Bank transfer (USD/KES), card</span></div>
        <div class="bic-row"><span class="bic-k">Confirmation</span><span class="bic-v">Email + e-ticket within 3 business days</span></div>
        <div class="bic-row"><span class="bic-k">Cancellation policy</span><span class="bic-v">Full refund up to 30 days prior</span></div>
        <div class="bic-row"><span class="bic-k">Transfers</span><span class="bic-v">Delegate substitutions accepted any time</span></div>
        <div class="bic-row"><span class="bic-k">Enquiries</span><span class="bic-v">events@grcfincrimeawards.com</span></div>
        <div class="bic-note">⚡ Early bird pricing saves up to 15% on Full Delegate Passes when booked before 31 August 2026. Tickets are limited to 200 guests — early booking is strongly recommended.</div>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA ──────────────────────────────────────────── -->
<section class="cta-section">
  <div class="cta-inner">
    <div style="font-family:var(--font-mono);font-size:10px;letter-spacing:0.2em;color:#80D860;text-transform:uppercase;margin-bottom:20px;display:flex;align-items:center;justify-content:center;gap:8px"><span class="vb-dot"></span>Voting Now Open</div>
    <h2 class="cta-title">Voting closes <em>15 August.</em><br>Make your voice count.</h2>
    <p class="cta-body">Nominations are closed. This is your chance to cast your vote and determine who the independent judges will evaluate for the 2026 Gala Awards Ceremony in Nairobi. The top 5 in each category go to judging — the top 3 receive finalist recognition on the night.</p>
    <div class="cta-buttons">
      <a href="https://www.grcfincrimeawards.com/vote" class="cta-btn primary" style="background:#4CAF50;border-color:#4CAF50">Cast Your Vote Now</a>
      <a href="mailto:events@grcfincrimeawards.com" class="cta-btn secondary">Sponsorship Enquiries</a>
      <a href="#tickets" class="cta-btn secondary">Book Your Tickets</a>
    </div>
    <p class="cta-contact">events@grcfincrimeawards.com &nbsp;·&nbsp; grcfincrimeawards.com &nbsp;·&nbsp; Marriott Hotel, Nairobi &nbsp;·&nbsp; 20 November 2026</p>
  </div>
</section>

	<!-- =============== FOOTER =============== -->
	@include('partials.voter.footer')

    @include('partials.voter.scripts')
</body>
</html>