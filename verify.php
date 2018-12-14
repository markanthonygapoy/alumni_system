<?php
include "includes/constants.php";
session_start();
if(!isset($_SESSION["id_number"])){
    header("Location: index.php");
}else{
    header("Location: dashboard.php");
}


if(isset($_POST['signIn'])){
    $id_number = $_POST['idNumber'];
    $birthdate = $_POST['birthDate'];

    $sql = "SELECT * FROM users WHERE id_no = '$id_number' AND birth_date = '$birthdate'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['id_number'] = $id_number;
        header("Location: dashboard.php");
    } else {
        echo "Invalid ID Number or Birthdate!";
    }
    $conn->close();

}
?>