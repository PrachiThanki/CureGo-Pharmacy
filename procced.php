<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modern Checkout</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery.validate.js"></script>
    <script src="additional-methods.js"></script>
    <style>
        :root {
            --primary-color: #20A9A0;
            --secondary-color: #228B8D;
        }

        .procced {
            font-family: 'Inter', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .checkout-card {
            width: 500px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(32, 169, 160, 0.1);
            padding: 30px;
            position: relative;
            overflow: hidden;
        }

        .progress-bar {
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 5px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            transition: width 0.5s ease;
        }

        .step {
            display: none;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }

        .step.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .btn-next {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-next:hover {
            background-color: var(--primary-color);
        }

        .error {
            color: red;
            font-size: 0.8rem;
            margin-top: -15px;
            margin-bottom: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
</head>
<?php include 'header.php'; ?>
<body>
    <section class="procced">
        <div class="checkout-card">
            <div class="progress-bar"></div>

            <form id="checkoutForm">
                <div id="personal-info" class="step active">
                    <h3>Personal Details</h3>
                    <div class="mb-3">
                        <input type="text" name="fullName" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <button type="button" onclick="validateStep('personal-info')" class="btn-next w-100">Next</button>
                </div>

                <div id="shipping" class="step">
                    <h3>Shipping Address</h3>
                    <div class="mb-3">
                        <input type="text" name="streetAddress" class="form-control" placeholder="Street Address" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="city" class="form-control" placeholder="City" required>
                        </div>
                        <div class="col">
                            <input type="text" name="postalCode" class="form-control" placeholder="Postal Code" required>
                        </div>
                    </div>
                    <a href="confirm.php">
                    <button type="button" onclick="validateStep('shipping')" class="btn-next w-100 mt-3">Proceed</button>
                    </a>
                </div>

                <!-- <div id="payment" class="step">
                    <h3>Payment Details</h3>
                    <div class="mb-3">
                        <input type="text" name="cardNumber" class="form-control" placeholder="Card Number" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="expiry" class="form-control" placeholder="Expiry (MM/YY)" required>
                        </div>
                        <div class="col">
                            <input type="text" name="cvv" class="form-control" placeholder="CVV" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <strong>Total: ₹1,598.00</strong>
                    </div>
                    <button type="submit" class="btn-next w-100 mt-3">Complete Order</button>
                </div> -->
            </form>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#checkoutForm').validate({
                errorClass: 'error',
                errorElement: 'div',
                rules: {
                    fullName: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    streetAddress: {
                        required: true,
                        minlength: 5
                    },
                    city: {
                        required: true,
                        minlength: 2
                    },
                    postalCode: {
                        required: true,
                        digits: true,
                        minlength: 5,
                        maxlength: 6
                    },
                    cardNumber: {
                        required: true,
                        creditcard: true
                    },
                    expiry: {
                        required: true,
                        pattern: /^(0[1-9]|1[0-2])\/\d{2}$/
                    },
                    cvv: {
                        required: true,
                        digits: true,
                        minlength: 3,
                        maxlength: 4
                    }
                },
                messages: {
                    fullName: {
                        required: "Please enter your full name",
                        minlength: "Name must be at least 3 characters"
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    },
                    streetAddress: {
                        required: "Please enter your street address",
                        minlength: "Address must be at least 5 characters"
                    },
                    city: {
                        required: "Please enter your city",
                        minlength: "City name must be at least 2 characters"
                    },
                    postalCode: {
                        required: "Please enter postal code",
                        digits: "Postal code must be numbers only",
                        minlength: "Postal code must be at least 5 digits",
                        maxlength: "Postal code cannot exceed 6 digits"
                    },
                    cardNumber: {
                        required: "Please enter card number",
                        creditcard: "Please enter a valid card number"
                    },
                    expiry: {
                        required: "Please enter expiry date",
                        pattern: "Please use MM/YY format"
                    },
                    cvv: {
                        required: "Please enter CVV",
                        digits: "CVV must be numbers only",
                        minlength: "CVV must be at least 3 digits",
                        maxlength: "CVV cannot exceed 4 digits"
                    }
                },
                submitHandler: function(form) {
                    // Redirect to confirmation page or process order
                    window.location.href = 'confirm.php';
                    return false;
                }
            });
        });

        let currentStep = 0;
        const steps = ['personal-info', 'shipping', 'payment'];

        function validateStep(stepId) {
            // Validate current step
            const validator = $('#checkoutForm').validate();
            const stepInputs = $(`#${stepId} input`);
            let isStepValid = true;

            stepInputs.each(function() {
                if (!validator.element(this)) {
                    isStepValid = false;
                }
            });

            // If step is valid, move to next step
            if (isStepValid) {
                $(`#${steps[currentStep]}`).removeClass('active');
                currentStep++;
                $(`#${steps[currentStep]}`).addClass('active');
                updateProgressBar();
            }
        }

        function updateProgressBar() {
            const progressBar = document.querySelector('.progress-bar');
            progressBar.style.width = `${(currentStep + 1) * 33.33}%`;
        }
    </script>
</body>
<?php include 'footer.php'; ?>
</html>