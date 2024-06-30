<?php
  include("connection.php");  

  if(isset($_POST["submit"])){

    $email = $_POST["register-email"];
    $password = $_POST["register-password"];
    $confirmpassword = $_POST["confirm-password"];

    if($password === $confirmpassword){
        $query = "UPDATE user SET password = '$password' WHERE email = '$email'";
        mysqli_query($conn , $query);
        
        echo
        
        "<script>
        window.location.replace('indexlogin.php');
            alert('Password updated!');
            </script>";
    }
    else{
        echo
        "<script> 
        window.location.replace('indexforgot.php');
        alert('Password Does not Match'); </script>";
    }

  }


?>
