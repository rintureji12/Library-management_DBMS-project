<?php
session_start();
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Delete book</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
          *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html,body{
  display: grid;
  height: 100%;
  place-items: center;
  background: blueviolet;
}
.center{
  /* display: flex; */
  text-align: center;
  align-items: center;
  justify-content: center;
}
.outer{
  position: relative;
  margin: 0 50px;
  background: #111;
}
.button{
  height: 70px;
  width: 220px;
  border-radius: 50px;
}
.circle{
  height: 200px;
  width: 200px;
  border-radius: 50%;
}
.outer button, .outer span{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.outer button{
  background: #111;
  color: #f2f2f2;
  outline: none;
  border: none;
  font-size: 20px;
  z-index: 9;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
}
.button button{
  height: 60px;
  width: 210px;
  border-radius: 50px;
}
.circle button{
  height: 180px;
  width: 180px;
  border-radius: 50%;
}
.outer span{
  height: 100%;
  width: 100%;
  background: inherit;
}
.button span{
  border-radius: 50px;
}
.circle span{
  border-radius: 50%;
}
.outer:hover span:nth-child(1){
  filter: blur(7px);
}
.outer:hover span:nth-child(2){
  filter: blur(14px);
}
.outer:hover{
  background: linear-gradient(#14ffe9, #ffeb3b, #ff00e0);
  animation: rotate 1.5s linear infinite;
}
@keyframes rotate {
  0%{
    filter: hue-rotate(0deg);
  }
  100%{
    filter: hue-rotate(360deg);
  }
}
@media (max-width: 640px){
  .center{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .outer{
    margin: 50px 0;
  }
}
.input 
{
    margin-bottom:30px;
    border: none;
  background: transparent;
  border-bottom: 1px solid #fff;
  outline: none;
  font-size:13pt;
  height:40px;
  width:280px;
  
}
::placeholder
  {
      color:black;
      opacity:1;
  }
          </style>
   </head>
   <body>
   <form action="validatebook.php" method="post">
   
   <div class="center">
   <input type="text" class="input" name="ISBN" placeholder="  Enter ISBN" />

         <div class="outer button">
            <button type="submit" name="delete">Delete Book</button>
            <span></span>
            <span></span>
         </div>
   </div>    
  
  
</form>
      
   </body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
   <?php 
                   if(isset($_SESSION['success']))
                   {
                        echo'
                            <script>
                            swal({
                                title: "Are you sure?",
                                text: "Once deleted, you will not be able to recover it!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                              })
                              .then((willDelete) => {
                                if (willDelete) {
                                  swal("Book has been deleted!", {
                                    icon: "success",
                                  });
    
                                } 
                              });
                               </script>';
                            }
                               ?>
                    
        

</html>
<?php


unset($_SESSION['success']);
?>