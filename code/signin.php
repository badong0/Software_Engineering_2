<?php
?>
<!DOCTYPE html>
<html>
<head>
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>DocServe</title>
    <link rel="stylesheet" href="../styles/signin-style.css">
</head>
<body>

    <div class="login-signup-container">
        
        <div class="logo" >DOC<span>SERVE</span></div>
        <h2>Welcome back!</h2>
        <p id="logo-motto">Welcome back, Please enter your details.</p>
        
        <div class="button-container">
            <a href="signin.html" class="active">Sign In</a>
            <a href="signup.html">Sign Up</a>
        </div>
        
        <form action="" method="" enctype="">
            <div class="email-box">
                <label>Email</label>
                <div class="box" contenteditable="true"></div>
            </div>
            <div class="password-box">
                <label>Password</label>
                <div class="box" contenteditable="true"></div>
            </div>

            <div class="forgot-password">
                <a href="#" id="forget-password">Forget Password</a>     
            </div>
            <button type="submit">Login</button>
        </form>
        
    </div>

</body>
</html>
