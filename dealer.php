<?php
session_start();
include("connection1.php");
include("deal_function.php");
$user_data = check_login($con);
?>







<!DOCTYPE html>
<html>
    <head>
        <title>SPILT - Lets Reformat The Earth</title>
        <link rel="shortcut icon" type="image" href="port.png">
        <link rel="stylesheet" href="dealer.css">
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
    color: black;
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
        <header id="showcase">
            
            <h1>Welcome To Split</h1>
            <h3>1 kg = Rs.5</h3>
            <p>What type of waste do you want?</p>
            <a href="dealer_weight.php" class="button">Bio-Degradable</a>
            <a href="non_bio_deal.php" class="button">Non Bio-Degradable</a>
            <a href="both_deal.php" class="button">Both Bio & Non-Bio</a>
          </header>
    </body>
    </html>
