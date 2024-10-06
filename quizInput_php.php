<?php
$conn = mysqli_connect("localhost", "root", "", "my_project");

if (isset($_POST['submit'])) {
    $question1 = $_POST['question1'];
    $question1_op1 = $_POST['question1_op1'];
    $question1_op2 = $_POST['question1_op2'];
    $question1_op3 = $_POST['question1_op3'];
    $question1_op4 = $_POST['question1_op4'];
    $question1_ans = $_POST['question1_ans'];
    $serial_no = $_POST['serial_no']; // PK of quiz table
    $table_name = $_GET['id']; // Name of the quiz table

    $arr1 = array(
        "$question1",
        "$question1_ans",
        array("$question1_op1", "$question1_op2", "$question1_op3", "$question1_op4")
    );
    $jsonArray1 = json_encode($arr1);



    $question2 = $_POST['question2'];
    $question2_op1 = $_POST['question2_op1'];
    $question2_op2 = $_POST['question2_op2'];
    $question2_op3 = $_POST['question2_op3'];
    $question2_op4 = $_POST['question2_op4'];
    $question2_ans = $_POST['question2_ans'];

    $arr2 = array(
        "$question2",
        "$question2_ans",
        array("$question2_op1", "$question2_op2", "$question2_op3", "$question2_op4")
    );
    $jsonArray2 = json_encode($arr2);



    $question3 = $_POST['question3'];
    $question3_op1 = $_POST['question3_op1'];
    $question3_op2 = $_POST['question3_op2'];
    $question3_op3 = $_POST['question3_op3'];
    $question3_op4 = $_POST['question3_op4'];
    $question3_ans = $_POST['question3_ans'];

    $arr3 = array(
        "$question3",
        "$question3_ans",
        array("$question3_op1", "$question3_op2", "$question3_op3", "$question3_op4")
    );
    $jsonArray3 = json_encode($arr3);

    $sql = "INSERT INTO `$table_name`(`FK`, `q1`, `q2`, `q3`) VALUES ('$serial_no', '$jsonArray1','$jsonArray2','$jsonArray3')";
    if (mysqli_query($conn, $sql)) {
        header("Location: home.php?error=done");
    }
}
