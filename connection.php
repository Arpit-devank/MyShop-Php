<?php
// database creditional
$server="localhost";
$user = "root";
$pwd = "";
$db = "grocerydb";

// connection to database
$con = mysqli_connect($server,$user,$pwd,$db);

// checking connection
if(! $con){
    die("error ".mysqli_connect_error());
}
// echo "dataabse connected succesfully";

// query to get all items
//$query = "SELECT * FROM myshop";

// storing result from completed query
//$result = mysqli_query($con,$query);

?>
