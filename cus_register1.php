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
      if(!empty($fname) && !empty($uname) && !empty($email) && !empty($p_no) && !empty($pas1) && !empty($pas2) && !empty($gender))
      {
        if($pas1 == $pas2){
          $query = "SELECT * FROM register WHERE email= '$email' limit 1";
          $result = mysqli_query($con, $query);
          if(!$result->num_rows > 0){
        $query = "INSERT INTO register (fname, uname, email, p_no, pas1, pas2, gender) values('$fname', '$uname', '$email', '$p_no', '$pas1', '$pas2', '$gender')";
          mysqli_query($con, $query);
         if($result)
         {
          echo "<script>alert('user registration sucess')</script>";
          header("Location: cus login.php");
             $fname = "";
             $uname = "";
             $email = "";
             $p_no = "";
             $pas1 = "";
             $pas2 = "";
             $gender = "";
         }else{

          echo "<script>alert('user registration denied.. Try after 1 min')</script>";
          header("Location: cus login.php");
         }
        }else{
          echo "<script>alert('email already exists')</script>";
        }
         }else{
           echo "<script>alert('password is not matched')</script>";
         }
      } else{
        echo "please enter some valid information!";
      }

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>SPILT - register</title>
    <link rel="stylesheet" href="cus_register.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form name="loginform" action="" method="POST">
        <div class="hari">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fname" placeholder="Enter your Full Name" required="">
          </div>
          <div class="input-box">
            <span class="details">User Name</span>
            <input type="text" name="uname" placeholder="Enter your User Name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="p_no" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pas1" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="pas2"placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1">
          <input type="radio" name="gender" value = "Female" id="dot-2">
          <input type="radio" name="gender" value="not to say" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" name="gender" >Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" name="gender" >Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender" name= "gender"  >Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
