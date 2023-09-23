<?php
session_start();
include("connection2.php");
include("tran_function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
      $fname =$_POST['fname'];
      $uname =$_POST['uname'];
      $email =$_POST['email'];
      $p_no =$_POST['p_no'];
      $pas1 =$_POST['pas1'];
      $pas2 =$_POST['pas2'];
      $gender =$_POST['gender'];
      if(!empty($email) && !empty($pas1))
      {
          $query = "SELECT * FROM transports WHERE email = '$email' limit 1";
          $result = mysqli_query($con, $query);  
          if($result)
          {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['pas1']=== $pas1)
                {
                    $_SESSION['email'] = $user_data['email'];
                    header("Location: t_wel.php");
                    die;
                }
            }
          }
          echo "<script>alert('mail id or password is wrong')</script>";
          
        }else{
        echo "please enter some valid information!";
      }

}


?>









<!DOCTYPE html>
<html>
    <head>
        <title>SPILT - Transport Login</title>
        <link rel="shortcut icon" type="image" href="port.png">
        <link rel="stylesheet" href="transport_login.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src = "https://kit.fontawesome.com/c8e4d183c2.js" 
                 crossorigin="anonymous"> 
        </script>
    </head>
    <body>
        <style>
            .loginbox{
                height: 420px;
            }

            </style>
        <div class="navbar">
            <img src="port.png" class="logo" >
            <ul>
                <li><a href="minato.html">Home</a></li>
                <li><a class="active" href="login.html">Login</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
               
                <li><a href="contact.html">Contact</a></li>
            
            </ul>
        </div>    
        <div class="loginbox">
            <img src="s.png" class="avatar">
            <h1>Login Here</h1>
            <form action="" name="transport" method="POST">
                <p>Login ID</p>
                <input type = "text" name="email" placeholder="Enter ID">
                <p>Password</p>
                <input type="password" name="pas1" placeholder="Enter Password">
                <input type="submit" name="submit" value="Login">
                <a href="#">Forgot Password?</a><br>
                <a href="transport_register.php">Don't have an account?</a>
                
            </form>
        </div>
    </body>