

<?php

$connection = mysqli_connect("localhost", "root", "", "property",3307);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $check_query = "SELECT * FROM feedback WHERE email = '$email'";
    $check_result = mysqli_query($connection, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        
        $sql = "UPDATE feedback SET name='$name', message='$message' WHERE email= '$email'";
    } else {
    
        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
    }
    
    
    if (mysqli_query($connection, $sql)) {
        echo '<script>alert("Record updated/inserted successfully");</script>';
        echo '<script>location.replace("feedback.php");</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

?>





