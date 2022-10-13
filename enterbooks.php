
<!DOCTYPE HTML>
<html lang="en" style="scroll-behavior:smooth"> <!--for smooth scrolling to different sections-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "icon" href ="https://media-exp1.licdn.com/dms/image/C5603AQFPwTFlbsV-ag/profile-displayphoto-shrink_200_200/0/1609478420339?e=1645660800&v=beta&t=KstdRmKubsZqHkzNe8chh9Dvq0-VSaQ1EibXhHnk1hY"
        type = "image/x-icon">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
</head>
<body style="background-color: #F5F5F5;">

    <header class="bg-success container-fluid" style="position:fixed;z-index: 1">
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
                                    <a class="nav-link text-white"href="AdminEdit.html">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="deletebook.php">DeleteBook</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="Bookissue.php">IssueBook</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link text-white" href="BookDisplay.php">ViewBooks</a>
                                  </li>
                                  
                                </ul>
        
                              </div>
                      </nav>
                    </div>
        </div>
        </header>
<!-- <body background="librarybg6 (1).jpg" align="center"> -->
    <!--Once the form is submitted, all the form data is forwarded to insertbooks.php -->
    <section id="home" style="padding-top:13em">
    <div class="container">
    <form action="insertbook.php"method ="POST" enctype="multipart/form-data">
 
       
       
        <table border="2" align="center" cellpadding="6" cellspacing="6">
            <tr>
            <td> Enter ISBN :</td>
            <td> <input type="text" name="isbn" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Title :</td>
            <td> <input type="text" name="title" size="48"> </td>
            </tr>
            
            <tr>
            <td> Enter Author :</td>
            <td> <input type="text" name="author" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Genre :</td>
            <td> <input type="text" name="genre" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Availability </td>
            <td> <input type="text" name="status" size="48"> </td>
            </tr>
            <tr>
            <td> Book Image :</td>
            <td> <input type="file"
				name="uploadfile"
				value="" /> </td>    
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="submit" name="upload" value="submit"> 
            <input type="reset" value="Reset">
            </td>
            </tr>  
        </table>
    </form>
</div>
</section>
</body>


</html>

