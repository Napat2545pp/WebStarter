<?php // portfolio.php - แสดงผลงานทั้งหมดในแต่ละหมวดหมู่
$cat = isset($_GET['cat']) ? preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['cat']) : '';
$categories = [
    'profile_1' => 'หน้าบ้าน + หลังบ้าน (เว็บไซต์ร้านค้าออนไลน์)',
    'profile_2' => 'หน้าบ้าน + หลังบ้าน (เว็บไซต์แนะนำหนัง + กระทู้)',
    'profile_3' => 'หน้าบ้าน (เว็บไซต์เกมส์ Ran Online)'
];
$title = isset($categories[$cat]) ? $categories[$cat] : 'ผลงานทั้งหมด';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | ผลงานทั้งหมด</title>
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <style>
        body { font-family: 'Prompt', sans-serif; background: #fff; margin: 0; color: #111; }
        header { background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.03); padding: 32px 0 16px 0; text-align: center; }
        .logo { font-size: 2.2rem; font-weight: 700; color: #111; letter-spacing: 2px; }
        .subtitle { font-size: 1.1rem; color: #444; margin-top: 8px; }
        .portfolio-section { max-width: 1100px; margin: 0 auto 48px auto; padding: 0 16px; }
        .portfolio-title { font-size: 1.5rem; font-weight: 700; color: #111; text-align: center; margin-bottom: 24px; letter-spacing: 1px; }
        .portfolio-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 28px; }
        .portfolio-item { background: #fafafa; border: 1.5px solid #eee; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.04); transition: box-shadow 0.2s; }
        .portfolio-item:hover { box-shadow: 0 6px 24px rgba(0,0,0,0.10); }
        .portfolio-img { width: 100%; height: 180px; object-fit: cover; display: block; }
        .portfolio-caption { padding: 14px 12px 10px 12px; font-size: 1rem; color: #222; text-align: center; }
        .back-btn { display: inline-block; background: #111; color: #fff; font-weight: 600; border-radius: 8px; padding: 10px 28px; font-size: 1rem; text-decoration: none; margin: 24px 0 32px 0; transition: background 0.2s, box-shadow 0.2s; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .back-btn:hover { background: #444; color: #fff; box-shadow: 0 4px 16px rgba(0,0,0,0.15); }
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
            text-align: left;
        }
        .header-inner {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 18px;
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
        @media (max-width: 600px) {
            .site-logo { height: 36px; }
            .header-inner { gap: 10px; }
        }
        @media (max-width: 900px) { .portfolio-grid { grid-template-columns: 1fr; } }
        .header-text {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-inner">
            <img src="logo.png" alt="Logo" class="site-logo">
            <div class="header-text">
                <div class="logo">WebStarter รับจ้างทำเว็บไซต์</div>
                <div class="subtitle">ผลงานทั้งหมดใน <?php echo $title; ?></div>
            </div>
        </div>
    </header>
    <section class="portfolio-section">
        <div class="see-more-wrap"><a class="see-more-link" href="index.php">&larr;  กลับหน้าแรก</a></div>
        <div class="portfolio-title"><?php echo $title; ?></div>
        <div class="portfolio-grid">
        <?php
            if (isset($categories[$cat])) {
                $images = glob("img/$cat/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
                foreach ($images as $img) {
                    echo '<div class="portfolio-item">';
                    echo '<a href="'.$img.'" data-caption="'.htmlspecialchars(basename($img)).'"><img src="'.$img.'" class="portfolio-img"></a>';
                    echo '</div>';
                }
            } else {
                // แสดงผลงานทุกหมวด
                foreach ($categories as $folder => $catTitle) {
                    $images = glob("img/$folder/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
                    if (count($images)) {
                        echo '<div class="portfolio-category-title" style="margin:32px 0 16px 0;font-size:1.15rem;font-weight:600;">'.$catTitle.'</div>';
                        foreach ($images as $img) {
                            echo '<div class="portfolio-item">';
                            echo '<a href="'.$img.'" data-caption="'.htmlspecialchars(basename($img)).'"><img src="'.$img.'" class="portfolio-img"></a>';
                            echo '</div>';
                        }
                    }
                }
            }
        ?>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script>baguetteBox.run('.portfolio-grid');</script>
</body>
</html> 