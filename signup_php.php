<?php
$conn = mysqli_connect("localhost", "root", "", "my_project");
session_start();

if (isset($_SESSION["admin"])) {
    header('Location: home.php?error=user_login');
    exit();
} else {
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $user_name = $_POST['username'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPass'];
        if ($password != $confirmPass) {
            header('Location: signupForm.php?error=password_mismatch');
            exit();
        } else {
            $sql = "SELECT *FROM `user_info` WHERE user_name='$user_name'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                header('Location: signupForm.php?error=username_exist');
                exit();
            } else {
                $arr = array();
                $jsonArray = json_encode($arr); //converting JSON format string 
                $sql2 = "INSERT INTO `user_info`(`name`, `user_name`, `password`, `confirm pass`, `quiz_taken`) VALUES ('$name','$user_name','$password','$confirmPass', '$jsonArray')";
                $sql3 = "INSERT INTO `scoreboard`(`name`, `user_name`, `score`) VALUES ('$name','$user_name','0')";
                if (mysqli_query($conn, $sql2)) {
                    if (mysqli_query($conn, $sql3)) {

                        $_SESSION['no'] = "abc";
                        $_SESSION['common'] = "common";
                        $_SESSION['username'] = $user_name;
                        $_SESSION['name'] = $name;

                        header('Location: home.php');
                    }
                }
            }
        }
    }
}
