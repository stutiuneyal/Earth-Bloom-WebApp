<?php
$connection=mysqli_connect('db','spoorthi','sp@2003');
mysqli_select_db($connection,'shoppingdb');
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number =$_POST['number'];
    $soil = $_POST['type'];
    $dropdown = $_POST['dropdown'];


    $preferredPlants = $_POST['plant_preferences'];

    $comments = $_POST['comments'];

    $sql = "INSERT INTO suggestions (name, email, number, soil, dropdown,preferred_plants, comments)
            VALUES ('$name', '$email', '$number', '$soil', '$dropdown', '$preferredPlants', '$comments')";
    
    mysqli_query($connection,$sql);
            header('location:index.php');

    
}
else{
    echo 'error';
}
?>