<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>ISSUE BOOK</title>
    <link rel="stylesheet" href="sign in style.css?v=<?php echo time()?>" type="text/css">
</head>
<body>
    
    <br><br><br><br><br><br><br><br>
    <form id="form1" action="issue.php" method="POST">
        <div class="col1">
    <table>
    <tr><td height="10px"><br><br><br></td></tr>
    <tr><td class="wn" colspan="2"  ><h2 class="sn">ISSUE BOOK</h2></td></tr>

    <tr>
 <td class="psw" colspan="2" ><input type="text"  id="mail" name="username" placeholder="Enter student Id" ></td>
</tr>
<td class="psw" colspan="2" ><input type="password"  id="oldpassword" name="isbn" placeholder="Enter ISBN">
</tr>
<tr>
<td class="psw" colspan="8" >
<label for="birthday">Issue Date:</label>
  <input type="date" id="birthday" name="date">
</tr>

<tr>

</td>

</tr>
<tr>
<td><input type="submit" form="form1" name="submitbtn" class="sg"><br>

</tr>

    <td>

    </td>
                            
<td></td>
</table>
</div>
</form>

</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
                if(isset($_SESSION['success']))
                            {
              
                            //   echo '<script>alert("Registration successful")</script>';
                            echo '<script>
                            swal("Great!", "Book issued successfully!", "success");
                            </script>';
                            // echo'<script>
                            // swal("Great!", "Book Issued successfully", "success");
                            //    </script>';
                    
                            }
                            // header ("Location:Login.php");
                            ?>
</html>
<?php
unset($_SESSION['error']);

unset($_SESSION['success']);
?>