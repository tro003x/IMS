<?php
include('conn.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `tb_product` WHERE p_id =" . $id ;
    $res = mysqli_query($conn, $query);
    if($res){
        header("Location: view.php");
        echo "Deleted Successfully";
        exit();
    }
    else{
        echo 'Error happened';
    }
}