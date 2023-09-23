<?php
session_start();
include("connection.php");
include("cus_function.php");

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
          $query = "SELECT * FROM register WHERE email = '$email' limit 1";
          $result = mysqli_query($con, $query);  
          if($result)
          {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['pas1']=== $pas1)
                {
                    $_SESSION['email'] = $user_data['email'];
                    header("Location: Welcome.php");
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
        <title>SPILT - Customer Login</title>
        <link rel="shortcut icon" type="image" href="port.png">
        <link rel="stylesheet" href="cus login.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src = "https://kit.fontawesome.com/c8e4d183c2.js" 
                 crossorigin="anonymous"> 
        </script>
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
    color: #fff;
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
.loginbox{
    height: 420px;
    top: 55%;
    padding: 90px 30px;
}
    
    
    </style>
        <div class="wrapper">
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
            <form name="loginform" action="" method="POST">
                <p>Login ID</p>
                <input type = "text" name="email" placeholder="Enter ID" required>
                <p>Password</p>
                <input type="password" name="pas1" placeholder="Enter Password" required>
                <input type="submit" name="submit" value="Login">
                <a href="#">Forgot Password?</a><br>
                <a href="cus_register1.php">Don't have an account?</a>
               
            </form>
         </div>
        </div>
    </body>
</html>