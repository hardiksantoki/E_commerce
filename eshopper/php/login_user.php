<?php

require_once 'connection.php';


$email = $_POST['email'];
$pass = base64_encode($_POST['password']);

$query = "SELECT * FROM user WHERE email = '$email' AND password= '$pass'";
// $result = mysqli_query($connect, $query);


try {
    $result = $connect->query($query);

    $num = $result->rowCount();
    echo $num;
    // echo $row;
    if ($num) {
        $row = $result->fetch();
        if ($row['bit'] == '1') {
            header('Location: ../admin/home.php');
        } else {
            header('Location: ../index.php');
        }
    } else {
        header('Location: ../login.php');
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
