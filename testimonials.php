<?php
$pageTitle = 'Testimonials | P. Venkata Sairam';
include 'header.php';
?>

<!-- ==========================================
     TESTIMONIALS - SLIDER
     (same design as index fifth section)
========================================== -->

<section class="index_new_fifth_section" id="index_new_fifth_section">

    <div class="infive-ambient infive-ambient-one" aria-hidden="true"></div>
    <div class="infive-ambient infive-ambient-two" aria-hidden="true"></div>
    <div class="infive-pattern" aria-hidden="true"></div>

    <div class="container infive-container">

        <div class="infive-main-card">

            <div class="row align-items-center g-4 g-xl-5">

                <!-- LEFT VISUAL COLUMN -->
                <div class="col-12 col-lg-5">

                    <div class="infive-visual">

                        <div class="infive-image-orbit" aria-hidden="true"></div>

                        <div class="infive-image-frame">
                            <div class="infive-image-inner">

                                <img
                                    src="assets/images/sairam/testimonial.webp"
                                    alt="Client sharing a testimonial"
                                    class="infive-illustration"
                                    loading="lazy"
                                    onerror="this.hidden=true">

                                <div class="infive-illustration-fallback" aria-hidden="true">
                                    <i class="bi bi-chat-heart-fill"></i>
                                </div>

                            </div>
                        </div>

                        <div class="infive-floating-quote" aria-hidden="true">
                            <i class="bi bi-quote"></i>
                        </div>

                        <span class="infive-particle infive-particle-one"></span>
                        <span class="infive-particle infive-particle-two"></span>

                    </div>

                </div>

                <!-- RIGHT CONTENT COLUMN -->
                <div class="col-12 col-lg-7">

                    <div class="infive-content">

                        <div class="infive-eyebrow">
                            <span class="infive-eyebrow-dot"></span>
                            <span>CLIENTS TESTIMONIALS</span>
                            <span class="infive-eyebrow-line"></span>
                        </div>

                        <h1 class="infive-heading">
                            What My
                            <span>Clients Say</span>
                        </h1>

                        <p class="infive-intro">
                            Experiences shared by the people I have worked with.
                        </p>

                        <div class="infive-review-panel">

                            <div class="infive-review-glow" aria-hidden="true"></div>

                            <div class="swiper infive-testimonial-swiper">

                                <div class="swiper-wrapper">

                                    <?php foreach (array_slice($testimonials, 0, 4) as $review): ?>

                                    <div class="swiper-slide">

                                        <article class="infive-review">

                                            <div class="infive-review-symbol" aria-hidden="true">
                                                <i class="bi bi-quote"></i>
                                            </div>

                                            <blockquote class="infive-review-text">
                                                <?php echo e($review[0]); ?>
                                            </blockquote>

                                            <div class="infive-review-bottom">
                                                <div class="infive-author">
                                                    <div class="infive-author-avatar" aria-hidden="true">
                                                        <i class="bi bi-person-fill"></i>
                                                    </div>
                                                    <div class="infive-author-info">
                                                        <h3><?php echo e($review[1]); ?></h3>
                                                        <span><?php echo e($review[2]); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </article>

                                    </div>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                            <div class="infive-controls">

                                <button type="button" class="infive-prev" aria-label="Previous testimonial">
                                    <i class="bi bi-arrow-left"></i>
                                </button>

                                <button type="button" class="infive-next" aria-label="Next testimonial">
                                    <i class="bi bi-arrow-right"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ==========================================
     TESTIMONIALS - ALL REVIEWS GRID
     (same design as service third section cards)
========================================== -->

<section class="service_new_third_section">

    <div class="snts-bg-shape snts-shape-one" aria-hidden="true"></div>
    <div class="snts-bg-shape snts-shape-two" aria-hidden="true"></div>
    <div class="snts-glow snts-glow-left" aria-hidden="true"></div>
    <div class="snts-glow snts-glow-right" aria-hidden="true"></div>

    <div class="container snts-container">

        <div class="snts-heading-wrap">
            <span class="snts-subtitle">Happy Clients</span>
            <h2 class="snts-title">All <span>Reviews</span></h2>
            <p class="snts-description">Kind words from clients, colleagues and teammates.</p>
        </div>

        <div class="row g-4 snts-main-row">

            <?php foreach ($testimonials as $t): ?>
            <div class="col-lg-4 col-md-6">
                <div class="snts-card snts-light-card">
                    <div class="snts-card-pattern snts-location-pattern"></div>
                    <div class="snts-icon-circle"><i class="bi bi-quote"></i></div>

                    <p class="snts-faq-text"><?php echo e($t[0]); ?></p>

                    <div class="snts-location-block">
                        <div class="snts-location-icon"><i class="bi bi-person-fill"></i></div>
                        <div class="snts-location-content">
                            <h4 style="font-size:18px;"><?php echo e($t[1]); ?></h4>
                            <p class="mb-0"><?php echo e($t[2]); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <div class="text-center mt-5">
            <a href="contact-us.php" class="snts-btn-link">
                <span>Start Your Project</span>
                <span class="snts-arrow-circle"><i class="bi bi-arrow-right"></i></span>
            </a>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
