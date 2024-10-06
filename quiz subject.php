<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quiz type</title>
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


    <?php include 'common style.php' ?>

</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col">
                <div class="container text-center">
                    <div class="centered-text">


                        <h1 class="header-title">Choose your topic !</h1>


                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "my_project");
                        $sql = "SELECT * FROM quiz";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>

                            <div style="padding-top: 50px;"> <!-- Sending the quiz name -->
                                <a href="quiz number per subject.php?id=<?php echo $row['name']; ?>" class="btn btn-signup btn-lg">
                                    <?php echo strtoupper($row['name']); ?> Quiz >
                                </a>
                            </div>


                        <?php
                        }
                        ?>


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