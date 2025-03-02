<?php
$userLoggedIn = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUREGO - Modern Pharmacy Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --soft-blue: #E6F2F2;
            --light-blue: #CCF2F4;
            --teal-accent: #4FBFA0;
            --deep-teal: #228B8D;
            --text-color: #2C5F5F;
            --coral-accent: #FF7F7F;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--white);
        }

        .header {
            background: linear-gradient(135deg, var(--light-blue), var(--soft-blue));
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-radius: 50px;
            margin: 20px 20px 0 20px;
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo-icon {
            height: 150px;
            width: auto;
            object-fit: contain;
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: var(--text-color);
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--deep-teal);
        }

        .search-container {
            display: flex;
            align-items: center;
            background: var(--white);
            border-radius: 30px;
            padding: 0.5rem 1rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-input {
            border: none;
            background: transparent;
            width: 200px;
            padding: 0.5rem;
            color: var(--text-color);
            font-size: 0.9rem;
        }

        .search-input::placeholder {
            color: #999;
        }

        .search-icon {
            color: var(--deep-teal);
            margin-right: 0.5rem;
        }

        .header-actions {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .order-btn {
            background: var(--deep-teal);
            color: var(--white);
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-weight: 600;
        }

        .order-btn:hover {
            background: var(--teal-accent);
            transform: translateY(-2px);
        }

        .cart-icon {
            position: relative;
            color: var(--deep-teal);
            font-size: 1.2rem;
            text-decoration: none;
            padding: 0.5rem;
            transition: color 0.3s ease;
        }

        .cart-icon:hover {
            color: var(--teal-accent);
        }

        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--coral-accent);
            color: var(--white);
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 50%;
            min-width: 18px;
            text-align: center;
        }

        /* Profile Styles */
        .profile-container {
            position: relative;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .profile-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: var(--deep-teal);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .profile-avatar:hover {
            background: var(--teal-accent);
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background: var(--deep-teal);
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 1rem;
            background: var(--white);
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 80px;
            right: 20px;
            z-index: 999;
        }

        .mobile-menu.active {
            display: flex;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 0.5rem 1rem;
                margin: 10px 10px 0 10px;
            }

            .nav-menu {
                display: none;
            }

            .header-content {
                height: 60px;
            }

            .logo-icon {
                height: 100px;
            }

            .search-container {
                display: none;
            }

            .header-actions {
                gap: 1rem;
            }

            .order-btn {
                padding: 0.6rem 1rem;
                font-size: 0.9rem;
                width: 100px;
            }

            .hamburger {
                display: flex;
            }

            .mobile-menu {
                display: none;
            }

            .header-actions {
                display: none;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header-content">
            <!-- Logo -->
            <img src="logo.png" alt="CUREGO Logo" class="logo-icon">

            <!-- Navigation Menu -->
            <nav class="nav-menu">
                <a href="Home.php" class="nav-link">Home</a>
                <a href="About_us.php" class="nav-link">About</a>
                <a href="services.php" class="nav-link">Services</a>
                <a href="contact.php" class="nav-link">Contact</a>
                <div class="search-container">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Search medicines..." class="search-input">
                </div>
            </nav>

            <!-- Header Actions -->
            <div class="header-actions">
                <?php if($userLoggedIn): ?>
                    <a href="add_to_cart.php" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </a>
                    <div class="profile-container">
                        <a href="profile.php" class="profile-avatar">
                            <i class="fas fa-user"></i>
                        </a>
                    </div>
                    <a href="logout.php" class="nav-link">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="nav-link">Login</a>
                    <a href="signup.php" class="nav-link">Sign Up</a>
                <?php endif; ?>
                <a href="Order.php" class="order-btn">
                    🛒 Order
                </a>
            </div>

            <!-- Hamburger Menu Icon -->
            <div class="hamburger" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <a href="Home.php" class="nav-link">Home</a>
            <a href="About_us.php" class="nav-link">About</a>
            <a href="services.php" class="nav-link">Services</a>
            <a href="contact.php" class="nav-link">Contact</a>
            <?php if($userLoggedIn): ?>
                <a href="add_to_cart.php" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">0</span>
                </a>
                <div class="profile-container">
                    <a href="profile.php" class="profile-avatar">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
                <a href="logout.php" class="nav-link">Logout</a>
            <?php else: ?>
                <a href="login.php" class="nav-link">Login</a>
                <a href="signup.php" class="nav-link">Sign Up</a>
            <?php endif; ?>
            <a href="Order.php" class="order-btn">
                🛒 Order
            </a>
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" placeholder="Search medicines..." class="search-input">
            </div>
        </div>
    </header>

    <script>
        // Toggle mobile menu
        function toggleMenu() {
            const mobileMenu = document.getElementById("mobileMenu");
            mobileMenu.classList.toggle("active");
        }
    </script>
</body>
</html>