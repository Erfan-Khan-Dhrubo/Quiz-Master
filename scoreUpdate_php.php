<?php
if (isset($_POST['confirm'])) {
    if (isset($_GET['id'])) {
        $score = $_POST['score']; //quiz mark
        $quiz_fk = $_POST['quiz_fk']; //fk of quiz from topic
        session_start();
        $uname = $_SESSION["username"];
        $num = $_GET['id']; // weak pk of quiz
        $num = "$num" . "$quiz_fk";
        $num = intval($num);
        $conn = mysqli_connect("localhost", "root", "", "my_project");
    }




    $sql2 =  "SELECT  * FROM `user_info` WHERE user_name='$uname' ";
    $sql3 =  "SELECT  * FROM `scoreboard` WHERE user_name='$uname' ";
    $result = mysqli_query($conn, $sql2);
    while ($row = mysqli_fetch_assoc($result)) { // updating the quiz taken
        $jsonArray = $row['quiz_taken'];
        $arr = json_decode($jsonArray, true);
        array_push($arr, $num);
        $jsonArray = json_encode($arr);
        $sql = "UPDATE `user_info` SET `quiz_taken`='$jsonArray' WHERE user_name='$uname'";
        if (mysqli_query($conn, $sql)) {
            $result2 = mysqli_query($conn, $sql3);
            while ($row = mysqli_fetch_assoc($result2)) { //updating the score
                $point = $row['score'];
                $point += $score;
                $sql4 = "UPDATE `scoreboard` SET `score`='$point' WHERE user_name='$uname'";
                if (mysqli_query($conn, $sql4)) {
                    header("Location: scoreboard.php");
                }
            }
        }
    }
}
