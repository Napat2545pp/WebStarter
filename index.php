<?php // หน้าเว็บรับจ้างทำเว็บไซต์ สไตล์เรียบหรู ฟอนต์ Prompt ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝐖𝐞𝐛𝐒𝐭𝐚𝐫𝐭𝐞𝐫</title>
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <!-- Google Fonts: Prompt -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- baguetteBox CSS for Lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <style>
        html, body, #preloader-overlay {
            width: 100vw;
            max-width: 100vw;
            overflow-x: hidden !important;
            box-sizing: border-box;
        }
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Prompt', sans-serif;
            background: #fff;
            margin: 0;
            color: #111;
        }
        header {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            padding: 32px 0 16px 0;
            text-align: center;
        }
        .logo {
            font-size: 2.2rem;
            font-weight: 700;
            color: #111;
            letter-spacing: 2px;
        }
        .subtitle {
            font-size: 1.1rem;
            color: #444;
            margin-top: 8px;
        }
        .packages {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 32px;
            margin: 48px 0 32px 0;
            width: 100%;
            box-sizing: border-box;
        }
        .package {
            background: #fff;
            border: 2px solid #111;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.04);
            padding: 32px 28px;
            min-width: 260px;
            max-width: 320px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            width: 100%;
            box-sizing: border-box;
        }
        .package:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 32px rgba(0,0,0,0.10);
        }
        .package-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #111;
            margin-bottom: 12px;
        }
        .package-price {
            font-size: 2.1rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 10px;
        }
        .package-desc {
            color: #444;
            font-size: 1rem;
            margin-bottom: 18px;
        }
        .contact-btn {
            display: inline-block;
            background: #111;
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            padding: 12px 32px;
            font-size: 1.1rem;
            text-decoration: none;
            margin-top: 18px;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .contact-btn:hover {
            background: #444;
            color: #fff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
        .package-eye {
            position: absolute;
            top: 18px;
            right: 18px;
            background: #fff;
            border: 2px solid #111;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.2s, border 0.2s;
            z-index: 2;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        .package-eye:hover {
            background: #111;
            border-color: #111;
        }
        .package-eye svg {
            width: 22px;
            height: 22px;
            fill: #111;
            transition: fill 0.2s;
        }
        .package-eye:hover svg {
            fill: #fff;
        }
        .detail-btn {
            display: inline-block;
            background: #fff;
            color: #111;
            border: 2px solid #111;
            border-radius: 8px;
            padding: 8px 22px;
            font-size: 1rem;
            font-weight: 600;
            margin-top: 10px;
            margin-left: 8px;
            cursor: pointer;
            transition: background 0.2s, color 0.2s, border 0.2s;
        }
        .detail-btn:hover {
            background: #111;
            color: #fff;
        }
        /* Modal Styles */
        .modal-bg {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0; top: 0; width: 100vw; height: 100vh;
            background: rgba(0,0,0,0.35);
            justify-content: center;
            align-items: center;
            animation: fadeInBg 0.25s;
        }
        @keyframes fadeInBg {
            from { background: rgba(0,0,0,0); }
            to   { background: rgba(0,0,0,0.35);}
        }
        .modal-bg.active { display: flex; }
        .modal-box {
            background: #fff;
            border-radius: 24px;
            max-width: 420px;
            width: 92vw;
            padding: 38px 36px 28px 36px;
            box-shadow: 0 12px 48px rgba(0,0,0,0.18), 0 2px 8px rgba(0,0,0,0.10);
            position: relative;
            animation: modalPop 0.28s cubic-bezier(.4,1.6,.6,1);
        }
        @keyframes modalPop {
            from { opacity: 0; transform: scale(0.92);}
            to   { opacity: 1; transform: scale(1);}
        }
        .modal-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: #111;
            margin-bottom: 18px;
            text-align: left;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .modal-title::before {
            content: '';
            display: inline-block;
            width: 8px; height: 28px;
            border-radius: 6px;
            background: #111;
            margin-right: 8px;
        }
        .modal-list {
            margin: 0 0 8px 0;
            padding-left: 22px;
            color: #222;
            font-size: 1.08rem;
            line-height: 1.7;
        }
        .modal-list li {
            margin-bottom: 7px;
        }
        .modal-close {
            position: absolute;
            top: 18px; right: 22px;
            font-size: 1.7rem;
            color: #bbb;
            background: none;
            border: none;
            cursor: pointer;
            transition: color 0.2s, transform 0.18s;
            z-index: 2;
            padding: 0;
            line-height: 1;
        }
        .modal-close:hover {
            color: #111;
            transform: rotate(90deg) scale(1.15);
        }
        @media (max-width: 600px) {
            .modal-box { padding: 22px 8vw 18px 8vw; }
            .modal-title { font-size: 1.08rem; }
        }
        /* Portfolio Section */
        .portfolio-section {
            max-width: 1100px;
            margin: 0 auto 48px auto;
            padding: 0 16px;
        }
        .portfolio-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111;
            text-align: center;
            margin-bottom: 24px;
            letter-spacing: 1px;
        }
        .portfolio-filter {
            display: flex;
            justify-content: center;
            gap: 18px;
            margin-bottom: 32px;
        }
        .filter-btn {
            font-family: 'Prompt', sans-serif;
            background: none;
            color: #111;
            border: none;
            border-radius: 999px;
            padding: 8px 28px;
            font-size: 1.08rem;
            font-weight: 600;
            cursor: pointer;
            position: relative;
            transition: color 0.18s;
            outline: none;
            box-shadow: none;
            letter-spacing: 0.5px;
        }
        .filter-btn::after {
            content: '';
            display: block;
            position: absolute;
            left: 24px; right: 24px; bottom: 4px;
            height: 3px;
            border-radius: 2px;
            background: #111;
            opacity: 0;
            transform: scaleX(0.5);
            transition: opacity 0.18s, transform 0.18s;
        }
        .filter-btn.active, .filter-btn:hover {
            color: #111;
            background: #f3f3f3;
        }
        .filter-btn.active::after, .filter-btn:hover::after {
            opacity: 1;
            transform: scaleX(1);
        }
        .portfolio-category-block {
            margin-bottom: 38px;
        }
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 28px;
        }
        .portfolio-item {
            background: #fafafa;
            border: 1.5px solid #eee;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
            transition: box-shadow 0.2s;
        }
        .portfolio-item:hover {
            box-shadow: 0 6px 24px rgba(0,0,0,0.10);
        }
        .portfolio-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }
        .portfolio-caption {
            padding: 14px 12px 10px 12px;
            font-size: 1rem;
            color: #222;
            text-align: center;
        }
        .portfolio-category-title {
            text-align: left;
            color: #111;
            margin-bottom: 12px;
            margin-top: 32px;
            font-size: 1.15rem;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .see-more-link {
            display: inline-flex;
            align-items: center;
            color: #111;
            font-weight: 600;
            font-size: 1.05rem;
            text-decoration: none;
            gap: 6px;
            transition: color 0.18s;
            margin: 10px 0 32px 0;
            padding: 0;
            background: none;
            border: none;
            cursor: pointer;
            box-shadow: none;
        }
        .see-more-link svg {
            width: 18px;
            height: 18px;
            fill: #111;
            transition: transform 0.18s, fill 0.18s;
        }
        .see-more-link:hover {
            color: #0072ff;
        }
        .see-more-link:hover svg {
            fill: #0072ff;
            transform: translateX(3px);
        }
        .see-more-wrap {
            text-align: right;
        }
        .see-more-btn {
            display: inline-block;
            background: #111;
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 28px;
            font-size: 1rem;
            text-decoration: none;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .see-more-btn:hover {
            background: #444;
            color: #fff;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
        /* Workflow Timeline Modern */
        .workflow-timeline {
          display: flex;
          justify-content: center;
          align-items: flex-start;
          gap: 0;
          margin: 48px 0 32px 0;
          position: relative;
          flex-wrap: wrap;
        }
        .workflow-step-timeline {
          flex: 1 1 180px;
          min-width: 180px;
          max-width: 260px;
          text-align: center;
          position: relative;
          padding: 0 18px;
          background: none;
          z-index: 1;
          animation: fadeInUp 0.7s;
        }
        @keyframes fadeInUp {
          from { opacity: 0; transform: translateY(30px);}
          to { opacity: 1; transform: translateY(0);}
        }
        .workflow-step-circle {
          width: 48px;
          height: 48px;
          background: #fff;
          border: 2.5px solid #111;
          border-radius: 50%;
          margin: 0 auto 12px auto;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 1.5rem;
          font-weight: 700;
          color: #111;
          box-shadow: 0 2px 8px rgba(0,0,0,0.07);
          transition: background 0.2s, color 0.2s, border 0.2s;
        }
        .workflow-step-timeline:hover .workflow-step-circle {
          background: #111;
          color: #fff;
          border-color: #111;
        }
        .workflow-step-title {
          font-size: 1.08rem;
          font-weight: 700;
          color: #111;
          margin-bottom: 6px;
          margin-top: 0;
          letter-spacing: 0.5px;
        }
        .workflow-step-desc {
          color: #444;
          font-size: 0.98rem;
          margin-bottom: 0;
        }
        .workflow-timeline .workflow-step-timeline:not(:last-child)::after {
          content: '';
          position: absolute;
          top: 24px;
          right: -9px;
          width: 100%;
          max-width: 80px;
          height: 3px;
          background: #111;
          z-index: 0;
          opacity: 0.13;
        }
        @media (max-width: 900px) {
          .workflow-timeline {
            flex-direction: column;
            align-items: center;
          }
          .workflow-timeline .workflow-step-timeline:not(:last-child)::after {
            top: 48px;
            left: 50%;
            right: auto;
            width: 3px;
            height: 48px;
            max-width: 3px;
            transform: translateX(-50%);
          }
        }
        @media (max-width: 900px) {
            .packages {
                flex-direction: column;
                align-items: center;
            }
            .portfolio-grid {
                grid-template-columns: 1fr;
            }
        }
        .fist-price{
            color : black;
            font-size: 14px;
            margin: 5px;
        }
        /* About Section ขาวดำ */
        .special-about {
          max-width: 700px;
          margin: 36px auto 0 auto;
          padding: 0 16px 32px 16px;
          text-align: center;
          animation: fadeInAbout 1.1s;
        }
        .about-title-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            text-align: center;
        }
        .about-title {
            font-size: 1.45rem;
            font-weight: 800;
            color: #111;
            letter-spacing: 1px;
            position: relative;
            display: inline-block;
        }
        .about-inline-logo {
            height: 32px;
            width: auto;
            vertical-align: middle;
            margin-left: 10px;
            margin-bottom: 2px;
            max-width: 60vw;
        }
        .about-title-icon {
          font-size: 2.1rem;
          color: #222;
          opacity: 0.5;
          margin-right: 2px;
        }
        .about-title-line {
          display: inline-block;
          height: 3px;
          width: 60px;
          background: #222;
          border-radius: 2px;
          margin-left: 14px;
        }
        .about-quote {
          border-radius: 18px;
          box-shadow: 0 2px 16px rgba(0,0,0,0.04);
          padding: 32px 24px 24px 24px;
          font-size: 1.13rem;
          color: #222;
          font-style: italic;
          font-family: 'Prompt',sans-serif;
          display: inline-block;
          margin: 0 auto;
          line-height: 1.8;
          border-left: 6px solid #222;
          max-width: 600px;
        }
        .about-highlight {
          font-weight: 800;
          font-size: 1.18em;
          color: #111;
        }
        .about-strong {
          font-weight: 700;
          color: #444;
        }
        @media (max-width: 900px) {
            .about-title-wrap { gap: 8px; }
            .about-inline-logo { height: 26px; }
        }
        @media (max-width: 600px) {
            .about-title-wrap { gap: 6px; }
            .about-title { font-size: 1.08rem; }
            .about-inline-logo { height: 20px; margin-left: 5px; }
        }
        @media (max-width: 430px) {
            .about-title-wrap { flex-direction: column; gap: 2px; }
            .about-inline-logo { margin-left: 0; margin-top: 2px; }
        }
        @keyframes fadeInAbout {
          from { opacity: 0; transform: translateY(30px); }
          to { opacity: 1; transform: translateY(0); }
        }
        /* CTA Section ขาวดำ */
        .cta-section {
          max-width: 700px;
          margin: 0 auto 48px auto;
          padding: 0 16px;
          display: flex;
          justify-content: center;
        }
        .cta-inner {
          background: #fff;
          color: #111;
          border-radius: 18px;
          box-shadow: 0 2px 16px rgba(0,0,0,0.08);
          padding: 32px 32px 28px 32px;
          text-align: center;
          width: 100%;
        }
        .cta-title {
          font-size: 1.25rem;
          font-weight: 700;
          margin-bottom: 10px;
          letter-spacing: 1px;
        }
        .cta-desc {
          font-size: 1.05rem;
          margin-bottom: 18px;
          color: #444;
        }
        .cta-btns {
          display: flex;
          gap: 18px;
          justify-content: center;
          flex-wrap: wrap;
        }
        .cta-btn {
          display: inline-block;
          background: #111;
          color: #fff;
          font-weight: 700;
          border-radius: 8px;
          padding: 12px 32px;
          font-size: 1.08rem;
          text-decoration: none;
          transition: background 0.2s, color 0.2s, box-shadow 0.2s;
          box-shadow: 0 2px 8px rgba(0,0,0,0.08);
          border: none;
        }
        .cta-btn:hover {
          background: #444;
          color: #fff;
        }
        .cta-btn-outline {
          background: transparent;
          color: #111;
          border: 2px solid #111;
        }
        .cta-btn-outline:hover {
          background: #111;
          color: #fff;
        }
        @media (max-width: 600px) {
          .cta-inner { padding: 18px 8px; }
          .cta-btn { padding: 10px 18px; font-size: 1rem; }
        }
        .header-inner {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 32px;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 16px;
        }
        .site-logo {
            height: 80px;
            width: auto;
            display: block;
            margin-right: 8px;
        }
        .header-text {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .logo, .subtitle {
            text-align: center;
        }
        @media (max-width: 600px) {
            .site-logo { height: 56px; }
            .header-inner { gap: 14px; }
        }
        @media (max-width: 600px) {
  .portfolio-filter {
    flex-direction: column;
    align-items: stretch;
    gap: 10px;
  }
  .filter-btn {
    width: 100%;
    font-size: 1.08rem;
    padding: 12px 0;
    border-radius: 16px;
    text-align: center;
  }
}
@media (max-width: 600px) {
  html, body {
    width: 100vw;
    max-width: 100vw;
    overflow-x: hidden !important;
    position: relative;
  }
  * {
    max-width: 100vw !important;
  }
  body {
    font-size: 1.1rem;
  }
  .logo {
    font-size: 1.25rem;
  }
  .subtitle {
    font-size: 0.98rem;
  }
  .package-title, .package-price, .portfolio-title, .portfolio-category-title, .faq-title, .about-title, .cta-title, .workflow-step-title {
    font-size: 1.08rem;
  }
  .portfolio-caption, .contact-btn, .privacy-drawer-btn, .privacy-drawer-content {
    font-size: 1.02rem;
  }
  .workflow-timeline .workflow-step-timeline:not(:last-child)::after {
    display: none !important;
  }
}
        .pixel-text {
            display: inline-flex;
            gap: 4px;
            align-items: center;
            justify-content: center;
            min-height: 0;
            margin: 0 auto;
            transition: opacity 0.7s cubic-bezier(.4,1.6,.6,1), transform 0.7s cubic-bezier(.4,1.6,.6,1);
            max-width: 100vw;
            overflow-x: hidden;
        }
        @media (max-width: 900px) {
            .pixel-text {
                max-width: 100vw;
                gap: 2px;
                transform: scale(0.92);
            }
            .pixel-block {
                width: 10px;
                height: 10px;
                max-width: 7vw;
                min-width: 3px;
            }
        }
        @media (max-width: 600px) {
            .pixel-text {
                max-width: 100vw;
                gap: 1px;
                transform: scale(0.15);
                overflow-x: hidden;
            }
            .pixel-block {
                width: 7px;
                height: 7px;
                max-width: 7vw;
                min-width: 3px;
            }
        }
        @media (max-width: 400px) {
            .pixel-text {
                max-width: 100vw;
                gap: 0.5px;
                transform: scale(0.1);
                overflow-x: hidden;
            }
            .pixel-block {
                width: 5px;
                height: 5px;
                max-width: 7vw;
                min-width: 2px;
            }
        }
        .pixel-text.out {
            opacity: 0;
            transform: scale(1.25);
        }
        .pixel-letter {
            display: flex;
            flex-direction: column;
            gap: 0px;
            align-items: center;
            justify-content: center;
        }
        .pixel-row {
            display: flex;
            gap: 0px;
        }
        .pixel-block {
            width: 12px;
            height: 12px;
            background: transparent;
            border-radius: 2px;
            transition: background 0.18s;
        }
        .pixel-block.filled {
            background: #111;
        }
        @media (max-width: 600px) {
            .pixel-block { width: 7px; height: 7px; }
            .pixel-text { gap: 2px; }
        }
        @media (max-width: 400px) {
        .logo {
            font-size: 1.1rem;
        }
        .subtitle {
            font-size: 0.8rem;
        }
      }
      @media (max-width: 380px) {
        .logo {
            font-size: 1rem;
  }
}
@media (max-width: 600px) {
  .pixel-text {
    flex-direction: column;
    align-items: center;
    gap: 0;
  }
  .pixel-letter {
    margin-bottom: 12px;
  }
  .pixel-letter:last-child {
    margin-bottom: 0;
  }
}
    </style>
</head>
<body>
    <!-- Pixel Preloader Overlay -->
    <div id="preloader-overlay">
      <div class="pixel-text" id="pixel-text"></div>
    </div>
    <style>
    #preloader-overlay {
      position: fixed;
      z-index: 9999;
      left: 0; top: 0; width: 100vw; height: 100vh;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: opacity 0.7s;
    }
    .pixel-text {
      display: inline-flex;
      gap: 4px;
      align-items: center;
      justify-content: center;
      min-height: 0;
      margin: 0 auto;
      transition: opacity 0.7s cubic-bezier(.4,1.6,.6,1), transform 0.7s cubic-bezier(.4,1.6,.6,1);
    }
    @media (max-width: 900px) {
      .pixel-text {
        max-width: 98vw;
        gap: 2px;
        transform: scale(0.92);
      }
      .pixel-block {
        width: 10px;
        height: 10px;
      }
    }
    @media (max-width: 600px) {
      .pixel-text {
        max-width: 99vw;
        gap: 1px;
        transform: scale(0.75);
      }
      .pixel-block {
        width: 7px;
        height: 7px;
      }
    }
    @media (max-width: 400px) {
      .pixel-text {
        max-width: 100vw;
        gap: 0.5px;
        transform: scale(0.6);
      }
      .pixel-block {
        width: 5px;
        height: 5px;
      }
    }
    .pixel-text.out {
      opacity: 0;
      transform: scale(1.25);
    }
    .pixel-letter {
      display: flex;
      flex-direction: column;
      gap: 0px;
      align-items: center;
      justify-content: center;
    }
    .pixel-row {
      display: flex;
      gap: 0px;
    }
    .pixel-block {
      width: 12px;
      height: 12px;
      background: transparent;
      border-radius: 2px;
      transition: background 0.18s;
    }
    .pixel-block.filled {
      background: #111;
    }
    @media (max-width: 600px) {
      .pixel-block { width: 7px; height: 7px; }
      .pixel-text { gap: 2px; }
    }
    @media (max-width: 400px) {
    .logo {
        font-size: 1.1rem;
    }
    .subtitle {
        font-size: 0.8rem;
    }
  }
  @media (max-width: 380px) {
    .logo {
        font-size: 1rem;
    }
  }
    </style>
    <script>
    // Pixel font map for 'WebStarter' (8x8 per char, 1=filled, 0=empty)
    const pixelFont = {
      W: [
        '10000001',
        '10000001',
        '10000001',
        '10010001',
        '10010001',
        '10010001',
        '01101110',
        '00000000',
      ],
      e: [
        '00000000',
        '01111100',
        '10000010',
        '11111110',
        '10000000',
        '01111110',
        '00000000',
        '00000000',
      ],
      b: [
        '10000000',
        '10000000',
        '10111100',
        '11000010',
        '10000010',
        '11000010',
        '10111100',
        '00000000',
      ],
      S: [
        '01111110',
        '10000000',
        '10000000',
        '01111100',
        '00000010',
        '00000010',
        '11111100',
        '00000000',
      ],
      t: [
        '00010000',
        '00010000',
        '01111110',
        '00010000',
        '00010000',
        '00010010',
        '00001100',
        '00000000',
      ],
      a: [
        '00000000',
        '01111100',
        '00000010',
        '01111110',
        '10000010',
        '10000010',
        '01111110',
        '00000000',
      ],
      r: [
        '00000000',
        '10111100',
        '11000010',
        '10000000',
        '10000000',
        '10000000',
        '10000000',
        '00000000',
      ],
      E: [
        '11111110',
        '10000000',
        '10000000',
        '11111100',
        '10000000',
        '10000000',
        '11111110',
        '00000000',
      ],
    };
    const word = 'WebStarter';
    const pixelText = document.getElementById('pixel-text');
    // Render pixel letters (render ทุกจุด 8x8, 1=ดำ, 0=โปร่งใส)
    let fillBlockObjs = [];
    for (let i = 0; i < word.length; i++) {
      const char = word[i];
      const map = pixelFont[char] || pixelFont[char.toUpperCase()] || pixelFont[' '];
      const letterDiv = document.createElement('div');
      letterDiv.className = 'pixel-letter';
      for (let row = 0; row < 8; row++) {
        const rowDiv = document.createElement('div');
        rowDiv.className = 'pixel-row';
        for (let col = 0; col < 8; col++) {
          const block = document.createElement('div');
          block.className = 'pixel-block';
          block.dataset.letter = i;
          block.dataset.row = row;
          block.dataset.col = col;
          if (map && map[row][col] === '1') {
            block.classList.add('to-fill');
            fillBlockObjs.push({block, letter: i, col, row});
          }
          rowDiv.appendChild(block);
        }
        letterDiv.appendChild(rowDiv);
      }
      pixelText.appendChild(letterDiv);
    }
    // Sort fillBlockObjs: letter ก่อน col ก่อน row (ซ้ายไปขวา)
    fillBlockObjs.sort((a, b) => a.letter - b.letter || a.col - b.col || a.row - b.row);
    const fillBlocks = fillBlockObjs.map(obj => obj.block);
    let idx = 0;
    function animateFill() {
      if (idx < fillBlocks.length) {
        fillBlocks[idx].classList.add('filled');
        idx++;
        setTimeout(animateFill, 10); // เร็วขึ้น
      } else {
        // Fade out + scale out pixel logo ก่อนซ่อน overlay
        setTimeout(() => {
          pixelText.classList.add('out');
          setTimeout(() => {
            document.getElementById('preloader-overlay').style.opacity = 0;
            setTimeout(() => {
              document.getElementById('preloader-overlay').style.display = 'none';
            }, 700);
          }, 700); // รอ effect pixel-text จบ
        }, 400);
      }
    }
    window.addEventListener('DOMContentLoaded', animateFill);
    </script>
    <header>
        <div class="header-inner">
            <img src="logo.png" alt="Logo" class="site-logo">
            <div class="header-text">
                <div class="logo">WebStarter รับจ้างทำเว็บไซต์</div>
                <div class="subtitle">สร้างเว็บไซต์มืออาชีพ เริ่มต้นราคาสบายกระเป๋า</div>
            </div>
        </div>
    </header>
    <!-- About Section -->
    <section class="about-section special-about scroll-animate">
      <div class="about-title-wrap">
        <span class="about-title-icon">&#10077;</span>
        <span class="about-title" >เราคือใคร?</span>
        <span class="about-title-line"></span>
      </div>
      <blockquote class="about-quote">
        <span class="about-highlight">WebStarter</span> คือทีมงานที่หลงใหลการออกแบบและพัฒนาเว็บไซต์<br>
        เราเน้น <span class="about-strong">ดีไซน์สวยงาม</span> <span class="about-strong">ใช้งานง่าย</span> <span class="about-strong">รองรับมือถือ</span> และตอบโจทย์ธุรกิจ<br>
        <span class="about-strong">ประสบการณ์มากกว่า 3 ปี</span> พร้อมดูแลและให้คำปรึกษาอย่างจริงใจ
      </blockquote>
    </section>
    <section class="packages scroll-animate">
        <div class="package">
            <div class="package-eye" onclick="openModal('frontend')" title="ดูรายละเอียด">
                <svg viewBox="0 0 24 24"><path d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8a3 3 0 100 6 3 3 0 000-6z"/></svg>
            </div>
            <div class="package-title">หน้าบ้าน (Frontend)</div>
            <div class="package-price"><span class = "fist-price">ราคาเริ่มต้น</span>500 ฿</div>
            <div class="package-desc">เว็บไซต์สวยงาม รองรับมือถือ เหมาะสำหรับแนะนำสินค้า/บริการ</div>
            <a class="contact-btn" href="https://line.me/ti/p/xgsfYR8ebB" target="_blank">ติดต่อเลย</a>
        </div>
        <div class="package">
            <div class="package-eye" onclick="openModal('backend')" title="ดูรายละเอียด">
                <svg viewBox="0 0 24 24"><path d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8a3 3 0 100 6 3 3 0 000-6z"/></svg>
            </div>
            <div class="package-title">หลังบ้าน (Backend)</div>
            <div class="package-price"><span class = "fist-price">ราคาเริ่มต้น</span>1,000 ฿</div>
            <div class="package-desc">ระบบจัดการข้อมูลหลังบ้าน เพิ่ม/ลบ/แก้ไขข้อมูลได้เอง</div>
            <a class="contact-btn" href="https://line.me/ti/p/xgsfYR8ebB" target="_blank">ติดต่อเลย</a>
        </div>
        <div class="package">
            <div class="package-eye" onclick="openModal('full')" title="ดูรายละเอียด">
                <svg viewBox="0 0 24 24"><path d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8a3 3 0 100 6 3 3 0 000-6z"/></svg>
            </div>
            <div class="package-title">หน้าบ้าน + หลังบ้าน</div>
            <div class="package-price"><span class = "fist-price">ราคาเริ่มต้น</span>1,500 ฿</div>
            <div class="package-desc">ครบทั้งเว็บหน้า-หลังบ้าน พร้อมใช้งาน ดูแลหลังการขาย</div>
            <a class="contact-btn" href="https://line.me/ti/p/xgsfYR8ebB" target="_blank">ติดต่อเลย</a>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="cta-section animated-cta scroll-animate">
      <div class="cta-inner glass-effect-mono">
        <div class="cta-title">เริ่มต้นเว็บไซต์ของคุณวันนี้ !</div>
        <div class="cta-desc">ปรึกษาฟรี ไม่มีค่าใช้จ่าย หรือขอใบเสนอราคาได้ทันที</div>
        <div class="cta-btns">
          <a href="https://line.me/ti/p/xgsfYR8ebB" class="cta-btn mono-btn" target="_blank">
            <span class="cta-btn-icon">
              <svg viewBox="0 0 40 40" width="22" height="22" style="vertical-align:middle;"><g><ellipse fill="#111" cx="20" cy="20" rx="20" ry="20"/><path fill="#fff" d="M20 10c-6.627 0-12 4.02-12 8.98 0 2.83 2.01 5.35 5.13 6.98-.22.77-.8 2.8-.91 3.25 0 0-.02.16.08.22.1.06.23.02.23.02.3-.04 3.36-2.21 3.92-2.6.5.07 1.01.11 1.55.11 6.63 0 12-4.02 12-8.98S26.63 10 20 10zM15.5 19.5h-2v-4h2v4zm3.5 0h-2v-4h2v4zm3.5 0h-2v-4h2v4zm3.5 0h-2v-4h2v4z"/></g></svg>
            </span>
            <span>ปรึกษาฟรีผ่าน Line</span>
          </a>
          <a href="https://line.me/ti/p/xgsfYR8ebB" class="cta-btn mono-btn-outline" target="_blank">
            <span class="cta-btn-icon">
              <svg viewBox="0 0 40 40" width="22" height="22" style="vertical-align:middle;"><g><ellipse fill="#fff" stroke="#111" stroke-width="2" cx="20" cy="20" rx="19" ry="19"/><path fill="#111" d="M20 10c-6.627 0-12 4.02-12 8.98 0 2.83 2.01 5.35 5.13 6.98-.22.77-.8 2.8-.91 3.25 0 0-.02.16.08.22.1.06.23.02.23.02.3-.04 3.36-2.21 3.92-2.6.5.07 1.01.11 1.55.11 6.63 0 12-4.02 12-8.98S26.63 10 20 10zM15.5 19.5h-2v-4h2v4zm3.5 0h-2v-4h2v4zm3.5 0h-2v-4h2v4zm3.5 0h-2v-4h2v4z"/></g></svg>
            </span>
            <span>ขอใบเสนอราคา</span>
          </a>
        </div>
      </div>
    </section>
    <style>
    .animated-cta { opacity: 0; transform: translateY(40px); transition: opacity 0.8s cubic-bezier(.4,1.6,.6,1), transform 0.8s cubic-bezier(.4,1.6,.6,1); }
    .animated-cta.visible { opacity: 1; transform: translateY(0); }
    .glass-effect-mono {
      background: #fff;
      box-shadow: 0 8px 32px 0 rgba(31,38,135,0.06);
      backdrop-filter: blur(6px);
      border-radius: 18px;
      border: 1.5px solid #eee;
    }
    .mono-btn {
      position: relative;
      overflow: hidden;
      background: #111;
      color: #fff;
      border: none;
      font-weight: 700;
      border-radius: 12px;
      padding: 14px 38px 14px 24px;
      font-size: 1.13rem;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      transition: transform 0.18s, box-shadow 0.18s, background 0.18s, color 0.18s;
      z-index: 1;
      min-width: 180px;
      margin-bottom: 8px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.07);
    }
    .mono-btn .cta-btn-icon {
      display: flex;
      align-items: center;
      margin-right: 2px;
    }
    .mono-btn:hover, .mono-btn:focus {
      background: #fff;
      color: #111;
      border: 2px solid #111;
      box-shadow: 0 8px 32px rgba(0,0,0,0.13);
    }
    .mono-btn:hover .cta-btn-icon svg ellipse,
    .mono-btn:focus .cta-btn-icon svg ellipse {
      fill: #fff;
      stroke: #111;
      stroke-width: 2;
    }
    .mono-btn:hover .cta-btn-icon svg path,
    .mono-btn:focus .cta-btn-icon svg path {
      fill: #111;
    }
    .mono-btn-outline {
      position: relative;
      overflow: hidden;
      background: #f7f7f7;
      color: #111;
      border: 2px solid #111;
      font-weight: 700;
      border-radius: 12px;
      padding: 14px 38px 14px 24px;
      font-size: 1.13rem;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      transition: transform 0.18s, box-shadow 0.18s, background 0.18s, color 0.18s;
      z-index: 1;
      min-width: 180px;
      margin-bottom: 8px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.04);
    }
    .mono-btn-outline .cta-btn-icon {
      display: flex;
      align-items: center;
      margin-right: 2px;
    }
    .mono-btn-outline:hover, .mono-btn-outline:focus {
      background: #111;
      color: #fff;
      border: 2px solid #111;
      box-shadow: 0 8px 32px rgba(0,0,0,0.13);
    }
    .mono-btn-outline:hover .cta-btn-icon svg ellipse,
    .mono-btn-outline:focus .cta-btn-icon svg ellipse {
      fill: #111;
      stroke: #fff;
      stroke-width: 2;
    }
    .mono-btn-outline:hover .cta-btn-icon svg path,
    .mono-btn-outline:focus .cta-btn-icon svg path {
      fill: #fff;
    }
    @media (max-width: 600px) {
      .mono-btn, .mono-btn-outline { font-size: 1rem; padding: 11px 12px 11px 12px; min-width: 120px; }
      .cta-btns { gap: 10px; }
    }
    </style>
    <script>
    // CTA Section Animation on Scroll
    window.addEventListener('DOMContentLoaded', function() {
      const ctaSection = document.querySelector('.animated-cta');
      function revealCTA() {
        const rect = ctaSection.getBoundingClientRect();
        if (rect.top < window.innerHeight - 80) {
          ctaSection.classList.add('visible');
          window.removeEventListener('scroll', revealCTA);
        }
      }
      window.addEventListener('scroll', revealCTA);
      revealCTA();
    });
    </script>
    <!-- Modal Popup for Package Details -->
    <div id="modal-bg" class="modal-bg" onclick="closeModal(event)">
        <div class="modal-box" onclick="event.stopPropagation()">
            <button class="modal-close" onclick="closeModal(event)">&times;</button>
            <div id="modal-content"></div>
        </div>
    </div>
    <!-- Portfolio Section -->
    <section class="portfolio-section scroll-animate">
        <div class="portfolio-title">ผลงานของเรา</div>
        <div class="portfolio-filter">
            <button class="filter-btn active" data-filter="all">ทั้งหมด</button>
            <button class="filter-btn" data-filter="หน้าบ้าน">หน้าบ้าน</button>
            <button class="filter-btn" data-filter="หลังบ้าน">หลังบ้าน</button>
            <button class="filter-btn" data-filter="หน้าบ้าน+หลังบ้าน">หน้าบ้าน + หลังบ้าน</button>
        </div>
        <div id="portfolio-blocks">
        <?php
            // Mapping โฟลเดอร์กับชื่อหมวดหมู่ (แก้ไขได้เอง)
            $profile_categories = [
                'profile_1' => 'หน้าบ้าน+หลังบ้าน',
                'profile_2' => 'หน้าบ้าน+หลังบ้าน',
                'profile_3' => 'หน้าบ้าน',
                // เพิ่ม profile ใหม่ได้ที่นี่ เช่น 'profile_4' => 'หลังบ้าน',
            ];
            // เตรียม array สำหรับเก็บโฟลเดอร์แรกของแต่ละหมวด
            $first_of_category = [];
            foreach ($profile_categories as $folder => $category) {
                if (!isset($first_of_category[$category])) {
                    $first_of_category[$category] = $folder;
                }
            }
            foreach ($profile_categories as $folder => $category) {
                $images = glob("img/$folder/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
                if (count($images)) {
                    echo '<div class="portfolio-category-block" data-category="'.$category.'" data-folder="'.$folder.'">';
                    echo '<div class="portfolio-category-title">'.$category.'</div>';
                    echo '<div class="portfolio-grid">';
                    foreach (array_slice($images, 0, 3) as $img) {
                        echo '<div class="portfolio-item"><a href="'.$img.'" data-caption="'.htmlspecialchars(basename($img)).'"><img src="'.$img.'" class="portfolio-img"></a></div>';
                    }
                    echo '</div>';
                    echo '<div class="see-more-wrap"><a class="see-more-link" href="portfolio.php?cat='.$folder.'">ดูผลงานทั้งหมด <svg viewBox="0 0 24 24"><path d="M10 17l5-5-5-5v10z"/></svg></a></div>';
                    echo '</div>';
                }
            }
        ?>
        </div>
    </section>
    <!-- Workflow Section (Timeline Modern) -->
    <section class="workflow-section scroll-animate">
    <div class="portfolio-title">ขั้นตอนการทำงานของเรา</div>
      <div class="workflow-timeline">
        <div class="workflow-step-timeline">
          <div class="workflow-step-circle">1</div>
          <div class="workflow-step-title">พูดคุยความต้องการ</div>
          <div class="workflow-step-desc">รับฟังไอเดียและความต้องการของลูกค้า เพื่อเข้าใจเป้าหมายของเว็บไซต์</div>
        </div>
        <div class="workflow-step-timeline">
          <div class="workflow-step-circle">2</div>
          <div class="workflow-step-title">เสนอราคาและแผนงาน</div>
          <div class="workflow-step-desc">สรุปขอบเขตงานและเสนอราคาอย่างชัดเจน พร้อมระยะเวลาดำเนินการ</div>
        </div>
        <div class="workflow-step-timeline">
          <div class="workflow-step-circle">3</div>
          <div class="workflow-step-title">ออกแบบและพัฒนาเว็บไซต์</div>
          <div class="workflow-step-desc">เริ่มออกแบบและพัฒนาเว็บไซต์ตามที่ตกลง พร้อมอัปเดตความคืบหน้า</div>
        </div>
        <div class="workflow-step-timeline">
          <div class="workflow-step-circle">4</div>
          <div class="workflow-step-title">ส่งมอบงานและดูแลหลังการขาย</div>
          <div class="workflow-step-desc">ส่งมอบเว็บไซต์ที่เสร็จสมบูรณ์ พร้อมให้คำแนะนำและดูแลหลังการขาย</div>
        </div>
      </div>
    </section>
    <!-- FAQ Section -->
     <br>
    <section class="faq-section scroll-animate">
      <div class="faq-title">คำถามที่พบบ่อย (FAQ)</div>
      <br>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">
            <span class="faq-icon"><svg width="22" height="22" viewBox="0 0 22 22"><polyline points="6 9 11 14 16 9" fill="none" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span>ใช้เวลาทำเว็บไซต์กี่วัน ?</span>
          </button>
          <div class="faq-answer">โดยปกติ 5-14 วัน ขึ้นกับความซับซ้อนและจำนวนหน้าตามความต้องการ</div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span class="faq-icon"><svg width="22" height="22" viewBox="0 0 22 22"><polyline points="6 9 11 14 16 9" fill="none" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span>มีบริการหลังการขายไหม ?</span>
          </button>
          <div class="faq-answer">ดูแลฟรี 1 เดือนหลังส่งมอบงาน และให้คำปรึกษาฟรีตลอดการเปิดเว็บไซต์</div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span class="faq-icon"><svg width="22" height="22" viewBox="0 0 22 22"><polyline points="6 9 11 14 16 9" fill="none" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span>รับทำเว็บแบบไหนบ้าง ?</span>
          </button>
          <div class="faq-answer">เว็บขายของออนไลน์ เว็บจองคิว เว็บไซต์ - เว็บแอปพลิเคชัน ฯลฯ</div>
        </div>
        <div class="faq-item">
          <button class="faq-question">
            <span class="faq-icon"><svg width="22" height="22" viewBox="0 0 22 22"><polyline points="6 9 11 14 16 9" fill="none" stroke="#111" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            <span>ต้องเตรียมอะไรบ้าง ?</span>
          </button>
          <div class="faq-answer">เตรียมข้อมูล ความต้องการ รูปภาพ โลโก้ และตัวอย่างเว็บที่ชอบ (ถ้ามี)</div>
        </div>
      </div>
    </section>
    <style>
.faq-section {
  max-width: 700px;
  margin: 0 auto 48px auto;
  padding: 0 16px;
}
.faq-title {
  font-size: 1.2rem;
  font-weight: 700;
  color: #111;
  text-align: center;
  margin-bottom: 22px;
  letter-spacing: 1px;
}
.faq-list {
  display: flex;
  flex-direction: column;
  gap: 18px;
}
.faq-item {
  background: rgba(255,255,255,0.85);
  border-radius: 18px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.07), 0 1.5px 8px rgba(0,0,0,0.04);
  border: none;
  overflow: hidden;
  position: relative;
  transition: box-shadow 0.22s, transform 0.22s;
}
.faq-item::before {
  content: '';
  display: block;
  position: absolute;
  left: 0; top: 0; bottom: 0;
  width: 4px;
  background: linear-gradient(180deg, #111 0%, #444 100%);
  opacity: 0.12;
  border-radius: 4px 0 0 4px;
  transition: opacity 0.22s;
}
.faq-item.active {
  box-shadow: 0 8px 32px rgba(0,0,0,0.13), 0 2px 12px rgba(0,0,0,0.08);
  transform: scale(1.02);
}
.faq-item.active::before {
  opacity: 0.32;
  background: linear-gradient(180deg, #111 0%, #222 100%);
}
.faq-question {
  width: 100%;
  background: none;
  border: none;
  outline: none;
  font-family: inherit;
  font-size: 1.13rem;
  font-weight: 700;
  color: #111;
  text-align: left;
  padding: 22px 32px 22px 22px;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 16px;
  border-radius: 18px;
  transition: background 0.18s, color 0.18s;
  position: relative;
  z-index: 1;
}
.faq-question:hover, .faq-item.active .faq-question {
  background: #f7f7f7;
  color: #111;
}
.faq-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.32s cubic-bezier(.4,1.6,.6,1);
}
.faq-item.active .faq-icon {
  transform: rotate(180deg) scale(1.15);
}
.faq-answer {
  padding: 0 32px 0 54px;
  color: #333;
  font-size: 1.08rem;
  display: block;
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  transition: max-height 0.38s cubic-bezier(.4,1.6,.6,1), opacity 0.32s, padding 0.32s;
}
.faq-item.active .faq-answer {
  max-height: 200px;
  opacity: 1;
  padding-top: 12px;
  padding-bottom: 22px;
}
@media (max-width: 600px) {
  .faq-question { font-size: 1rem; padding: 16px 12px 16px 12px; }
  .faq-answer { font-size: 0.98rem; padding: 0 12px 0 38px; }
}
</style>
<script>
// FAQ Accordion: ซ่อนทุกอันก่อนเปิด
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => item.classList.remove('active'));
document.querySelectorAll('.faq-question').forEach(btn => {
  btn.addEventListener('click', function() {
    const item = this.parentElement;
    if (item.classList.contains('active')) {
      item.classList.remove('active');
    } else {
      faqItems.forEach(faq => faq.classList.remove('active'));
      item.classList.add('active');
    }
  });
});
</script>
    <!-- baguetteBox JS for Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script>
      baguetteBox.run('.portfolio-grid');
    </script>
    <script>
    // Modal content for each package
    const modalDetails = {
        frontend: {
            title: 'หน้าบ้าน (Frontend) — 500 ฿',
            list: [
                'เว็บไซต์สวยงาม ทันสมัย รองรับมือถือ (Responsive)',
                'ออกแบบหน้าแรก/หน้าแนะนำสินค้า/บริการ',
                'ปรับแต่งสี โลโก้ และฟอนต์ตามแบรนด์',
                'รองรับ SEO เบื้องต้น',
                'ติดต่อสอบถามผ่านฟอร์มหรือปุ่ม Line'
            ]
        },
        backend: {
            title: 'หลังบ้าน (Backend) — 1,000 ฿',
            list: [
                'ระบบจัดการข้อมูล (เพิ่ม/ลบ/แก้ไข) เช่น สินค้า, บทความ, รูปภาพ',
                'ระบบล็อกอินสำหรับผู้ดูแล',
                'ใช้งานง่าย ไม่ซับซ้อน',
                'ปลอดภัยด้วยระบบยืนยันตัวตน',
                'สำรองข้อมูลได้'
            ]
        },
        full: {
            title: 'หน้าบ้าน + หลังบ้าน — 1,500 ฿',
            list: [
                'ครบทั้งเว็บไซต์หน้าแรกและระบบหลังบ้าน',
                'ออกแบบ UI/UX ให้เหมาะกับธุรกิจ',
                'ระบบจัดการเนื้อหาได้เอง',
                'รองรับการขยายฟีเจอร์ในอนาคต',
                'ดูแลหลังการขาย 1 เดือน'
            ]
        }
    };
    function openModal(type) {
        const modal = document.getElementById('modal-bg');
        const content = document.getElementById('modal-content');
        if (modalDetails[type]) {
            let html = `<div class='modal-title'>${modalDetails[type].title}</div><ul class='modal-list'>`;
            modalDetails[type].list.forEach(item => html += `<li>${item}</li>`);
            html += '</ul>';
            content.innerHTML = html;
            modal.classList.add('active');
        }
    }
    function closeModal(e) {
        document.getElementById('modal-bg').classList.remove('active');
    }
    </script>
    <script>
    // Portfolio filter (หมวดหมู่ละ 1 บล็อกเมื่อ all, ทุกบล็อกเมื่อ filter เฉพาะ)
    function updatePortfolioFilter(filter) {
      // เตรียม map: หมวดหมู่ -> บล็อกแรก
      const blocks = Array.from(document.querySelectorAll('.portfolio-category-block'));
      const firstBlockOfCat = {};
      blocks.forEach(block => {
        const cat = block.getAttribute('data-category');
        if (!firstBlockOfCat[cat]) firstBlockOfCat[cat] = block;
      });
      blocks.forEach(block => {
        const cat = block.getAttribute('data-category');
        if (filter === 'all') {
          // แสดงเฉพาะบล็อกแรกของแต่ละหมวด
          if (firstBlockOfCat[cat] === block) {
            block.style.display = '';
          } else {
            block.style.display = 'none';
          }
        } else {
          // แสดงทุกบล็อกของหมวดที่เลือก
          block.style.display = (cat === filter) ? '' : 'none';
        }
      });
    }
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const filter = this.getAttribute('data-filter');
        updatePortfolioFilter(filter);
      });
    });
    // โหลดครั้งแรก: แสดงเฉพาะหมวดละ 1 บล็อก
    window.addEventListener('DOMContentLoaded', function() {
      updatePortfolioFilter('all');
    });
    </script>
    <script>
    // *** ลบ JS filter ออก ไม่ต้องใช้ ***
    </script>
</body>
<!-- Privacy Policy Drawer -->
<div id="privacy-drawer-btn" class="privacy-drawer-btn">
  <span class="privacy-btn-icon">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><rect x="4" y="10" width="16" height="10" rx="4" stroke="#fff" stroke-width="2"/><path d="M8 10V7a4 4 0 1 1 8 0v3" stroke="#fff" stroke-width="2"/></svg>
  </span>
  <span>นโยบายความเป็นส่วนตัว</span>
</div>
<div id="privacy-drawer" class="privacy-drawer">
  <div class="privacy-drawer-header">
    <span class="privacy-header-icon">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none"><rect x="4" y="10" width="16" height="10" rx="4" stroke="#111" stroke-width="2"/><path d="M8 10V7a4 4 0 1 1 8 0v3" stroke="#111" stroke-width="2"/></svg>
    </span>
    <span>นโยบายความเป็นส่วนตัว / ข้อตกลงการใช้บริการ</span>
    <button class="privacy-drawer-close" onclick="closePrivacyDrawer()">
      <span class="close-x">
        <svg width="32" height="32" viewBox="0 0 32 32"><circle cx="16" cy="16" r="14" fill="#f7f7f7" stroke="#bbb" stroke-width="2"/><path d="M11 11l10 10M21 11l-10 10" stroke="#111" stroke-width="2" stroke-linecap="round"/></svg>
      </span>
    </button>
  </div>
  <div class="privacy-drawer-content">
    <h3><span class="privacy-content-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><rect x="4" y="10" width="16" height="10" rx="4" stroke="#111" stroke-width="2"/><path d="M8 10V7a4 4 0 1 1 8 0v3" stroke="#111" stroke-width="2"/></svg></span> นโยบายความเป็นส่วนตัว (Privacy Policy)</h3>
    <p>WebStarter ให้ความสำคัญกับความเป็นส่วนตัวของลูกค้า ข้อมูลที่ท่านให้กับเราจะถูกใช้เพื่อวัตถุประสงค์ในการติดต่อ ให้บริการ และปรับปรุงประสบการณ์การใช้งานเท่านั้น</p>
    <ul>
      <li>ข้อมูลที่เก็บ เช่น ชื่อ, เบอร์โทร, อีเมล, ข้อความติดต่อ</li>
      <li>จะไม่เปิดเผยข้อมูลของท่านแก่บุคคลที่สาม ยกเว้นจำเป็นตามกฎหมาย</li>
      <li>ท่านสามารถขอแก้ไข/ลบข้อมูลของท่านได้ตลอดเวลา</li>
      <li>เว็บไซต์นี้มีมาตรการป้องกันข้อมูลรั่วไหลและเข้าถึงโดยไม่ได้รับอนุญาต</li>
    </ul>
    <h3><span class="privacy-content-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 2a7 7 0 0 1 7 7v2a7 7 0 0 1-14 0V9a7 7 0 0 1 7-7zm0 18c-4.418 0-8-3.582-8-8V9a8 8 0 0 1 16 0v3c0 4.418-3.582 8-8 8z" stroke="#111" stroke-width="2" fill="none"/></svg></span> ข้อตกลงการใช้บริการ (Terms of Service)</h3>
    <ul>
      <li>ลูกค้าต้องให้ข้อมูลที่ถูกต้องและครบถ้วนเพื่อประเมินราคาและดำเนินงาน</li>
      <li>การเริ่มงานจะดำเนินการหลังจากตกลงขอบเขตและเงื่อนไขเรียบร้อย</li>
      <li>หากมีการเปลี่ยนแปลงขอบเขตงาน อาจมีค่าใช้จ่ายเพิ่มเติม</li>
      <li>WebStarter ขอสงวนสิทธิ์ในการปฏิเสธงานที่ขัดต่อกฎหมายหรือศีลธรรม</li>
    </ul>
    <p style="font-size:0.98em;color:#666;">อัปเดตล่าสุด: 2024</p>
  </div>
</div>
<style>
.privacy-drawer-btn {
  position: fixed;
  right: 22px;
  bottom: 22px;
  z-index: 1200;
  background: linear-gradient(135deg, #222 60%, #444 100%);
  color: #fff;
  font-family: 'Prompt', sans-serif;
  font-size: 1.08rem;
  font-weight: 700;
  border-radius: 32px 32px 12px 32px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.18);
  padding: 16px 36px 16px 24px;
  cursor: pointer;
  transition: background 0.18s, box-shadow 0.18s, transform 0.18s;
  opacity: 0.97;
  display: flex;
  align-items: center;
  gap: 12px;
  letter-spacing: 0.5px;
  border: none;
}
@keyframes privacy-bounce {
  0%   { transform: translateY(0); }
  20%  { transform: translateY(-10px); }
  40%  { transform: translateY(0); }
  60%  { transform: translateY(-6px); }
  80%  { transform: translateY(0); }
  100% { transform: translateY(0); }
}
.privacy-drawer-btn.bounce {
  animation: privacy-bounce 0.7s cubic-bezier(.4,1.6,.6,1);
}
.privacy-drawer-btn:hover {
  background: linear-gradient(135deg, #111 80%, #333 100%);
  box-shadow: 0 12px 40px rgba(0,0,0,0.22);
  transform: translateY(-2px) scale(1.05);
}
.privacy-drawer {
  position: fixed;
  right: 0;
  bottom: 0;
  width: 100%;
  max-width: 440px;
  height: 0;
  background: rgba(255,255,255,0.82);
  box-shadow: 0 0 48px rgba(0,0,0,0.22);
  border-radius: 32px 0 0 0;
  z-index: 1300;
  overflow: hidden;
  transition: height 0.55s cubic-bezier(.4,1.6,.6,1), box-shadow 0.22s, background 0.22s;
  display: flex;
  flex-direction: column;
  pointer-events: none;
  backdrop-filter: blur(16px);
  border: 1.5px solid #eee;
}
.privacy-drawer.open {
  height: 480px;
  pointer-events: auto;
  box-shadow: 0 0 64px rgba(0,0,0,0.28);
  background: rgba(255,255,255,0.96);
}
.privacy-drawer-header {
  display: flex;
  align-items: center;
  gap: 12px;
  justify-content: flex-start;
  padding: 22px 28px 12px 28px;
  background: transparent;
  border-bottom: 1.5px solid #eee;
  font-size: 1.18rem;
  font-weight: 800;
  color: #111;
  letter-spacing: 0.5px;
}
.privacy-header-icon svg { display: block; }
.privacy-drawer-close {
  background: none;
  border: none;
  margin-left: auto;
  cursor: pointer;
  padding: 0 2px;
  transition: transform 0.18s;
  outline: none;
  display: flex;
  align-items: center;
}
.privacy-drawer-close .close-x svg {
  display: block;
  border-radius: 50%;
  transition: box-shadow 0.18s, background 0.18s;
}
.privacy-drawer-close:hover .close-x svg {
  background: #eee;
  box-shadow: 0 2px 8px rgba(0,0,0,0.10);
}
.privacy-drawer-content {
  padding: 22px 28px 18px 28px;
  overflow-y: auto;
  font-size: 1.08rem;
  color: #222;
  flex: 1;
  font-family: 'Prompt', sans-serif;
}
.privacy-drawer-content h3 {
  margin-top: 0;
  font-size: 1.13rem;
  font-weight: 700;
  color: #111;
  display: flex;
  align-items: center;
  gap: 8px;
}
.privacy-content-icon svg { display: block; }
.privacy-drawer-content ul {
  margin: 0 0 16px 18px;
  padding: 0 0 0 18px;
}
.privacy-drawer-content::-webkit-scrollbar {
  width: 7px;
  background: #f3f3f3;
  border-radius: 8px;
}
.privacy-drawer-content::-webkit-scrollbar-thumb {
  background: #e0e0e0;
  border-radius: 8px;
}
@media (max-width: 600px) {
  .privacy-drawer {
    max-width: 100vw;
    border-radius: 18px 18px 0 0;
  }
  .privacy-drawer.open {
    height: 80vh;
  }
  .privacy-drawer-content { font-size: 0.98rem; padding: 14px 6vw 12px 6vw; }
  .privacy-drawer-header { font-size: 1.02rem; padding: 14px 6vw 8px 6vw; }
  .privacy-drawer-btn { font-size: 0.98rem; padding: 12px 16px; right: 8px; bottom: 8px; }
}
</style>
<script>
const privacyBtn = document.getElementById('privacy-drawer-btn');
const privacyDrawer = document.getElementById('privacy-drawer');
function openPrivacyDrawer() {
  privacyDrawer.classList.add('open');
}
function closePrivacyDrawer() {
  privacyDrawer.classList.remove('open');
}
privacyBtn.addEventListener('click', openPrivacyDrawer);
window.addEventListener('keydown', function(e){
  if (e.key === 'Escape') closePrivacyDrawer();
});
privacyDrawer.addEventListener('click', function(e){
  if (e.target === privacyDrawer) closePrivacyDrawer();
});
let bounceTimeout = null;
let lastBounce = 0;
window.addEventListener('scroll', function() {
  const btn = document.getElementById('privacy-drawer-btn');
  // ป้องกันเด้งถี่เกิน: อย่างน้อย 1.2 วิ/ครั้ง
  const now = Date.now();
  if (now - lastBounce < 1200) return;
  lastBounce = now;
  btn.classList.remove('bounce');
  void btn.offsetWidth; // force reflow
  btn.classList.add('bounce');
  clearTimeout(bounceTimeout);
  bounceTimeout = setTimeout(() => btn.classList.remove('bounce'), 800);
});
</script> 