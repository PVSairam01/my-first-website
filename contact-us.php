<?php include 'header.php'; ?>

<!-- ==========================================
     CONTACT NEW FIRST SECTION
     SAIRAM PORTFOLIO PREMIUM CONTACT PAGE
========================================== -->

<section class="contect_new_first_section"
         id="contect_new_first_section">

    <!-- BACKGROUND DECORATIONS -->
    <div class="cnfs-background-grid" aria-hidden="true"></div>
    <div class="cnfs-glow cnfs-glow-one" aria-hidden="true"></div>
    <div class="cnfs-glow cnfs-glow-two" aria-hidden="true"></div>

    <span class="cnfs-cross cnfs-cross-one" aria-hidden="true">+</span>
    <span class="cnfs-cross cnfs-cross-two" aria-hidden="true">+</span>
    <span class="cnfs-cross cnfs-cross-three" aria-hidden="true">+</span>

    <div class="cnfs-dots cnfs-dots-one" aria-hidden="true"></div>
    <div class="cnfs-dots cnfs-dots-two" aria-hidden="true"></div>
    <div class="cnfs-dots cnfs-dots-three" aria-hidden="true"></div>

    <!-- GLOWING TOOTH - TOP RIGHT -->
    <div class="cnfs-tooth cnfs-tooth-right" aria-hidden="true">
        <svg viewBox="0 0 180 210" fill="none"
     xmlns="http://www.w3.org/2000/svg">

    <!-- Laptop Screen -->
    <rect x="35" y="48" width="110" height="78"
          rx="7"
          stroke="currentColor"
          stroke-width="4"/>

    <!-- Screen Inner Border -->
    <rect x="43" y="56" width="94" height="62"
          rx="3"
          stroke="currentColor"
          stroke-width="2"/>

    <!-- Laptop Base -->
    <path d="M23 140 H157 L168 157
             Q170 163 162 163 H18
             Q10 163 12 157 Z"
          stroke="currentColor"
          stroke-width="4"
          stroke-linejoin="round"/>

    <!-- Trackpad -->
    <path d="M78 151 H102"
          stroke="currentColor"
          stroke-width="2.5"
          stroke-linecap="round"/>

    <!-- Decorative Orbit -->
    <circle cx="90" cy="105" r="85"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-dasharray="3 7"/>
</svg>
    </div>

    <!-- GLOWING TOOTH - BOTTOM LEFT -->
    <div class="cnfs-tooth cnfs-tooth-left" aria-hidden="true">
        <svg viewBox="0 0 180 210" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M91 26 C57 6 19 24 19 69 C19 103 39 120 47 156 C53 182 64 199 76 178 C84 164 82 136 90 129 C98 136 96 164 104 178 C116 199 127 182 133 156 C141 120 161 103 161 69 C161 24 125 6 91 26Z"
                  stroke="currentColor" stroke-width="4"/>
            <path d="M91 26 C82 34 72 38 61 38"
                  stroke="currentColor" stroke-width="2"/>
        </svg>
    </div>

    <!-- BACKGROUND WAVE LINES -->
    <svg class="cnfs-wave-decoration"
         viewBox="0 0 1440 180"
         preserveAspectRatio="none"
         aria-hidden="true">
        <path d="M0 65 C220 195 390 15 610 105 S1040 195 1440 35"
              fill="none" stroke="#34ecff"
              stroke-width="2"/>
        <path d="M0 90 C270 210 390 40 650 125 S1110 175 1440 60"
              fill="none" stroke="#34ecff"
              stroke-opacity=".33"
              stroke-width="1.5"/>
        <path d="M0 115 C220 215 470 50 740 145 S1170 190 1440 85"
              fill="none" stroke="#b9f5ff"
              stroke-opacity=".18"
              stroke-width="1"/>
    </svg>

    <div class="container cnfs-container">

        <div class="row g-4 g-xl-5 align-items-start">

            <!-- =====================================
                 LEFT - CONTACT FORM
            ====================================== -->
            <div class="col-12 col-lg-6">

                <div class="cnfs-form-card">

                    <span class="cnfs-border-shine" aria-hidden="true"></span>

                    <!-- Card upper decorative light -->
                    <div class="cnfs-card-corner-glow" aria-hidden="true"></div>

                    <!-- Floating Tooth Graphic -->
                    <div class="cnfs-form-tooth" aria-hidden="true">
                        <span class="cnfs-tooth-orbit"></span>
                        <span class="cnfs-tooth-orbit cnfs-orbit-two"></span>

                        <svg viewBox="0 0 100 120" fill="none"
     xmlns="http://www.w3.org/2000/svg">

    <!-- Laptop Screen -->
    <rect x="19" y="25" width="62" height="45"
          rx="4"
          stroke="currentColor"
          stroke-width="3"/>

    <!-- Screen Inner Border -->
    <rect x="25" y="31" width="50" height="33"
          rx="2"
          stroke="currentColor"
          stroke-width="2"/>

    <!-- Laptop Base -->
    <path d="M12 77 H88 L94 87
             Q95 91 90 91 H10
             Q5 91 6 87 Z"
          stroke="currentColor"
          stroke-width="3"
          stroke-linejoin="round"/>

    <!-- Trackpad -->
    <path d="M43 84 H57"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"/>
</svg>

                        <span class="cnfs-orbit-dot"></span>
                    </div>

                    <!-- Heading -->
                    <div class="cnfs-form-heading">

                        <div class="cnfs-eyebrow">
                            <span class="cnfs-small-line"></span>
                            <span>Let's Work Together</span>
                        </div>

                        <h1 class="cnfs-title">
                            Get In <span>Touch</span>
                        </h1>

                        <span class="cnfs-title-underline"></span>

                    </div>

                    <!-- CONTACT FORM -->
                    <!-- Connect this form to your existing PHP mail handler -->
                    <form class="cnfs-contact-form"
                          action="appointmentform.php"
                          method="POST">

                        <div class="cnfs-form-group">

                            <label for="cnfs_full_name" class="visually-hidden">
                                Full Name
                            </label>

                            <div class="cnfs-input-wrapper">

                                <input
                                    type="text"
                                    id="cnfs_full_name"
                                    name="name"
                                    class="cnfs-form-control"
                                    placeholder="Enter Full Name"
                                    autocomplete="name"
                                    maxlength="120"
                                    required>

                                <span class="cnfs-field-icon" aria-hidden="true">
                                    <i class="bi bi-person"></i>
                                </span>

                            </div>

                        </div>

                        <div class="cnfs-form-group">

                            <label for="cnfs_email" class="visually-hidden">
                                Email Address
                            </label>

                            <div class="cnfs-input-wrapper">

                                <input
                                    type="email"
                                    id="cnfs_email"
                                    name="email"
                                    class="cnfs-form-control"
                                    placeholder="Enter Email Address"
                                    autocomplete="email"
                                    maxlength="254"
                                    required>

                                <span class="cnfs-field-icon" aria-hidden="true">
                                    <i class="bi bi-envelope"></i>
                                </span>

                            </div>

                        </div>

                        <div class="cnfs-form-group">

                            <label for="cnfs_message" class="visually-hidden">
                                Your Message
                            </label>

                            <div class="cnfs-input-wrapper cnfs-textarea-wrapper">

                                <textarea
                                    id="cnfs_message"
                                    name="message"
                                    class="cnfs-form-control cnfs-textarea"
                                    placeholder="Tell me about your project"
                                    rows="6"
                                    maxlength="5000"
                                    required></textarea>

                                <span class="cnfs-field-icon" aria-hidden="true">
                                    <i class="bi bi-chat-left-dots"></i>
                                </span>

                            </div>

                        </div>

                        <!-- SUBMIT BUTTON -->
                        <div class="cnfs-submit-area">

                            <button type="submit" class="cnfs-submit-btn">

                                <span>Send Message</span>

                                <span class="cnfs-submit-arrow" aria-hidden="true">
                                    <i class="bi bi-arrow-right"></i>
                                </span>

                            </button>

                        </div>

                    </form>

                    <div class="cnfs-form-bottom-wave" aria-hidden="true"></div>

                </div>

            </div>

            <!-- =====================================
                 RIGHT - CONTACT DETAILS
            ====================================== -->
            <div class="col-12 col-lg-6">

                <div class="cnfs-contact-details">

                    <!-- Heading -->
                    <div class="cnfs-right-heading">

                        <div class="cnfs-eyebrow">
                            <span class="cnfs-small-line"></span>
                            <span>Let's Work Together</span>
                        </div>

                        <h2 class="cnfs-title">
                            Get In <span>Touch</span>
                        </h2>

                        <span class="cnfs-title-underline"></span>

                    </div>

                    <div class="cnfs-info-list">

                        <!-- LOCATION -->
                        <div class="cnfs-info-card">

                            <span class="cnfs-info-shine" aria-hidden="true"></span>

                            <div class="cnfs-info-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div class="cnfs-info-content">

                                <h3>My Location</h3>

                                <a href="https://www.google.com/maps/search/?api=1&amp;query=Kakinada"
                                   target="_blank"
                                   rel="noopener noreferrer">

                                    Kakinada,
                                    Andhra Pradesh,
                                    India

                                </a>

                            </div>

                        </div>

                        <!-- AVAILABILITY -->
                        <div class="cnfs-info-card">

                            <span class="cnfs-info-shine" aria-hidden="true"></span>

                            <div class="cnfs-info-icon">
                                <i class="bi bi-clock"></i>
                            </div>

                            <div class="cnfs-info-content">

                                <h3>Availability</h3>

                                <a href="mailto:sairampachipala00@gmail.com">
                                    Open for frontend web developer &amp; full-time roles,
                                    Mon - Fri, 9:00 AM - 6:00 PM
                                </a>

                            </div>

                        </div>

                        <!-- PHONE -->
                        <div class="cnfs-info-card">

                            <span class="cnfs-info-shine" aria-hidden="true"></span>

                            <div class="cnfs-info-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <div class="cnfs-info-content">

                                <h3>My Phone</h3>

                                <a href="tel:+91 9390717011">
                                    Mobile : +91 9390717011
                                </a>

                                <a href="tel:+91 9989575198">
                                    Mobile : +91 9989575198
                                </a>

                            </div>

                        </div>

                        <!-- EMAIL -->
                        <div class="cnfs-info-card">

                            <span class="cnfs-info-shine" aria-hidden="true"></span>

                            <div class="cnfs-info-icon">
                                <i class="bi bi-envelope-open"></i>
                            </div>

                            <div class="cnfs-info-content">

                                <h3>My Email</h3>

                                <a href="mailto:sairampachipala00@gmail.com">
                                    Email : sairampachipala00@gmail.com
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- END CONTACT NEW FIRST SECTION -->

<?php include 'footer.php'; ?>
