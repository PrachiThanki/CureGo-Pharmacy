<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Plus Creative Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #5AC8C8;
            --secondary-color: #2C5F5F;
            --text-color: #2C5F5F;
            --coral-color: #F28C8C;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .footer {
            position: relative;
            background-color: var(--secondary-color);
            color: white;
            padding: 4rem 2rem;
            overflow: hidden;
        }

        .footer-wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;  /* Double width for continuous animation */
            height: 100px;
            background-repeat: repeat-x;
            background-position: center bottom;
            z-index: 1;
            animation: wave 10s linear infinite;  /* Slower, smoother animation */
        }

        .wave-1 {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='rgba(90,200,200,0.3)' fill-opacity='1' d='M0,224L48,240C96,256,192,288,288,293.3C384,299,480,277,576,250.7C672,224,768,192,864,197.3C960,203,1056,245,1152,261.3C1248,277,1344,267,1392,261.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
        }

        .wave-2 {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='rgba(90, 200, 200, 0.49)' fill-opacity='1' d='M0,160L48,176C96,192,192,224,288,245.3C384,267,480,277,576,261.3C672,245,768,203,864,192C960,181,1056,203,1152,218.7C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            animation-delay: -5s;  /* Offset second wave for smoother effect */
        }

        @keyframes wave {
            0% { 
                transform: translateX(0); 
            }
            100% { 
                transform: translateX(-50%); 
            }
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            position: relative;
            z-index: 2;
        }

        .footer-section {
            background: rgba(255,255,255,0.05);
            padding: 1.5rem;
            border-radius: 10px;
        }

        .footer-section h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            border-bottom: 2px solid #E6F3F3;
            padding-bottom: 0.5rem;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        .footer-bottom {
            text-align: center;
            padding: 2rem 0;
            position: relative;
            z-index: 2;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .social-link {
            color: white;
            text-decoration: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--primary-color);
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-wave wave-1"></div>
        <div class="footer-wave wave-2"></div>
        
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>MediCare Plus: Innovative healthcare solutions tailored to your needs.</p>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="Order.php">Browse Medicines</a></li>
                    <li><a href="Healthcare.php">Healthcare Products</a></li>
                    <li><a href="upload_prescription.php">Upload Prescription</a></li>
                    <li><a href="offers.php">Offers & Discounts</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Help & Support</h3>
                <ul class="footer-links">
                    <li><a href="faq.php">FAQs</a></li>
                    <li><a href="shipping.php">Shipping Information</a></li>
                    <li><a href="returns.php">Returns Policy</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact Info</h3>
                <ul class="footer-links">
                    <li>📞 +1 234 567 890</li>
                    <li>✉️ support@medicare.com</li>
                    <li>📍 123 Health Street, Medical District</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>&copy; 2025 MediCare Plus. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>