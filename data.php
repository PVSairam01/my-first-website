<?php
// Edit your details here – header and all pages update automatically.
if (!function_exists('e')) {
    function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
}

$me = [
  'name'   => 'P. Venkata Sairam',
  'email'  => 'sairampachipala00@gmail.com',
  'phone'  => '+91 9390717011',
  'wa'     => '919390717011',
  'city'   => 'Kakinada, Andhra Pradesh',
  'linkedin'  => 'https://linkedin.com/in/patchipala-venkata-sairam-5487301a3',
  'instagram' => 'https://instagram.com/art_is_my_first_love',
  'roles'  => ['Website Developer', 'Java Developer', 'UI/UX Enthusiast', 'Pencil Artist'],
  'about'  => 'Computer Science graduate and Website Developer Intern at Bhavi Creations Pvt Ltd. I build responsive websites, love clean UI/UX, and enjoy turning ideas into working products with Python, Java, Angular, Node.js and Django.',
];

$stats = [
  ['5+', 'Months Internship', 'bi-briefcase'],
  ['3', 'Major Projects', 'bi-kanban'],
  ['8.03', 'B.Tech CGPA', 'bi-mortarboard'],
  ['8+', 'Certifications', 'bi-patch-check'],
];

$skills = [
  ['Python', 50], ['Java', 70], ['C', 70], ['MySQL', 75],
  ['HTML / CSS / Bootstrap', 80], ['Linux & Windows', 70],
];

$experience = [[
  'role' => 'Website Developer Intern',
  'org'  => 'Bhavi Creations Pvt Ltd, Kakinada',
  'date' => '8 Jun 2026 – 7 Nov 2026',
  'points' => [
    'Worked on website design and development projects for the company and its clients.',
    'Built and updated web pages and created responsive layouts.',
    'Tested and maintained websites; completed all assigned tasks with dedication.',
  ],
]];

$education = [
  ['BTech – Computer Science & Engineering', 'Pragati Engineering College, Surampalem', 'Aug 2019 – Jun 2023', 'CGPA: 8.03'],
  ['Intermediate – MPC', 'Narayana Junior College, Kakinada', 'Jun 2017 – Apr 2019', 'CGPA: 8.84'],
  ['10th – SSC', 'Sri Chaitanya Techno School, Kakinada', 'Jun 2016 – Apr 2017', 'CGPA: 9.3'],
];

$certs = [
  'Paper on Wireless Networks – IJSRED, Vol 5 Issue 1 (2022)',
  'NPTEL – Data Analytics with Python',
  'Google UX Design Professional Certificate – Coursera',
  'Cybersecurity Introduction & Essentials – Cisco',
  'Basics of Linux & Shell Scripting – APSSDC',
  'Minecraft: World & Game Management – Microsoft Educator Center',
  'Starting with Python Programming – Certificate by Microsoft Student Partners (2020)',
  'Effective Coding in Python – Certificate by Microsoft Learn Student Ambassadors (7/11/2021)',
  'Google Cloud Career Readiness Associate Cloud Engineer Track – Certificate by Google (Issued on 21 May 2023)',
];

$achievements = [
  'My Anatomy - National Competence Evaluation Test: Score - 78/100, placed in the Top 2% of test takers.',
];

$interests = [
  'Pencil Art: Instagram Art Account – art_is_my_first_love',
  'Cricket: Occasionally.',
  'Watching Anime: One Punch Man, Naruto.',
  'Gaming: Free Fire Player.',
];

// [icon, title, subtitle, description, image]
$services = [
  ['bi-window-sidebar', 'Website', 'Design & Development', 'Responsive, fast and clean websites for businesses, portfolios and startups, built with HTML, CSS, Bootstrap and modern frameworks.', 'assets/img/website -design.png'],
  ['bi-phone', 'Mobile App', 'Modern Applications', 'User-friendly mobile applications with a smooth interface and reliable performance.', 'assets/img/mobile-app-development.png'],
  ['bi-code-slash', 'Software', 'Custom Solutions', 'Custom software built with Java, Python, Django and Node.js to solve your specific business problem.', 'assets/img/website -design.png'],
  ['bi-instagram', 'Social Media', 'Content & Growth', 'Creative post designs and content planning to grow your brand presence online.', 'assets/img/Social-Media-Marketing.webp'],
  ['bi-graph-up-arrow', 'SEO', 'Search Visibility', 'On-page optimisation and speed improvements so your website is easier to find on search engines.', 'assets/img/website -design.png'],
  ['bi-vector-pen', 'Graphic Design', 'Creative Visuals', 'Logos, posters and banners with a clean, eye-catching design.', 'assets/img/Graphic-design-img.png'],
  ['bi-play-btn', 'Video Editing', 'Reels & Videos', 'Reels, promos and short videos edited to match your brand style.', 'assets/img/Video-editing.png'],
  ['bi-gem', 'Branding', 'Identity & Strategy', 'Brand identity, colour and typography guidance for a consistent professional look.', 'assets/img/Graphic-design-img.png'],
];

$faqs = [
  ['How do I start a project with you?', 'Send me your requirement through the contact form or WhatsApp. We discuss the scope, timeline and features, and then I share a plan before starting.'],
  ['Will my website work on mobile phones?', 'Yes. Every website is built responsive so it looks and works well on mobile, tablet and desktop.'],
  ['Can you update or fix my existing website?', 'Yes. I can redesign, fix bugs, improve speed or add new pages to an existing website.'],
  ['Do you provide support after delivery?', 'Yes. I help with small changes and fixes after the project goes live.'],
];

// PLACEHOLDERS - replace with real client feedback
$testimonials = [
  ['Sairam delivered the website ahead of schedule. The design is clean, the pages load fast and every change request was handled quickly.', 'Client Name 1', 'Business Owner'],
  ['Great experience from start to finish. He understood the requirement quickly and communicated clearly throughout the project.', 'Client Name 2', 'Store Manager'],
  ['Very dedicated and willing to learn. The responsive layouts he built worked perfectly on every device.', 'Client Name 3', 'Team Lead'],
  ['Clean UI and neat code. The final website matched our brand exactly.', 'Client Name 4', 'Startup Founder'],
  ['Quick support after launch and very polite to work with. Highly recommended.', 'Client Name 5', 'Shop Owner'],
  ['Creative ideas and good attention to detail. Happy with the result.', 'Client Name 6', 'Marketing Executive'],
];
