<?php

$connect = mysqli_connect("localhost", "root", "");

if($connect){
    echo "Connection Successfully";
} else{
    echo "Not Connection Successfully";
}

mysqli_select_db($connect, 'smplwebsite');


$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into contctfom (user, email, mobile, comment) values ('$user', '$email','$mobile','$comments')";

mysqli_query($connect, $query);

header('Location: index.php');
?>