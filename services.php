<?php
$pageTitle = 'Services | P. Venkata Sairam';
include 'header.php';
?>

<!-- ======================================================
     SERVICES - GRID (same design as service first section)
====================================================== -->
<section class="service_new_first_section" id="service_new_first_section">

    <div class="snfs-background-grid" aria-hidden="true"></div>
    <div class="snfs-bg-glow snfs-glow-one" aria-hidden="true"></div>
    <div class="snfs-bg-glow snfs-glow-two" aria-hidden="true"></div>
    <span class="snfs-decor-cross snfs-cross-one" aria-hidden="true">+</span>
    <span class="snfs-decor-cross snfs-cross-two" aria-hidden="true">+</span>

    <div class="container snfs-container">

        <div class="snfs-title-area">
            <div class="snfs-eyebrow">
                <span class="snfs-eyebrow-line"></span>
                <span>WHAT I OFFER</span>
                <span class="snfs-eyebrow-line"></span>
            </div>
            <h1 class="snfs-section-title">My <span>Services</span></h1>
            <p class="snfs-section-description">
                Creative and digital solutions from design to development. Tap
                any service to chat with me on WhatsApp.
            </p>
            <div class="snfs-title-decoration" aria-hidden="true">
                <span></span><span></span><span></span>
            </div>
        </div>

        <div class="snfs-services-grid">

            <?php foreach ($services as $s): ?>
            <article class="snfs-service-card">

                <div class="snfs-image-area">
                    <div class="snfs-image-wrap">
                        <img src="<?php echo e($s[4]); ?>"
                             alt="<?php echo e($s[1]); ?>"
                             class="snfs-service-image"
                             loading="lazy">
                    </div>
                    <div class="snfs-image-shade" aria-hidden="true"></div>
                    <div class="snfs-floating-icon" aria-hidden="true">
                        <i class="bi <?php echo e($s[0]); ?>"></i>
                    </div>
                </div>

                <div class="snfs-card-content">

                    <div class="snfs-card-heading-wrap">
                        <span class="snfs-card-heading-accent" aria-hidden="true"></span>
                        <h3 class="snfs-service-title"><?php echo e($s[1]); ?> &ndash; <?php echo e($s[2]); ?></h3>
                    </div>

                    <p class="snfs-service-description"><?php echo e($s[3]); ?></p>

                    <a class="snfs-read-more"
                       href="https://wa.me/<?php echo e($me['wa']); ?>?text=<?php echo urlencode('Hi Sairam, I am interested in ' . $s[1]); ?>"
                       target="_blank" rel="noopener">
                        <span>Enquire Now</span>
                        <span class="snfs-read-arrow"><i class="bi bi-arrow-up-right"></i></span>
                    </a>

                </div>

                <span class="snfs-card-bottom-light" aria-hidden="true"></span>

            </article>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<!-- ======================================================
     SERVICES - WHY ME + FAQ (same design as service third section)
====================================================== -->
<section class="service_new_third_section">

    <div class="snts-bg-shape snts-shape-one" aria-hidden="true"></div>
    <div class="snts-bg-shape snts-shape-two" aria-hidden="true"></div>
    <div class="snts-glow snts-glow-left" aria-hidden="true"></div>
    <div class="snts-glow snts-glow-right" aria-hidden="true"></div>

    <div class="container snts-container">

        <div class="snts-heading-wrap">
            <span class="snts-subtitle">Work With Me</span>
            <h2 class="snts-title">Why Choose <span>Me</span></h2>
            <p class="snts-description">A simple process, clear communication and clean results.</p>
        </div>

        <div class="row g-4 snts-main-row">

            <!-- WHY ME -->
            <div class="col-lg-5">
                <div class="snts-card snts-light-card">
                    <div class="snts-card-pattern snts-speciality-pattern"></div>
                    <div class="snts-icon-circle"><i class="bi bi-stars"></i></div>
                    <h3 class="snts-card-title">My Strengths</h3>
                    <p class="snts-mini-label">What You Get</p>

                    <ul class="snts-list">
                        <li><i class="bi bi-check-lg"></i><span>Responsive layouts for mobile, tablet and desktop</span></li>
                        <li><i class="bi bi-check-lg"></i><span>Clean UI backed by Google UX Design training</span></li>
                        <li><i class="bi bi-check-lg"></i><span>Python, Java, Angular, Node.js and Django knowledge</span></li>
                        <li><i class="bi bi-check-lg"></i><span>Tested and maintained websites</span></li>
                        <li><i class="bi bi-check-lg"></i><span>Quick replies on WhatsApp and email</span></li>
                    </ul>

                    <div class="snts-location-divider"></div>

                    <div class="snts-location-block">
                        <div class="snts-location-icon"><i class="bi bi-geo-alt"></i></div>
                        <div class="snts-location-content">
                            <h4>Based In</h4>
                            <p><?php echo e($me['city']); ?></p>
                            <a href="tel:<?php echo e(str_replace(' ', '', $me['phone'])); ?>">
                                <i class="bi bi-telephone-fill"></i> <?php echo e($me['phone']); ?>
                            </a>
                        </div>
                    </div>

                    <div class="snts-card-bottom">
                        <a href="contact-us.php" class="snts-btn-link">
                            <span>Contact Me</span>
                            <span class="snts-arrow-circle"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- FAQ -->
            <div class="col-lg-7">
                <div class="snts-card snts-faq-card">
                    <span class="snts-faq-badge">FAQ</span>
                    <h3 class="snts-faq-title">Frequently Asked Questions</h3>
                    <p class="snts-faq-text">Quick answers about working together.</p>

                    <div class="accordion snts-accordion" id="serviceAccordion">
                        <?php foreach ($faqs as $i => $f): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button <?php echo $i === 0 ? '' : 'collapsed'; ?>"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faq<?php echo $i; ?>"
                                        aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                                        aria-controls="faq<?php echo $i; ?>">
                                    <?php echo e($f[0]); ?>
                                </button>
                            </h2>
                            <div id="faq<?php echo $i; ?>"
                                 class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>"
                                 data-bs-parent="#serviceAccordion">
                                <div class="accordion-body"><?php echo e($f[1]); ?></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
