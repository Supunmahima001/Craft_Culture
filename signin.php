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

      <form action="/submit-signin" method="POST">
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
