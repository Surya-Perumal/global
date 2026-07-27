<?php
require_once 'site-config.php';

// Sample blog posts dataset
$blogs = [
    [
        'slug' => 'ultimate-guide-mbbs-abroad-2026',
        'title' => 'Ultimate Guide to Study MBBS Abroad in 2026',
        'category' => 'MBBS Abroad',
        'date' => 'July 4, 2026',
        'author' => 'Dr. Amit Sharma',
        'image' => 'img/hero_edu2.png',
        'excerpt' => 'Thinking of studying medicine abroad? We compare fees, admission criteria, and NMC approvals across Russia, Kazakhstan, Uzbekistan, and Georgia to help you choose the right path.'
    ],
    [
        'slug' => 'crack-ielts-proven-strategies',
        'title' => 'Crack the IELTS: 5 Proven Strategies for an 8+ Band Score',
        'category' => 'Test Prep',
        'date' => 'June 28, 2026',
        'author' => 'Sarah Jenkins (IELTS Trainer)',
        'image' => 'img/hero_edu1.png',
        'excerpt' => 'Achieve your dream band score with our expert-approved study methods. Master the Reading, Writing, Speaking, and Listening sections step-by-step.'
    ],
    [
        'slug' => 'why-canada-remains-top-choice',
        'title' => 'Why Canada Remains a Top Choice for International Students',
        'category' => 'Study Abroad',
        'date' => 'June 15, 2026',
        'author' => 'Rohit Verma',
        'image' => 'img/hero_edu2.png',
        'excerpt' => 'Explore the long-term benefits of Canadian education, post-study work permits (PGWP), express entry pathways, and academic lifestyle in Canadian institutions.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Blogs & Insights | The Global Ties</title>
    <!-- Custom Blog Styles -->
    <style>
        .blog-header {
            background: linear-gradient(rgba(10, 30, 50, 0.75), rgba(10, 30, 50, 0.75)), url('<?= BASE_URL ?>img/hero_edu2.png') center/cover no-repeat;
            padding: 140px 0 90px;
            text-align: center;
            color: #fff;
        }
        .blog-header h1 {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #fff;
        }
        .blog-header p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.9;
            color:#fff;
        }

        .blog-section {
            padding: 80px 0;
            background-color: var(--light-bg);
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .blog-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            border-color: var(--primary);
        }

        .blog-card-img-wrapper {
            position: relative;
            padding-top: 56.25%; /* 16:9 ratio */
            overflow: hidden;
            background-color: #eee;
        }

        .blog-card-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .blog-card:hover .blog-card-img {
            transform: scale(1.05);
        }

        .blog-card-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--primary);
            color: #fff;
            padding: 6px 16px;
            font-size: 0.8rem;
            font-weight: 600;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        .blog-card-content {
            padding: 25px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .blog-meta {
            font-size: 0.85rem;
            color: var(--gray-text);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .blog-meta span {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .blog-card-title {
            font-size: 1.35rem;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 12px;
            color: var(--dark-text);
            transition: color 0.3s;
        }

        .blog-card:hover .blog-card-title {
            color: var(--primary);
        }

        .blog-card-title a {
            text-decoration: none;
            color: inherit;
        }

        .blog-card-excerpt {
            font-size: 0.95rem;
            color: var(--gray-text);
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .blog-read-more-btn {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--primary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: gap 0.3s;
        }

        .blog-read-more-btn:hover {
            color: var(--accent);
            gap: 12px;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
        <section class="about-hero">
        <div class="container" data-aos="fade-up">
            <h1>Our Insights & <span class="accent-text" style="color:var(--accent);">Blogs</span></h1>
            <p>Stay updated with the latest trends in global education, visa procedures, exam updates, and student success stories.</p>
        </div>
    </section>

    <!-- Blogs List Section -->
    <section class="blog-section">
        <div class="container">
            <div class="blog-grid">
                <?php foreach ($blogs as $index => $blog): ?>
                    <article class="blog-card" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
                        <div class="blog-card-img-wrapper">
                            <span class="blog-card-badge"><?= htmlspecialchars($blog['category']) ?></span>
                            <img class="blog-card-img" src="<?= BASE_URL . $blog['image'] ?>" alt="<?= htmlspecialchars($blog['title']) ?>">
                        </div>
                        <div class="blog-card-content">
                            <div class="blog-meta">
                                <span><i class="fa-regular fa-calendar"></i> <?= $blog['date'] ?></span>
                                <span><i class="fa-regular fa-user"></i> By <?= htmlspecialchars($blog['author']) ?></span>
                            </div>
                            <h3 class="blog-card-title">
                                <a href="<?= BASE_URL ?>blog-detail?slug=<?= $blog['slug'] ?>">
                                    <?= htmlspecialchars($blog['title']) ?>
                                </a>
                            </h3>
                            <p class="blog-card-excerpt"><?= htmlspecialchars($blog['excerpt']) ?></p>
                            <div>
                                <a href="<?= BASE_URL ?>blog-detail?slug=<?= $blog['slug'] ?>" class="blog-read-more-btn">
                                    Read Article <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'include/footer.php'; ?>

    <!-- JS dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>
</html>

