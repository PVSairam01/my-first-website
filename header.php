<?php
require_once __DIR__ . '/data.php';

$currentPage = basename($_SERVER['PHP_SELF']);
$navItems = [
    'index.php'        => 'Home',
    'about-us.php'     => 'About Me',
    'services.php'     => 'Services',
    'contact-us.php'   => 'Contact',
    'testimonials.php' => 'Testimonials',
];
$socialLinks = [
    ['LinkedIn',  $me['linkedin'],                'bi-linkedin'],
    ['Instagram', $me['instagram'],               'bi-instagram'],
    ['WhatsApp',  'https://wa.me/' . $me['wa'],   'bi-whatsapp'],
    ['GitHub', 'https://github.com/PVSairam01', 'bi-github'],
    ['Email',     'mailto:' . $me['email'],       'bi-envelope-fill'],
];
$phoneHref = 'tel:' . str_replace(' ', '', $me['phone']);

/* Renders the social icons (used in mobile + desktop positions) */
function renderSocial($links, $class, $hidden = false) {
    echo '<div class="hnx-social ' . $class . '">';
    foreach ($links as $l) {
        echo '<a href="' . e($l[1]) . '" aria-label="' . e($l[0]) . '" target="_blank" rel="noopener"'
           . ($hidden ? ' tabindex="-1"' : '') . '><i class="bi ' . e($l[2]) . '"></i></a>';
    }
    echo '</div>';
}

/* Renders one set of contact items for the scrolling bar */
function renderContactSet($me, $phoneHref, $links, $hidden = false) {
    $tab = $hidden ? ' tabindex="-1"' : '';
    echo '<div class="hnx-contact-set"' . ($hidden ? ' aria-hidden="true"' : '') . '>';
    echo '<a href="mailto:' . e($me['email']) . '" class="hnx-contact-item"' . $tab . '><span class="hnx-circle"><i class="bi bi-envelope-fill"></i></span><span>' . e($me['email']) . '</span></a>';
    echo '<span class="hnx-rule"></span>';
    echo '<a href="' . e($phoneHref) . '" class="hnx-contact-item"' . $tab . '><span class="hnx-circle"><i class="bi bi-telephone-fill"></i></span><span>' . e($me['phone']) . '</span></a>';
    echo '<span class="hnx-rule"></span>';
    echo '<a href="https://wa.me/' . e($me['wa']) . '" class="hnx-contact-item" target="_blank" rel="noopener"' . $tab . '><span class="hnx-circle"><i class="bi bi-whatsapp"></i></span><span>WhatsApp Me</span></a>';
    echo '<span class="hnx-rule"></span>';
    renderSocial($links, 'hnx-mobile-social', $hidden);
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($pageTitle ?? 'Sairam | Portfolio'); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Common Stylesheet -->
    <link rel="stylesheet" href="assets/css/new_stylings.css">

    <!-- Loader Stylesheet -->
    <link rel="stylesheet" href="assets/css/loader.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body class="loading">

<!-- ==================================
     ENTRANCE LOADER
=================================== -->
<div class="portfolio-loader" id="portfolioLoader" role="status" aria-label="Loading Sairam Portfolio">
    <div class="portfolio-loader__content">
        <p class="portfolio-loader__eyebrow">Welcome to</p>
        <div class="portfolio-loader__title"><span>SAIRAM</span><strong>PORTFOLIO</strong></div>
        <span class="portfolio-loader__line" aria-hidden="true"><i></i></span>
        <span class="portfolio-loader__caption">Design · Develop · Create</span>
    </div>
</div>

<header class="header_new_section" id="header_new_section">

<!-- ==========================================
     PREMIUM TOP CONTACT BAR
========================================== -->

<div class="hnx-top">
    <div class="hnx-top-inner">

        <!-- CONTACT DETAILS -->
        <div class="hnx-contact-viewport">
            <div class="hnx-contact-track">

                <!-- FIRST CONTACT SET -->
                <?php renderContactSet($me, $phoneHref, $socialLinks, false); ?>

                <!-- DUPLICATE SET FOR CONTINUOUS SCROLLING -->
                <?php renderContactSet($me, $phoneHref, $socialLinks, true); ?>

            </div>
        </div>

        <!-- DESKTOP SOCIAL ICONS - RIGHTMOST -->
        <?php renderSocial($socialLinks, 'hnx-desktop-social'); ?>

    </div>
</div>

    <!-- ==================================
         MAIN NAVIGATION HEADER
    =================================== -->
    <div class="hnx-main">

        <div class="hnx-inner">

            <!-- LOGO & BRAND -->
            <a href="index.php" class="hnx-brand">
                <img
                    src="assets/img/sairam-movie-logo-removebg-preview.png"
                    alt="Sairam Portfolio"
                    class="hnx-logo"
                    loading="eager">
            </a>

            <!-- MOBILE & TABLET TOGGLE -->
            <button
                class="hnx-toggle"
                type="button"
                aria-label="Toggle navigation"
                aria-controls="hnx-navigation"
                aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>

            <!-- MENU -->
            <div class="hnx-menu" id="hnx-navigation">

                <nav aria-label="Main navigation">
                    <ul class="hnx-nav">
                        <?php foreach ($navItems as $file => $label): ?>
                        <li>
                            <a href="<?php echo e($file); ?>"
                               class="<?php echo $currentPage === $file ? 'active' : ''; ?>"
                               <?php echo $currentPage === $file ? 'aria-current="page"' : ''; ?>>
                                <?php echo e($label); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <!-- HIRE ME BUTTON -->
                <a href="contact-us.php" class="hnx-cta">
                    <span>Hire Me</span>
                    <span class="hnx-cta-arrow"><i class="bi bi-chevron-right"></i></span>
                </a>

            </div>

        </div>
    </div>

    <!-- ==================================
         BOTTOM SCROLLING MARQUEE
    =================================== -->
    <div class="hnx-ticker" aria-label="Sairam portfolio highlights">

        <div class="hnx-track" aria-hidden="true">

            <?php for ($g = 0; $g < 2; $g++): ?>
            <div class="hnx-ticker-group">
                <?php for ($i = 0; $i < 3; $i++): ?>
                <span class="hnx-ticker-item">
                    <i class="bi bi-chevron-double-right"></i>
                    <i class="bi bi-code-slash"></i>
                    <span>
                        WEBSITE DEVELOPER AND
                        <span class="hnx-aqua">UI / UX ENTHUSIAST</span>
                    </span>
                    <span class="hnx-divider">|</span>
                </span>
                <?php endfor; ?>
            </div>
            <?php endfor; ?>

        </div>
    </div>

</header>

<!-- ==================================
     LOADER + MOBILE NAVIGATION JS
=================================== -->
<script>
(function () {

    /* Loader: show at least 1.4s, then fade out */
    const loader = document.getElementById('portfolioLoader');
    if (loader) {
        const started = Date.now();
        let done = false;

        function hideLoader() {
            if (done) return;
            done = true;
            const wait = Math.max(0, 1400 - (Date.now() - started));
            setTimeout(function () {
                loader.classList.add('is-hidden');
                document.body.classList.remove('loading');
            }, wait);
        }

        if (document.readyState === 'complete') {
            hideLoader();
        } else {
            window.addEventListener('load', hideLoader);
        }
        setTimeout(hideLoader, 6000); /* safety fallback */
    }

    /* Mobile navigation */
    const header = document.getElementById('header_new_section');
    if (!header) return;

    const toggle = header.querySelector('.hnx-toggle');
    const menu = header.querySelector('.hnx-menu');
    if (!toggle || !menu) return;

    toggle.addEventListener('click', function () {
        const isOpen = menu.classList.toggle('hnx-open');
        toggle.setAttribute('aria-expanded', String(isOpen));
        const icon = toggle.querySelector('i');
        if (icon) icon.className = isOpen ? 'bi bi-x-lg' : 'bi bi-list';
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 992) {
            menu.classList.remove('hnx-open');
            toggle.setAttribute('aria-expanded', 'false');
            const icon = toggle.querySelector('i');
            if (icon) icon.className = 'bi bi-list';
        }
    });

})();
</script>
