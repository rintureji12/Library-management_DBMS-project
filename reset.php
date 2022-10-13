<?php
session_start();
  $mail= $_POST['mail'];
  $confirmpass=$_POST['confirmpass'];
  $newpass=$_POST['newpass'];
  $error="Incorrect credentials";



  $con=mysqli_connect("localhost","root","","lms");

  $result=mysqli_query($con,"select * from login where username='$mail'");

  $row=mysqli_fetch_assoc($result);

  $count=mysqli_num_rows($result);
  if($count>0)
  {
    //   echo $row['password'];
      if($confirmpass==$newpass)
      {
          $sql="update login set password='$newpass' where username='$mail'";
          $res=mysqli_query($con,$sql);
          $_SESSION['success']="success";
          header ("Location:Forgetpass.php");
        //   echo '<script>alert("password reset is successful")</script>';
      }
    else{
        $_SESSION['error']=$error;
        header ("Location:Forgetpass.php");
    }
  }
  else
  {
    $_SESSION['nouser']="user not found!!";
    header ("Location:Forgetpass.php");
  }
?>