<?php
$conn = mysqli_connect("localhost", "root", "", database: "my_project");
if (isset($_POST['add'])) {
    $new_topic = $_POST['new_topic'];
    $sql = "SELECT *FROM `quiz` WHERE name='$new_topic'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header("Location: question category.php?error=already");
        exit();
    } else {
        $sql2 = "INSERT INTO `quiz`(`name`) VALUES ('$new_topic')";
        if ($results = mysqli_query($conn, $sql2)) {
            $sql4 = "CREATE TABLE $new_topic (FK INT(100), num INT(100) AUTO_INCREMENT, q1 VARCHAR(256), q2 VARCHAR(256), q3 VARCHAR(256), PRIMARY KEY (num))";
            if ($result4 = mysqli_query($conn, $sql4)) {
                header("Location: question category.php");
            }
        }
    }
}
