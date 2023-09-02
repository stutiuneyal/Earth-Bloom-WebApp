<?php
        $connection=mysqli_connect('db','spoorthi','sp@2003');
        mysqli_select_db($connection,'shoppingdb');
        if (isset($_POST["submit"])) {
            $email = $_POST['email'];
            $address =  $_POST['address'];
            $city= $_POST['city'];
            $country =  $_POST['country'];
            $zipcode= $_POST['zipcode'];
            
            
            $sql = "INSERT INTO billadd (Email,Address,City,Country,Zipcode) VALUES ('$email', '$address','$city','$country','$zipcode')";
            mysqli_query($connection,$sql);
            header('location:paymentmode.php');
           }
          

        ?>