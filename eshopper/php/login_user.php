<?php

require_once 'connection.php';


$email = $_POST['email'];
$pass = $_POST['password'];

$query = "SELECT * FROM user WHERE email = '$email' AND password= '$pass'";
$result = mysqli_query($connect, $query);

if ($result) {
    header('Location: ../index.html');
} else {
    echo 'error in login';
}
