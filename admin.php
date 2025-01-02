<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page - Hand Craft Selling</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file here -->
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        
    </header>

    <main>
        <section id="admin-options">
            <h2>Admin Options</h2>
            <div class="admin-section">
                <h3>Manage Products</h3>
                <p><a href="add_product.php">Add New Product</a></p>
                <p><a href="edit_product.php">Edit Existing Products</a></p>
                <p><a href="delete_product.php">Delete Products</a></p>
            </div>

            <div class="admin-section">
                <h3>Manage Users</h3>
                <p><a href="view_users.php">View All Users</a></p>
                <p><a href="edit_users.php">Edit User Information</a></p>
                <p><a href="delete_users.php">Delete Users</a></p>
            </div>

            <div class="admin-section">
                <h3>Manage Orders</h3>
                <p><a href="view_orders.php">View All Orders</a></p>
                <p><a href="update_orders.php">Update Order Status</a></p>
            </div>

            <div class="admin-section">
                <h3>View Reports</h3>
                <p><a href="sales_report.php">Sales Report</a></p>
                <p><a href="user_report.php">User Activity Report</a></p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Hand Craft Selling. All rights reserved.</p>
    </footer>
</body>
</html>
