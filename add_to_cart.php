<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUREGO - Shopping Cart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --soft-blue: #E6F2F2;
            --light-blue: #CCF2F4;
            --teal-accent: #4FBFA0;
            --deep-teal: #228B8D;
            --text-color: #2C5F5F;
            --coral-accent: #FF7F7F;
            --white: #FFFFFF;
            --light-gray: #f8f9fa;
            --medium-gray: #e9ecef;
            --dark-gray: #343a40;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--light-gray);
        }
        
        .cart-container {
            background-color: var(--white);
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }
        
        .cart-header {
            border-bottom: 2px solid var(--deep-teal);
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        
        .cart-header h1 {
            font-weight: 700;
            color: var(--deep-teal);
        }
        
        .price-column {
            font-weight: 600;
            color: var(--text-color);
        }
        
        .product-card {
            background: linear-gradient(to right, rgba(204, 242, 244, 0.2), rgba(230, 242, 242, 0.2));
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-left: 5px solid var(--deep-teal);
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        
        .product-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .item-title {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: color 0.3s ease;
        }
        
        .item-title:hover {
            color: var(--teal-accent);
        }
        
        .stock-status {
            color: #2e7d32;
            font-weight: 600;
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background-color: rgba(46, 125, 50, 0.1);
            border-radius: 20px;
            margin-bottom: 0.5rem;
        }
        
        .shipping-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background-color: var(--soft-blue);
            border-radius: 20px;
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 0.5rem;
        }
        
        .quantity-controls {
            max-width: 120px;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .quantity-controls .form-control {
            border: none;
            font-weight: 600;
            color: var(--text-color);
        }
        
        .quantity-controls .btn {
            background-color: var(--deep-teal);
            color: white;
            border: none;
            font-weight: 600;
        }
        
        .option-label {
            font-weight: 600;
            color: var(--text-color);
        }
        
        .pack-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background-color: var(--medium-gray);
            border-radius: 20px;
            font-weight: 600;
        }
        
        .action-links {
            margin-top: 1rem;
        }
        
        .action-links a {
            color: var(--deep-teal);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
        }
        
        .action-links a:hover {
            background-color: rgba(34, 139, 141, 0.1);
            color: var(--deep-teal);
        }
        
        .action-links i {
            margin-right: 0.25rem;
        }
        
        .price-display {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-gray);
        }
        
        .subtotal-section {
            background-color: var(--light-gray);
            border-radius: 10px;
            padding: 1.5rem;
            text-align: right;
            border-top: 2px solid var(--deep-teal);
            margin-top: 1rem;
        }
        
        .subtotal-text {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-color);
        }
        
        .subtotal-amount {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--deep-teal);
        }
        
        .btn-proceed {
            background: linear-gradient(135deg, var(--deep-teal), var(--teal-accent));
            color: white;
            font-weight: 700;
            padding: 0.75rem 2rem;
            border-radius: 30px;
            border: none;
            box-shadow: 0 4px 8px rgba(34, 139, 141, 0.3);
            transition: all 0.3s ease;
            font-size: 1.1rem;
            margin-top: 1rem;
        }
        
        .btn-proceed:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(34, 139, 141, 0.4);
            background: linear-gradient(135deg, var(--teal-accent), var(--deep-teal));
            color: white;
        }
        
        .btn-proceed i {
            margin-left: 0.5rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .cart-container {
                padding: 1rem;
            }
            
            .product-card {
                padding: 1rem;
            }
            
            .action-links {
                flex-wrap: wrap;
            }
            
            .action-links a {
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include('header.php')?>
    
    <div class="container cart-container">
        <!-- Cart Header -->
        <div class="cart-header d-flex justify-content-between align-items-center">
            <h1><i class="fas fa-shopping-cart me-2"></i>Your Cart</h1>
            <span class="price-column h5">Price</span>
        </div>
        
        <!-- Cart Item 1 -->
        <div class="product-card row align-items-center">
            <!-- Product Image -->
            <div class="col-md-3 mb-3 mb-md-0">
                <div class="product-image">
                    <img src="Cetrixine.jpg" alt="Cetirizine" class="img-fluid">
                </div>
            </div>
            
            <!-- Product Details -->
            <div class="col-md-7">
                <a href="#" class="item-title h4 mb-2">
                    Understanding Cetirizine: A Powerful Allergy Relief Medication
                </a>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <div class="stock-status">
                        <i class="fas fa-check-circle me-1"></i>In Stock
                    </div>
                    <div class="shipping-badge">
                        <i class="fas fa-truck me-1"></i>FREE Shipping
                    </div>
                </div>
                
                <!-- Gift Option -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="giftCheckbox1">
                    <label class="form-check-label" for="giftCheckbox1">
                        <strong>This will be a gift</strong>
                        <a href="#" class="ms-2 small text-decoration-underline">Learn more</a>
                    </label>
                </div>
                
                <!-- Pack Selection -->
                <div class="mb-3">
                    <span class="option-label me-2">Pack:</span>
                    <span class="pack-badge">1</span>
                </div>
                
                <!-- Quantity and Actions -->
                <div class="d-flex align-items-center mb-3">
                    <div class="input-group quantity-controls me-3">
                        <button class="btn" type="button">−</button>
                        <input type="text" class="form-control text-center" value="1">
                        <button class="btn" type="button">+</button>
                    </div>
                </div>
                
                <!-- Action Links -->
                <div class="action-links d-flex flex-wrap gap-3">
                    <a href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                    <a href="#"><i class="fas fa-heart"></i> Save for later</a>
                    <a href="#"><i class="fas fa-search"></i> See more like this</a>
                    <a href="#"><i class="fas fa-share-alt"></i> Share</a>
                </div>
            </div>
            
            <!-- Price -->
            <div class="col-md-2 text-end">
                <span class="price-display">₹799.00</span>
            </div>
        </div>
        
        <!-- Cart Item 2 -->
        <div class="product-card row align-items-center">
            <!-- Product Image -->
            <div class="col-md-3 mb-3 mb-md-0">
                <div class="product-image">
                    <img src="Paracetamol.jpg" alt="Paracetamol" class="img-fluid">
                </div>
            </div>
            
            <!-- Product Details -->
            <div class="col-md-7">
                <a href="#" class="item-title h4 mb-2">
                    Understanding Paracetamol: A Powerful Allergy Relief Medication
                </a>
                
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <div class="stock-status">
                        <i class="fas fa-check-circle me-1"></i>In Stock
                    </div>
                    <div class="shipping-badge">
                        <i class="fas fa-truck me-1"></i>FREE Shipping
                    </div>
                </div>
                
                <!-- Gift Option -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="giftCheckbox2">
                    <label class="form-check-label" for="giftCheckbox2">
                        <strong>This will be a gift</strong>
                        <a href="#" class="ms-2 small text-decoration-underline">Learn more</a>
                    </label>
                </div>
                
                <!-- Pack Selection -->
                <div class="mb-3">
                    <span class="option-label me-2">Pack:</span>
                    <span class="pack-badge">1</span>
                </div>
                
                <!-- Quantity and Actions -->
                <div class="d-flex align-items-center mb-3">
                    <div class="input-group quantity-controls me-3">
                        <button class="btn" type="button">−</button>
                        <input type="text" class="form-control text-center" value="1">
                        <button class="btn" type="button">+</button>
                    </div>
                </div>
                
                <!-- Action Links -->
                <div class="action-links d-flex flex-wrap gap-3">
                    <a href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                    <a href="#"><i class="fas fa-heart"></i> Save for later</a>
                    <a href="#"><i class="fas fa-search"></i> See more like this</a>
                    <a href="#"><i class="fas fa-share-alt"></i> Share</a>
                </div>
            </div>
            
            <!-- Price -->
            <div class="col-md-2 text-end">
                <span class="price-display">₹799.00</span>
            </div>
        </div>
        
        <!-- Subtotal and Checkout Section -->
        <div class="subtotal-section">
            <div class="subtotal-text">
                Subtotal (2 items): <span class="subtotal-amount">₹1,598.00</span>
            </div>
            
            <!-- Proceed to Buy Button -->
            <div class="mt-3">
                <a href="procced.php">
                    <button class="btn btn-proceed">
                        Proceed to Checkout <i class="fas fa-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
    
    <?php include('footer.php')?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>