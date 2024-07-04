<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Shopping Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .product {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #ddd;
        }
        .product:last-child {
            border-bottom: none;
        }
        .product img {
            max-width: 100px;
            border-radius: 8px;
        }
        .product-details {
            flex: 1;
            margin-left: 1rem;
        }
        .product-title {
            font-size: 1.2rem;
            margin: 0;
        }
        .product-price {
            color: #888;
        }
        .add-to-cart {
            padding: 0.5rem 1rem;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .add-to-cart:hover {
            background-color: #218838;
        }
        .cart {
            margin-top: 2rem;
        }
        .cart h2 {
            margin: 0 0 1rem 0;
        }
        .cart ul {
            list-style-type: none;
            padding: 0;
        }
        .cart ul li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sample Shopping Page</h1>
    </header>
    <div class="container">
        <div id="product-list">
            <div class="product" data-id="1" data-name="Product 1" data-price="19.99">
                <img src="https://via.placeholder.com/100" alt="Product 1">
                <div class="product-details">
                    <h2 class="product-title">Product 1</h2>
                    <p class="product-price">$19.99</p>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product" data-id="2" data-name="Product 2" data-price="29.99">
                <img src="https://via.placeholder.com/100" alt="Product 2">
                <div class="product-details">
                    <h2 class="product-title">Product 2</h2>
                    <p class="product-price">$29.99</p>
                </div>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <!-- Add more products as needed -->
        </div>
        <div class="cart">
            <h2>Shopping Cart</h2>
            <ul id="cart-items">
                <!-- Cart items will be displayed here -->
            </ul>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cartItems = [];

            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function () {
                    const product = this.closest('.product');
                    const productId = product.getAttribute('data-id');
                    const productName = product.getAttribute('data-name');
                    const productPrice = product.getAttribute('data-price');

                    cartItems.push({ id: productId, name: productName, price: productPrice });
                    renderCart();
                });
            });

            function renderCart() {
                const cartItemsContainer = document.getElementById('cart-items');
                cartItemsContainer.innerHTML = '';

                cartItems.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = `${item.name} - $${item.price}`;
                    cartItemsContainer.appendChild(li);
                });
            }
        });
    </script>
</body>
</html>
