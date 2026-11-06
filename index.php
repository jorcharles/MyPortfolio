<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz@0,14..32;1,14..32&family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&family=Caveat:wght@600&display=swap" rel="stylesheet">
</head>

<body>
<header>
        <div class="logo">CJ</div>

    <!-- Hidden checkbox to track menu state -->
        <input type="checkbox" id="menu-toggle" class="menu-checkbox">

        <!-- Navigation Links Dropdown -->
        <div class="nav-links">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Certificates</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
            </ul>
        </div>

        <!-- Right Side Group: Contains Theme Toggle, Get in Touch, and Mobile Hamburger -->
        <div class="header-right-group">
            <!-- Theme Toggle Button -->
            <button id="themeToggle" class="theme-toggle-btn" aria-label="Toggle theme">
                <span class="theme-icon moon-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
                </span>
                <span class="theme-icon sun-icon">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 7c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zM2 13h2c.55 0 1-.45 1-1s-.45-1-1-1H2c-.55 0-1 .45-1 1s.45 1 1 1zm18 0h2c.55 0 1-.45 1-1s-.45-1-1-1h-2c-.55 0-1 .45-1 1s.45 1 1 1zM11 2v2c0 .55.45 1 1 1s1-.45 1-1V2c0-.55-.45-1-1-1s-1 .45-1 1zm0 18v2c0 .55.45 1 1 1s1-.45 1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1z"/></svg>
                </span>
            </button>

            <!-- Get in touch button (visible on desktop, hidden on mobile) -->
            <div class="get_in_touch">
                <a href="#getInTouch">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 6px; vertical-align: middle;"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    Contact Me
                </a>
            </div>

            <!-- Animated hamburger button (hidden on desktop, visible on mobile) -->
            <label for="menu-toggle" class="menu-toggle" aria-label="Toggle navigation">
                <span class="hamburger"></span>
            </label>
        </div>
    </header>

    <section id="home" class="hero-section">
        <div class="hero-container">
            <!-- Left Side: Intro & Main Headline -->
            <div class="hero-left">
                <div class="greeting-tag">
                    <span class="code-prefix">&gt; Kamusta! |</span> I am
                </div>
                
                <div class="name-container">
                    <h1 class="hero-name">Charles Joross Marcos</h1>
                    <span class="script-overlay">I connect things</span>
                </div>

                <p class="hero-bio">
                    I'm an aspiring network engineer with a growing foundation in networking and a passion for programming and web development. I'm continuously developing my skills to build and maintain reliable networks that keep people and systems connected.
                </p>

                <div class="hero-cta">
                    <a href="#projects" class="btn-primary">View Projects</a>
                    <a href="https://github.com/jorcharles" target="_blank" rel="noopener" class="btn-secondary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                        </svg>
                        GitHub Profile
                    </a>
                </div>
            </div>

            <!-- Right Side: Project Spotlight & Tech Stack Grid -->
            <div class="hero-right">
                <!-- Top Card: Featured Project -->
                <div class="card project-spotlight-card">
                    <span class="card-subtitle">FEATURED BUILD</span>
                    <h3 class="card-title">RW PC Trading</h3>
                    <p class="card-text">
                        A real-time web application built with responsive front-end layouts and an optimized database schema.
                    </p>
                    <div class="tech-tags">
                        <span class="tag">JavaScript</span>
                        <span class="tag">HTML/CSS</span>
                        <span class="tag">SQL</span>
                    </div>
                </div>

                <!-- Bottom Card: Core Stack Capabilities -->
                <div class="card stack-card">
                    <div class="card-header-icon">
                        <span class="card-subtitle">TECHNICAL STACK</span>
                    </div>
                    <p class="card-text">
                        Specialized in building full-stack applications with modern CSS grids, relational databases, and dynamic server architectures.
                    </p>
                    <div class="stack-badges">
                        <span class="stack-pill">Front-End UI/UX</span>
                        <span class="stack-pill">Database Design</span>
                        <span class="stack-pill">REST APIs</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="about-section">
        <div class="about-container">
            <!-- Left Side: Circular Avatar / Graphic Card -->
            <div class="about-visual-card">
                <div class="avatar-backdrop"></div>
                <div class="avatar-box">
                    <!-- You can replace this placeholder SVG with an <img> tag later (e.g. <img src="your-photo.jpg" alt="Your Name">) -->
                    <svg width="90" height="90" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
            </div>

            <!-- Right Side: About Content -->
            <div class="about-content-card">
                <span class="card-subtitle">ABOUT ME</span>
                <h2 class="about-title">Making connections possible through technology and networking.</h2>
                
                <p class="card-text">
                    I'm an Information Technology student aspiring to become a network engineer, with growing interests in Linux, cybersecurity, and programming. I'm currently building my foundation in networking while exploring how systems, security, and software work together to keep people and technology connected.
                </p>
                
                <p class="card-text">
                    I enjoy configuring and troubleshooting networks, experimenting with new technologies, and developing practical applications. As I continue my studies, I'm constantly learning and expanding my skills across different areas of IT.
                </p>

                <div class="about-action">
                    <a href="https://www.linkedin.com/in/charles-joross-marcos-7669b1323/" target="_blank" rel="noopener" class="btn-secondary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        Linkedin
                    </a>
                </div>
            </div>
        </div>
    </section>

  <!-- Certificate SECTION (Bento Grid Layout) -->
    <section id="experience" class="experience-section">
        <div class="experience-header">
            <span class="card-subtitle">MY JOURNEY</span>
            <p class="experience-subtext">My achievements and certificates</p>
        </div>

        <!-- Bento Grid Container -->
        <div class="bento-certificates-grid">
            
            <!-- Column 1: Tall Card - Cisco Packet Tracer Certificate -->
            <div class="exp-card bento-tall-card">
                <div class="edu-thumb" style="background-image: url('assets/Cisco_packet_tracer.png'); height: 160px; border-radius: 12px; margin-bottom: 16px; background-size: cover; background-position: center;"></div>
                <div class="exp-card-header" style="margin-bottom: 10px;">
                    <div class="exp-title-group">
                        <h3 class="exp-company">Cisco Networking Academy</h3>
                        <p class="exp-role">Introduction to Packet Tracer</p>
                    </div>
                    <span class="employment-badge">Certificate</span>
                </div>
                
                <div class="exp-meta">
                    <span class="meta-item">30 Aug 2025</span>
                </div>

                <p class="exp-description">
                    Successfully completed the Introduction to Packet Tracer Exam offered through the Cisco Networking Academy program, strengthening foundational networking simulation and protocol analysis skills.
                </p>
            </div>

            <!-- Column 2: Stacked Pair (Middle Bento Column) -->
            <div class="bento-stacked-column">
                <!-- Top Card: ITLYMPICS 2026 Champion -->
                <div class="exp-card bento-small-card">
                    <div class="edu-thumb" style="background-image: url('assets/champion_networking.jfif'); height: 110px; border-radius: 10px; margin-bottom: 12px; background-size: cover; background-position: center;"></div>
                    <div class="exp-card-header" style="margin-bottom: 8px;">
                        <div class="exp-title-group">
                            <h4 class="exp-company" style="font-size: 16px;">ITLYMPICS 2026</h4>
                            <p class="exp-role">1st Place — PC Networking</p>
                        </div>
                        <span class="employment-badge champion-badge">Champion</span>
                    </div>
                    <div class="exp-meta">
                        <span class="meta-item">March 7, 2026 • PLV</span>
                    </div>
                </div>

                <!-- Bottom Card: 15th IT Skills Olympics Certificate of Participation -->
                <div class="exp-card bento-small-card">
                    <div class="edu-thumb" style="background-image: url('assets/umak.png'); height: 110px; border-radius: 10px; margin-bottom: 12px; background-size: cover; background-position: center;"></div>
                    <div class="exp-card-header" style="margin-bottom: 8px;">
                        <div class="exp-title-group">
                            <h4 class="exp-company" style="font-size: 16px;">15th IT Skills Olympics</h4>
                            <p class="exp-role">Certificate of Participation — Networking</p>
                        </div>
                        <span class="employment-badge">Participation</span>
                    </div>
                    <div class="exp-meta">
                        <span class="meta-item">Nov 4, 2026 • University of Makati</span>
                    </div>
                    <p class="exp-description" style="font-size: 13px; margin-top: 6px;">
                        Participated in specialized competitive networking events at the 15th IT Skills Olympics under the theme "Igniting Ingenuity, Transforming Digital Frontiers"[cite: 17].
                    </p>
                </div>

            </div>

            <!-- Column 3: Tall Card - Cisco Packet Tracer Certificate -->
            <div class="exp-card bento-tall-card">
                <div class="edu-thumb" style="background-image: url('assets/networking_cisco.png'); height: 160px; border-radius: 12px; margin-bottom: 16px; background-size: cover; background-position: center;"></div>
                <div class="exp-card-header" style="margin-bottom: 10px;">
                    <div class="exp-title-group">
                        <h3 class="exp-company">Cisco Networking Academy</h3>
                        <p class="exp-role">Exploring Networking with Cisco Packet Tracer</p>
                    </div>
                    <span class="employment-badge">Certificate</span>
                </div>
                
                <div class="exp-meta">
                    <span class="meta-item">26 Aug 2025</span>
                </div>

                <p class="exp-description">
                    Successfully completed the Exploring Networking with Cisco Packet Tracer course through the Cisco Networking Academy program, building foundational networking concepts and simulation skills[cite: 13].
                </p>
            </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="projects-section">
        <div class="projects-header">
            <div class="section-badge">Things I've Built</div>
            <h2 class="projects-title">Featured work and side projects</h2>
        </div>

        <!-- 3D Slider Wrapper -->
        <div class="slider-wrapper">
            <button class="slider-btn prev-btn" aria-label="Previous Project">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="slider-btn next-btn" aria-label="Next Project">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
            </button>

            <div class="projects-slider-container">
                <!-- Project Card 1 -->
                <div class="slider-card active">
                    <!-- Added inline background-image pointing to your assets folder -->
                    <div class="card-bg store-bg" style="background-image: url('assets/rwpctrading.jfif'); background-size: cover; background-position: center;"></div>
                    
                    <div class="card-overlay">
                        <div class="card-text-content">
                            <span class="card-tag">FULL-STACK PLATFORM</span>
                            <h3 class="card-title">RW PC Trading</h3>
                        </div>
                        <div class="card-actions">
                            <a href="https://github.com/jorcharles/rwpctrading" target="_blank" class="action-btn" title="View Source Code">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="slider-card active">
                    <!-- Added inline background-image pointing to your assets folder -->
                    <div class="card-bg store-bg" style="background-image: url('assets/librasys.jfif'); background-size: cover; background-position: center;"></div>
                    
                    <div class="card-overlay">
                        <div class="card-text-content">
                            <span class="card-tag">DATABASE SYSTEM</span>
                            <h3 class="card-title">Libra-Sys</h3>
                        </div>
                        <div class="card-actions">
                            <a href="https://github.com/jorcharles/Libra-Sys-API" target="_blank" class="action-btn" title="View Source Code">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="slider-card">
                    <!-- Added inline background-image pointing to your assets folder -->
                    <div class="card-bg game-bg" style="background-image: url('assets/bone_voyage.png'); background-size: cover; background-position: center;"></div>
                    <div class="card-overlay">
                        <div class="card-text-content">
                            <span class="card-tag">GAME DESIGN PROTOTYPE</span>
                            <h3 class="card-title">Bone Voyage</h3>
                        </div>
                        <div class="card-actions">
                            <a href="https://playingcards.io/69vyu3" target="_blank" class="action-btn" title="View Source Code">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Project Card 4 -->
                <div class="slider-card">
                    <!-- Added inline background-image pointing to your assets folder -->
                    <div class="card-bg game-bg" style="background-image: url('assets/dhcp_config.png'); background-size: cover; background-position: center;"></div>
                    <div class="card-overlay">
                        <div class="card-text-content">
                            <span class="card-tag">NETWORKING CONFIGURATION</span>
                            <h3 class="card-title">DHCP and Webserver Configuration</h3>
                        </div>
                        <div class="card-actions">
                            <a href="https://github.com/jorcharles/DHCP-Configuration" target="_blank" class="action-btn" title="View Source Code">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<!-- SKILLS SECTION -->
    <section id="skills" class="skills-section">
        <div class="skills-container">
            
            <div class="skills-single-wrapper">
                <!-- Centered Tech Stack & Networking Card -->
                <div class="skills-card tech-stack-card">
                    <div class="section-badge">SKILLS</div>
                    <h2 class="skills-heading">Tech Stack & Networking</h2>
                    
                    <div class="tech-row">
                        <span class="tech-category">LANGUAGES</span>
                        <div class="tech-tags-group">
                            <span class="tech-pill">JavaScript</span>
                            <span class="tech-pill">PHP</span>
                            <span class="tech-pill">C#</span>
                            <span class="tech-pill">SQL</span>
                            <span class="tech-pill">HTML / CSS</span>
                        </div>
                    </div>

                    <div class="tech-row">
                        <span class="tech-category">NETWORKING</span>
                        <div class="tech-tags-group">
                            <span class="tech-pill">Routing & Switching</span>
                            <span class="tech-pill">Subnetting</span>
                            <span class="tech-pill">LAN / WAN Configuration</span>
                        </div>
                    </div>

                    <div class="tech-row">
                        <span class="tech-category">FRAMEWORKS</span>
                        <div class="tech-tags-group">
                            <span class="tech-pill">ASP.NET Core</span>
                            <span class="tech-pill">MVC</span>
                        </div>
                    </div>

                    <div class="tech-row">
                        <span class="tech-category">CLOUD & DB</span>
                        <div class="tech-tags-group">
                            <span class="tech-pill">MySQL</span>
                            <span class="tech-pill">SQL Server</span>
                            <span class="tech-pill">Supabase</span>
                            <span class="tech-pill">REST APIs</span>
                        </div>
                    </div>

                    <div class="tech-row">
                        <span class="tech-category">TOOLS</span>
                        <div class="tech-tags-group">
                            <span class="tech-pill">Git</span>
                            <span class="tech-pill">GitHub Copilot</span>
                            <span class="tech-pill">Canva</span>
                            <span class="tech-pill">Cisco Packet Tracer</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

            <!-- Bottom Row: Education (Single Centered Card) -->
            <div class="education-container">
                <div class="section-badge-center">
                    <div class="section-badge">Education</div>
                </div>
                
                <div class="education-single-wrapper">
                    <!-- Single Centered Edu Card -->
                    <div class="edu-card">
                        <div class="edu-thumb" style="background-image: url('assets/School.jfif');"></div>
                        <div class="edu-content">
                            <span class="edu-date">2024 – Present • Valenzuela, PH</span>
                            <h3 class="edu-degree">Bachelor of Science in Information Technology</h3>
                            <p class="edu-school">Pamantasan ng Lungsod ng Valenzuela (PLV)</p>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- GET IN TOUCH & FOOTER SECTION -->
    <section id="getInTouch" class="get-in-touch-section">
        <div class="git-container">
            
            <p class="git-subtitle">Open to roles, collabs, or just a good conversation.</p>

            <div class="git-content-grid">
                <!-- Left Column: Quote Card (Spotify card removed) -->
                <div class="git-left-column">
                    <div class="quote-card">
                        <span class="quote-icon">“</span>
                        <p class="quote-text">
                            “Technology is at its best when it keeps people, systems, and ideas connected.”
                        </p>
                        <span class="quote-author">Charles Joross Marcos</span>
                    </div>
                </div>

                <!-- Right Column: Sticky Note Contact Form -->
                <div class="git-right-column">
                    <div class="sticky-note-card">
                        <div class="note-pin"></div>
                        <div class="note-header">
                            <span class="note-badge">💬 SAY HELLO</span>
                        </div>
                        <form class="contact-form" action="mailto:charlesjmmarcos@gmail.com" method="POST" enctype="text/plain">
                            <input type="text" name="name" placeholder="Your name" required>
                            <input type="email" name="email" placeholder="your@email.com" required>
                            <textarea name="message" placeholder="What's on your mind?" rows="3" required></textarea>
                            <button type="submit" class="send-btn" aria-label="Send message">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Bottom Action Banner Pill -->
            <div class="action-banner-pill">
                <span class="banner-title">LET'S DO THIS</span>
                <div class="banner-links">
                    <a href="https://www.linkedin.com/in/charles-joross-marcos-7669b1323/" target="_blank" rel="noopener">LinkedIn</a>
                    <a href="https://github.com/jorcharles" target="_blank" rel="noopener">GitHub</a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-content">
                <span class="copyright-text">&copy; 2026 Charles Joross Marcos. All rights reserved.</span>
            </div>
            <a href="#home" class="back-to-top-btn" aria-label="Back to top">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="18 15 12 9 6 15"/></svg>
            </a>
        </footer>
    </section>

</body>
<script src="script.js"></script>
</html>
