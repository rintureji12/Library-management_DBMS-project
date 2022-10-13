<?php
session_start();
// if (isset($_POST['Register'])) {
//     if (isset($_POST['name']) && isset($_POST['email']) &&
//         isset($_POST['password']) && isset($_POST['confirmPassword']) &&  
//         isset($_POST['designation']) && isset($_POST['gender']) &&  isset($_POST['contact'])) {
        
    
            $username = $_POST['username'];
            $isbn = $_POST['isbn'];
            $date = $_POST['date'];
            

            $con=mysqli_connect("localhost","root","","lms");
            
            $sql="INSERT INTO  bookissue VALUES('$username','$isbn','$date')";
            $result=mysqli_query($con,$sql);
echo "hai";
        
            $_SESSION['success']="Registration successful";
            header("Location:Bookissue.php");
   
?>