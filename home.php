<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Plus - Your Pathway to Health and Wellness</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        :root {
            --primary-color: #5AC8C8;
            --secondary-color: #2C5F5F;
            --text-color: #2C5F5F;
            --coral-color: #F28C8C;
            --background-color: #E6F3F3;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Logo Loading Screen */
        .logo-loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: var(--secondary-color);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .logo-container {
            text-align: center;
            position: relative;
        }

        .logo {
            width: 160px;
            height: 170px;
            animation: logoEntrance 1.5s ease-out;
        }

        .company-name {
            font-size: 2.5rem;
            color: white;
            margin-top: 20px;
            opacity: 0;
            transform: translateY(20px);
            animation: textReveal 0.8s ease-out 1s forwards;
        }

        .tagline {
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-top: 10px;
            opacity: 0;
            transform: translateY(20px);
            animation: textReveal 0.8s ease-out 1.5s forwards;
        }

        .loading-bar {
            width: 200px;
            height: 3px;
            background: rgba(255, 255, 255, 0.1);
            margin: 30px auto;
            position: relative;
            overflow: hidden;
        }

        .loading-bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--primary-color);
            animation: loadingProgress 2s ease-out;
            transform-origin: left;
        }

        .loading-screen-exit {
            animation: exitScreen 0.8s ease-in 2.5s forwards;
        }

        /* Main Content */
        .hero-section {
            opacity: 0;
            animation: showContent 1s ease-out 3.3s forwards;
            margin-top: 1.5vmax;
            padding: 2rem 0;
            background-color: #f8fcfc;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        @keyframes logoEntrance {
            0% {
                transform: scale(0) rotate(-180deg);
                opacity: 0;
            }
            50% {
                transform: scale(1.2) rotate(10deg);
            }
            100% {
                transform: scale(1) rotate(0deg);
                opacity: 1;
            }
        }

        @keyframes textReveal {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes loadingProgress {
            0% {
                transform: scaleX(0);
            }
            50% {
                transform: scaleX(0.5);
            }
            100% {
                transform: scaleX(1);
            }
        }

        @keyframes exitScreen {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-100%);
            }
        }

        @keyframes showContent {
            to {
                opacity: 1;
            }
        }

        /* Rest of your existing styles */
        .hero-content {
            padding: 2rem 1rem;
        }

        .hero-content h1 {
            color: var(--text-color);
            font-size: calc(2rem + 2vw);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .hero-content p {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .hero-buttons .btn {
            padding: 0.8rem 2rem;
            border-radius: 25px;
            font-weight: 500;
            margin: 0.5rem;
            transition: transform 0.3s ease;
        }

        .btn-consultation {
            background-color: var(--secondary-color);
            color: white;
            border: none;
        }

        .btn-discover {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .hero-image-container {
            position: relative;
            width: 100%;
            height: auto;
            min-height: 300px;
            margin: 2rem 0;
        }

        .hero-circle {
            position: relative;
            width: 100%;
            max-width: 500px;
            aspect-ratio: 1;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            border: 15px solid var(--secondary-color);
        }

        .hero-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- Logo Loading Screen -->
    <div class="logo-loading-screen loading-screen-exit">
        <div class="logo-container">
            <img src="logo2_.png" alt="CureGo Logo" class="logo">
            <h1 class="company-name">CureGo</h1>
            <p class="tagline">Your Pathway to Health and Wellness</p>
            <div class="loading-bar"></div>
        </div>
    </div>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Home Page -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="hero-content">
                        <h5 class="text-uppercase mb-3" style="color: var(--secondary-color);">Welcome to CureGo</h5>
                        <h1>Your Pathway to Health and Wellness</h1>
                        <p>Welcome to your trusted pharmacy, where health meets care. We provide high-quality medicines,
                            expert guidance, and personalized wellness solutions for a healthier you.</p>
                        <div class="hero-buttons">
                            <button class="btn btn-consultation">Free Consultation</button>
                            <button class="btn btn-discover">Discover More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="hero-image-container">
                        <div class="hero-circle">
                            <img src="p1.jpg" alt="Doctor with tablet" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>

</html>