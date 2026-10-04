<?php
$roles = [
    ['icon' => '🎨', 'label' => 'UI/UX Designer'],
    ['icon' => '💻', 'label' => 'Web Developer'],
    ['icon' => '✏️', 'label' => 'Graphic Designer'],
    ['icon' => '🎬', 'label' => 'Video Editor'],
    ['icon' => '⚡', 'label' => 'Motion Designer'],
];

$skills = [
    [
        'title' => '💻 Web Development',
        'items' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
    ],
    [
        'title' => '🎨 Design',
        'items' => ['Visual Design', 'UI/UX Design', 'Graphic Design'],
    ],
    [
        'title' => '🎬 Creative',
        'items' => ['Video Editing', 'Motion Design', 'Motion Graphics'],
    ],
    [
        'title' => '🛠️ Tools',
        'items' => ['VS Code', 'Figma', 'Canva', 'Alight Motion', 'CapCut', 'XAMPP', 'Git'],
    ],
];

$experiences = [
    [
        'year'    => '2026',
        'role'    => 'Web Developer',
        'company' => 'Academic Project',
    ],
    [
        'year'    => '2025',
        'role'    => 'UI/UX & Graphic Designer',
        'company' => 'Academic Project',
    ],
    [
        'year'    => '2019',
        'role'    => 'Content Creator & Preset Designer',
        'company' => 'Independent/Personal Project',
    ],
];

$projects = [
    [
        'title' => 'Chat App',
        'desc'  => 'Aplikasi chat real-time dengan fitur pesan grup dan notifikasi instan.',
        'tags'  => ['React', 'Node.js', 'Socket.io'],
    ],
    [
        'title' => 'Task Tracker',
        'desc'  => 'Aplikasi manajemen tugas dengan drag-and-drop board ala Kanban.',
        'tags'  => ['Vue', 'Firebase'],
    ],
    [
        'title' => 'E-Commerce UI',
        'desc'  => 'Tampilan toko online lengkap dengan keranjang dan checkout.',
        'tags'  => ['HTML', 'CSS', 'JS'],
    ],
    [
        'title' => 'Weather Dashboard',
        'desc'  => 'Dashboard cuaca dengan grafik prakiraan 7 hari ke depan.',
        'tags'  => ['PHP', 'Chart.js'],
    ],
    [
        'title' => 'Portfolio CMS',
        'desc'  => 'Sistem pengelola konten sederhana untuk portfolio pribadi.',
        'tags'  => ['PHP', 'MySQL'],
    ],
    [
        'title' => 'Recipe Finder',
        'desc'  => 'Cari resep masakan berdasarkan bahan yang kamu punya di rumah.',
        'tags'  => ['JavaScript', 'API'],
    ],
];

require_once __DIR__ . '/includes/get_youtube_videos.php';

$youtubeChannelId = 'UC3xqY81i8Lg2Bg1kwJvTyew';
$latestVideos = getLatestYoutubeVideos($youtubeChannelId, 6);

$shopProducts = [
    [
        'name'  => 'Alight Motion Premium',
        'desc'  => 'Get full access to all Alight Motion Pro features.',
        'image' => 'assets/shop/AlightMotion.jpeg',
        'badge' => '',
        'plans' => [
            ['label' => '1 Year',  'price_idr' => 'Rp 20.000', 'price_usd' => '$1.11', 'url' => 'https://wa.me/6282330535446?text=mau+order+am+prem+grizta'],
        ],
    ],
    [
        'name'  => 'CapCut Premium',
        'desc'  => 'Get full access to all CapCut Pro features.',
        'image' => 'assets/shop/CapCut.jpeg',
        'badge' => '',
        'plans' => [
            ['label' => '1 Week', 'price_idr' => 'Rp 12.000',   'price_usd' => '$0.67', 'url' => 'https://wa.me/6282330535446?text=mau+order+capcut+prem+grizta'],
            ['label' => '1 Month',  'price_idr' => 'Rp 40.000',  'price_usd' => '$2.22', 'url' => 'https://wa.me/6282330535446?text=mau+order+capcut+prem+grizta'],
        ],
    ],
    [
        'name'  => 'Wink Premium',
        'desc'  => 'Get full access to all Wink Pro features.',
        'image' => 'assets/shop/Wink.jpeg',
        'badge' => '',
        'plans' => [
            ['label' => '1 Week', 'price_idr' => 'Rp 10.000',  'price_usd' => '$0.56', 'url' => 'https://wa.me/6282330535446?text=mau+order+wink+prem+grizta'],
        ],
    ],
];

$paymentMethods = ['DANA', 'GoPay', 'OVO', 'Bank', 'ShopeePay', 'Pulsa', 'TNG (Malaysia)', 'QRIS'];

$paymentNotes = [
    'Ready for Indonesia/Malaysia',
    'Supports Android & iPhone',
    '100% safe & reliable🔥',
];

$socials = [
    ['name' => 'Instagram', 'icon' => 'instagram', 'fa' => 'fa-brands fa-instagram', 'url' => 'https://instagram.com/ipf.real/'],
    ['name' => 'Tiktok', 'icon' => 'tiktok', 'fa' => 'fa-brands fa-tiktok', 'url' => 'https://tiktok.com/@ipf.real/'],
    ['name' => 'YouTube', 'icon' => 'youtube', 'fa' => 'fa-brands fa-youtube', 'url' => 'https://youtube.com/@Griztaprst'],
    ['name' => 'Email', 'icon' => 'mail', 'fa' => 'fas fa-envelope', 'url' => '#'],
];

$name  = 'Grizta';
$role  = 'Informatics Student | Digital Designer & Content Creator';
$year  = date('Y');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($name); ?> — <?php echo htmlspecialchars($role); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <header class="navbar">
        <a href="#home" class="logo">Griztaprst!</a>

        <nav class="nav-links" id="navLinks">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#shop">Shop</a>
            <a href="#contact">Contact</a>
        </nav>

        <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">
            <span></span><span></span><span></span>
        </button>
    </header>

    <section id="home" class="hero">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="assets/bg-particle.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <span class="badge">Digital Design Specialist</span>

            <h1>Hello, I'm <span class="accent"><?php echo htmlspecialchars($name); ?></span>, a</h1>
            <h2><?php echo htmlspecialchars($role); ?></h2>

            <div class="hero-roles">
                <?php foreach ($roles as $r): ?>
                    <span class="role-pill">
                        <span class="role-icon"><?php echo $r['icon']; ?></span>
                        <span class="role-text"><?php echo htmlspecialchars($r['label']); ?></span>
                    </span>
                <?php endforeach; ?>
            </div>

            <div class="hero-socials">
                <?php foreach (array_slice($socials, 0, 3) as $s): ?>
                    <a href="<?php echo htmlspecialchars($s['url']); ?>"
                        class="social-icon social-icon-sm"
                        title="<?php echo htmlspecialchars($s['name']); ?>">
                        <i class="<?php echo htmlspecialchars($s['fa']); ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>

            <a href="#about" class="scroll-down" aria-label="Gulir ke bawah">
                <span class="scroll-arrow">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </span>
                <span class="scroll-arrow">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </span>
            </a>
    </section>

    <section id="about" class="about">
        <div class="about-text">
            <h2 class="section-title">About Me</h2>
            <p>
                I'm Grizta, and I'm from Subang Regency, West Java. I am an Informatics student with a strong passion for creativity, design, and technology.
                I enjoy transforming ideas into meaningful digital experiences trough grapich design, UI/UX, web development, video editing, and moyion design.
            </p>
            <p>
                To me, creativity isn't just about making things look appealing it's about creating work that has a purpose, tells a story, and connects with others.
                I am constanly exploring new ideas, learning new skills, and challenging myself to produce better digital work.
            </p>
        </div>
        <div class="about-art">
            <img src="assets/sasuke.png" alt="Sasuke" class="about-img">
        </div>
    </section>

    <section class="skills">
        <h2 class="section-title">Skills &amp; Technologies</h2>
        <div class="skills-grid">
            <?php foreach ($skills as $group): ?>
                <div class="skill-card">
                    <h3><?php echo htmlspecialchars($group['title']); ?></h3>
                    <div class="tag-list">
                        <?php foreach ($group['items'] as $item): ?>
                            <span class="tag"><?php echo htmlspecialchars($item); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="experience">
        <h2 class="section-title">Experience</h2>
        <div class="timeline">
            <?php foreach ($experiences as $exp): ?>
                <div class="timeline-item">
                    <div class="timeline-dot"><?php echo htmlspecialchars($exp['year']); ?></div>
                    <div class="timeline-card">
                        <h3><?php echo htmlspecialchars($exp['role']); ?></h3>
                        <p class="timeline-company"><?php echo htmlspecialchars($exp['company']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="projects" class="projects">
        <h2 class="section-title center">My Projects</h2>
        <p class="section-subtitle">
            Some projects I have created </p>

        <div class="youtube-section">
            <?php if (!empty($latestVideos)): ?>
                <div class="youtube-grid">
                    <?php foreach ($latestVideos as $video): ?>
                        <a href="<?php echo htmlspecialchars($video['url']); ?>" target="_blank" rel="noopener" class="youtube-card">
                            <div class="youtube-thumb">
                                <img src="<?php echo htmlspecialchars($video['thumbnail']); ?>" alt="<?php echo htmlspecialchars($video['title']); ?>">
                                <!-- <span class="youtube-play">&#9658;</span> -->
                            </div>
                            <p class="youtube-video-title"><?php echo htmlspecialchars($video['title']); ?></p>
                        </a>
                    <?php endforeach; ?>
                </div>
        </div>
    <?php endif; ?>
    </section>

    <section id="shop" class="shop">
        <h2 class="section-title center">My Shop</h2>
        <p class="section-subtitle">
            Premium tools for creators, editors, and digital artists.
        </p>

        <div class="shop-grid">
            <?php foreach ($shopProducts as $i => $p): ?>
                <div class="shop-card">
                    <?php if (!empty($p['badge'])): ?>
                        <span class="shop-badge"><?php echo htmlspecialchars($p['badge']); ?></span>
                    <?php endif; ?>

                    <div class="shop-thumb">
                        <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                    </div>

                    <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                    <p><?php echo htmlspecialchars($p['desc']); ?></p>

                    <button type="button" class="btn btn-primary btn-full" data-open-modal="shop-modal-<?php echo $i; ?>">
                        Buy
                    </button>
                </div>
            <?php endforeach; ?>
        </div>

        <?php foreach ($shopProducts as $i => $p): ?>
            <div class="modal-overlay" id="shop-modal-<?php echo $i; ?>">
                <div class="modal-box">
                    <button type="button" class="modal-close" data-close-modal>&times;</button>

                    <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                    <p class="modal-desc"><?php echo htmlspecialchars($p['desc']); ?></p>

                    <div class="shop-plans">
                        <?php foreach ($p['plans'] as $plan): ?>
                            <div class="shop-plan">
                                <span class="shop-plan-label"><?php echo htmlspecialchars($plan['label']); ?></span>
                                <span class="shop-plan-price">
                                    <?php echo htmlspecialchars($plan['price_idr']); ?>
                                    <span class="shop-plan-usd">/ <?php echo htmlspecialchars($plan['price_usd']); ?></span>
                                </span>
                                <a href="<?php echo htmlspecialchars($plan['url']); ?>" target="_blank" rel="noopener" class="btn btn-primary btn-small">Buy</a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="modal-payment">
                        <h4>Payment via:</h4>
                        <div class="payment-methods">
                            <?php foreach ($paymentMethods as $method): ?>
                                <span class="payment-tag"><?php echo htmlspecialchars($method); ?></span>
                            <?php endforeach; ?>
                        </div>

                        <ul class="payment-notes">
                            <?php foreach ($paymentNotes as $note): ?>
                                <li><?php echo htmlspecialchars($note); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section id="contact" class="contact">
        <h2 class="section-title center">Let's Work Together</h2>

        <div class="contact-grid">
            <form class="contact-form" id="contactForm" method="post" action="includes/send_message.php">
                <h3>Send me a message</h3>

                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                <p class="form-status" id="formStatus"></p>
            </form>

            <div class="contact-info">
                <p>
                    I am always enthusiastic about exploring new ideas and creative opportunities. From website and digital design to video editing and motion graphics, I am ready to bring your ideas to life.
                </p>
                <ul>
                    <li>Web Development</li>
                    <li>UI/UX &amp;Graphich Design</li>
                    <li>Video &amp; Motion Design</li>
                    <li>Content Creation</li>
                </ul>

                <h4>My Socials</h4>
                <div class="social-list">
                    <?php foreach ($socials as $s): ?>
                        <a href="<?php echo htmlspecialchars($s['url']); ?>"
                            class="social-icon"
                            title="<?php echo htmlspecialchars($s['name']); ?>">
                            <i class="<?php echo htmlspecialchars($s['fa']); ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; <?php echo $year; ?> <?php echo htmlspecialchars($name); ?>. All rights reserved.</p>
    </footer>

    <a href="#home" class="spin-badge" aria-label="Kembali ke atas">
        <img src="assets/grizta-revamp.png" alt="<?php echo htmlspecialchars($name); ?>" class="spin-badge-img">
    </a>

    <script src="js/script.js"></script>
</body>

</html>