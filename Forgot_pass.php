<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: -15px;
            margin-bottom: 15px;
        }
    </style>

    <?php include('header.php')?>

    <div class="page-container">
        <form class="form" id="forgotPasswordForm" method="post">
            <div class="medical-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M12.65 10C11.83 7.67 9.61 6 7 6c-3.31 0-6 2.69-6 6s2.69 6 6 6c2.61 0 4.83-1.67 5.65-4H17v4h4v-4h2v-4H12.65zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                </svg>
            </div>
            <h2 class="heading">Forgot Password</h2>
            <p class="form-text">Enter your email address and we'll send you instructions to reset your password.</p>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email Address" name="email">
            </div>
            <button type="submit" class="btn btn-primary" formaction="verification.php">Reset Password</button>
            <div class="form-footer">
                <p>Remember your password? <a href="login_.php">Login</a></p>
            </div>
        </form>
    </div>

    <?php include('footer.php')?>

    <script>
        $(document).ready(function() {
            $('#forgotPasswordForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    }
                },
                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    error.insertAfter(element);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid').addClass('is-valid');
                }
            });
        });
    </script>
</body>

</html>