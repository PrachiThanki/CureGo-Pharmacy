<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUREGO - Product Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        :root {
            --primary-color: #ccebff;
            --text-color: #333;
            --border-color: #ddd;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .product-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 20px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-tag {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff6b6b;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9em;
        }

        .product-info {
            padding: 20px;
        }

        .product-title {
            font-size: 2em;
            color: var(--text-color);
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.8em;
            color: #2c3e50;
            margin: 15px 0;
            font-weight: bold;
        }

        .stock-status {
            color: #27ae60;
            font-weight: 500;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .stock-status i {
            font-size: 0.9em;
        }

        .product-description {
            color: #666;
            line-height: 1.6;
            margin: 20px 0;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 20px 0;
        }

        .quantity-btn {
            background-color: var(--primary-color);
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2em;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            padding: 5px;
        }

        .add-to-cart-btn {
            background-color: #2C5F5F;
            ;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 20px;
        }

        .add-to-cart-btn:hover {
            background-color: rgb(39, 83, 83);
        }

        .product-details {
            margin-top: 30px;
        }

        .details-tabs {
            display: flex;
            gap: 20px;
            border-bottom: 2px solid var(--border-color);
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            position: relative;
        }

        .tab.active {
            color: #2C5F5F;
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #2C5F5F;
        }

        .tab-content {
            padding: 20px 0;
        }

        .related-products {
            margin-top: 40px;
        }

        .related-products h2 {
            margin-bottom: 20px;
            color: var(--text-color);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .related-product-card {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .related-product-card img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .related-product-card h3 {
            margin: 10px 0;
            font-size: 1.1em;
            color: var(--text-color);
        }

        .related-product-card .price {
            color: #2c3e50;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .product-container {
                grid-template-columns: 1fr;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="product-container">
            <div class="product-image">
                <img src="Amoxicillin.jpg" alt="Product Image">
                <span class="product-tag">New</span>
            </div>

            <div class="product-info">
                <h1 class="product-title">Product Name</h1>
                <div class="stock-status">
                    <i class="fas fa-check-circle"></i>
                    In Stock
                </div>
                <div class="product-price">₹999</div>
                <p class="product-description">
                    Paracetamol is a pain reliever and fever reducer, commonly used for headaches, muscle aches, and
                    fever, with minimal side effects.
                </p>

                <div class="quantity-selector">
                    <span>Quantity:</span>
                    <button class="quantity-btn" onclick="updateQuantity(-1)">-</button>
                    <input type="number" class="quantity-input" value="1" min="1" max="10">
                    <button class="quantity-btn" onclick="updateQuantity(1)">+</button>
                </div>

                <button class="add-to-cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    Add to Cart
                </button>

                <div class="product-details">
                    <div class="details-tabs">
                        <div class="tab active">Description</div>
                        <div class="tab">Usage</div>
                        <div class="tab">Side Effects</div>
                    </div>
                    <div class="tab-content">
                        <p>Detailed information about the product including composition, manufacturer details, and other
                            important information will be displayed here.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php include 'footer.php'; ?>
    <script>
        function updateQuantity(change) {
            const input = document.querySelector('.quantity-input');
            let value = parseInt(input.value) + change;
            value = Math.max(1, Math.min(10, value));
            input.value = value;
        }

        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', () => {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    </script>
</body>

</html>