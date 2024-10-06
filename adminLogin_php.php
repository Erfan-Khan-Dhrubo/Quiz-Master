<?php
$conn = mysqli_connect("localhost", "root", "", "my_project");
session_start();

if (isset($_SESSION["no"])) {
    header('Location: home.php?error=user_login');
    exit();
} elseif (isset($_SESSION["admin"])) {
    header('Location: home.php?error=admin_login');
    exit();
} else {
    if (isset($_POST['login'])) {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        if ($uname != "admin") {
            header('Location: adminLogin.php?error=user_name');
            exit();
        } else {
            if ($pass != "1234") {
                header('Location:  adminLogin.php?error=password_wrong');
                exit();
            } else {
                session_start();
                $_SESSION['admin'] = "admin";
                $_SESSION['common'] = "common";
                header('Location: home.php');
            }
        }
    }
}
