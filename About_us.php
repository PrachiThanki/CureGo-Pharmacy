<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Trusted Pharmacy Partner</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        :root {
            --primary-color: #5AC8C8;
            --secondary-color: #2C5F5F;
            --text-color: #2C5F5F;
            --coral-color: #F28C8C;
            --background-color: #E6F3F3;
        }

        .about-hero {
            background: linear-gradient(135deg, #e6f9ff 0%, #f0ffff 100%);
            padding: 120px 0;
            position: relative;
            overflow: hidden;
            margin-top: 1.5vmax;
        }
        .btn-hero2{
            color:  #2C5F5F ;
            border-radius: 100px;
        }
        .btn-hero{
            background-color: #2C5F5F;
            color: #E6F3F3;
            border-radius: 100px;
        }
        .hero-blob {
            position: absolute;
            width: 600px;
            height: 600px;
            background: rgba(90, 200, 200, 0.1);
            border-radius: 50%;
            filter: blur(50px);
            animation: blobFloat 15s infinite alternate;
        }

        .section-spacing {
            padding: 100px 0;
        }

        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .stat-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .stat-number {
            font-size: 3.5rem;
            color: var(--secondary-color);
            font-weight: bold;
            margin-bottom: 10px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .timeline {
            position: relative;
            padding: 80px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            width: 4px;
            height: 100%;
            background: var(--primary-color);
            left: 50%;
            transform: translateX(-50%);
            top: 0;
        }

        .timeline-item {
            width: 50%;
            margin-bottom: 50px;
            position: relative;
            padding: 0 40px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: var(--primary-color);
            border-radius: 50%;
            top: 0;
        }
      
        .service-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            top: 0;
            left: 0;
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .service-card:hover::before {
            opacity: 0.05;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .team-member {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .team-info {
            padding: 30px;
            text-align: center;
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            color: var(--secondary-color);
            margin: 0 10px;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: var(--primary-color);
        }

        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            margin: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .certification-badge {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .certification-badge:hover {
            transform: scale(1.05);
        }

        .badge-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .contact-info-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            height: 100%;
            transition: all 0.3s ease;
        }

        .contact-info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .technology-section {
            background: linear-gradient(135deg, #f8fcfc 0%, #ffffff 100%);
        }

        .tech-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .tech-card:hover {
            transform: scale(1.05);
        }

        .awards-section {
            background: var(--background-color);
        }

        .award-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .award-card:hover {
            transform: translateY(-10px);
        }

        .newsletter-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
        }

        .newsletter-form {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 0;
            }

            .timeline-item {
                width: 100%;
                left: 0 !important;
                padding-left: 30px;
            }

            .timeline-item::before {
                left: -10px !important;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="hero-blob blob-1"></div>
        <div class="hero-blob blob-2"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-4 fw-bold"style="color: var(--secondary-color);">Transforming Healthcare Since 1995</h1>
                    <p class="lead mb-4"style="color: var(--secondary-color);">We're more than just a pharmacy - we're your dedicated healthcare partner, combining decades of experience with cutting-edge innovation to provide exceptional pharmaceutical care.</p>
                    <button class="btn btn-hero btn-lg">Our Story</button>
                    <button class="btn btn-hero2 btn-lg btn-outline-primary ms-3">Meet Our Team</button>
                </div>
                <div class="col-lg-6">
                    <img src="p3.jpg" alt="Pharmacy Team" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section-spacing">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <i class="fas fa-users stat-icon"></i>
                        <div class="stat-number">50k+</div>
                        <h4>Happy Customers</h4>
                        <p>Serving our community with dedication</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <i class="fas fa-certificate stat-icon"></i>
                        <div class="stat-number">25+</div>
                        <h4>Years Experience</h4>
                        <p>Trusted healthcare expertise</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <i class="fas fa-pills stat-icon"></i>
                        <div class="stat-number">10k+</div>
                        <h4>Products</h4>
                        <p>Comprehensive healthcare solutions</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <i class="fas fa-star stat-icon"></i>
                        <div class="stat-number">98%</div>
                        <h4>Satisfaction Rate</h4>
                        <p>Customer happiness is our priority</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="section-spacing bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4 fw-bold"style="color: var(--secondary-color);">Our Story</h2>
                    <p class="lead"style="color: #666;">Founded in 1995, we began with a simple mission: to provide accessible, high-quality healthcare to our community. Today, we've grown into a leading healthcare provider while maintaining our commitment to personalized care.</p>
                    <br>
                    
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-6">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Quality Assurance</h5>
                                <p>Rigorous quality control measures</p>
                            </div>
                            <div class="col-6">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Expert Care</h5>
                                <p>Qualified healthcare professionals</p>
                            </div>
                            <div class="col-6">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Innovation</h5>
                                <p>Latest healthcare technology</p>
                            </div>
                            <div class="col-6">
                                <h5><i class="fas fa-check-circle text-primary me-2"></i> Community Focus</h5>
                                <p>Local health initiatives</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="p2.jpg" alt="Our Story" class="img-fluid rounded-3 shadow">
                    </div>
            </div>
        </div>
    </section>

    
    <!-- Services Section -->
    <section class="section-spacing bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold" style="color: var(--secondary-color);">Comprehensive Healthcare Services</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-pills service-icon"></i>
                        <h4>Prescription Services</h4>
                        <p>Expert medication management and consultation with our licensed pharmacists</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-primary me-2"></i>Automated refills</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Medication synchronization</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Prescription counseling</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-heartbeat service-icon"></i>
                        <h4>Health Monitoring</h4>
                        <p>Regular health checkups and vital monitoring services</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-primary me-2"></i>Blood pressure checks</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Diabetes screening</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Cholesterol testing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <i class="fas fa-user-md service-icon"></i>
                        <h4>Wellness Consulting</h4>
                        <p>Personalized health advice and wellness planning</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="fas fa-check text-primary me-2"></i>Nutrition guidance</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Lifestyle counseling</li>
                            <li><i class="fas fa-check text-primary me-2"></i>Preventive care</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Technology Section -->
    <section class="technology-section section-spacing">
        <div class="container">
            <h2 class="text-center mb-5">Our Technology</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="tech-card">
                        <i class="fas fa-laptop-medical fa-3x text-primary mb-4"></i>
                        <h4>Digital Prescriptions</h4>
                        <p>Advanced e-prescription system for accuracy and convenience</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tech-card">
                        <i class="fas fa-mobile-alt fa-3x text-primary mb-4"></i>
                        <h4>Mobile App</h4>
                        <p>Manage prescriptions and health tracking on the go</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tech-card">
                        <i class="fas fa-robot fa-3x text-primary mb-4"></i>
                        <h4>AI Health Assistant</h4>
                        <p>Smart health monitoring and medication reminders</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    

    <!-- Newsletter Section -->
    

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Animate elements on scroll
        document.querySelectorAll('.service-card, .team-member, .tech-card, .award-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            observer.observe(el);
        });
    </script> -->
</body>
</html>