<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - [Your Shop Name]</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <!-- Link to external stylesheet -->
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

      <form action="/submit-signup" method="POST">
        
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

        <!-- Confirm Password input -->
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
      </div>
    </div>
  </body>
</html>
