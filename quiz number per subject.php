<!DOCTYPE html>
<html lang="en">
<?php session_start();
if (isset($_SESSION["no"])) {
    $nam = $_SESSION["username"];
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Number of Quiz</title>
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

        .quiz-link {
            color: #333;
            text-decoration: none;
            font-family: Arial;
        }

        .quiz-link:hover {
            text-decoration: underline;
        }

        .taken_quiz {
            color: #333;
            font-size: 20px;
            text-decoration: none;
            font-family: Georgia;
            font-weight: bold;
        }
    </style>

    <?php include 'common style.php' ?>

</head>

<body>

    <?php
    if (isset($_GET['message'])) {
        echo '<script type="text/javascript"> 
      alert("You’ve already taken this quiz !") 
      </script>';
    }
    ?>

    <?php include 'navbar.php' ?>


    <div class="container-fluid text-center">
        <div class="row" style="width: 60%; margin: auto; margin-top: 50px;">
            <?php
            if (isset($_SESSION['no'])) {
                if (isset($_GET['id'])) { // here id is name of quiz
                    $table_name = $_GET['id'];
                    $conn = mysqli_connect("localhost", "root", "", "my_project");
                    $sql = "SELECT * FROM `$table_name`";
                    $result = mysqli_query($conn, $sql); ?>


                    <table>
                        <tr>
                            <th style="background-color: #ccaef3; font-weight: bold; border-radius: 30px; font-size: 30px; font-family: Georgia;">Quiz</th>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $quiz_id = $row["num"]; //weak primary key
                            $quiz_fk = $row['FK']; // fk from quiz table
                            $quiz_id = "$quiz_id" . "$quiz_fk";
                            $quiz_id = intval($quiz_id); //converting to int
                            $sql3 = "SELECT `quiz_taken` FROM `user_info` WHERE user_name='$nam'";
                            $results = mysqli_query($conn, $sql3);
                            while ($rows = mysqli_fetch_assoc($results)) {
                                $jsonArray = $rows['quiz_taken'];
                                $arr = json_decode($jsonArray, true);
                                $found = false; // Flag to track if a match is found
                                for ($i = 0; $i < count($arr); $i++) {
                                    if ($arr[$i] == $quiz_id) { // sending quiz id (wpk) and topic name
                                        echo "<tr>";
                                        echo "<td><a class='quiz-link taken_quiz' href='quiz.php?id=" . $row["num"] . "&table_name=" . $table_name . "'>Quiz Id no: " . $row["num"] . "</a></td>";
                                        echo "</tr>";
                                        $found = true; // Set flag to true if a match is found
                                        break; // Exit the loop once a match is found
                                    }
                                }
                                if (!$found) {
                                    echo "<tr>";
                                    echo "<td><a class='quiz-link' href='quiz.php?id=" . $row["num"] . "&table_name=" . $table_name . "'>Quiz Id no: " . $row["num"] . "</a></td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        ?>
                    </table>
                <?php
                }
            } else {
                if (isset($_SESSION['admin'])) { ?>
                    <h1 class="header-title">You can not take the quiz as an admin.</h1>
                <?php
                } else { ?>
                    <h1 class="header-title"><a style="color: black;" href="loginForm.php">Login</a> as a user to see and take the Quiz.</h1>
            <?php
                }
            }
            ?>



        </div>
    </div>

    </div>
</body>

</html>