<?php
// Connect to the database
require_once("db.php");




// Redirect the user to the order confirmation page
header("Location: order_confirmation.php");
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="A thriving new online store that rivals AliExpress "
    />
    <meta name="keywords" content="webstore, Amaexpress Store" />
    <meta name="robots" content="index,follow" />

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-store" />
    <meta http-equiv="expires" content="-1" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <base href="AmaExpress" />
    <script src="cgpacalculator.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="icon" href="images/AmaIcon.ico" />
    <title>Product details - AmaExpress</title>
  </head>

  <body>
   <?php if(!(isset($_SESSION["name"]))): ?>
        <span class="topbar"> 
            <a class='logout' href="login.php">Login</a>
            <a class='logout' href="signup.php">Signup</a>
        </span>
      <?php endif ?>
      <?php if(isset($_SESSION["name"])): ?>
    <span class="topbar"> Welcome, <?php echo $_SESSION['name'] ?> 
    <a class='logout' href="logout.php">log out</a>
      <a class='cartbtn' href="cart.php">Cart</a>
    </span>
     <?php endif ?>
    
    <nav class="navbar">
      <span class="navlogo">
        <img src="images/AmaLogo.png" alt="Amaexpress logo" width="250" />
      </span>
      <ul class="navitems">
        <li><a href="index.php">Home</a></li>
        <li><a  class="active" href="products.php">All products</a></li>
        <li><a href="previous-purchase.php">Previous Purchases</a></li>
        <li><a  href="about.html">About</a></li>
      </ul>

      <span>
        <form method="GET" action="search.php">
        <input
          type="text"
          id="searchbar"
          name="q"
          placeholder="Search all products"
          title="Search products"
        />
       
        </form>
      </span>
    </nav>
    <div class="checkout-container">
  <h1>Checkout</h1>
  <form action=" " method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="card-number">Card Number:</label>
    <input type="text" id="card-number" name="card-number" required>
    <br>
    <label for="expiry-date">Expiry Date:</label>
    <input type="month" id="expiry-date" name="expiry-date" required>
    <br>
    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" required>
    <br>
    <input type="submit" value="Place Order">
  </form>
</div>
    
    
  </body>
</html>
    