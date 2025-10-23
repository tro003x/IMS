<?php

include('conn.php');

// Update item data

if(isset($_POST['id']) && !empty($_POST['id'])){
    
    $id = $_POST['id'];

    $sql_query = "UPDATE `tb_product` SET `pdt_name`='$_POST[name]',`pdt_code`='$_POST[code]',`pdt_category`='$_POST[cat]',`pdt_cost`='$_POST[cost]',`pdt_stock`='$_POST[qty]' WHERE `p_id`=" .$id;


    echo $sql_query;

    $result = mysqli_query($conn, $sql_query);

    if($result === TRUE){
    header("Location: view.php");

    }
    else{
    mysqli_close($conn);
    }
}
else{
    echo 'Error happend';
}