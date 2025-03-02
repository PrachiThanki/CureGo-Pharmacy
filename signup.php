<?php
session_start(); 
include 'connect.php';

include('header.php');


if (isset($_POST['submit'])) {
    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $pswd = $_POST['password'];
    $cpass = $_POST['confirmPassword'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "Not selected";

   
    $check_query = "SELECT * FROM users WHERE email = '$email'";
    $check_result = mysqli_query($connect, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $error = "Email already registered";
    } else if ($pswd != $cpass) {
        $error = "Passwords do not match";
    } else {
        $hashed_password = password_hash($pswd, PASSWORD_DEFAULT);

        $insert_query = mysqli_query($connect, "INSERT INTO `users` (`fullname`, `email`, `password`, `gender`) 
                    VALUES ('$fullname', '$email', '$hashed_password', '$gender')");

        if ($insert_query) {
           
            $user_id = mysqli_insert_id($connect);

            
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $fullname;

            
            header("Location: home.php");
            exit();
        } else {
            $error = "Registration failed";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Curego Pharmacy</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery-3.7.1.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="validate.js" defer></script>
    <script src="bootstrap.js"></script>
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

        .form-check {
            margin-bottom: 15px;
        }

        .form-label {
            color: var(--text-dark);
            font-weight: 500;
            margin-bottom: 8px;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: -15px;
            margin-bottom: 15px;
        }

      
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
    <div class="page-container">
        <form action="signup.php" class="form" id="signupForm" method="post" enctype="multipart/form-data">
            <div class="medical-icon">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-8-2h4v2h-4V4zm2 12h-2v2h-2v-2H8v-2h2v-2h2v2h2v2z" />
                </svg>
            </div>
            <h2 class="heading">Create Account</h2>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger mb-3" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Full Name" name="fullname"
                    data-validation="required alpha" data-min="3">
                <span id="fullnameError" class="error"></span>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email Address" name="email"
                    data-validation="required email">
                <span id="emailError" class="error"></span>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password"
                    data-validation="required strongPassword" data-min="8">
                <span id="passwordError" class="error"></span>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword"
                    data-validation="required confirmPassword" data-password-id="password">
                <span id="confirmPasswordError" class="error"></span>
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" value="male" data-validation="required">
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" value="female">
                    <label class="form-check-label">Female</label>
                </div>
                <span id="genderError" class="error"></span>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
            <div class="form-footer">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>