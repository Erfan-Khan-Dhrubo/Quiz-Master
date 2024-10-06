<?php
$conn = mysqli_connect("localhost", "root", "", "my_project");
session_start();


if (isset($_SESSION["admin"])) {
    header('Location: home.php?error=user_login');
    exit();
} else {
    if (isset($_POST['login'])) {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $sql = "SELECT *FROM `user_info` WHERE user_name='$uname'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) <= 0) {
            header('Location: loginForm.php?error=wrong_username');
            exit();
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($pass != $row['password']) {
                    header('Location: loginForm.php?error=password_wrong');
                    exit();
                } else {
                    session_start();
                    $_SESSION['common'] = "common";
                    $_SESSION['username'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['no'] = $row['no'];
                    header('Location: home.php');
                }
            }
        }
    }
}
