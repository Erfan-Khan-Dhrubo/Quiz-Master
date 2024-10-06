<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$nam = $_SESSION["username"];
$quiz_id = $_GET['id']; //quiz id (wpk)
$table_name = $_GET['table_name']; // quiz name
$conn = mysqli_connect("localhost", "root", "", "my_project");
$sql = "SELECT *FROM `$table_name` WHERE num = '$quiz_id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $jsonArray1 = $row['q1'];
    $arr1 = json_decode($jsonArray1, true); //convering to array
    $jsonArray2 = $row['q2'];
    $arr2 = json_decode($jsonArray2, true);
    $jsonArray3 = $row['q3'];
    $arr3 = json_decode($jsonArray3, true);
    $quiz_fk = $row['FK']; // fk of quiz form topic
    $quiz_ID = "$quiz_id" . "$quiz_fk";
    $quiz_ID = intval($quiz_ID); // converting to int
}

// Checking quiz is taken or not
$sql3 =  "SELECT `quiz_taken` FROM `user_info` WHERE user_name='$nam' ";
$results = mysqli_query($conn, $sql3);
while ($rows = mysqli_fetch_assoc($results)) {
    $jsonArray = $rows['quiz_taken'];
    $arr = json_decode($jsonArray, true);
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $quiz_ID) {
            header("Location: quiz number per subject.php?id=$table_name&message=alreay doned");
            exit();
        }
    }
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quizzz</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .option-label {
            /* option*/
            display: block;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 20px;
            font-family: Georgia;
        }

        .quiz-container {
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
            width: 60%;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            padding: 10px;
            border-bottom: 2px solid black;
            border-radius: 30px;
        }

        th {
            padding: 10px;
            border-bottom: 2px solid black;
        }

        .buttonStl {
            background-color: #ccaef3;
            /* Adjusting submit and confirm the button */
            color: #fff;
            padding-left: 5px;
            width: 100px;
            height: 50px;
            border-radius: 40px;
            color: black;
            padding-right: 10px;
            font-family: Georgia;
            float: right;

        }

        .buttonStl:hover {
            background-color: #b585ea;
            /* hovering effect of button */
        }

        .correct-answer {
            background-color: #FFE9EC;
            /* Highlight correct answers */
            font-weight: bold;
            border-radius: 30px;
        }
    </style>

    <?php include 'common style.php' ?>

</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="container-fluid quiz-container">



        <div class="row" style="padding-top: 50px;"> <!-- quiz id is weak pk -->
            <form id="quizForm" action="<?php echo "scoreUpdate_php.php?id=$quiz_id"; ?>" method="post">
                <input type="hidden" name="quiz_fk" value="<?php echo $quiz_fk; ?>"> <!--fk of quiz from topic -->


                <div class="row">
                    <table>
                        <tr>
                            <th style=" background-color: #ccaef3; border-radius: 30px; font-family: Georgia;">
                                <h3 class="text-center" style="padding-bottom: 15px; padding-top: 15px; margin-left: 20px;">Question 1: <?php echo $arr1[0] ?></h3>
                            </th>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques1" value="<?php echo $arr1[2][0] ?>" /> A) &nbsp; <?php echo $arr1[2][0] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques1" value="<?php echo $arr1[2][1] ?>" /> B) &nbsp; <?php echo $arr1[2][1] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques1" value="<?php echo $arr1[2][2] ?>" /> C) &nbsp; <?php echo $arr1[2][2] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques1" value="<?php echo $arr1[2][3] ?>" /> D) &nbsp; <?php echo $arr1[2][3] ?>
                                </label></td>
                        </tr>
                    </table>
                </div>


                <div class="row" style="padding-top: 80px;">
                    <table>
                        <tr>
                            <th style=" background-color: #ccaef3; border-radius: 30px; font-family: Georgia;">
                                <h3 class="text-center" style="padding-bottom: 15px; padding-top: 15px; margin-left: 20px;">Question 2: <?php echo $arr2[0] ?></h3>
                            </th>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques2" value="<?php echo $arr2[2][0] ?>" /> A) &nbsp; <?php echo $arr2[2][0] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques2" value="<?php echo $arr2[2][1] ?>" /> B) &nbsp; <?php echo $arr2[2][1] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques2" value="<?php echo $arr2[2][2] ?>" /> C) &nbsp; <?php echo $arr2[2][2] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques2" value="<?php echo $arr2[2][3] ?>" /> D) &nbsp; <?php echo $arr2[2][3] ?>
                                </label></td>
                        </tr>
                    </table>
                </div>



                <div class="row" style="padding-top: 80px;">
                    <table>
                        <tr>
                            <th style=" background-color: #ccaef3; border-radius: 30px; font-family: Georgia;">
                                <h3 class="text-center" style="padding-bottom: 15px; padding-top: 15px; margin-left: 20px;">Question 3: <?php echo $arr3[0] ?></h3>
                            </th>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques3" value="<?php echo $arr3[2][0] ?>" /> A) &nbsp; <?php echo $arr3[2][0] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques3" value="<?php echo $arr3[2][1] ?>" /> B) &nbsp; <?php echo $arr3[2][1] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques3" value="<?php echo $arr3[2][2] ?>" /> C) &nbsp; <?php echo $arr3[2][2] ?>
                                </label></td>
                        </tr>
                        <tr>
                            <td><label class="option-label">
                                    <input type="radio" name="ques3" value="<?php echo $arr3[2][3] ?>" /> D) &nbsp; <?php echo $arr3[2][3] ?>
                                </label></td>
                        </tr>
                    </table>
                </div>

                <div class="row" style="margin-top: 50px; margin-bottom: 60px;">
                    <span style="float: right;"><button type="button" class="buttonStl" id="submitBtn">Submit</button></span>
                    <span style="float: left;">
                        <div class="row" id="result" style="font-size: 20px; margin-bottom: 40px;"></div>
                    </span>
                    <span style="float: right"><button type="submit" name="confirm" class="buttonStl" id="confirmBtn" style="display: none; float: right;">Confirm</button></span>

                </div>



            </form>


        </div>



    </div>


    <?php include 'timer_scoring.php' ?>


</body>

</html>