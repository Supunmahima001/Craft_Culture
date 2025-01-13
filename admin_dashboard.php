<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Daraz Style</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .header {
            background-color: #2c3e50;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .sidebar {
            width: 150px;
            background-color: #34495e;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            padding-top: 70px;
        }

        .sidebar a {
            display: block;
            color: #fff;
            padding: 15px 20px;
            text-decoration: none;
            border-bottom: 1px solid #2c3e50;
        }

        .sidebar a:hover {
            background-color: #2c3e50;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card h2 {
            margin-top: 0;
        }

        .card .actions {
            display: flex;
            gap: 10px;
        }

        .card .actions button {
            background-color: #2c3e50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .card .actions button:hover {
            background-color: #34495e;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 150px;
            }

            .content {
                margin-left: 200px;
            }
        }

        @media (max-width: 576px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content {
                margin-left: 0;
            }
        }
        .custom-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50; 
      color: white;             
      text-decoration: none;    
      font-size: 16px;          
      border: none;             
      border-radius: 8px;       
      transition: background-color 0.3s ease; 
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
  }

  .custom-button:hover {
      background-color: #45a049; 
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15); 
  }

  .custom-button:active {
      background-color: #3e8e41; 
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
      transform: translateY(2px); 
  }
    </style>
</head>
<body>

<div class="header">
    <h1>Daraz Style Admin Panel</h1>
    <div class="user-info">
        <span>Welcome, Admin</span>
    </div>
</div>

<div class="sidebar">
    <a href="#dashboard"><i class="fa fa-home"></i> Dashboard</a>
    <a href="#products"><i class="fa fa-box"></i> Products</a>
    <a href="#orders"><i class="fa fa-shopping-cart"></i> Orders</a>
    <a href="#users"><i class="fa fa-users"></i> Users</a>
    <a href="#categories"><i class="fa fa-list"></i> Categories</a>
    <a href="#analytics"><i class="fa fa-chart-line"></i> Analytics</a>
    <a href="#settings"><i class="fa fa-cogs"></i> Settings</a>
</div>

<div class="content">
    <div id="dashboard" class="card">
        <h2>Dashboard</h2>
        <p>Overview of website activity and statistics.</p>
    </div>

    <div id="products" class="card">
        <h2>Products</h2>
        <div class="actions">
        <a href="#" class="custom-button">Add Product</a>

        <a href="#" class="custom-button">Manage Itemss</a>

        </div>
    </div>

    <div id="orders" class="card">
        <h2>Orders</h2>
        <div class="actions">
            <a href="#" class="custom-button">View pending orders</a>
            <a href="#" class="custom-button">View completed orders</a>
        </div>
    </div>

    <div id="users" class="card">
        <h2>Users</h2>
        <div class="actions">
            <a href="#" class="custom-button">View all users</a>
            <a href="#" class="custom-button">Manage role</a>
        </div>
    </div>

    <div id="categories" class="card">
        <h2>Categories</h2>
        <div class="actions">
            <a href="#" class="custom-button">Add category</a>
            <a href="#" class="custom-button">View all categories </a>
        </div>
    </div>

    <div id="analytics" class="card">
        <h2>Analytics</h2>
        <p>Monitor website performance and user behavior.</p>
    </div>

    <div id="settings" class="card">
        <h2>Settings</h2>
        <p>Configure website preferences and settings.</p>
    </div>
</div>

</body>
</html>
