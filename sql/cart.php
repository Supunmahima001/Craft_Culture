<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
        }

        .product-list, .cart {
            max-width: 800px;
            margin: 0 auto;
        }

        .product, .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        .product .details, .cart-item .details {
            flex-grow: 1;
            margin-left: 10px;
        }

        .product button, .cart button {
            background-color: #C3BBD8;
            color: white;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        .product button:hover, .cart button:hover {
            background-color: #C3BBD8;
        }

        .cart {
            margin-top: 20px;
        }

        .cart h2 {
            text-align: center;
        }

        .cart-summary {
            margin-top: 10px;
            text-align: center;
        }

        .cart-summary span {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="product-list">
        <h1>Products</h1>
        <div class="product" data-id="1" data-name="Product 1" data-price="10.00">
            <div class="details">
                <h2>Product 1</h2>
                <p>Price: $10.00</p>
            </div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-id="2" data-name="Product 2" data-price="20.00">
            <div class="details">
                <h2>Product 2</h2>
                <p>Price: $20.00</p>
            </div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="product" data-id="3" data-name="Product 3" data-price="15.00">
            <div class="details">
                <h2>Product 3</h2>
                <p>Price: $15.00</p>
            </div>
            <button class="add-to-cart">Add to Cart</button>
        </div>
    </div>

    <div class="cart">
        <h2>Your Cart</h2>
        <div class="cart-items"></div>
        <div class="cart-summary">
            Total: $<span id="cart-total">0.00</span>
        </div>
        <button id="checkout">Checkout</button>
    </div>

    <script>
        const cart = [];
        const cartItemsContainer = document.querySelector('.cart-items');
        const cartTotal = document.getElementById('cart-total');

        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const productElement = button.closest('.product');
                const productId = productElement.dataset.id;
                const productName = productElement.dataset.name;
                const productPrice = parseFloat(productElement.dataset.price);

                // Check if the product is already in the cart
                const existingItem = cart.find(item => item.id === productId);
                if (existingItem) {
                    existingItem.quantity++;
                } else {
                    cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
                }

                updateCart();
            });
        });

        // Update cart display
        function updateCart() {
            // Clear the cart display
            cartItemsContainer.innerHTML = '';

            // Populate the cart display
            let total = 0;
            cart.forEach(item => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <div class="details">
                        <h4>${item.name}</h4>
                        <p>Price: $${item.price.toFixed(2)} | Quantity: ${item.quantity}</p>
                    </div>
                    <button class="remove-from-cart" data-id="${item.id}">Remove</button>
                `;
                cartItemsContainer.appendChild(cartItem);

                total += item.price * item.quantity;
            });

            // Update the total
            cartTotal.textContent = total.toFixed(2);

            // Add event listeners for remove buttons
            document.querySelectorAll('.remove-from-cart').forEach(button => {
                button.addEventListener('click', () => {
                    const productId = button.dataset.id;
                    const itemIndex = cart.findIndex(item => item.id === productId);
                    if (itemIndex > -1) {
                        cart.splice(itemIndex, 1);
                        updateCart();
                    }
                });
            });
        }

        // Checkout functionality
        document.getElementById('checkout').addEventListener('click', () => {
            if (cart.length > 0) {
                alert('Proceeding to checkout!');
                // Implement checkout functionality here
            } else {
                alert('Your cart is empty!');
            }
        });
    </script>

</body>
</html>
