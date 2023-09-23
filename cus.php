<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>SPILT- transport</title>
    <link rel="shortcut icon" type="image" href="port.png">
    <link rel="stylesheet">
   <style>
        *{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
.wrapper{
    background: linear-gradient(#acb6e5,#86fde8);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    background-position: center;
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
    width: 120px;
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
.content{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}
button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
span{
    background: #009688;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}  
button:hover span{
    width: 100%;
}
button:hover{
    border: none;
}



       </style>




</head>
<body>
    <div class="wrapper">
        <div class="navbar">
            <img src="port.png" class="logo" >
            <ul>
                <li><a href="minato.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                
                <li><a href="contact.html">Contact</a></li>
                <li><a href="logout.php">LogOut</a></li>
                
            </ul>
        </div>
        <div class="content">
            <div>
               <a href="t_cus.php"><button type="button" ><span></span>BIO</button></a>
               <a href="t_cn.php"><button type="button"><span></span>NON-BIO</button></a>
               <a href="t_cb.php"><button type="button"><span></span>BOTH</button></a>
            </div>
        </div>
    </div>
</body>
</html>