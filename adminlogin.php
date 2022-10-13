<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body class="vh-100">
    <div class="container vh-100">
        <div class="row align-items-center vh-100">
            <div class="col-11 col-md-6 col-lg-5 bg-white rounded shadow mx-auto">
                <h2 class="text-center pt-4" style="font-family:Algerian;">GitZ Library</h2>
                <div>
                    <form class="px-5 pt-4 pb-3" action="validateadmin.php" method="POST">
                        <div class="mb-3">
                          <!-- <label for="exampleInputEmail1" class="form-label">Username</label> -->
                          <input type="email" class="form-control" name="username" id="exampleInputEmail1" placeholder="Username"aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                          <!-- <label for="exampleInputPassword1" class="form-label">Password</label> -->
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        
                          <div class="d-grid gap-2 pt-2">
                            <!-- <a class="btn btn-primary" href="reader.html" role="button">Login</a> -->
                            <!-- <button type="submit" class="btn btn-primary">Login</button> -->
                            <input type="submit" value="Login" class="btn btn-primary"/>
                            <?php
                          
                            if(isset($_SESSION['error']))
                            {
                              $msg=$_SESSION['error'];
              
                              echo "<p align='center'> <font color=red font face='arial'>$msg</font></p>";
                    
                            }
                            ?>
                        </div>
        
      
                      </form>
                      <!-- <div class="row text-center ps-5">
                        <div class="col-sm-5 pt-2 pb-4">
                            <a href="#" class="link-secondary">Forgot password?</a>
                        </div>
                        <div class="col-sm-7 pt-2 pb-4">
                            <a href="#" class="link-info">New user? Register</a>
                        </div>
                      </div> -->
                      <div class="row px-5">
                          <div class="col-md-12 text-center">
                            <a href="Forgetpass.php" class="link-secondary">Forgot password?</a>
                          </div>
                          <pre><h6 class="pt-3"> OR </h6></pre>
                          <div class="d-grid gap-2 pt-2 pb-5">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
unset($_SESSION['error']);
?>