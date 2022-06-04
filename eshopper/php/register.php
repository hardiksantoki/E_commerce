<?php

require_once 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];


$query = "INSERT INTO user (name,email,password,mobile,gender) VALUES ('$name','$email','$pass','$mobile','$gender')";

$result = mysqli_query($connect, $query);

if ($result) {
    header('Location: ../index.html');
} else {
    echo 'error in registration';
}
