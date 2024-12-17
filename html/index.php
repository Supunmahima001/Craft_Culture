<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Handcraft Shop</title>
    <link
      href="../bootstrap-5.3.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="../#"><i>Craft Culture</i></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                href="signin.php"
                style="margin-left: 4em; font-weight: bold"
                >Sign in</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="signup.php"
                style="
                  border: 1px solid;
                  width: auto;
                  font-weight: bold;
                  margin-left: 1em;
                "
                >Signup</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section
      class="hero text-center text-white d-flex justify-content-center align-items-center"
    >
      <div class="container">
        <h1 class="GFG">Discover Unique Handcrafted Products</h1>
        <p>~Celebrate the Craft,Own the Art~</p>
        <a href="shop.html" class="btn btn-secondary mt-3">Shop Now</a>
      </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-5">
      <div class="container">
        <h2 class="text-center mb-4">
          <b><i>Our Products</i></b>
        </h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card">
              <img src="../images/pot.jpg" />
              <div class="card-body">
                <h5 class="card-title">Handmade Pottery</h5>
                <p class="card-text">$25.00</p>
                <a href="shop.php" class="btn btn-secondary">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../images/box.jpg" />
              <div class="card-body">
                <h5 class="card-title">Wooden Jewelry Box</h5>
                <p class="card-text">$40.00</p>
                <a href="shop.php" class="btn btn-secondary">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../images/vase.jpg" />
              <div class="card-body">
                <h5 class="card-title">Ceramic Vase</h5>
                <p class="card-text">$35.00</p>
                <a href="shop.php" class="btn btn-secondary">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
      <div class="container text-center">
        <p>&copy; 2024 Craft Culture. All Rights Reserved.</p>
      </div>
    </footer>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
