<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Mobile responsive -->
  <title>Home Page</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>



  <?php include 'common style.php' ?> <!-- linking to style sheet */ -->


</head>

<body>
  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'user_login') {
      echo '<script type="text/javascript"> 
      alert("Logout as user first!") 
      </script>';
    }
  }
  ?>

  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'admin_login') {
      echo '<script type="text/javascript"> 
      alert("Already Login!") 
      </script>';
    }
  }
  ?>

  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'admin') {
      echo '<script type="text/javascript"> 
      alert("Logout as admin first!") 
      </script>';
    }
  }
  ?>

  <?php include 'navbar.php' ?> <!-- linking to navbar -->

  <div class="container-fluid text-center">
    <div class="row">
      <div class="col">
        <div class="container text-center">
          <div class="centered-text">

            <?php
            if (isset($_SESSION['no'])) {
              $nam = strtoupper($_SESSION['name']);
              echo '<h1 style="font-family: Georgia; color: #82368c;">Hi &nbsp;' . $nam . '</h1><br>'; ?>
              <a href="quiz subject.php" class="btn btn-signup btn-lg">
                Let's Take a Quiz >
              </a>
              <?php
            } else if (isset($_SESSION['admin'])) {
              if (isset($_GET['error']) && $_GET['error'] == 'done') { ?>
                <h1 class="header-title">Your question has been successfully added!</h1>
              <?php

              } else { ?>
                <h1 class="header-title">Welcome Admin!</h1>
              <?php
              }   ?>
              <a href="question category.php" class="btn btn-signup btn-lg">
                Cleck here to add Quiz > </a>


            <?php
            } else {  ?>
              <h1 class="header-title">Quiz Yourself! Rise to the Top!</h1>
              <p class="header-subtitle">
                Participate in our online quizzes and climb the ranks based on
                your points. Challenge yourself and see how high you can go!
              </p>
              <a href="signupForm.php" class="btn btn-signup btn-lg">
                Join Now For FREE >
              </a>
            <?php
            } ?>
          </div>
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