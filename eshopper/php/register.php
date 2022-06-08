<?php

require_once 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pass = base64_encode($_POST['pass']);
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];


$query = "SELECT * FROM user WHERE email = '$email'";

$resultcheck = $connect->query($query);

$num = $resultcheck->rowCount();

if ($num) {
    header('Location: ../registration.php');
} else {

    $query = "INSERT INTO user (name,email,password,mobile,gender) VALUES ('$name','$email','$pass','$mobile','$gender')";

    try {
        $result = $connect->query($query);
        // header('Location: ../login.php');
        if ($result) {
            header('Location: ../login.php');
        } else {
            echo 'error in registration';
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}
