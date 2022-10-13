<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Change Password</title>
    <link rel="stylesheet" href="sign in style.css?v=<?php echo time()?>" type="text/css">
</head>
<body>
    
    <br><br><br><br><br><br><br><br>
    <form id="form1" action="reset.php" method="POST">
        <div class="col1">
    <table>
    <tr><td height="10px"><br><br><br></td></tr>
    <tr><td class="wn" colspan="2"  ><h2 class="sn">Change Password</h2></td></tr>

    <tr>
 <td class="psw" colspan="2" ><input type="text"  id="mail" name="mail" placeholder="Registered E-Mail" ></td>
</tr>
<td class="psw" colspan="2" ><input type="password"  id="oldpassword" name="newpass" placeholder="New Password">
</tr>
<tr>
<td class="psw" colspan="2" ><input type="password"  id="newpassword" name="confirmpass" placeholder="Confirm Password">
</tr>
<tr>

</td>

</tr>
<tr>
<td><input type="submit" form="form1" name="signin" value="Change" class="sg"><br>

</tr>

    <td>
<?php
                          if(isset($_SESSION['error']))
                            {
            
              
                              echo "<p align='center'> <font color=red font face='arial'>Password mismatch!! Try again</font></p>";
                    
                            }
                            if(isset($_SESSION['nouser']))
                            {
                          
                                $msg=$_SESSION['nouser'];
              
                              echo "<p align='center'> <font color=red font face='arial'>$msg</font></p>";
                    
                            }
                            if(isset($_SESSION['success']))
                            {
                              $msg=$_SESSION['success'];
              
                              echo '<script>alert("password reset is successful")</script>';
                    
                            }
                            

                            ?>
                            </td>
                            
<td></td>
</table>
</div>
</form>


</body>
</html>
<?php
unset($_SESSION['error']);

unset($_SESSION['success']);
?>