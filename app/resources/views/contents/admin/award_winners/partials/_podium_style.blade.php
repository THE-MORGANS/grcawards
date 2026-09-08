<style>
    /* Podium */
    .wn-podium-wrap {
        background: #fff;
        border: 1px solid #eef2f7;
        border-radius: 14px;
        padding: 40px 24px 0;
        margin-top: 22px;
        position: relative;
        overflow: hidden;
    }
    .wn-podium-wrap::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 4px;
        background: linear-gradient(90deg, #cd7f32, #e0bb3e, #98a6ad);
    }
    .wn-podium { display: flex; align-items: flex-end; justify-content: center; gap: 18px; max-width: 720px; margin: 0 auto; }
    .wn-pod-col { flex: 1 1 0; max-width: 220px; display: flex; flex-direction: column; align-items: center; }
    .wn-pod-1 { order: 2; }
    .wn-pod-2 { order: 1; }
    .wn-pod-3 { order: 3; }

    .wn-pod-medal { width: 46px; height: 46px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; font-weight: 700; color: #fff; margin-bottom: 10px; box-shadow: 0 4px 10px rgba(0,0,0,.12); }
    .wn-pod-1 .wn-pod-medal { width: 58px; height: 58px; font-size: 24px; background: linear-gradient(145deg, #f7e08c, #c9a227); }
    .wn-pod-2 .wn-pod-medal { background: linear-gradient(145deg, #e4e9ed, #98a6ad); }
    .wn-pod-3 .wn-pod-medal { background: linear-gradient(145deg, #f0b083, #b0691f); }
    .wn-pod-crown { color: #e0bb3e; font-size: 22px; margin-bottom: 2px; }

    .wn-pod-name { font-size: 14px; font-weight: 700; color: #1a2233; text-align: center; line-height: 1.3; margin-bottom: 4px; text-wrap: balance; min-height: 36px; display: flex; align-items: center; }
    .wn-pod-1 .wn-pod-name { font-size: 15.5px; }
    .wn-pod-score { font-size: 22px; font-weight: 800; color: #a4790f; line-height: 1; font-variant-numeric: tabular-nums; }
    .wn-pod-1 .wn-pod-score { font-size: 28px; color: #b6871a; }
    .wn-pod-score-lbl { font-size: 9.5px; letter-spacing: .06em; text-transform: uppercase; color: #98a6ad; margin: 3px 0 12px; }

    .wn-pod-stand { width: 100%; border-radius: 8px 8px 0 0; display: flex; align-items: flex-start; justify-content: center; padding-top: 10px; font-size: 26px; font-weight: 800; color: rgba(255,255,255,.85); }
    .wn-pod-1 .wn-pod-stand { height: 130px; background: linear-gradient(180deg, #dcb646, #a4790f); }
    .wn-pod-2 .wn-pod-stand { height: 95px; background: linear-gradient(180deg, #b7c0c6, #7d8a92); }
    .wn-pod-3 .wn-pod-stand { height: 72px; background: linear-gradient(180deg, #d38f52, #9c5f24); }
    .wn-pod-empty { flex: 1 1 0; max-width: 220px; text-align: center; color: #c3cbd4; font-size: 12.5px; font-style: italic; padding-bottom: 40px; }

    /* Compact variant — used when several podiums sit on one page (sectors/awards view) */
    .wn-podium-wrap.is-compact { padding: 26px 16px 0; margin-top: 16px; }
    .wn-podium-wrap.is-compact .wn-podium { gap: 10px; }
    .wn-podium-wrap.is-compact .wn-pod-medal { width: 34px; height: 34px; font-size: 13px; margin-bottom: 7px; }
    .wn-podium-wrap.is-compact .wn-pod-1 .wn-pod-medal { width: 42px; height: 42px; font-size: 16px; }
    .wn-podium-wrap.is-compact .wn-pod-name { font-size: 11.5px; min-height: 28px; }
    .wn-podium-wrap.is-compact .wn-pod-1 .wn-pod-name { font-size: 12.5px; }
    .wn-podium-wrap.is-compact .wn-pod-score { font-size: 16px; }
    .wn-podium-wrap.is-compact .wn-pod-1 .wn-pod-score { font-size: 20px; }
    .wn-podium-wrap.is-compact .wn-pod-score-lbl { margin: 2px 0 8px; }
    .wn-podium-wrap.is-compact .wn-pod-1 .wn-pod-stand { height: 80px; }
    .wn-podium-wrap.is-compact .wn-pod-2 .wn-pod-stand { height: 58px; }
    .wn-podium-wrap.is-compact .wn-pod-3 .wn-pod-stand { height: 44px; }
    .wn-podium-wrap.is-compact .wn-pod-stand { font-size: 18px; }

    /* Breakdown cards */
    .wn-breakdown { margin-top: 26px; }
    .wn-breakdown.is-compact { margin-top: 16px; }
    .wn-bd-card { border: 1px solid #eef2f7; border-radius: 12px; padding: 18px 18px 16px; background: #fff; height: 100%; }
    .is-compact .wn-bd-card { padding: 13px 14px 12px; }
    .wn-bd-head { display: flex; align-items: center; gap: 10px; margin-bottom: 14px; }
    .is-compact .wn-bd-head { margin-bottom: 9px; }
    .wn-bd-rank { flex-shrink: 0; width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12.5px; font-weight: 700; color: #fff; }
    .is-compact .wn-bd-rank { width: 22px; height: 22px; font-size: 11px; }
    .wn-bd-rank.r1 { background: #c9a227; }
    .wn-bd-rank.r2 { background: #98a6ad; }
    .wn-bd-rank.r3 { background: #b0691f; }
    .wn-bd-name { font-size: 13.5px; font-weight: 700; color: #313a46; line-height: 1.3; }
    .is-compact .wn-bd-name { font-size: 12px; }
    .wn-bd-row { display: flex; align-items: center; justify-content: space-between; font-size: 12px; padding: 7px 0; border-bottom: 1px dashed #eef2f7; }
    .is-compact .wn-bd-row { font-size: 11px; padding: 5px 0; }
    .wn-bd-row:last-of-type { border-bottom: none; }
    .wn-bd-row .lbl { color: #6c757d; }
    .wn-bd-row .expr { font-variant-numeric: tabular-nums; color: #313a46; font-weight: 600; }
    .wn-bd-total { margin-top: 10px; padding-top: 10px; border-top: 2px solid #f7e8b8; display: flex; align-items: center; justify-content: space-between; }
    .is-compact .wn-bd-total { margin-top: 7px; padding-top: 7px; }
    .wn-bd-total .lbl { font-size: 11.5px; font-weight: 700; text-transform: uppercase; letter-spacing: .04em; color: #a4790f; }
    .wn-bd-total .val { font-size: 19px; font-weight: 800; color: #a4790f; font-variant-numeric: tabular-nums; }
    .is-compact .wn-bd-total .val { font-size: 16px; }

    .wn-capture { background: #f7f8fc; border-radius: 16px; padding: 1px; }

    .wn-mini-export {
        display: inline-flex; align-items: center; gap: 5px;
        margin-top: 12px; background: none; border: none; padding: 0;
        font-size: 11.5px; font-weight: 600; color: #a4790f;
    }
    .wn-mini-export:hover { color: #7a5a0c; text-decoration: underline; }

    @media print {
        .side-nav, .navbar-custom, .footer, .wn-export-row, .wn-mini-export { display: none !important; }
        .content-page { margin-left: 0 !important; }
    }
</style>
