<?php

$server = 'localhost';
$username = 'root';
$password = '';

// $connect = mysqli_connect('localhost','root','','amazon');



try {
    $connect = new PDO("mysql:host=$servername;dbname=amazon", $username, $password);
    // set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }