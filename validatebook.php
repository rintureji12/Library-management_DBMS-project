<?php
session_start();
$isbn = $_POST['ISBN'];
$con=mysqli_connect("localhost","root","","lms");
$search="SELECT ISBN FROM book WHERE ISBN='$isbn'";
$res=mysqli_query($con,$search);
if(mysqli_num_rows($res)==0)
    {
        echo '<script>alert("No books found")</script>';
        // header ("Location:deletebook.php");
    }
    else{
        $query="DELETE FROM bookissue where ISBN='$isbn'" ;
        $result=mysqli_query($con,$query);         
        $sql="DELETE FROM book WHERE ISBN='$isbn'";
        $result=mysqli_query($con,$sql);
        $_SESSION['success']="success";
        header ("Location:deletebook.php");
    }

?>