<?php
require_once 'conf.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    
    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "<script>alert('All fields are required!');</script>";
        exit;
    }

    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match!');</script>";
        exit;
    }

    
    $emailQuery = "SELECT * FROM Users WHERE Email = ?";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo "<script>alert('Email is already registered.');</script>";
        exit;
    }

    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $role = 'Buyer';
    $sql = "INSERT INTO Users (Username, Email, Password, Role) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $hashedPassword, $role);
    
    if ($stmt->execute()) {
        
        echo "<script>alert('Registration successful! You can now log in.'); window.location.href='signin.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
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
    <title>Sign Up - [Your Shop Name]</title>
    <link rel="stylesheet" href="../css/styles.css" />
    
    <link rel="stylesheet" href="../css/signup.css" />
    <link
      href="../bootstrap-5.3.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div
      class="content text-and text-bg-secondary p-3 bg-opacity-75 bg-body-tertiary"
    >
      <h4 style="color: black">Create an Account</h4>

      <form action="signup.php" method="POST">
        
        <div class="input-group">
          <label for="name">Full Name</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter your full name"
            required
          />
        </div>

        
        <div class="input-group">
          <label for="email">Email Address</label>
          <input
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
            placeholder="Create a password"
            required
          />
        </div>

        
        <div class="input-group">
          <label for="confirm-password">Confirm Password</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            placeholder="Confirm your password"
            required
          />
        </div>

        
        <div class="input-group">
          <input type="submit" value="Sign Up" />
        </div>
      </form>

      
      <div class="signin-link">
        Already have an account? <a href="signin.php">Sign in here</a>
        <br>
        <a href="index.php">Home</a>

      </div>
    </div>
  </body>
</html>
