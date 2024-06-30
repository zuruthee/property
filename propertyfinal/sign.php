<?php
    require("connection.php");

    if(isset($_POST["register"])){
        $name = $_POST["full-name"];
        $username = $_POST["user-name"];
        $email = $_POST["register-email"];
        $password = $_POST["register-password"];
        $confirmpassword = $_POST["confirm-password"];

        $duplicate = mysqli_query($conn , "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            
            echo
            "<script>
            alert('User name or Email Has Already Taken');
            </script>";
        }
        else{
            if($password == $confirmpassword){
                $query = "INSERT INTO user VALUES ('' , '$name' , '$username' , '$email' , '$password' )";
                mysqli_query($conn , $query);
                
               
                echo
                "<script>
                window.location.replace('indexlogin.php');
                 alert('Registration Successful'); </script>";
            }
            else{
                echo
                "<script> 
                window.location.replace('indexsignup.php');
                alert('Password Does not Match'); </script>";
            }
        }
        
    }

?>