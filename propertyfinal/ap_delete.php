<?php
$connection = mysqli_connect("localhost", "root", "", "property" , 3307);

if (isset($_POST['submit_insert'])) {
    $email = $_POST['email']; 
   
    $sql = "DELETE FROM appointment WHERE email = '$email'";

    if (mysqli_query($connection, $sql)) {
        echo '<script>alert("Your appointment is deleted");</script>';
        echo '<script>location.replace("index.html");</script>'; 
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
