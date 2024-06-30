<?php
    require("connection.php");

    if(isset($_POST["register"])){
        $email = $_POST["register-email"];
        $password = $_POST["register-password"];
        $confirmpassword = $_POST["confirm-password"];

        if ($password == $confirmpassword) {
            
            $sql = "DELETE FROM user WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
        
            if ($result) {
                echo '<script>
                window.location.replace("indexsignup.php");
                alert("Account Deleted Successfully!!!");
                </script>';

                exit;
            } else {
               
                 echo '<script>
                window.location.replace("indexdelete.php");
                alert("Account Delete Failed!!!");
                </script>';
                exit;
            }
        } else {
                echo '<script>
                window.location.replace("indexdelete.php");
                alert("Passwords do not match!!!");
                </script>';
            exit;
        }
        
        
        mysqli_close($conn);
    }
?>