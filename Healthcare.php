<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUREGO - Order Medicines</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<link rel="stylesheet" href="Order_index.css">
<body>
     <!-- Header -->
     <?php include 'header.php'; ?>
    <main class="container">
    <section class="hero" style="background-color: #ccebff">
    <h1>Your Health, Our Priority</h1>
    <p>Browse our wide range of medicines and healthcare products</p>
            <div class="navigation-buttons">
                <a href="Order.php" class="nav-btn">All Medicines</a>
                <a href="Prescription.php" class="nav-btn">Prescription Drugs</a>
                <a href="Over_the_counter.php" class="nav-btn">Over The Counter</a>
                <a href="Healthcare.php" class="nav-btn">Healthcare Products</a>
            </div>
        </section>

        <div class="medicines-grid">
            <!-- Medicine 1 -->
            <div class="medicine-card">
                <div class="medicine-image">
                    <img src="Cetrixine.jpg" alt="Cetirizine" />
                    <span class="medicine-tag">Popular</span>
                </div>
                <div class="medicine-content">
                    <p class="stock-status">In Stock</p>
                    <h3 class="medicine-name">Cetirizine 10mg</h3>
                    <p class="medicine-description">24-hour relief from allergies, hay fever, and other allergic conditions.</p>
                    <div class="medicine-footer">
                        <span class="medicine-price">₹35.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Medicine 2 -->
            <div class="medicine-card">
                <div class="medicine-image">
                    <img src="Amoxicillin.jpg" alt="Amoxicillin" />
                    <span class="medicine-tag">Prescription Required</span>
                </div>
                <div class="medicine-content">
                    <p class="stock-status">In Stock</p>
                    <h3 class="medicine-name">Amoxicillin 500mg</h3>
                    <p class="medicine-description">Broad-spectrum antibiotic effective against various bacterial infections.</p>
                    <div class="medicine-footer">
                        <span class="medicine-price">₹120.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Medicine 3 -->
            <div class="medicine-card">
                <div class="medicine-image">
                    <img src="Omeprazole.jpg" alt="Ibuprofen" />
                </div>
                <div class="medicine-content">
                    <p class="stock-status">In Stock</p>
                    <h3 class="medicine-name">Ibuprofen 400mg</h3>
                    <p class="medicine-description">Anti-inflammatory medication for pain relief and fever reduction.</p>
                    <div class="medicine-footer">
                        <span class="medicine-price">₹65.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Add 12 more medicine cards following the same structure -->
            <div class="medicine-card">
                <div class="medicine-image">
                    <img src="Paracetamol.jpg" alt="Paracetamol" />
                </div>
                <div class="medicine-content">
                    <p class="stock-status">In Stock</p>
                    <h3 class="medicine-name">Paracetamol 500mg</h3>
                    <p class="medicine-description">Pain and fever reducer, suitable for various conditions.</p>
                    <div class="medicine-footer">
                        <span class="medicine-price">₹25.00</span>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structures for 11 more medicines -->
        </div>
    </main>

    <!-- Cart Sidebar -->
    <div id="cart-sidebar">
        <h2>Your Cart</h2>
        <div id="cart-items"></div>
        <div id="cart-total" class="cart-total">Total: ₹0.00</div>
        <button class="add-to-cart" style="width: 100%; margin-top: 1rem;">Checkout</button>
    </div>

     <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
        function toggleCart() {
            const sidebar = document.getElementById('cart-sidebar');
            sidebar.classList.toggle('open');
        }

        document.getElementById('cart-toggle').addEventListener('click', toggleCart);
    </script>
    
    <script>
        // Optional JavaScript for active state
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.nav-btn');
            
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    buttons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>

</body>
</html>