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

    <title>Signup - AmaExpress</title>
  </head>

  <body>
    <div class="signuppage">
      <img src="images/AmaLogoAlt.png" width="400" height="100" />

      <form action="auth.php" method="post">
         <div class="signup_container">
          <div class="halfs">
            <span>
              <label for="fname"><b>First Name</b></label>
              <input
                type="text"
                placeholder="Enter your First name"
                name="fname"
                required
              />
            </span>

            <span>
              <label for="surname"><b>Surname</b></label>
              <input
                type="text"
                placeholder="Enter your surname"
                name="surname"
                required
              />
            </span>
          </div>

          <div class="halfs">
            <span>
              <label for="email"><b>Email Address</b></label>
              <input
                type="text"
                placeholder="youremail@email.com"
                name="email"
                required
              />
            </span>

            <span>
              <label for="number"><b>Telephone Number</b></label>
              <input
                type="text"
                placeholder="0548-xxx-xxxx"
                name="number"
                required
              />
            </span>
          </div>

          <div class="halfs">
            <span>
              <label for="uname"><b>Username</b></label>
              <input
                type="text"
                placeholder="Enter Username"
                name="uname"
                required
              />
            </span>

            <span>
              <label for="password"><b>Password</b></label>
              <input
                type="password"
                placeholder="Enter Password"
                name="password"
                required
              />
            </span>
          </div>
          <label for="address"><b>Address</b></label>
          <input
            type="text"
            placeholder="123, xxxx street, xxxx"
            name="address"
            required
          />
          <div></div>

          <button name="btn_signup" type="submit">Create Account</button>

          <span>Already have an account? <a href="login.php">Login</a></span>
        </div>
      </form>
    </div>
  </body>
</html>
