    <?php
require_once __DIR__ . "/../site-config.php";
?>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlobalEdu | Premium Education Platform</title>
    <link rel="icon" type="image/x-icon" href="<?= BASE_URL ?>img/favicon.png">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@500;600;700&family=Playfair+Display:ital,wght@1,600&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="main.css"> -->
     <link rel="stylesheet" href="<?= BASE_URL ?>main.css?v=2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    </head>
    <!-- ── HEADER ── -->
    <!-- Header -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">

            <a class="navbar-brand" href="<?= BASE_URL ?>">
                <!-- <img src="img/logo_img.png" alt="Logo" class="logo-img"> -->
            <img src="<?= BASE_URL ?>img/logo_img.png" alt="Logo" class="logo-img">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

        <div class="menu-box d-flex align-items-center">

            <ul class="navbar-nav">

                <li class="nav-item text-center">
                    <a class="nav-link main-link" href="<?= BASE_URL ?>">HOME</a>
                    <!-- <span class="sub-link">OUR WORLD</span> -->
                </li>

                <li class="nav-item text-center">
                    <a class="nav-link main-link" href="<?= BASE_URL ?>about">ABOUT</a>
                    <!-- <span class="sub-link">GLOBAL TIES</span> -->
                </li>

                <li class="nav-item dropdown text-center position-relative">
        <a class="nav-link main-link dropdown-toggle" href="#" id="studyAbroadDropdown" role="button" aria-expanded="false">
            STUDY ABROAD
        </a>
        <!-- <span class="sub-link d-block">GLOBAL EDUCATION</span> -->

        <div class="dropdown-menu mega-dropdown" aria-labelledby="studyAbroadDropdown">
            <div class="row">
                <div class="col-md-6">
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-canada">Study in Canada</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-new-zealand">Study in New Zealand</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-australia">Study in Australia</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-germany">Study in Germany</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-uk">Study in UK</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-singapore">Study in Singapore</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-usa">Study in USA</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-ireland">Study in Ireland</a>
                </div>
                <div class="col-md-6">
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-dubai">Study in Dubai</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-switzerland">Study in Switzerland</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-denmark">Study in Denmark</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-spain">Study in Spain</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-france">Study in France</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-sweden">Study in Sweden</a>
                    <a class="dropdown-item" href="<?= BASE_URL ?>study-in-italy">Study in Italy</a>
                </div>
            </div>
        </div>
    </li>

                <!-- <li class="nav-item text-center">
                    <a class="nav-link main-link" href="<?= BASE_URL ?>courses">COURSES</a>
                    <span class="sub-link">WHAT WE OFFER</span>
                </li> -->

   <li class="nav-item dropdown text-center position-relative">

    <a class="nav-link main-link dropdown-toggle" href="#" id="mbbsDropdown" role="button" aria-expanded="false">
        MBBS ABROAD
    </a>

    <!-- <span class="sub-link d-block">ALL COUNTRIES</span> -->

    <div class="dropdown-menu mega-dropdown" aria-labelledby="mbbsDropdown">
        <div class="row">
            <div class="col-md-6">
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-russia">MBBS in Russia</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-caribbean-islands">MBBS in Caribbean Islands</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-malaysia">MBBS in Malaysia</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-tajikistan">MBBS in Tajikistan</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-kyrgyzstan">MBBS in Kyrgyzstan</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-georgia">MBBS in Georgia</a>
            </div>
            <div class="col-md-6">
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-kazakhstan">MBBS in Kazakhstan</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-latvia">MBBS in Latvia</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-uzbekistan">MBBS in Uzbekistan</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-poland">MBBS in Poland</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>study-mbbs-in-bangladesh">MBBS in Bangladesh</a>
            </div>
        </div>
    </div>
</li>
   <li class="nav-item dropdown text-center position-relative">
    <a class="nav-link main-link dropdown-toggle" href="#" id="testPrepDropdown" role="button" aria-expanded="false">
        TEST PREPARATION
    </a>
    <!-- <span class="sub-link d-block">EXAM PREP</span> -->

    <div class="dropdown-menu mega-dropdown" aria-labelledby="testPrepDropdown">
        <div class="row">
            <div class="col-md-6">
                <a class="dropdown-item" href="<?= BASE_URL ?>ielts">IELTS</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>sat">SAT</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>toefl">TOEFL</a>
                <!-- <a class="dropdown-item" href="<?= BASE_URL ?>oet">OET</a> -->
                <a class="dropdown-item" href="<?= BASE_URL ?>pte">PTE</a>
                                <a class="dropdown-item" href="<?= BASE_URL ?>duolingo">Duolingo</a>

            </div>
            <div class="col-md-6">
                <a class="dropdown-item" href="<?= BASE_URL ?>gre">GRE</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>french">French</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>gmat">GMAT</a>
                <a class="dropdown-item" href="<?= BASE_URL ?>german">German</a>
            </div>
        </div>
    </div>
</li>
   <li class="nav-item text-center">
                    <a class="nav-link main-link" href="<?= BASE_URL ?>services">SERVICES</a>
                    <!-- <span class="sub-link">WHAT WE DO</span> -->
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link main-link" href="<?= BASE_URL ?>blogs">BLOGS</a>
                    <!-- <span class="sub-link">LATEST NEWS</span> -->
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link main-link" href="<?= BASE_URL ?>contact">CONTACT</a>
                    <!-- <span class="sub-link">SAY US HI</span> -->
                </li>

            </ul>

            <a href="<?= BASE_URL ?>#contact" class="btn-custom apply-btn ms-4">
                Apply Now
            </a>

        </div>

    </div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownToggles = document.querySelectorAll('.nav-link.dropdown-toggle');
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    const toggler = document.querySelector('.navbar-toggler');
                    // Only apply custom click behavior if we are in mobile view (toggler is visible)
                    if (toggler && window.getComputedStyle(toggler).display !== 'none') {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        // Close other open dropdowns
                        dropdownToggles.forEach(otherToggle => {
                            if (otherToggle !== this) {
                                const otherMenu = otherToggle.nextElementSibling;
                                if (otherMenu && otherMenu.classList.contains('dropdown-menu')) {
                                    otherMenu.classList.remove('show');
                                }
                            }
                        });

                        // Toggle this dropdown
                        const menu = this.nextElementSibling;
                        if (menu && menu.classList.contains('dropdown-menu')) {
                            menu.classList.toggle('show');
                        }
                    }
                });
            });
        });
    </script>
