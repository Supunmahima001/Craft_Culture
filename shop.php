<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Shop - Handmade Crafts</title>
    <link rel="stylesheet" href="../css/shop.css" />
    <link
      href="../bootstrap-5.3.3-dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><i>Craft Culture</i></a>
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
              <a class="nav-link" href="aboutus.php">About</a>
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
    
    <header>
      <h1>Handmade Craft Shop</h1>
      <p>Unique, handcrafted items from talented artisans.</p>
    </header>

    
    <div class="shop-container">
      
      <div class="product-card">
        <img
          src="../images/dancer.jpg"
          alt="Handmade Wooden Sri Lankan dancer"
        />
        <h3>Handmade Wooden Sri Lankan traditional dancer</h3>
        <p>
          Beautiful, handcrafted wooden Sri Lankan traditional dancer. Perfect
          for any home.
        </p>
        <p class="price">$30.00</p>
       <button> <a href="cart.php" class="custom-button">Add to cart</a></button>
      </div>

     
      <div class="product-card">
        <img src="../images/handbag.jpg" alt="Hand made hand bag " />
        <h3>Hand made Handbag</h3>
        <p>Handmade womens handbag.beautifull out look</p>
        <br />
        <br />
        <p class="price">$15.00</p>
       <button> <a href="cart.php" class="custom-button">Add to cart</a></button>
        
      </div>

      
      <div class="product-card">
        <img src="../images/wineglass.jpg" alt="Coconat wineglass" />
        <h3>Coconat Wine glass</h3>
        <p>Perfect for every party and funcions.handmade Coconat wine glass</p>
        <br />
        <p class="price">$22.00</p>
        <button><a href="cart.php" class="custom-button">Add to cart</a></button>
      </div>

      
      <div class="product-card">
        <img src="../images/mask.jpg" alt="Wooden Mask" />
        <h3>wooden Mask</h3>
        <p>Handcrafted Wooden mask.Used in traditional events ofSri lanka</p>
        <br />
        <br />
        <p class="price">$40.00</p>
        <button><a href="cart.php" class="custom-button">Add to cart</a></button>
      </div>

      <div class="product-card">
        <img src="../images/spoons.jpg" alt="Handmade Wooden Spoons" />
        <h3>Handmade Wooden Spoons</h3>
        <p>Beautiful, handcrafted wooden spoons. Perfect for any home.</p>
        <p class="price">$30.00</p>
        <button><a href="cart.php" class="custom-button">Add to cart</a></button>
      </div>

      
      <div class="product-card">
        <img src="../images/flowerpot.jpg" alt="Hand made flowerpot" />
        <h3>Hand made Flowerpot</h3>
        <p>Hand made flowerpot.perfect for ewery home decerations</p>
        <br />
        <p class="price">$15.00</p>
        <button><a href="cart.php" class="custom-button">Add to cart</a></button>

      
      <div class="product-card">
        <img src="../images/clock.jpg" alt="Hand made Cloack" />
        <h3>Hand made Wooden clock</h3>
        <p>Perfect for organizing your home with a Hand made wooden clock.</p>
        <br />
        <p class="price">$22.00</p>
        <button><a href="cart.php" class="custom-button">Add to cart</a></button>
      </div>

      <div class="product-card">
        <img src="../images/pot.jpg" alt="srilankan handmade Pottery" />
        <h3>Hand made Pottery</h3>
        <p>Sri Lankan Handmade Pottery.usefull for hottels and homess</p>
        <br />
        <p class="price">$40.00</p>
        <button><a href="cart.php" class="custom-button">Add to cart</a></button>
      </div>
    </div>
  

    
    <footer>
      <p>&copy; 2024 Handmade Craft Shop</p>
    </footer>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
