<?php require_once 'site-config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTE Coaching | The Global Ties</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="course-detail.css">
</head>

<body class="course-page">
    <?php include 'include/header.php'; ?>

    <!-- SECTION 1: HERO BANNER -->
    <section class="course-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <span class="hero-label">Global Exam Preparation</span>
                    <h1>The Global Ties â€“ Coimbatore's Most Professional Coaching for PTE Exam</h1>
                    <p>Master the PTE Academic examination through expert trainers, personalized mentoring, unlimited practice tests, and AI-powered performance tracking to achieve your dream international score.</p>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="lead-form-card glass-form">
                        <h3>Request Information</h3>
                        
              <?php if (isset($_GET['form_submitted']) && $_GET['form_submitted'] == 'success'): ?>
              <div class="alert alert-success" role="alert" style="padding: 10px; margin-bottom: 15px; border-radius: 5px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb;">
                Request submitted successfully! Our counselors will contact you soon.
              </div>
              <?php endif; ?>
              <form action="process_form.php" method="POST">
                            <div class="form-row">
                                <input type="text" name="full_name" class="custom-input" placeholder="Full Name" required>
                                <input type="tel" name="phone" class="custom-input" placeholder="Phone Number" required>
                            </div>
                            <input type="email" name="email" class="custom-input" placeholder="Email Address" required>
                            <input type="text" name="course" class="custom-input" required placeholder="Course/Destination Interested In">
                            <input type="text" name="city" class="custom-input" placeholder="City">
                            <textarea name="questions" class="custom-input" rows="3" placeholder="Any specific questions?"></textarea>
                            <button type="submit" class="submit-btn mt-3">Submit Application Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- SECTION 3: ABOUT EXAM -->
    <section class="luxury-section" id="about-exam">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1000&auto=format&fit=crop" alt="PTE Exam" class="img-fluid about-illustration">
                </div>
                <div class="col-lg-6 px-lg-5" data-aos="fade-left">
                <h2 class="section-title">
           PTE 
            <span class="accent-text">Exam</span>
          </h2>    
                    <p class="section-subtitle-luxury">PTE Academic is the world's leading computer-based test of English for study abroad and immigration. Typically, PTE Academic results are available within five business days.

</p>
                    
                    <div class="features-flex-container mt-4">
                        <div class="feature-glass-card">
                            <div class="feature-icon-wrapper"><i class="fas fa-bolt"></i></div>
                            <div>
                                <h5 class="fw-bold mb-1">Fast Results</h5>
                                <p class="text-muted mb-0 small">Get your scores typically within 48 hours.</p>
                            </div>
                        </div>
                        <div class="feature-glass-card">
                            <div class="feature-icon-wrapper"><i class="fas fa-shield-alt"></i></div>
                            <div>
                                <h5 class="fw-bold mb-1">Gov Approved</h5>
                                <p class="text-muted mb-0 small">Accepted by thousands of universities.</p>
                            </div>
                        </div>
                        <div class="feature-glass-card">
                            <div class="feature-icon-wrapper"><i class="fas fa-calendar-check"></i></div>
                            <div>
                                <h5 class="fw-bold mb-1">Flexible Dates</h5>
                                <p class="text-muted mb-0 small">Schedule up to 24 hours in advance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: WHY CHOOSE US -->
    <section class="luxury-section alt-bg" id="why-choose-us">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">
           Why to Study PTE at 
            <span class="accent-text">The Global Ties?</span>
          </h2>    
                <p class="section-subtitle-luxury max-w-700 mx-auto">Experience the best coaching with our proven methodology.</p>
            </div>
            
            <div class="why-us-grid">
                <!-- Point 1 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <h4 class="fw-bold mb-2">One-on-one PTE coaching.</h4>
                    </div>
                </div>
                <!-- Point 2 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="150">
                    <div>
                        <h4 class="fw-bold mb-2">Individual attention on PTE training.</h4>
                    </div>
                </div>
                <!-- Point 3 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <h4 class="fw-bold mb-2">Free PTE study materials.</h4>
                    </div>
                </div>
                <!-- Point 4 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="250">
                    <div>
                        <h4 class="fw-bold mb-2">No enrollment fees.</h4>
                    </div>
                </div>
                <!-- Point 5 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="300">
                    <div>
                        <h4 class="fw-bold mb-2">Unlimited Lab Access</h4>
                    </div>
                </div>
                <!-- Point 6 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="350">
                    <div>
                        <h4 class="fw-bold mb-2">Leading PTE Preparation Institute</h4>
                    </div>
                </div>
                <!-- Point 7 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="400">
                    <div>
                        <h4 class="fw-bold mb-2">Certified PTE Trainers</h4>
                    </div>
                </div>
                <!-- Point 8 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="450">
                    <div>
                        <h4 class="fw-bold mb-2">Individual Student Attention</h4>
                    </div>
                </div>
                <!-- Point 9 -->
                <div class="premium-icon-card" data-aos="fade-up" data-aos-delay="500">
                    <div>
                        <h4 class="fw-bold mb-2">No batch based PTE classes.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: TEST STRUCTURE -->
    <section class="luxury-section" id="test-structure">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
 <h2 class="section-title">
           Test
            <span class="accent-text">Structure</span>
          </h2>   
            <p class="section-subtitle-luxury">Understand the PTE Academic format.</p>
            </div>
            
            <div class="row justify-content-center">
                <!-- Part 1 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="test-structure-card h-100">
                        <div class="card-top">
                            <span class="part-badge">Part 1</span>
                            <h4>Speaking & Writing</h4>
                            <span class="duration-badge"><i class="far fa-clock"></i> 54â€“67 Minutes</span>
                        </div>
                        <div class="card-bottom">
                            <ul class="test-list">
                                <li>Personal introduction</li>
                                <li>Read aloud</li>
                                <li>Repeat sentence</li>
                                <li>Describe image</li>
                                <li>Retell lecture</li>
                                <li>Answer short question</li>
                                <li>Summarize written text</li>
                                <li>Essay</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Part 2 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="test-structure-card h-100">
                        <div class="card-top">
                            <span class="part-badge">Part 2</span>
                            <h4>Reading</h4>
                            <span class="duration-badge"><i class="far fa-clock"></i> 29â€“30 Minutes</span>
                        </div>
                        <div class="card-bottom">
                            <ul class="test-list">
                                <li>Fill in the blanks (Reading & Writing)</li>
                                <li>Multiple choice, multiple answer</li>
                                <li>Re-order paragraphs</li>
                                <li>Fill in the blanks (Reading)</li>
                                <li>Multiple choice, single answer</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Part 3 -->
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="test-structure-card h-100">
                        <div class="card-top">
                            <span class="part-badge">Part 3</span>
                            <h4>Listening</h4>
                            <span class="duration-badge"><i class="far fa-clock"></i> 30â€“43 Minutes</span>
                        </div>
                        <div class="card-bottom">
                            <ul class="test-list">
                                <li>Summarize spoken text</li>
                                <li>Multiple choice, multiple answer</li>
                                <li>Fill in the blanks</li>
                                <li>Highlight correct summary</li>
                                <li>Multiple choice, single answer</li>
                                <li>Select missing word</li>
                                <li>Highlight incorrect words</li>
                                <li>Write from dictation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: SCORING PATTERN -->
    <section class="luxury-section alt-bg" id="scoring-pattern">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">
                    Scoring 
                    <span class="accent-text">Pattern</span>
                </h2>  
                <p class="section-subtitle-luxury">Automated AI scoring ensures accuracy and objectivity.</p>
            </div>
            
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="simple-score-card">
                        <div class="score-icon"><i class="fas fa-tachometer-alt"></i></div>
                        <h5>10-90 Score Range</h5>
                        <p>Graded on the Global Scale of English.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="simple-score-card">
                        <div class="score-icon"><i class="fas fa-robot"></i></div>
                        <h5>Machine Scoring</h5>
                        <p>100% automated scoring without human bias.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="simple-score-card">
                        <div class="score-icon"><i class="fas fa-brain"></i></div>
                        <h5>AI Evaluation</h5>
                        <p>Advanced speech AI evaluates pronunciation & fluency.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="simple-score-card">
                        <div class="score-icon"><i class="fas fa-chart-pie"></i></div>
                        <h5>Partial Credit</h5>
                        <p>Earn points even if your answer isn't perfect.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7: TESTIMONIALS -->
    <section class="luxury-section" id="testimonials">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">
                    PTE 
                    <span class="accent-text">Testimonials</span>
                </h2>  
                <p class="section-subtitle-luxury">Hear from our students who achieved their dream scores.</p>
            </div>
            
            <div class="swiper testimonial-slider pb-5" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-glass-card">
                            <div class="student-info">
                                <div class="student-initials" style="width: 50px; height: 50px; background: var(--course-primary-light); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">Y</div>
                                <div class="student-meta">
                                    <h5>Yugendhar</h5>
                                </div>
                            </div>
                            <p class="text-muted mt-3">"Aptitude Test conducted here is wonderful, one on one coaching made me get a good score. This help me to get admission in Canada. Overall had a great learning."</p>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-glass-card">
                            <div class="student-info">
                                <div class="student-initials" style="width: 50px; height: 50px; background: var(--course-primary-light); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">A</div>
                            <div class="student-meta">
                                    <h5>Aravind</h5>
                                </div>
                            </div>
                            <p class="text-muted mt-3">"The Global Ties focuses in all domains in a effective manner. They give equal importance, this helps the students here to get top score in PTE."</p>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-glass-card">
                            <div class="student-info">
                                <div class="student-initials" style="width: 50px; height: 50px; background: var(--course-primary-light); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 20px;">P</div>
                                <div class="student-meta">
                                    <h5>Prakash</h5>
                                </div>
                            </div>
                            <p class="text-muted mt-3">"PTE coaching here is excellent. I enjoyed as the examples were very practical which enabled me to secure 75."</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: RECENT TOP SCORES -->
    <section class="luxury-section alt-bg" id="leaderboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto" data-aos="fade-up">
                    <div class="text-center mb-5">
<h2 class="section-title">
           Recent
            <span class="accent-text">Top Scores</span>
          </h2>                            <p class="section-subtitle-luxury">Our leaderboard of outstanding achievers.</p>
                    </div>
                    
                    <div class="d-flex justify-content-center gap-2 gap-md-3" style="flex-wrap: nowrap;">
                        <div style="flex: 1;" data-aos="fade-up" data-aos-delay="100">
                            <div class="simple-result-card">
                                <div class="result-score">90</div>
                                <div class="result-name">Vaishnavi</div>
                            </div>
                        </div>
                        <div style="flex: 1;" data-aos="fade-up" data-aos-delay="200">
                            <div class="simple-result-card">
                                <div class="result-score">80</div>
                                <div class="result-name">Priya</div>
                            </div>
                        </div>
                        <div style="flex: 1;" data-aos="fade-up" data-aos-delay="300">
                            <div class="simple-result-card">
                                <div class="result-score">80</div>
                                <div class="result-name">Aravind</div>
                            </div>
                        </div>
                        <div style="flex: 1;" data-aos="fade-up" data-aos-delay="400">
                            <div class="simple-result-card">
                                <div class="result-score">75</div>
                                <div class="result-name">Sahib</div>
                            </div>
                        </div>
                        <div style="flex: 1;" data-aos="fade-up" data-aos-delay="500">
                            <div class="simple-result-card">
                                <div class="result-score">74</div>
                                <div class="result-name">Aravindsamy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    

    <?php include 'include/footer.php'; ?>

    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if(typeof Swiper !== 'undefined') {
                new Swiper('.testimonial-slider', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        768: { slidesPerView: 2 },
                        992: { slidesPerView: 3 }
                    }
                });
            }
        });
    </script>
</body>
</html>
