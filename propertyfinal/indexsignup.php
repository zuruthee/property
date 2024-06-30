

<!DOCTYPE html>
<html>
<head>    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup page</title>
    <link rel="stylesheet" href="css/sig.css">
</head>
<body>
    
        
        <div class="tab-sign" id="signup"> 
            <div class="box">
                <h2 class="display-4">Create Account</h2><br>
                
                <form class="sign-form" method="POST" onsubmit= "return isvalid()" action="sign.php">

                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="full-name" id="full-name" placeholder="Full Name">
                    </div>
                    

                    <div class="form-group">
                        <label class="form-label">User name</label>
                        <input type="text" class="form-control" name="user-name" id="user-name" placeholder="User name">
                    </div>
                    

                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="register-email" id="register-email" placeholder="Email Address">
                    </div>
                   

                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="register-password" id="register-password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                    </div>
                    

                    <div class="input-checkbox">
                        <label class="label-checkbox">
                        <span>I agree with all <a href="termandcondition.php">Terms &amp; Conditions</a></span>
                        
                            <input type="checkbox">
                            <span class="check-indicator"></span>
                            
                        </label>
                        
                    </div>
                    <div class="login-link">
                         <a href="indexlogin.php">Log in</a>
                    </div>

                    <input type="submit" name="register"class="btn btn--primary btn--block" value="Register">

                </form>
                <!-- form  end -->
            </div>  
        </div>
<script>
    function isvalid(){
        
        var fullName = document.getElementById('full-name').value;
        var username = document.getElementById('user-name').value;
        var email = document.getElementById('register-email').value;
        var password = document.getElementById('register-password').value;
        var confirmPassword = document.getElementById('confirm-password').value;
        var checkbox = document.querySelector('input[type="checkbox"]');

        if (fullName === '' || username === '' || email === '' || password === '' || confirmPassword === '') {
            alert('Please fill in all fields');
            return false;
        }

        if (password!== confirmPassword) {
            alert('Passwords do not match');
            return false;
        }

        if (!checkbox.checked) {
        alert('Please agree to the Terms and Conditions');
        return false;
        }

        return true;

    }
</script>        



    
</body>
</html>