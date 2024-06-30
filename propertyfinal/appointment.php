<?php
include('connection.php');

if(isset($_POST["register"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $ddate = $_POST["ddate"];
    $dtime = $_POST["dtime"];
    
    $query = "INSERT INTO appointment (name, phone, email, ddate, dtime) VALUES ('$name', '$phone', '$email', '$ddate', '$dtime')";
    
    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Your appointment is booked");</script>';
        echo '<script>location.replace("indexupdate.php");</script>'; 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
