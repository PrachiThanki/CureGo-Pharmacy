<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed - Pharmax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2a9d8f;
            --secondary-color: #264653;
            --bg-color: #f0f4f8;
        }

        .confirm {
            background-color: var(--bg-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
        }

        .confirmation-wrapper {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            max-width: 500px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .confetti-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: var(--primary-color);
            opacity: 0;
            transform: rotate(0deg);
            animation: confetti-fall 3s linear infinite;
        }

        @keyframes confetti-fall {
            0% {
                opacity: 1;
                transform: translateY(0) rotate(0deg);
            }

            100% {
                opacity: 0;
                transform: translateY(100vh) rotate(360deg);
            }
        }

        .checkmark-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
        }

        .checkmark-circle {
            fill: none;
            stroke: var(--primary-color);
            stroke-width: 4;
            stroke-linecap: round;
            animation: circle-draw 1s ease-in-out;
        }

        .checkmark-check {
            fill: none;
            stroke: var(--primary-color);
            stroke-width: 4;
            stroke-linecap: round;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: check-draw 0.5s ease-in-out 1s forwards;
        }

        @keyframes circle-draw {
            0% {
                stroke-dashoffset: 314;
            }

            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes check-draw {
            0% {
                stroke-dashoffset: 48;
            }

            100% {
                stroke-dashoffset: 0;
            }
        }

        .btn-custom {
            transition: all 0.3s ease;
            border-radius: 30px;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<?php include 'header.php'; ?>

<body>
    <section class="confirm">
        <div class="confirmation-wrapper">
            <div class="confetti-container" id="confetti"></div>

            <div class="checkmark-container">
                <svg viewBox="0 0 56 56">
                    <circle class="checkmark-circle" cx="28" cy="28" r="26" stroke-dasharray="314"
                        stroke-dashoffset="314" />
                    <path class="checkmark-check" d="M16 28 L24 36 L40 20" />
                </svg>
            </div>

            <h2 class="mb-3">Order Confirmed!</h2>
            <p class="lead mb-4">Thank you for your order from Pharmax</p>

            <div class="bg-light p-3 rounded mb-4">
                <div class="row">
                    <div class="col-6 text-start">
                        <p class="mb-1"><strong>Order Number:</strong></p>
                        <p class="mb-1"><strong>Delivery:</strong></p>
                    </div>
                    <div class="col-6 text-end">
                        <p class="mb-1">#PH-12345</p>
                        <p class="mb-1">3-5 Business Days</p>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2">
                <a href="home.php" class="btn btn-primary btn-custom">Return to Homepage</a>
                <a href="track-order.php" class="btn btn-outline-secondary btn-custom">Track Your Order</a>
            </div>
        </div>

    </section>
    <script>
        function createConfetti() {
            const container = document.getElementById('confetti');
            for (let i = 0; i < 50; i++) {
                const confetti = document.createElement('div');
                confetti.classList.add('confetti');
                confetti.style.left = `${Math.random() * 100}%`;
                confetti.style.animationDelay = `${Math.random() * 3}s`;
                confetti.style.backgroundColor = `hsl(${Math.random() * 360}, 50%, 50%)`;
                container.appendChild(confetti);
            }
        }
        createConfetti();
    </script>
</body>
<?php include 'footer.php'; ?>

</html>