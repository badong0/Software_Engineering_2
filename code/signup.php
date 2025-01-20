<?php
?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>DocServe</title>
    <link rel="stylesheet" href="/styles/signup-style.css">
</head>
<body>

    <div class="login-signup-container">
        <div class="logo" >DOC<span>SERVE</span></div>
        <h2>Create Account</h2>
        <p id="logo-motto">Let's set you up! Fill in the details below to get started.</p>
        
        <div class="button-container">
            <a href="signin.html">Sign In</a>
            <a href="signup.html" class="active">Sign Up</a>
        </div>
        
        <div class="user-category">
            <input type="radio" id="student" name="user_category" value="Student">
            <label for="student">Student</label>

            <input type="radio" id="employee" name="user_category" value="Employee">
            <label for="employee">Employee</label>

            <input type="radio" id="non-employee" name="user_category" value="Non-Employee">
            <label for="non-employee">Non-Employee</label>
        </div>


        <div class="form-row">
            <div class="form-group">
                <label for="first-name">First name</label>
                <input type="text" id="first-name" placeholder="Enter your First Name">
            </div>

            <div class="form-group">
                <label for="middle-name">Middle name</label>
                <input type="text" id="middle-name" placeholder="Enter your Middle Name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="last-name">Last name</label>
                <input type="text" id="last-name" placeholder="Enter your Last Name">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Type your e-mail">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Type your password">
                <p>Must be 8 characters at least</p>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Confirm your password">
                <p>Must be 8 characters at least</p>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="date-of-birth">Date of Birth</label>
                <input type="date" id="date-of-birth">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" min="0" max="120">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>

        <div class="terms-and-conditions">
            <input type="checkbox" id="termsCheckbox" required>
            <label for="termsCheckbox">
              By creating an account, means you agree to the <a href="#">Terms and Conditions</a>, and our <a href="#">Privacy Policy</a>
            </label>
        </div>
        <button type="submit">Submit</button>
    </div>

</body>
</html>
