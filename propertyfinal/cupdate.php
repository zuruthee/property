<?php
$connection = mysqli_connect("localhost", "root", "", "property",3307);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    
    $check_query = "SELECT * FROM contact WHERE email = '$email'";
    $check_result = mysqli_query($connection, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
       
        $sql = "UPDATE contact SET name='$name', message='$message', phone='$phone' WHERE email= '$email'";
    } else {
       
        $sql = "INSERT INTO contact (name, email, message, phone) VALUES ('$name', '$email', '$message', '$phone')";
    }
    
   
    if (mysqli_query($connection, $sql)) {
        echo '<script>alert("Record updated/inserted successfully");</script>';
        echo '<script>location.replace("contact.php");</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

?>
