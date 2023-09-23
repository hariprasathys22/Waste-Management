<?php
include('connection.php');
error_reporting(0);
$quantity = $_GET['quantity'];
$query = "DELETE FROM n_bio WHERE quantity = '$quantity'";
$data = mysqli_query($con, $query);
if($data){
    echo "Record was deleted From DATABASE";
}
else{
    echo "Failed to delete record";
}





?>