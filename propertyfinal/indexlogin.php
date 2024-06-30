<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <div class="tab-login" id="signup"> 
            <div class="box">
                <h2 class="display-4">Login</h2><br>

                <form class="login-form" action="login.php" onsubmit= "return isvalid()" method="POST" >
            
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="register-email" id="register-email" placeholder="Email Address">
                    </div>
                   

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="register-password" id="register-password" placeholder="Password">
                    </div>
                    

                    <div class="input-checkbox">
                        <label class="label-checkbox">
                        <a href="indexforgot.php">Forgot password?</a>
                        </label>
                    </div>

                    <div class="input-checkbox">
                        <label class="label-checkbox">
                        <a href="indexsignup.php">Register</a>
                        </label>
                    </div>

                    <input type="submit" name="Login" class="btn" value="Login">

                </form> 
        </div>  
    </div>

<script>

    function isvalid(){
        var email = document.getElementById("register-email").value
        var password = document.getElementById("register-password").value;

        if(email.length=="" && password.length==""){
            alert("Email and password fields are empty!!!");
            return false
        }
        else{
            if(email.length==""){
            alert("Email field is empty!!!");
            return false
        }
            if(password.length==""){
                alert("Password field is empty!!!");
                return false
            }
        }
    }

</script>   

</body> 
</html>