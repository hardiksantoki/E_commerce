<?php

require_once 'connection.php';

$name = $_POST['name'];
// $image = $_POST['image'];
$price = $_POST['price'];
$detail = $_POST['detail'];
$category = $_POST['category'];



// // Get file info 
// $fileName = basename($_FILES["image"]["name"]); 
// $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

// // Allow certain file formats 
// $allowTypes = array('jpg','png','jpeg'); 
// if(in_array($fileType, $allowTypes)){ 
//     $image = $_FILES['image']['tmp_name']; 
//     $imgContent = addslashes(file_get_contents($image));

// }



// $filename = $_FILES["image"]["name"];
// $tempname = $_FILES["image"]["tmp_name"];
// $folder = "../image/" . $filename;




//Process the image that is uploaded by the user

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

$image = basename($_FILES["image"]["name"], ".jpg"); // used to store the filename in a variable






$query = "INSERT INTO product (p_name,image,price,detail,flag) VALUES ('$name','$image','$price','$detail','$category')";


try {
    $result = $connect->query($query);
    header('Location: ../admin/home.php');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
