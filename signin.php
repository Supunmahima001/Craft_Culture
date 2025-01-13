<?php

session_start();

require_once 'conf.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if (empty($email) || empty($password)) {
        echo "<script>alert('Both fields are required!');</script>";
        exit;
    }

    
    $sql = "SELECT * FROM Users WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if ($result->num_rows == 1) {
        
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['Password'])) {
            
            $_SESSION['UserID'] = $user['UserID'];
            $_SESSION['Username'] = $user['Username'];
            $_SESSION['Role'] = $user['Role'];

            
            if ($user['Role'] == 'Admin') {
                
                header("Location: admin_dashboard.php");
            } elseif ($user['Role'] == 'Seller') {
                
                header("Location: index.php");
            } else {
                
                header("Location: index.php");
            }
            exit;
        } else {
            
            echo "<script>alert('Incorrect password!');</script>";
        }
    } else {
        
        echo "<script>alert('Email not found!');</script>";
    }

    
    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In - [Your Shop Name]</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <!-- Link to external stylesheet -->
    <link rel="stylesheet" href="../css/signin.css" />
    <link
      href="../bootstrap-5.3.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div
      class="content text-and text-bg-secondary p-3 bg-opacity-75 bg-body-tertiary"
    >
      <h2 style="color: black">Sign In</h2>

      <form action="signin.php" method="POST">
    
    <div class="input-group">
        <label for="email">Email Address</label>
        <input
            class="box1"
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
        />
    </div>

    <div class="input-group">
        <label for="password">Password</label>
        <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
        />
    </div>

    <div class="input-group">
        <input type="submit" value="Sign In" />
    </div>

    <div class="forgot-password">
        <a href="index.php">Home</a>
    </div>
</form>


      
      <div class="signup-link">
        Don't have an account? <a href="signup.php">Sign up here</a>
      </div>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
