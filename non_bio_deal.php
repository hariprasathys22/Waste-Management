<?php
session_start();
include("connection1.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $quantity = $_POST['quantity'];
    $uname = $_POST['uname'];
    $address = $_POST['address'];
    
   $sql = "INSERT INTO d_non (quantity, uname, address) values('$quantity', '$uname', '$address') ";
   if ($con->query($sql) === TRUE) {
    header("Location: payment.html");
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
        <link rel="stylesheet" href="non_bio_deal.css">
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        <script src="non_bio_deal.css"></script>
    </head>

    <body>
<style>
.navbar
{
    width: 85%;
    margin: auto;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 100px;
    cursor: pointer;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbar ul li a{
    text-decoration: none;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
}
.navbar ul li a.active{
    background:#009688;
    border-radius: 2px;
    padding: 10px;
}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after{
    width: 100%;
}
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
                <li><a href="d_logout.php">Log Out</a></li>
            
            </ul>
        </div>
        <form action="" name="d_non" method="POST">
        <header id="showcase">
            <h1>Non Bio-Degradable Waste</h1>
            <label for = "">Name</label>
            <input type="text" name = "uname" class="name" placeholder = "your name" required>
            <p>How much do you want?</p>
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