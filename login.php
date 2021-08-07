<?php
    session_start();
    include('dbconnect.php'); 

?>

<!doctype html>
<html lang="en">
  <head >
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css_form.css" type="text/css" />

    <title>LOGIN</title>
  </head>
  <body style="font-family: 'sans-serif';" >
 
  <div class="container"  >
    
      
        <div class="row">
          <div class="col-12" >
            <img src="img/mfu_logo.png" class="img-fluid"  width="500" >
          </div>
          
        </div>

        <div class="row">
          <div class="col-12" >

              <nav class="navbar navbar-expand-lg navbar navbar-light " style="background-color: #C0392B;">
                  <a class="navbar-brand" href="#" id="textyellow">MAE FAH LUANG</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="home_page.php" id="textyellow">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://www.mfu.ac.th/" id="textyellow" >Official</a>
                      <li class="nav-item">
                        <a class="nav-link" href="https://reg.mfu.ac.th/registrar/home.asp" id="textyellow">REG</a>
                      </li>
                      <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #F1C40F;">
                          Schools
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/school-of-agro-industry.html" >School of Agro-Industry</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofanti-agingandregener.html">School of Anti-Aging and Regenerative Medicine</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofcosmeticscience.html">School of Cosmetic Science</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofdentistry.html">School of Dentistry</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofhealthscience.html">School of Health Science</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofinformationtechnology.html">School of Information Technology</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofintegrativemedicine.html">School of Integrative Medicine</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schooloflaw.html">School of Law</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofliberalarts.html">School of Liberal Arts</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofmanagement.html">School of Management</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofmedicine.html">School of Medicine</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofnursing.html">School of Nursing</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofscience.html">School of Science</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofsinology.html">School of Sinology</a>
                          <a class="dropdown-item" href="https://en.mfu.ac.th/schools/schoolofsocialinnovation.html">School of Social Innovation</a>
                        </div>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
          </div>
        </div>
        <br>
        
    <div class="row">
      <div class="col-12 col-sm-6" >
        <p id="loginwel">Welcome to MFU</p>
        <p id="ct"><img  src="img/login.png" class="img-fluid"   width="200" ></p>
      </div>
      <div class="col-12 col-sm-6">
      <form action="login_db.php" method="post">
        <br>
        <div class="input-group">
            <label for="username" class="input-group-text" id="inputGroup-sizing-default">Username</label>
            <input type="text" name="username"  class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Your ID"> 
        </div>
        <br>
        <div class="input-group">
            <label for="password"  class="input-group-text" id="inputGroup-sizing-default">Password</label>
            <input type="password" name="password"   class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" >
        </div>
        <br>
        <div>
            <button type="submit" name="login_user" class="btn btn-outline-success btn-lg btn-block">Login</button>
        </div>
        <br>
        <p>Not yet a member? <a href="register.php">Sign Up</a></p>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    </form>
    </div>
      
      
          
        

      


      
        
   
    
      
        
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>