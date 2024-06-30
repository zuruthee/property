<?php
$connect = mysqli_connect("localhost", "root", "", "property",3307);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    
    if (mysqli_query($connect, $sql)) {
        echo '<script>alert("Your meesage is added");</script>';
        header("Location: page2.php?name=" . urlencode($name) . "&email=" . urlencode($email));

    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
