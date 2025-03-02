<?php
session_start(); 
include 'connect.php';


if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $pswd = $_POST['pswd'];
    
    $selected = mysqli_query($connect, "SELECT * FROM `users` WHERE email='$email'") or die('Query failed!');
    
    if (mysqli_num_rows($selected) > 0) {
        $row = mysqli_fetch_assoc($selected);
        
        if (password_verify($pswd, $row['password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['fullname']; 
            
        
            header('Location: home.php');
            exit(); 
        } else {
            $error = "Incorrect email or password";
        }
    } else {
        $error = "Incorrect email or password";
    }
}

// Now include your header - including it here ensures session variables are set first
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Curego Pharmacy</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="jquery.validate.js"></script>
    <script src="validate.js" defer></script>
    <script src="additional-methods.js"></script>

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

        .login-page {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form {
            width: 400px;
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
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-1px);
        }

        .login-btn {
            margin-top: 20px;
            text-align: center;
            color: var(--text-dark);
        }

        .login-btn a {
            color: var(--secondary-color);
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-btn a:hover {
            color: var(--primary-color);
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: -15px;
            margin-bottom: 15px;
        }

        /* Medical-themed icon */
        .medical-icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .medical-icon svg {
            width: 50px;
            height: 50px;
            fill: var(--secondary-color);
        }
        
        .error {
            color: #dc3545;
            font-size: 0.875rem;
            display: none;
            margin-top: -15px;
            margin-bottom: 15px;
        }
        
        .alert {
            margin-bottom: 20px;
            padding: 10px 15px;
            border-radius: 8px;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>

<body>
    <div class="login-page container">
        <form action="login.php" class="form" id="form1" method="post">
            <div class="medical-icon">
                <!-- Pharmacy Icon -->
                <svg viewBox="0 0 24 24">
                    <path d="M20 6h-4V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-8-2h4v2h-4V4zm2 12h-2v2h-2v-2H8v-2h2v-2h2v2h2v2z"/>
                </svg>
            </div>
            <h2 class="heading">Welcome Back</h2>
            
            <?php if(isset($error)): ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            
            <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" data-validation="required email">
                <span id="emailError" class="error"></span>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd" data-validation="required strongPassword">
                <span id="pswdError" class="error"></span>
            </div>
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="login-btn">
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                <p>Otherwise <a href="Forgot_pass.php">ForgotPass</a></p>
            </div>
        </form>
    </div>
    
    <?php include('footer.php'); ?>
</body>

</html>