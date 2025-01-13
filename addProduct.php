<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Add New Product</h1>
    <form id="productForm" method="post">
        

        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required>

        
    <label for="photo">Upload Photo:</label>
    <input type="file" id="photo" name="photo" accept="image/*" required>

    <button type="submit">Upload Photo</button>


        <button type="submit">Add Product</button>
    </form>
    <?php
            if ($result->num_rows > 0) {
                // Output data for each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<img src="' . htmlspecialchars($row["image_path"]) . '" alt="Item Image">';
                    echo '<div class="card-content">';
                    echo '<h3>' . htmlspecialchars($row["name"]) . '</h3>';
                    echo '<p><strong>Category:</strong> ' . htmlspecialchars($row["category"]) . '</p>';
                   
                   
                    
                    echo '<p class="price"><strong>Price:</strong> $' . htmlspecialchars($row["price"]) . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No items found.</p>";
            }
           // $conn->close();
            ?>
     <script>
        document.getElementById('productForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const productData = Object.fromEntries(formData.entries());

            const response = await fetch('/add-product', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(productData),
            });

            if (response.ok) {
                alert('Product added successfully!');
                e.target.reset();
            } else {
                alert('Error adding product.');
            }
        });
    </script> 
</body>
</html>
