<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/".$filename;
        $isbn=$_POST['isbn'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $genre=$_POST['genre'];
        $status=$_POST['status'];

		
	$db = mysqli_connect("localhost", "root", "", "lms");

		// Get all the submitted data from the form
		$sql = "INSERT INTO book VALUES ('$isbn','$title','$author','$genre','$status','$filename')";

		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}
// $result = mysqli_query($db, "SELECT 'filename' FROM book WHERE isbn='$isbn'");
$sql = "SELECT * FROM book WHERE isbn = '$isbn'";
$res=mysqli_query($db, $sql);

// echo '<script>alert("Book added successfully")</script>';
header ("Location:enterbooks.php");
// while($row=mysqli_fetch_array($res))
// {
	
// 	echo "<img src='image/".$row['filename']."'>";
// 	echo $row['title'];
// }


?>


