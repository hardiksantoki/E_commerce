<?php

require_once 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$pass = base64_encode($_POST['pass']);
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];


$query = "INSERT INTO user (name,email,password,mobile,gender) VALUES ('$name','$email','$pass','$mobile','$gender')";

try{
$result = $connect->query($query);
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

if ($result) {
    header('Location: ../index.html');
} else {
    echo 'error in registration';
}
