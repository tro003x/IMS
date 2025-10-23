<?php
$server = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'db_ims';


$conn = mysqli_connect(
    $server,
    $user,
    $pass,
    $db
);

if(mysqli_connect_error()){
    echo 'Connection Error' . mysqli_connect_error();
    exit();
}
else{
    return TRUE;
}