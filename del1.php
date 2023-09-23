<?php
include('connection.php');
error_reporting(0);
$quantity = $_GET['quantity'];
$query = "DELETE FROM b_c WHERE quantity = '$quantity'";
$data = mysqli_query($con, $query);
if($data){
    echo "Record was deleted From DATABASE";
}
else{
    echo "Failed to delete record";
}





?>