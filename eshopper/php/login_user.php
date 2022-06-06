<?php

require_once 'connection.php';


$email = $_POST['email'];
$pass = base64_encode($_POST['password']);

$query = "SELECT * FROM user WHERE email = '$email' AND password= '$pass'";
// $result = mysqli_query($connect, $query);


try{
    $result = $connect->query($query);
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

if ($result) {
    header('Location: ../index.html');
} else {
    echo 'error in login';
}
