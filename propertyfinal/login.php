<?php
    include("connection.php");

    if(isset($_POST['Login'])){
        $email = $_POST['register-email'];
        $password = $_POST['register-password'];
    

        $sql = "select * from user where email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count==1){
            echo '<script>
            window.location.replace("index.html");
          </script>';
        }
        else{
            echo '<script>
            window.location.replace("indexlogin.php");
            alert("Login failed. Invalid email or password!!!");
          </script>';
        }
    }

?>