<?php
session_start();
if(!isset($_SESSION["username"]))
{
  header("location:login.php");
}
else 
{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentPage</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
    <div class="container">
      
       <!-- <h2 class="pt-4">Welcome, <?=$_SESSION['username'];?></h2> -->
        <div class="row">
          <div class="col-md-4 pt-4 ">
          <h2 >Welcome, <?=$_SESSION['username'];?></h2>
            </div>

            <div class="col-md-8 pt-4 ps-5">
              <form action = "DisplayBooks.php" method="get">
                <div class="input-group">
                  
                    <div class="form-outline w-50">
                      <input type="search" id="form1" class="form-control" name="search" placeholder="Search...." />
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-search"></i>
                    </button>
              
                  </div>
              </form>  
            </div>

            <section class="p-5" id="services">
        <div class="container">
          <div class="row">
                <div class="col-md-4">
                  <div class="card text-center p-3 bg-transparent" >
                    <!-- display-1 to make the icon larger -->
                    <!-- <i class="bi-alarm display-1 text-info"></i> icon -->
                    <i class="bi bi-book display-1"></i>
                    <div class="card-body">
                      <h5 class="card-title">Issued Books</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card text-center p-3 bg-transparent">
                    <!-- display-1 to make the icon larger -->
                    <i class="bi bi-calendar-check display-1"></i> <!--icon -->
                    <div class="card-body">
                      <h5 class="card-title">Books not returned yet</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card text-center p-3 bg-transparent" >
                    <!-- display-1 to make the icon larger -->
                    <i class="bi bi-book-half display-1"></i> <!--icon -->
                    <div class="card-body">
                      <h5 class="card-title">Available Books</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
          </div>

          
            <!-- <div class="col-md-4">
              <div class="card text-center p-3" > -->
                <!-- display-1 to make the icon larger -->
                <!-- <i class="bi-alarm display-1 text-info"></i>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
            <!-- <div class="col-md-12 pt-5">
                <table class="table pt-5 table-hover  table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Sl.no</th>
                        <th scope="col">Issued Books</th>
                        <th scope="col">Issued date</th>
                        <th scope="col">Return date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Wings Of Fire</td>
                        <td>12/06/2021</td>
                        <td>30/06/2021</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Pride and Prejudice</td>
                        <td>1/7/2021</td>
                        <td>15/7/2021</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Crime and Punishment</td>
                        <td>2/8/2021</td>
                        <td>16/8/2021</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Swami and friends</td>
                        <td>2/8/2021</td>
                        <td>16/8/2021</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Harry Potter</td>
                        <td>2/8/2021</td>
                        <td>16/8/2021</td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div> -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php 
}
?>