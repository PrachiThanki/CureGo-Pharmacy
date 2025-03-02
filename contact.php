<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Pharmax</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-3.7.1.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="validate.js" defer></script>
    <style>
        :root {
            --primary-color: #1e4d8c;
            --secondary-color: #20a9a0;
            --background-light: #f5f9ff;
            --text-dark: #2c3e50;
        }

        body {
            background: linear-gradient(135deg, var(--background-light) 0%, #ffffff 100%);
            min-height: 100vh;
            font-family: 'Arial', sans-serif;
        }

        .contact-page {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .contact-container {
            width: 100%;
            max-width: 800px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            background-color: rgba(32, 169, 160, 0.24);
            margin-bottom: 100px;
        }

        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
        }

        .contact-info {
            padding: 20px;
        }

        .contact-form {
            padding: 20px;
        }

        .heading {
            color: var(--text-dark);
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }

        .heading::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: var(--secondary-color);
            margin: 10px auto;
            border-radius: 2px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #e1e8f0;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(32, 169, 160, 0.1);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-1px);
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: -15px;
            margin-bottom: 15px;
        }

        .contact-icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-icon svg {
            width: 50px;
            height: 50px;
            fill: var(--secondary-color);
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            transform: translateX(5px);
            background: rgba(255, 255, 255, 0.8);
        }

        .contact-info-icon {
            margin-right: 15px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary-color);
            border-radius: 50%;
            color: white;
        }

        .contact-info-content h4 {
            margin: 0;
            color: var(--text-dark);
            font-size: 16px;
            font-weight: 600;
        }

        .contact-info-content p {
            margin: 5px 0 0;
            color: var(--text-dark);
            opacity: 0.8;
        }
        
        /* Added styles for validation */
        .error {
            color: #dc3545;
            font-size: 0.875rem;
            display: none;
        }
        
        .is-invalid {
            border-color: #dc3545 !important;
        }
        
        .is-valid {
            border-color: #198754 !important;
        }
    </style>
</head>

<body>
    <?php include('header.php')?>
    <br>
    <br>
    <div class="contact-page container">
        
        <div class="contact-container">
            <!-- Contact Information Section -->
            <div class="contact-info">
                <div class="contact-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"/>
                    </svg>
                </div>
                <h2 class="heading">Get in Touch</h2>
                
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Our Location</h4>
                        <p>123 Health Street, Medical District, City</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Phone Number</h4>
                        <p>+1 234 567 8900</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-info-content">
                        <h4>Email Address</h4>
                        <p>contact@pharmax.com</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="contact-form">
                <form id="contactForm" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" 
                               placeholder="Your Name" data-validation="required" data-min="2">
                        <span id="nameError" class="error"></span>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" 
                               placeholder="Email Address" data-validation="required email">
                        <span id="emailError" class="error"></span>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="subject" name="subject" 
                               placeholder="Subject" data-validation="required" data-min="3">
                        <span id="subjectError" class="error"></span>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="message" name="message" 
                                  placeholder="Your Message" data-validation="required" data-min="10"></textarea>
                        <span id="messageError" class="error"></span>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php')?>

</body>
</html>