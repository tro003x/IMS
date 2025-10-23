<?php
include('conn.php');

// Insert Product data

$sql_query = "INSERT INTO `tb_product`(`pdt_name`, `pdt_code`, `pdt_category`, `pdt_unit`, `pdt_cost`,`pdt_stock`) VALUES ('$_POST[name]','$_POST[code]','$_POST[cat]','$_POST[unit]','$_POST[cost]','$_POST[qty]')";

$result = mysqli_query($conn, $sql_query);

if($result === TRUE){
   header("Location: view.php");
   exit();
}
else{
    echo "Error" . mysqli_error($conn);
}