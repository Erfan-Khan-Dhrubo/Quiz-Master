<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Log In Page</title>
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
            /* container */
            width: 70%;
            padding-top: 50px;
        }

        .btn-join {
            background-color: #ccaef3;
            /* Adjusting login the button */
            color: #fff;
            float: right;
            color: black;
            font-family: Georgia;
        }

        .btn-join:hover {
            background-color: #b585ea;
            /* hovering effect of button */
        }

        .link:hover {
            /* below link of signin */
            color: black;
        }

        .link {
            color: #82368C;
        }
    </style>
    <?php include 'common style.php' ?>
</head>

<body>

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'wrong_username') {
            echo '<script type="text/javascript"> 
      alert("This Username do not exist!") 
      </script>';
        }
    }
    ?>


    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'password_wrong') {
            echo '<script type="text/javascript"> 
      alert("Password Wrong!") 
      </script>';
        }
    }
    ?>

    <?php include 'navbar.php' ?>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col">
                <div class="container haha">
                    <h3 class="text-center" style="font-size: 48px; font-weight: bold; font-family: 'Lobster', cursive; color: #82368C;">Log In</h3><br>


                    <form action="login_php.php" method="post">
                        <div class="form-group">
                            <input
                                type="text"
                                name="uname"
                                class="form-control"
                                placeholder="Username"
                                required /><br>
                        </div>
                        <div class="form-group">
                            <input
                                type="password"
                                name="pass"
                                class="form-control"
                                placeholder="Password"
                                required /><br>
                        </div>
                        <button type="submit" name="login" class="btn btn-join">Log In</button><br><br>

                    </form>

                    <p class="text-center mt-3" style="font-family: Georgia; color: #82368C;">
                        Don't Have an Account? &nbsp;<a href="signupForm.php" class="link">Sign Up Here</a>
                    </p>

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