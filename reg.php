<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="reg.css" type="text/css" />
     <script src="register.js"></script>
</head>

<body>
    <div class="split_screen">
        <div class="left">
            <section class="copy">
                <h2>Information anytime anywhere</h2>
                <h3>...unlock the key to knowledge</h3>
            </section>
        </div>
        <div class="right">
            <form action="insert.php" method="POST">
                <section class="copy">
                    <h1>Register</h1>
                    <div class="login-container">
                        <p>Already have an account? <a href='login.php'>
                        <strong>Log In</strong></a></p>
                    </div>
                </section>
                <div class="input-container name">
                    <label for="name">Full Name</label>
                    <input id="name" name="name" type="text" required>
                </div>
                <div class="input-container email">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" required>
                </div>
                <div class="input-container password">
                    <label for="password">Password</label>
                    <input id="password" name="password"
                    placeholder="Must be at least 6 characters"
                    type="password">
                    <i class="far fa-eye-slash"></i> 
                </div>
                <div class="input-container confirmpass">
                    <label for="confirmpass">Confirm Password</label>
                    <input id="confirmpass" name="confirm password"
                    placeholder="Must be at least 6 characters"
                    type="password">
                    <i class="far fa-eye-slash"></i> 
                </div>
                <div class="input-container designation">
                    <label for="designation">Designation </label>
                    <select id="designation" name="designation"
                    placeholder="designation"
                    type="text">
                       <option value="designation hidden">Designation</option>
                       <option value="student">Student</option>
                       <option value="faculty">Faculty</option>
                    </select>
                </div>
                <br>
                <div class="input-container gender">
                    <label for="gender">Gender </label>
                    <select id="gender" name="gender"
                    placeholder="gender"
                    type="text">
                       <option value="gender hidden">Gender</option>
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                    </select>
                </div>
                <br>
                <div  class="input-container contact">
                    <label for="contact">Contact No.</label>
                    <input type="text" name="contact">
                </div>
                <button class="register-btn" type="submit">Register</button>
                
                
                <section class="copy legal">
                    <p><span class="small">By continuing,you agree 
                    to accept our <br> <a href="#">Privacy 
                    Policy</a> &amp; <a href="#">Terms of
                    Service</a>.</span></p>
                </section>
            </form>
        </div>
    </div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
echo "hello";
                if(isset($_SESSION['success']))
                            {
              
                                echo "hello";
                            //   echo '<script>alert("Registration successful")</script>';
                            // echo '<script>
                            // swal("Good job!", "You clicked the button!", "success");
                            // </script>';
                            echo'<script>
                            swal("Great!", "Your account has been succesfully created", "success",
                             {button: "Back to Login",}
                              )
                              .then((value) => {
                                window.location.href = "login.php";
                              });
                               </script>';
                    
                            }
                            // header ("Location:Login.php");
                            ?>
</html>
<?php
unset($_SESSION['success']);
?>