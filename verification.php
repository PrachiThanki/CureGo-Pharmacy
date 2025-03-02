<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery.validate.js"></script>
    <script src="additional-methods.js"></script>
</head>

<body>
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

        .page-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form {
            width: 500px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            border: none;
            background-color: rgba(32, 169, 160, 0.24);
            margin-bottom: 100px;
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

        .form-footer {
            margin-top: 20px;
            text-align: center;
            color: var(--text-dark);
        }

        .form-footer a {
            color: var(--secondary-color);
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-footer a:hover {
            color: var(--primary-color);
        }

        .medical-icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .medical-icon svg {
            width: 50px;
            height: 50px;
            fill: var(--secondary-color);
        }

        .form-text {
            text-align: center;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        .otp-inputs {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .otp-input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            border: 1px solid #e1e8f0;
            border-radius: 8px;
            background: white;
            transition: all 0.3s ease;
        }

        .otp-input:focus {
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(32, 169, 160, 0.1);
            outline: none;
        }

        .timer {
            text-align: center;
            color: var(--text-dark);
            margin-bottom: 20px;
            font-size: 14px;
        }

        .resend-btn {
            background: none;
            border: none;
            color: var(--secondary-color);
            font-weight: 500;
            cursor: pointer;
            padding: 0;
            margin: 0;
            text-decoration: underline;
        }

        .resend-btn:disabled {
            color: #999;
            text-decoration: none;
            cursor: default;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875rem;
            text-align: center;
            margin-top: 10px;
        }
    </style>

    <?php include('header.php')?>

    <div class="page-container">
        <form class="form" id="otpForm" method="post">
            <div class="medical-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/>
                </svg>
            </div>
            <h2 class="heading">Verify OTP</h2>
            <p class="form-text">Please enter the verification code sent to your email</p>
            
            <div class="otp-inputs">
                <input type="text" class="otp-input" maxlength="1" name="otp[]" pattern="[0-9]" inputmode="numeric">
                <input type="text" class="otp-input" maxlength="1" name="otp[]" pattern="[0-9]" inputmode="numeric">
                <input type="text" class="otp-input" maxlength="1" name="otp[]" pattern="[0-9]" inputmode="numeric">
                <input type="text" class="otp-input" maxlength="1" name="otp[]" pattern="[0-9]" inputmode="numeric">
                <input type="text" class="otp-input" maxlength="1" name="otp[]" pattern="[0-9]" inputmode="numeric">
                <input type="text" class="otp-input" maxlength="1" name="otp[]" pattern="[0-9]" inputmode="numeric">
            </div>

            <div class="timer">
                Time remaining: <span id="countdown">02:00</span>
                <br>
                <button type="button" class="resend-btn" id="resendBtn" disabled>Resend OTP</button>
            </div>

            <button type="submit" class="btn btn-primary">Verify OTP</button>
            
            <div class="form-footer">
                <p>Didn't receive the code? <a href="#" id="resendLink">Resend</a></p>
            </div>
        </form>
    </div>

    <?php include('footer.php')?>

    <script>
        $(document).ready(function() {
            // OTP input handling
            $('.otp-input').on('input', function() {
                const value = $(this).val();
                const maxLength = parseInt($(this).attr('maxlength'));
                
                // Only allow numbers
                if (!/^\d*$/.test(value)) {
                    $(this).val('');
                    return;
                }

                if (value.length >= maxLength) {
                    $(this).next('.otp-input').focus();
                }
            });

            // Handle backspace
            $('.otp-input').on('keydown', function(e) {
                if (e.key === 'Backspace' && !$(this).val()) {
                    $(this).prev('.otp-input').focus();
                }
            });

            // Timer functionality
            let timeLeft = 120; // 2 minutes in seconds
            const countdownEl = $('#countdown');
            const resendBtn = $('#resendBtn');

            function updateTimer() {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                countdownEl.text(
                    `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`
                );

                if (timeLeft === 0) {
                    resendBtn.prop('disabled', false);
                    clearInterval(timerInterval);
                } else {
                    timeLeft--;
                }
            }

            let timerInterval = setInterval(updateTimer, 1000);

            // Form validation
            $('#otpForm').validate({
                rules: {
                    'otp[]': {
                        required: true,
                        number: true,
                        minlength: 1,
                        maxlength: 1
                    }
                },
                messages: {
                    'otp[]': {
                        required: "Please enter the complete OTP",
                        number: "Please enter only digits",
                        minlength: "Please enter a single digit",
                        maxlength: "Please enter a single digit"
                    }
                },
                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    error.insertAfter($('.otp-inputs'));
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid').addClass('is-valid');
                }
            });

            // Resend OTP handler
            $('#resendLink, #resendBtn').click(function(e) {
                e.preventDefault();
                if (!resendBtn.prop('disabled')) {
                    // Reset timer
                    timeLeft = 120;
                    resendBtn.prop('disabled', true);
                    clearInterval(timerInterval);
                    timerInterval = setInterval(updateTimer, 1000);
                    
                    // Clear OTP fields
                    $('.otp-input').val('').removeClass('is-valid is-invalid');
                    $('.otp-input:first').focus();
                    
                    // You would typically make an AJAX call here to resend the OTP
                    alert('New OTP has been sent to your email');
                }
            });
        });
    </script>
</body>

</html>