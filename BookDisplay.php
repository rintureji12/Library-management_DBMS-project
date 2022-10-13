<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            background-color:antiquewhite;
            /* background-image: linear-gradient(to right, #DECBA4, #3E5151); */
            /* background-image: linear-gradient(to right, #c6ffdd, #fbd786, #f7797d); */
            /* background-image: radial-gradient( circle 759px at -6.7% 50%, rgba(80,131,73,1) 0%, rgba(140,209,131,1) 26.2%, rgba(178,231,170,1) 50.6%, rgba(144,213,135,1) 74.1%, rgba(75,118,69,1) 100.3% ); */
            /* background-image: linear-gradient(to right, #ff6e7f, #bfe9ff); */
        }
        .card-img-top 
        {
            width:100%;
            height:30vw;
            /* object-fit:cover; */
        }

        </style>
        
</head>
<body>
<body>

<header class=" container-fluid" style="position:fixed;z-index: 1 ;background-color:darkgreen">
    <!-- we set z-index=1 bcs the header need to stay on top while scrolling -->
        <div class="row">
            <div class="col-md-7 col-7 p-3 ps-5 text-white"> <!--ps represents left padding-->
                <h2><i class="bi bi-stack"></i> GitzLibrary</h2>
            </div>
            <div class="col-md-5 col-5 my-auto"> <!--my-auto to centre the div content-->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                              <!--ms-auto to move content to right-->
            
                              <li class="nav-item">
                                <a class="nav-link text-white" href="AdminEdit.html">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="deletebook.php">DeleteBook</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="Bookissue.php">IssueBook</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link text-white" href="enterbooks.php">AddBook</a>
                              </li>
                              
                            </ul>
    
                          </div>
                  </nav>
                </div>
    </div>
    </header>
          <div class="container py-5">
          <div class="row mt-4">
    <?php
    $db = mysqli_connect("localhost", "root", "", "lms");
    $sql = "select * from Book"; 
    $res=mysqli_query($db, $sql);
    if(mysqli_num_rows($res)>0)
    {
        while($row=mysqli_fetch_array($res))
         {   
                ?>
                <div class="col-md-4 px-4">
                  <div class="card  my-4 px-3 bg-transparent" >
                    <div class="card-body text-center">
                        <img src="image/<?php echo $row['filename'];?>"class="card-img-top" alt="" height=75%>
                        <label class="pt-4">ISBN:<b class="card-text"><?php echo $row['ISBN'] ?><br></b><label>
    
                        <label>Title:<b class="card-text"><?php echo $row['title'] ?></b><br><label>
                        <label>Author:<b class="card-text"><?php echo $row['author'] ?></b><br><label> 
                        <label>Status:<b class="card-text"><?php echo $row['status'] ?></b><br><label>
                       
                    </div>
                  </div>
               </div>
               <?php
         }
    }
    else
    {
        echo "NO RECORDS FOUND";
    }
?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
