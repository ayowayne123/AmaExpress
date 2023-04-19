<?php
  require_once("db.php");
//   echo($_SESSION["name"]);
  if(isset($_SESSION["name"]))
  {
    header("Location: index.php");
  }
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="login" />
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

    <title>Login - AmaExpress</title>
  </head>

  <body>
    <div class="loginpage">
      <img src="images/AmaLogoAlt.png" width="400" height="100" />

      <form action="auth.php" method="post">
        <div class="login_container">
          <label for="uname"><b>Username</b></label>
          <input
            type="text"
            placeholder="Enter Username"
            name="uname"
            required
          />

          <label for="password"><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="password"
            required
          />

          <button name="btn_login" type="submit">Login</button>
          <span>
            <input type="checkbox" checked="checked" name="remember" /> Remember
            me
          </span>

          <span>Don't have an account? <a href="signup.php">Sign Up</a></span>
        </div>
      </form>
    </div>
  </body>
</html>
