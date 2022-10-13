<?php
session_start();

        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            // $confirmPassword = $_POST['confirm password'];
            $designation = $_POST['designation'];
            $gender = $_POST['gender'];
            $contact = $_POST['contact'];

            $con=mysqli_connect("localhost","root","","lms");
            
            $sql="INSERT INTO  member VALUES('$name','$email','$password','$designation','$gender','$contact')";
            $result=mysqli_query($con,$sql);

            $insert="INSERT INTO login VALUES('$email','$password')";
            $res=mysqli_query($con,$insert);
            
            

            $_SESSION['success']="Registration successful";
            header("Location:reg.php");
            echo "hai";

?>