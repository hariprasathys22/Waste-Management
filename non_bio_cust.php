<?php



session_start();
include('connection.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $quantity = $_POST['quantity'];
    $uname = $_POST['uname'];
    $address = $_POST['address'];
    
   $sql = "INSERT INTO n_bio (quantity, uname, address) values('$quantity', '$uname', '$address') ";
   if ($con->query($sql) === TRUE) {
    header("Location: n_bio.php");
}else{
    echo "<script>alert('Your order not placed.. Try again after sometimes')</script>";
}

}




?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SPILT - Non bio Waste</title>
        <link rel="shortcut icon" type="image" href="port.png">
        <link rel="stylesheet" href="non_bio_cust.css">
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        <script src="weight.js"></script>
    </head>

    <body>
    <style>
         input{
             width: 120px;
             margin-left: 50px;
         }
    input[type="text"]{
    border: none;
    padding-right: 20px;
    border-bottom: 2px solid #fff;
    height: 40px;
    font-weight: bold;
    background: transparent;
    outline: none;
    color: #fff;
    font-size: 16px;
}
.address input{
    width: 190px;
    margin-left: 140px;

    
}
.address{
    padding-right: 100px;
}
#showcase{
    font-weight: bold;
}
    </style>
        <div class="navbar">
            <img src="port.png" class="logo" >
                <ul>
                    <li><a href="minato.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                
                </ul>
        </div>
        <form action=""  name="n_bio" method="POST"> 
        <header id="showcase">
            <h1>Non Bio-Degradable Waste</h1>
            
            <label for = "">Name</label>
            <input type="text" name = "uname" class="name" placeholder = "your name" required>
            <p>How much do you have?</p>
            <label for="">QUANTITY (kg.)</label>
            <input type="text" class="weight" name="quantity" placeholder="in kg">
            <label for="">ADDRESS</label>
            <div class="address">
                <input type="text" name = "address"  placeholder="link or address" required>
            </div>  
            <button class="btn">SUBMIT</button>
            
        </header>
        </form>
    </body>    
</html>