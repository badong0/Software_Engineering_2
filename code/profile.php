<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../styles/main-style.css">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/code/about.html">About</a></li>
                <li><a href="/code/GetStarted.html">Home</a></li>
            </ul>
        </nav>
        <div class="logo">
            <div>DOC<span>SERVE</span></div>
        </div>

        <div class="user-info">
            <p>Welcome, <span>John Doe</span></p>
            <a href="/code/profile.html"><img src="user_image.jpg" alt="User Image"></a> 
        </div>
    </header>
    <div class="container"> 
        <div class="wrapper">

            <div class="sidebar">
                <h1>Settings</h1>
                <ul>
                    <li><a href="#" class="active">Profile</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">History</a></li>
                </ul>
                <a href="/code/signin.html" style="margin-top: 20px;">Logout</a>
            </div>
        
            <div class="content-container">
                <h2>Profile</h2>
                <p>Manage and update your personal information.</p>
        
                <div class="user-profile">
                    <img src="user_image.jpg" alt="User Image"> 
                    <h2>Louis Partridge</h2>
                    <h3>Student</h3>
                </div>
        
                <div class="user-information">
                    <h2>Personal Information</h2>
        
                    <div>
                        <label for="firstName">First Name:</label>
                        <span id="firstName">Louis</span>
                    </div>
                    <div>
                        <label for="lastName">Last Name:</label>
                        <span id="lastName">Patridge</span>
                    </div>
                    <div>
                        <label for="middleName">Middle Name:</label>
                        <span id="middleName">Patrick</span>
                    </div>
                    <div>
                        <label for="email">Email Address:</label>
                        <span id="email">louispatridge@gmail.com</span>
                    </div>
                    <div>
                        <label for="gender">Gender:</label>
                        <span id="gender">Male</span>
                    </div>
                    <div>
                        <label for="user">User:</label>
                        <span id="user">Student</span>
                    </div>
                    <div>
                        <label for="age">Age:</label>
                        <span id="age">21 yrs old</span>
                    </div>
                    <div>
                        <label for="birthday">Birthday:</label>
                        <span id="birthday">June 03, 2003</span>
                    </div>
                </div>
        
                <div class="user-address">
                    <h2>Address</h2>
        
                    <table>
                        <tr>
                            <th>House No</th>
                            <td></td> 
                        </tr>
                        <tr>
                            <th>Street</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Barangay</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>City/Municipality</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Province</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Postal Code</th>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <button>Edit</button>
            </div>
</body>
</html>
