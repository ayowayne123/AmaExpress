<?php
  require_once("db.php");
//   if(!(isset($_SESSION["name"])))
//   {
//     header("Location: login.php");
//   }
   $result = $conn->query("SELECT * FROM products ORDER BY added_on DESC LIMIT 4");

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
    <title>AmaExpress</title>
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
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="products.php">All products</a></li>
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
        <i
          class="fa fa-fw fa-search"
          style="font-size: 20px; color: #ff5757"
        ></i>
        </form>
      </span>
    </nav>

    <div class="heromain">
      <span class="herotext">
        Buy Amazing Products on AmaExpress
        <a class="buy" href="products.html">Buy now ➟ </a>
      </span>

      <img src="images/Hero.png" alt="Phones" width="500" />
    </div>
    
    <div class='prodlist'> 
    <header > Newest Products</header>
    <div class="card">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
     <div class="cardinfo">
  <img src="images/default.jpg" alt="product" width=150>
  <div class="deets">
    <h4><b><?php echo $row ['name']; ?></b></h4>
    <p><?php echo $row ['price']; ?>tl</p>
     <a class="prodlink" href="product.php?id=<?php echo $row['id']; ?>">view product</a>
  </div>
 
  </div>
   <?php } ?>
  </div>
</div>
  </body>
</html>
