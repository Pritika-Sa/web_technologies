<?php
session_start();
if(!isset($_SESSION['name']))
{
    header('location:index.php');
}
?>


<html>
  <head>

    <title>
        Cozy Interiors!!
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="style.php">

  </head>

  <body style="color:white;">
      <h1 style="color:rgba(223, 108, 37, 0.775);"><center><B>Welcome to Cozy Interiors!!</B></center></h1><br>

        <nav class="navbar navbar-expand-sm bg-black navbar-dark sticky-top">
            <div class="container-fluid" style="justify-content: center;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="collections.php">Collections</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>
              </li>
                  </ul>
          </div>
        </nav><br>


      <h3><center><i>SOME OF</i><i><br>
            OUR <br>LATEST COLLECTIONS...</center></i></h3>

           <h2>WELCOME
            <?php echo $_SESSION['name'];
    
            ?></h2>

      <div class="gallery">
            
            <img src="https://tobel.qodeinteractive.com/wp-content/uploads/2021/04/home-5-port-1.jpg" alt="comfortable room" width="250" height="250">
          </a>
          <div class="desc">Modern Room</div>
        </div>
        
        <div class="gallery">
            <img src="https://tobel.qodeinteractive.com/wp-content/uploads/2021/04/Masonry-product-list-img-1.jpg" alt="modern clock" width="250" height="250">
          </a>
          <div class="desc">Modern clock</div>
        </div>
        
        <div class="gallery">
              <img src="https://tobel.qodeinteractive.com/wp-content/uploads/2021/04/Masonry-product-list-img-6.jpg" alt="leather chair" width="250" height="250">
          </a>
          <div class="desc">Leather chair</div>
        </div>
        
        <div class="gallery">
              <img src="https://tobel.qodeinteractive.com/wp-content/uploads/2021/04/Product-feat-img-14-768x1016.jpg" alt="wire lamp" width="250" height="150">
          </a>
          <div class="desc">wire lamp</div>
        </div>

        <div class="gallery">
              <img src="https://tobel.qodeinteractive.com/wp-content/uploads/2021/04/port-big-img-1.jpg" alt="living room" width="250" height="150">
          </a>
          <div class="desc">Living room</div>
        </div>

        <div class="gallery">
          <a target="_blank">
              <img src="https://tobel.qodeinteractive.com/wp-content/uploads/2021/04/Masonry-product-list-img-5.jpg" alt="art-deco lamp" width="250" height="150">
          </a>
          <div class="desc">Art-deco lamp</div>
        </div>

      <h3><center><i>ACHIEVEMENTS...</i></center></h3>

      <h4 style="font-family: cursive;font-size: large;">Our furniture company achieved a 20% increase in sales, expanding our market presence through innovative designs and sustainable practices. 
        We received industry recognition for our commitment to quality craftsmanship and customer satisfaction.
        We successfully launched a new line of eco-friendly furniture, contributing to environmental conservation efforts.
        Also,we established strategic partnerships with leading interior designers, enhancing brand visibility and market positioning. Through continuous improvement and customer-centric approach, 
        our company solidified its reputation as a leader in the furniture industry.</h4><br>

      <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><center>You have to be able to get up and dust yourself off and always be going forward.</center></h3><br>

          <table style="width:100%">
          <tr>
          <th>Awards!!</th>
          <th>Recognition!!</th>
          </tr>

          <tr>
          <td>Brand Excellence Award.</td>
          <td>Product Excellence Award.</td>
          </tr>

          <tr>
          <td>Welcome to Italy 2020</td>
          <td>The time of the events, Rome 2021</td>
          </tr>
          </table><br><hr>

      <h3><center><i>SHADES OF ELEGENCE...</i></h3></center>

          <center><button class="button button2"onclick="document.location='https://colorhunt.co/'">Touch to color your ideas</button>
          <button class="button button2"onclick="document.location='https://styleandease.ca/fabric-chart'">Touch to fabric your ideas</button>
        </center><hr>

      <div class="container-fluid p-5 bg-basic text-white text-center">
          <div class="container mt-5">
              <div class="row">
                <div class="col-sm-4">
                  <h3><i>At Work!!</i></h3>
                  <p>We make interiors infused with the spirit of contemporary design and minimalist philosophies.</p>
                </div>

                <div class="col-sm-4">
                  <h3>Designers</h3>
                      <p>Italymobile</p>
                      <p>Sweden Int</p>
                      <p>Arch. France</p>
                </div>

                <div class="col-sm-4">
                  <h3>Details</h3>
                  <div class="dropdown">
                    <button type="button" class="btn btn-basic dropdown-toggle" data-bs-toggle="dropdown" style="color: white;">
                      Branches
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Mysore</a></li>
                      <li><a class="dropdown-item">Banglore</a></li>
                      <li><a class="dropdown-item">Coimbatore</a></li>
                    </ul>
                  </div>
                    Contact us on - +91 94637 47292<br>
                    Mail id - cozyinterior@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
  </body>
</html>