<?php
include "connection.php";
// echo "WORKING FINE"; 

$name=$price=$brand = "";

$name = $_POST["item_name"];
$price = $_POST["item_price"];
$brand = $_POST["item_brand"];

$query = " INSERT INTO myshop(id,item_name,item_price,item_brand,item_mfg) values(DEFAULT,'$name','$price','$brand',DEFAULT) ";

// echo ($query);

if(! mysqli_query($con,$query)){
    die("error: ".mysqli_error($con));
}
mysqli_close($con);

// include("home.php");