<?php
  include("connection.php");  
?>

<!DOCTYPE html>
<html>
<head>    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot password page</title>
    <link rel="stylesheet" href="css/forgot.css">
</head>
<body>
    
        
        <div class="tab-forgot" id="signup"> 
            <div class="box">
                <h2 class="display-4">Forgot Your Password</h2><br>
                
                <form class="forgot-form" method="POST" action="forgot.php" onsubmit= "return isvalid()">
            
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="register-email" id="register-email" placeholder="Email Address">
                    </div>
                   

                    <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" name="register-password" id="register-password" placeholder="New Password">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                    </div>

                    

                    <input type="submit" name="submit" class="btn" value="Submit">

                </form>
                
            </div>  
        </div>

<script>
    function isvalid(){
        
        
        var email = document.getElementById('register-email').value;
        var password = document.getElementById('register-password').value;
        var confirmPassword = document.getElementById('confirm-password').value;
        

        if (email === '' || password === '' || confirmPassword === '') {
            alert('Please fill in all fields');
            return false;
        }

        if (password!== confirmPassword) {
            alert('Passwords do not match');
            return false;
        }

        return true;
    }

</script>

    
</body>
</html>