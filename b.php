


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Order Placed</title>
    <link rel="stylesheet" href="bio.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>

<style>
body{
    margin:0;
    padding:0;
    background: linear-gradient(#acb6e5,#86fde8);
    height: 100vh;
    background-size: cover;
    background-position: center;
    color: black;
}


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
textarea{
    background: #ffffff;
}
form{
    display:flex;
    justify-content:center;
    align-items: center;
    flex-direction: row;
    min-height: 50vh;
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
       
       <h1>Thank You.. We will contact you soon</h1>
       <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
                <form method="POST" action="upload2.php" enctype="multipart/form-data">
                    <input type="file" name="my_image" >
                    <input type="submit" name="submit" value="Upload">
                   
                </form>
               



</body>
</html>