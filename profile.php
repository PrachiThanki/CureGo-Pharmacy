<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - CUREGO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --soft-blue: #E6F2F2;
            --light-blue: #CCF2F4;
            --teal-accent: #4FBFA0;
            --deep-teal: #228B8D;
            --text-color: #2C5F5F;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .up-body {
            font-family: 'Arial', sans-serif;
            background: rgba(79, 191, 159, 0.07);
            min-height: 100vh;
            padding: 2rem;
        }

        .up-main-card {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .up-cover {
            height: 200px;
            background: linear-gradient(45deg, var(--deep-teal), var(--teal-accent));
            position: relative;
        }

        .up-avatar-container {
            width: 150px;
            height: 150px;
            background: var(--white);
            border-radius: 50%;
            position: absolute;
            bottom: -75px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .up-avatar-container i {
            font-size: 4rem;
            color: var(--deep-teal);
        }

        .up-content {
            padding: 90px 2rem 2rem;
            text-align: center;
        }

        .up-user-name {
            font-size: 2rem;
            color: var(--deep-teal);
            margin-bottom: 0.5rem;
        }

        .up-user-email {
            color: var(--text-color);
            opacity: 0.8;
            margin-bottom: 2rem;
        }

        .up-stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 2rem;
            padding: 1rem;
        }

        .up-stat-item {
            text-align: center;
            padding: 1rem;
            background: var(--soft-blue);
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .up-stat-item:hover {
            transform: translateY(-5px);
        }

        .up-stat-number {
            font-size: 1.5rem;
            color: var(--deep-teal);
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .up-stat-text {
            color: var(--text-color);
            font-size: 0.9rem;
        }

        .up-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding-bottom: 2rem;
        }

        .up-button {
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .up-button-primary {
            background: var(--deep-teal);
            color: var(--white);
        }

        .up-button-primary:hover {
            background: var(--teal-accent);
            transform: translateY(-2px);
        }

        .up-button-secondary {
            background: var(--white);
            color: var(--deep-teal);
            border: 2px solid var(--deep-teal);
        }

        .up-button-secondary:hover {
            background: var(--soft-blue);
            transform: translateY(-2px);
        }

        @media (max-width: 600px) {
            .up-body {
                padding: 1rem;
            }

            .up-stats-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .up-buttons {
                flex-direction: column;
                padding: 0 2rem 2rem;
            }

            .up-button {
                width: 100%;
            }
        }
    </style>
</head>
<?php include 'header.php'; ?>

<body class="up-body">
    <br>
    <br>
    <br>
    <div class="up-main-card">
        <div class="up-cover">
            <div class="up-avatar-container">
                <i class="fas fa-user"></i>
            </div>
        </div>

        <div class="up-content">
            <h1 class="up-user-name">John Doe</h1>
            <p class="up-user-email">john.doe@email.com</p>

            <div class="up-stats-grid">
                <div class="up-stat-item">
                    <div class="up-stat-number">12</div>
                    <div class="up-stat-text">Total Orders</div>
                </div>
                <div class="up-stat-item">
                    <div class="up-stat-number">3</div>
                    <div class="up-stat-text">Active Prescriptions</div>
                </div>
                <div class="up-stat-item">
                    <div class="up-stat-number">8</div>
                    <div class="up-stat-text">Deliveries</div>
                </div>
            </div>

            <div class="up-buttons">
                <a href="edit.php">
                    <button class="up-button up-button-primary">
                        <i class="fas fa-edit"></i> Edit Profile
                    </button>
                </a>
                <button class="up-button up-button-secondary">
                    <i class="fas fa-shopping-bag"></i> View Orders
                </button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>
<?php include 'footer.php'; ?>

</html>