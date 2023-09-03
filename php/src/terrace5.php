<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b944b8a5c3.js" crossorigin="anonymous"></script>
    <title>Terrace</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family:'Architects Daughter';
    }
    .banner{
    width: 100%;
    height: 100vh;
    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.jpeg);
    background-size: cover;
    background-position: center;
    } 
    .a{
        margin-top:20px;
        border-radius: 30px;
        text-align: center;
        margin-top:10px;
    }
    .logo{
    width: 120px;
    cursor: pointer;
    }
    .navbar{
    width: 100%;
    font-size: 15px;
    font-family:'Architects Daughter';
    margin: auto;
    padding: 15px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
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
    text-decoration: uppercase;
    }

    .navbar ul li::after{
    content: '';
    height: 3px;
    width: 0%;
    background: #9AD685;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
    }

    .navbar ul li:hover::after{
    width: 100%;
    }

    .banner a {
    float: right;
    color: black;
    text-align: center;
    right:400px;
    margin-top: -5px;
    font-size: 17px;
    }
    .banner:hover{
    background-color: #3a871e;
    color: white;
    }
    .banner input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    background-color: beige;
    margin-top: -90px;
    margin-right: 800px;
    font-size: 17px;
    }
    .logo2{
        font-size: 40px;
        color: white;
        margin-top: auto;
        margin-bottom: -50px;
        margin-left: 140px;
    }
    .img{
    float: left;
    margin-left: 90px;
    margin-right: 70px;
    margin-bottom: 200px;
    padding-top: 30px;
  }
  .arrowright{
  position:relative;
  width: 0; 
  height: 0; 
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  border-right: 20px solid white;
}
.arrowleft{
  position:relative;
  width: 0; 
  height: 0; 
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  border-left: 20px solid white;
}

</style>
<body> 
    <div class="banner">
        <pre class="logo2">Earth & Bloom</pre>
        <div class="navbar">
        <a href="index.php"><img src="logo.png" class="logo"></a>
        <ul>
                    <ul style="float:right;">
                        <li><a href="signup.php"><i class="fa fa-sign-in"></i> Signup</a></li>
                        <li><a href="login.php" ><i class="fa fa-user"></i> Login</a></li>
                        <li><a href="cart.php" ><i class="fas fa-shopping-cart"></i> Cart</a></li>
                    </ul>
                     <br /><br />
                    <li><a href="garden catalogue.php">Our Services</a></li>
                    <li><a href="shop.php">Shop </a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
        <div class="a">
            <h2 style="color:white;font-size:30px;">TERRACE GARDEN</h2>
        </div>
        <div class="img">
            <img src="terrace/terracegarden5.jpg" height="250px" width="300px">
            <div class="arrowright" style="left:40px; bottom: 70px; font-size: 25px; color: yellow;">Potted Plants</div>
            <div class="arrowleft" style="left:80px; bottom:150px; font-size: 25px; color: yellow;">Sofa</div>
            <div class="arrowright" style="left:240px; bottom:130px; font-size: 25px; color: yellow;">Flower Plants</div>
            <div class="arrowright" style="left:170px; bottom:180px; font-size: 25px; color: yellow;">Chair</div>
            <div class="arrowleft" style="left:80px; bottom:360px; font-size: 25px; color: yellow;">Gazebo</div>
        </div>

        <div>
            <p><pre style="font-size:22px;color:white;padding-left: 3%;padding-top: 30px;">
                For converting a similar terrace into a terrace garden, you will require 2 chairs, a table,
                a sofa, about 10-12 potted plants that are terrace-friendly (Eg:- Leafy greens, Guava,
                Pomegranate, Papaya, Aloevera, Money plant), about 5-10 flower pots (Eg:- Rose, Marigold,
                Hibiscus, Pancy), and a gazebo.
                
                In a terrace of size 20 ft x 30 ft, to grow a similar terrace garden, you will need 10-20 potted
                plants, about 10-20 flower pots, a gazebo, 2 chairs, a sofa, seeds and a watering can.
         
            </pre></p>
        </div>
</body>
</html>