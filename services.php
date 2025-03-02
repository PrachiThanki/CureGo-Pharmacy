<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmax - Your Pathway to Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="bootstrap.min.css">
        <script src="bootstrap.bundle.min.js"></script>
</head>
<style>
   :root {
            --primary-color: #2a9d8f;
            --secondary-color: #264653;
            --accent-color: #e76f51;
            --text-color: #2c3e50;
            --light-bg: #f8f9fa;
            --transition-standard: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-smooth: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            --box-shadow-standard: 0 10px 30px rgba(0, 0, 0, 0.1);
            --box-shadow-hover: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            color: var(--secondary-color);
        }

        .ourServices-section {
            margin-top: 100px;
            background: linear-gradient(135deg, var(--light-bg) 0%, #ffffff 100%);
            padding: 100px 0;
        }

        .ourServices-image-container {
            position: relative;
            padding: 30px;
        }

        .ourServices-circle {
            border-radius: 30px;
            overflow: hidden;
            box-shadow: var(--box-shadow-standard);
            transition: var(--transition-standard);
        }

        .ourServices-circle:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-hover);
        }

        .ourServices-rectangle {
            position: absolute;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            padding: 25px 35px;
            border-radius: 50%;
            box-shadow: var(--box-shadow-standard);
            top: -40px;
            right: 400px;
            width: 180px;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition-smooth);
        }

        .ourServices-rectangle:hover {
            transform: scale(1.05);
            box-shadow: var(--box-shadow-hover);
        }

        .ourServices-rectangle-brand {
            color: white;
            font-size: 3rem;
            font-weight: 800;
            margin: 0;
        }

        .ourServices-rectangle-info {
            font-size: 0.9rem;
            margin: 0;
            color: rgba(255, 255, 255, 0.9);
            letter-spacing: 1px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1rem;
            border-radius: 12px;
            transition: var(--transition-standard);
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-item:hover {
            transform: translateX(5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            transition: var(--transition-standard);
        }

        .feature-icon:hover {
            transform: rotate(5deg);
        }

        .feature-icon i {
            color: white;
            font-size: 20px;
            transition: var(--transition-standard);
        }

        .feature-content h4 {
            color: var(--secondary-color);
            margin: 0 0 0.5rem;
            font-size: 1.2rem;
            font-weight: 600;
            transition: var(--transition-standard);
        }

        .feature-content p {
            color: var(--text-color);
            margin: 0;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .btn-consultation {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            margin-top: 25px;
            transition: var(--transition-smooth);
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 50px;
            box-shadow: 0 5px 15px rgba(42, 157, 143, 0.2);
        }

        .btn-consultation:hover {
            background: linear-gradient(135deg, var(--accent-color) 0%, #e63946 100%);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(231, 111, 81, 0.3);
        }

        .offers-section {
            position: relative;
            padding: 100px 0;
            background-image: linear-gradient(rgba(38, 70, 83, 0.92), rgba(42, 157, 143, 0.92)),
                url("p6.jpeg");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 650px;
        }

        .offers-section-subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
            letter-spacing: 3px;
        }

        .offers-section-title {
            color: white;
            font-size: 2.5rem;
            text-align: center;
            font-weight: 700;
            margin-bottom: 50px;
            line-height: 1.4;
        }

        .offers-value-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            transition: var(--transition-smooth);
            border: none;
            height: 100%;
            box-shadow: var(--box-shadow-standard);
        }

        .offers-value-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--box-shadow-hover);
        }

        .offers-icon-circle {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, rgba(42, 157, 143, 0.1) 0%, rgba(38, 70, 83, 0.1) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: var(--transition-standard);
        }

        .offers-icon-circle:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .offers-icon-circle svg {
            width: 45px;
            height: 45px;
            fill: var(--primary-color);
            transition: var(--transition-standard);
        }

        .offers-icon-circle:hover svg {
            transform: scale(1.1);
        }

        .offers-value-card h4 {
            color: var(--secondary-color);
            font-size: 1.6rem;
            margin-bottom: 20px;
            font-weight: 600;
            transition: var(--transition-standard);
        }

        .offers-value-card p {
            color: var(--text-color);
            font-size: 1rem;
            line-height: 1.8;
        }

        .offers-cards-wrapper {
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .ourServices-rectangle {
                right: 20px;
                top: -20px;
                width: 120px;
                height: 120px;
            }

            .ourServices-rectangle-brand {
                font-size: 2rem;
            }

            .ourServices-rectangle-info {
                font-size: 0.8rem;
            }

            .offers-section-title {
                font-size: 2rem;
            }

            .offers-value-card h4 {
                font-size: 1.4rem;
            }

            .offers-value-card p {
                font-size: 0.9rem;
            }
        }
    </style>

<body>
    <?php include 'header.php'; ?>
    <!-- our services section -->


    <section class="offers-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h6 class="offers-section-subtitle text-uppercase">What We Offer</h6>
                    <h2 class="offers-section-title">A Pharmacy with World Class Service</h2>
                </div>
            </div>

            <div class="row offers-cards-wrapper g-4">
                <div class="col-md-4">
                    <div class="offers-value-card">
                        <div class="offers-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                            </svg>
                        </div>
                        <h4>Our Vision</h4>
                        <p>Mi est nunc lacus cursus malesuada luctus enim. Euismod convallis ligula pede feugiat integer
                            sem vehicula cursus.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offers-value-card">
                        <div class="offers-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                        </div>
                        <h4>Our Mission</h4>
                        <p>Mi est nunc lacus cursus malesuada luctus enim. Euismod convallis ligula pede feugiat integer
                            sem vehicula cursus.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offers-value-card">
                        <div class="offers-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1z" />
                            </svg>
                        </div>
                        <h4>Our Motto</h4>
                        <p>Mi est nunc lacus cursus malesuada luctus enim. Euismod convallis ligula pede feugiat integer
                            sem vehicula cursus.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offers-value-card">
                        <div class="offers-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-6 0h-4V4h4v2z" />
                            </svg>
                        </div>
                        <h4>Medical Services</h4>
                        <p>Mi est nunc lacus cursus malesuada luctus enim. Euismod convallis ligula pede feugiat integer
                            sem vehicula cursus.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offers-value-card">
                        <div class="offers-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-1.99.9-1.99 2L3 19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 11h-4v4h-4v-4H6v-4h4V6h4v4h4v4z" />
                            </svg>
                        </div>
                        <h4>Healthcare Support</h4>
                        <p>Mi est nunc lacus cursus malesuada luctus enim. Euismod convallis ligula pede feugiat integer
                            sem vehicula cursus.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="offers-value-card">
                        <div class="offers-icon-circle">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z" />
                            </svg>
                        </div>
                        <h4>24/7 Availability</h4>
                        <p>Mi est nunc lacus cursus malesuada luctus enim. Euismod convallis ligula pede feugiat integer
                            sem vehicula cursus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourServices-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="ourServices-image-container">
                        <div class="ourServices-circle">
                            <img src="p5.jpg" alt="Pharmacy Service" class="img-fluid">
                        </div>
                        <div class="ourServices-rectangle">
                            <div>
                                <h1 class="ourServices-rectangle-brand">20+</h1>
                                <p class="ourServices-rectangle-info">YEARS OF EXPERIENCE</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="ourServices-content">
                        <h5 class="text-uppercase mb-3" style="color: var(--secondary-color);">Our Service</h5>
                        <h3 class="mb-4" style="color: var(--secondary-color);"><strong>A pharmacy with world-class
                                service.</strong></h3>
                        <p class="mb-4">Welcome to your trusted pharmacy, where health meets care. We provide
                            high-quality medicines for a healthier you.</p>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Extra Discount</h4>
                                <p>Enjoy special offers and savings on selected medicines</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h4>24/7 Support</h4>
                                <p>Our pharmacists are always available to assist you</p>
                            </div>
                        </div>

                        <div class="hero-buttons">
                            <button class="btn btn-consultation">Free Consultation</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>