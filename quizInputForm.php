<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quiz making</title>
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
        .partStyle {
            /* giving space to start the form*/
            margin-top: 70px;
        }

        .btn-quiz {
            background-color: #ccaef3;
            /* Adjusting submit the button */
            color: #fff;
            padding-left: 5px;
            width: 80px;
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
    if (isset($_GET["id"])) {
        $table_name = $_GET["id"]; // here id is subject name and serial number is pk of quiz table
        $serial_no = $_GET["serial_no"];
    }
    ?>

    <?php include 'navbar.php' ?>


    <div class="container-fluid text-center">
        <form action="quizInput_php.php?id=<?php echo $table_name; ?>" method="post">
            <input type="hidden" name="serial_no" value="<?php echo $serial_no; ?>"> <!-- storing the pk as hidden value -->

            <div class="row partStyle">
                <h1 style="font-family: Georgia; color: #82368c;">Question 1</h1>
                <div class="col">
                    <div class="container text-center">
                        <div class="centered-text">
                            <div class="form-group">
                                <textarea rows="5" name="question1" class="form-control" placeholder="Question" required></textarea><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question1_ans"
                                    class="form-control"
                                    placeholder="Answer"
                                    required /><br>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container text-center">
                        <div class="centered-text" style="float:left">
                            <!-- <form action="signup_php.php" method="post"> -->
                            <div class="form-group">
                                <input type="text" name="question1_op1" class="form-control" placeholder="Option 1" required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question1_op2"
                                    class="form-control"
                                    placeholder="Option 2"
                                    required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question1_op3"
                                    class="form-control"
                                    placeholder="Option 3"
                                    required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question1_op4"
                                    class="form-control"
                                    placeholder="Option 4"
                                    required /><br>
                            </div>
                            <!-- <button type="submit" name="signup" class="btn btn-join">Sign Up</button> -->
                            <!-- </form> -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="row partStyle">
                <h1 style="font-family: Georgia; color: #82368c;">Question 2</h1>

                <div class="col">
                    <div class="container text-center">
                        <div class="centered-text">
                            <div class="form-group">
                                <textarea rows="5" name="question2" class="form-control" placeholder="Question" required></textarea><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question2_ans"
                                    class="form-control"
                                    placeholder="Answer"
                                    required /><br>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container text-center">
                        <div class="centered-text" style="float:left">
                            <!-- <form action="signup_php.php" method="post"> -->
                            <div class="form-group">
                                <input type="text" name="question2_op1" class="form-control" placeholder="Option 1" required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question2_op2"
                                    class="form-control"
                                    placeholder="Option 2"
                                    required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question2_op3"
                                    class="form-control"
                                    placeholder="Option 3"
                                    required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question2_op4"
                                    class="form-control"
                                    placeholder="Option 4"
                                    required /><br>
                            </div>
                            <!-- <button type="submit" name="signup" class="btn btn-join" style="background-color:blueviolet">Sign Up</button> -->
                            <!-- </form> -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="row partStyle">
                <h1 style="font-family: Georgia; color: #82368c;">Question 3</h1>

                <div class="col">
                    <div class="container text-center">
                        <div class="centered-text">
                            <div class="form-group">
                                <textarea rows="5" name="question3" class="form-control" placeholder="Question" required></textarea><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question3_ans"
                                    class="form-control"
                                    placeholder="Answer"
                                    required /><br>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container text-center">
                        <div class="centered-text" style="float:left">
                            <!-- <form action="signup_php.php" method="post"> -->
                            <div class="form-group">
                                <input type="text" name="question3_op1" class="form-control" placeholder="Option 1" required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question3_op2"
                                    class="form-control"
                                    placeholder="Option 2"
                                    required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question3_op3"
                                    class="form-control"
                                    placeholder="Option 3"
                                    required /><br>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    name="question3_op4"
                                    class="form-control"
                                    placeholder="Option 4"
                                    required /><br>
                            </div>
                            <!-- <button type="submit" name="signup" class="btn btn-join" style="background-color:blueviolet">Sign Up</button> -->
                            <!-- </form> -->

                        </div>
                    </div>
                </div>
            </div>



            <div class="row" style="margin-top: 70px; margin-bottom: 100px; float: right; width: 26%;">
                <button type="submit" name="submit" class="btn btn-quiz btn-lg">Submit</button>
            </div>

        </form>
    </div>

</body>

</html>