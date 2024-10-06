<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign Up Page</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css for home/navbar.css" />
  <link rel="stylesheet" type="text/css" href="css for home/body.css" />

  <style>
    .haha {
      width: 70%;
      /* container*/
      padding-top: 50px;
    }

    .btn-join {
      background-color: #ccaef3;
      /* Adjusting signup the button */
      color: #fff;
      float: right;
      color: black;
      font-family: Georgia;
    }

    .btn-join:hover {
      background-color: #b585ea;
      /* hovering effect of button */
    }
  </style>

  <?php include 'common style.php' ?>
</head>

<body>
  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'password_mismatch') {
      echo '<script type="text/javascript"> 
      alert("Passwords do not match!") 
      </script>';
    }
  }
  ?>

  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'username_exist') {
      echo '<script type="text/javascript"> 
      alert("This Username already exist!") 
      </script>';
    }
  }
  ?>

  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'first_signup') {
      echo '<script type="text/javascript"> 
      alert("You need to register first to access the quiz!") 
      </script>';
    }
  }
  ?>

  <?php include 'navbar.php' ?>

  <div class="container-fluid text-center">
    <div class="row">
      <div class="col">
        <div class="container haha">
          <h3 class="text-center" style="font-size: 48px; font-weight: bold; font-family: 'Lobster', cursive; color: #82368C;">Join Now</h3><br>
          <form action="signup_php.php" method="post">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Name" required /><br>
            </div>
            <div class="form-group">
              <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Username"
                required /><br>
            </div>
            <div class="form-group">
              <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Password"
                required /><br>
            </div>
            <div class="form-group">
              <input
                type="password"
                name="confirmPass"
                class="form-control"
                placeholder="Confirm Password"
                required /><br>
            </div>
            <button type="submit" name="signup" class="btn btn-join">Sign Up</button>
          </form>

        </div>
      </div>


      <div class="col">
        <div id="cartoon" class="container text-center">
          <img style="height: 500px;" src="images/cartoon.png" />
        </div>
      </div>
    </div>
  </div>
</body>

</html>