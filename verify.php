<?php
session_start();
include "includes/constants.php";

if(isset($_POST['signIn'])){
    $id_number = $_POST['idNumber'];
    $birthdate = $_POST['birthDate'];

    $sql = "SELECT * FROM users WHERE id_no = '$id_number' AND birth_date = '$birthdate'";
    $result = $conn->query($sql);
    // echo $sql;
    // var_dump($result);
    if ($result->num_rows > 0) {
        $_SESSION['id_number'] = $id_number;
        header("Location: dashboard.php");
    } else {
        header("Location: index.php?error=1");
    }
    $conn->close();

}
?>