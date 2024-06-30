<?php

$connection = mysqli_connect("localhost", "root", "", "property", 3307);

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $ddate = $_POST['ddate'];
    $dtime = $_POST['dtime'];

    
    $check_query = "SELECT * FROM appointment WHERE email = '$email'";
    $check_result = mysqli_query($connection, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
       
        $sql = "UPDATE appointment SET name='$name', phone='$phone', ddate='$ddate', dtime='$dtime' WHERE email= '$email'";
    } else {

        $sql = "INSERT INTO appointment (name, phone, email, ddate, dtime) VALUES ('$name', '$phone', '$email', '$ddate', '$dtime')";
    }

    if (mysqli_query($connection, $sql)) {
        echo '<script>alert("Record updated/inserted successfully");</script>';
        echo '<script>location.replace("indexappointment.php");</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

?>
