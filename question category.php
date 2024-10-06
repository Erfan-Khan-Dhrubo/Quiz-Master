<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Question type</title>
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
        .btn-quiz {
            background-color: #ccaef3;
            /* Adjusting add button the button */
            color: #fff;
            padding-left: 5px;
            width: 120px;
            color: black;
            padding-right: 10px;
            font-family: Georgia;

        }

        .btn-quiz:hover {
            background-color: #b585ea;
            /* hovering effect of button */
        }
    </style>

    <?php include 'common style.php' ?>

</head>

<body>

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'already') {
            echo '<script type="text/javascript"> 
      alert("This Topic already exit!") 
      </script>';
        }
    }
    ?>

    <?php include 'navbar.php' ?>

    <div style="padding-bottom:50px;" class="container-fluid text-center">
        <div class="row">
            <div class="col">
                <div class="container text-center">
                    <div class="centered-text">


                        <h1 class="header-title">On which subject would you like to create a question?</h1>


                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "my_project");
                        $sql = "SELECT * FROM quiz";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>

                            <div style="padding-top: 50px;"> <!-- passing quiz name and pk -->
                                <a href="quizInputForm.php?id=<?php echo $row['name']; ?>&serial_no=<?php echo $row['serial_no']; ?>" class="btn btn-signup btn-lg">
                                    <?php echo strtoupper($row['name']); ?> Quiz >
                                </a>
                            </div>


                        <?php
                        }
                        ?>


                        <form action="add quiz_php.php" method="post">

                            <div style="padding-top: 60px; padding-bottom:20px; float: left;">
                                <h3 style="font-family: Georgia; color: #82368c; font-size: 30px;">Do you want to more topic !</h3>
                            </div>

                            <div class="form-group">
                                <input
                                    type="text"
                                    name="new_topic"
                                    class="form-control"
                                    placeholder="New Topic Name"
                                    required /><br>
                            </div>

                            <div style="float:right;">
                                <button type="submit" name="add" class="btn btn-quiz ">Add Topic</button>
                            </div>

                        </form>


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