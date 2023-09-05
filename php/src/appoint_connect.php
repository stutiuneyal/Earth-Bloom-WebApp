<?php
$conn=mysqli_connect('db','spoorthi','sp@2003');
mysqli_select_db($conn,'shoppingdb');
if (isset($_POST["submit"])) {

    $name = $_POST['name'];
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $sql = "INSERT INTO appointments (name, email, phone, service,date) VALUES ('$name', '$email', '$phone', '$service','$date')";
    
    mysqli_query($conn,$sql);
    header('location:appointmentsucces.html');
}
?>
