<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile - CUREGO</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="validate.js" defer></script>
    <script src="jquery.validate.js"></script>
    <script src="additional-methods.js"></script>

    <style>
       :root {
            --soft-blue: #E6F2F2;
            --light-blue: #CCF2F4;
            --teal-accent: #4FBFA0;
            --deep-teal: #228B8D;
            --text-color: #2C5F5F;
            --white: #FFFFFF;
            --error-red: #FF6B6B;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .ep-container {
            min-height: 100vh;
            background: rgba(79, 191, 159, 0.07);;
            padding: 2rem;
            font-family: 'Arial', sans-serif;
        }

        .ep-card {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .ep-header {
            background: linear-gradient(45deg, var(--deep-teal), var(--teal-accent));
            padding: 2rem;
            color: var(--white);
            text-align: center;
        }

        .ep-title {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .ep-subtitle {
            opacity: 0.9;
            font-size: 1rem;
        }

        .ep-avatar-section {
            text-align: center;
            padding: 2rem;
            border-bottom: 1px solid var(--soft-blue);
        }

        .ep-avatar-container {
            width: 120px;
            height: 120px;
            background: var(--soft-blue);
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .ep-avatar-container:hover {
            background: var(--light-blue);
        }

        .ep-avatar-container i {
            font-size: 3rem;
            color: var(--deep-teal);
        }

        .ep-upload-text {
            color: var(--deep-teal);
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .ep-form {
            padding: 2rem;
        }

        .ep-form-section {
            margin-bottom: 2rem;
        }

        .ep-section-title {
            color: var(--deep-teal);
            font-size: 1.2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--soft-blue);
        }

        .ep-form-group {
            margin-bottom: 1.5rem;
        }

        .ep-label {
            display: block;
            color: var(--text-color);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .ep-input {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid var(--soft-blue);
            border-radius: 10px;
            font-size: 1rem;
            color: var(--text-color);
            transition: all 0.3s ease;
        }

        .ep-input:focus {
            outline: none;
            border-color: var(--teal-accent);
            box-shadow: 0 0 0 3px rgba(79, 191, 160, 0.1);
        }

        .ep-buttons {
            display: flex;
            gap: 1rem;
            padding: 1rem 2rem 2rem;
        }

        .ep-button {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .ep-save-btn {
            background: var(--deep-teal);
            color: var(--white);
        }

        .ep-save-btn:hover {
            background: var(--teal-accent);
            transform: translateY(-2px);
        }

        .ep-cancel-btn {
            background: var(--white);
            color: var(--text-color);
            border: 2px solid var(--soft-blue);
        }

        .ep-cancel-btn:hover {
            background: var(--soft-blue);
            transform: translateY(-2px);
        }

        .error {
            color: var(--error-red);
            font-size: 0.875rem;
            display: none;
            margin-top: 0.5rem;
        }

        @media (max-width: 600px) {
            .ep-container {
                padding: 1rem;
            }

            .ep-form {
                padding: 1rem;
            }

            .ep-buttons {
                flex-direction: column;
            }

            .ep-button {
                width: 100%;
            }

            .ep-avatar-container {
                width: 100px;
                height: 100px;
            }

            .ep-avatar-container i {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<?php include 'header.php'; ?>

<body>
    <div class="ep-container">
        <div class="ep-card">
            <div class="ep-header">
                <h1 class="ep-title">Edit Your Profile</h1>
                <p class="ep-subtitle">Update your personal information</p>
            </div>

            <form id="editProfileForm" class="ep-form" action="update_profile.php" method="POST">
                <!-- Avatar Section -->
                <div class="ep-avatar-section">
                    <div class="ep-avatar-container">
                        <i class="fas fa-user"></i>
                    </div>
                    <button type="button" class="ep-upload-text">
                        <i class="fas fa-camera"></i> Change Profile Picture
                    </button>
                </div>

                <!-- Personal Information Section -->
                <div class="ep-form-section">
                    <h2 class="ep-section-title">Personal Information</h2>
                    <div class="ep-form-group">
                        <label class="ep-label" for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="fullName" class="ep-input" value="John Doe" data-validation="required alpha min" data-min="3">
                        <span id="fullNameError" class="error"></span>
                    </div>

                    <div class="ep-form-group">
                        <label class="ep-label" for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="ep-input" value="john.doe@email.com" data-validation="required email">
                        <span id="emailError" class="error"></span>
                    </div>

                    <div class="ep-form-group">
                        <label class="ep-label" for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="ep-input" value="+1 234 567 8900" data-validation="phone">
                        <span id="phoneError" class="error"></span>
                    </div>
                </div>

                <!-- Address Section -->
                <div class="ep-form-section">
                    <h2 class="ep-section-title">Address Information</h2>
                    <div class="ep-form-group">
                        <label class="ep-label" for="address">Street Address</label>
                        <input type="text" id="address" name="address" class="ep-input" value="123 Health Street" data-validation="required min" data-min="5">
                        <span id="addressError" class="error"></span>
                    </div>

                    <div class="ep-form-group">
                        <label class="ep-label" for="city">City</label>
                        <input type="text" id="city" name="city" class="ep-input" value="Medical City" data-validation="required alpha">
                        <span id="cityError" class="error"></span>
                    </div>

                    <div class="ep-form-group">
                        <label class="ep-label" for="zipCode">ZIP Code</label>
                        <input type="text" id="zipCode" name="zipCode" class="ep-input" value="12345" data-validation="required zipcode">
                        <span id="zipCodeError" class="error"></span>
                    </div>
                </div>
                
                <div class="ep-buttons">
                    <button type="submit" class="ep-button ep-save-btn">
                        <i class="fas fa-save"></i> Save Changes
                    </button>
                    <button type="button" class="ep-button ep-cancel-btn">
                        <i class="fas fa-times"></i> Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
    // Script content will go here
    </script>
</body>
<?php include 'footer.php'; ?>
</html>