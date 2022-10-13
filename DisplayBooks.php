<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IssuedBooks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
    <style>
        body{
            /* background-image: linear-gradient(to right, #DECBA4, #3E5151); */
            background-image: linear-gradient(to right, #c6ffdd, #fbd786, #f7797d);
            /* background-image: radial-gradient( circle 759px at -6.7% 50%, rgba(80,131,73,1) 0%, rgba(140,209,131,1) 26.2%, rgba(178,231,170,1) 50.6%, rgba(144,213,135,1) 74.1%, rgba(75,118,69,1) 100.3% ); */
            /* background-image: linear-gradient(to right, #ff6e7f, #bfe9ff); */
        }
        </style>
</head>
<body>
<?php
    // include("DBConnection.php");
 
    // $search = $_REQUEST["search"];
    $username=$_SESSION['email'];
    // echo $username;
    $con=mysqli_connect("localhost","root","","lms");
    // $query = "select ISBN,Title,Author,Genre,Availability from Book where Title like '%$search%'"; //search with a book name in the table book_info
    $query="select * from bookissue,book where username='$username' and bookissue.ISBN=book.ISBN";
    
    $result = mysqli_query($con,$query);
    // $row=mysqli_fetch_assoc($result);
    // echo $row['ISBN'];
    if(mysqli_num_rows($result)>0)
     {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-5">
                <table class="table pt-5 table-hover  table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ISBN</th>
                            <th scope="col">Issued Book</th>
                            <th scope="col">Author</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Issued Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td><?php echo $row["ISBN"];?> </td>
            <td><?php echo $row["title"];?> </td>
            <td><?php echo $row["author"];?> </td>
            <td><?php echo $row["genre"];?> </td>
            <td><?php echo $row["issuedate"];?> </td>
                          </tr>
                         
                    </tbody>
                    <?php
        }
        }
        else
        echo "<h1><center>No books found</center></h1>" ;
        ?>   
                  </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>