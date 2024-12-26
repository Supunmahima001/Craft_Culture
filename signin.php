<?php
// Start session to manage user session after login
session_start();

require_once 'conf.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form inputs
    if (empty($email) || empty($password)) {
        echo "<script>alert('Both fields are required!');</script>";
        exit;
    }

    // Check if the email exists in the database
    $sql = "SELECT * FROM Users WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // If email exists
    if ($result->num_rows == 1) {
        // Fetch user data
        $user = $result->fetch_assoc();
        // Verify the password using password_verify
        if (password_verify($password, $user['Password'])) {
            // Set session variables
            $_SESSION['UserID'] = $user['UserID'];
            $_SESSION['Username'] = $user['Username'];
            $_SESSION['Role'] = $user['Role'];

            // Redirect based on user role
            if ($user['Role'] == 'Admin') {
                // Redirect to Admin dashboard
                header("Location: admin_dashboard.php");
            } elseif ($user['Role'] == 'Seller') {
                // Redirect to Seller dashboard
                header("Location: index.php");
            } else {
                // Redirect to Buyer dashboard or home page
                header("Location: index.php");
            }
            exit;
        } else {
            // If the password doesn't match
            echo "<script>alert('Incorrect password!');</script>";
        }
    } else {
        // If the email doesn't exist in the database
        echo "<script>alert('Email not found!');</script>";
    }

    // Close the statement and connection
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
    <!-- Email input -->
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
        <a href="#">Forgot Password?</a>
    </div>
</form>


      
      <div class="signup-link">
        Don't have an account? <a href="signup.php">Sign up here</a>
      </div>
    </div>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
