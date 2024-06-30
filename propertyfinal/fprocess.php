<?php
$connect = mysqli_connect("localhost", "root", "", "property" , 3307);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback(name, email, message) VALUES ('$name', '$email', '$message')";
    
    
    if (mysqli_query($connect, $sql)) {
        echo '<script>alert("Your feedback is added");</script>';
        echo '<script>location.replace("feed.php");</script>'; 
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}


?>



