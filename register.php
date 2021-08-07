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

    <title>REGISTER</title>
  </head>
<body style="font-family: 'sans-serif';">
    
   




  <div class="container"  >
    
      
        <div class="row">
          <div class="col-12" >
            <img src="img/mfu_logo.png" class="img-fluid"  width="500" >
          </div>
          
        </div>

        <div class="row">
          <div class="col" >

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
      <div class="col-12 col-sm-6">
        <form action="register_db.php" method="post">
        <p id="loginwel">REGISTER</p>
        
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                </div>
                <input type="text" name="username" id="username"  class="form-control"   aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Your ID">
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                </div>
                <input type="text" name="email" id="email"  class="form-control"   aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                </div>
                <input type="password" name="password_1" id="password_1"  class="form-control"   aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Confirm Password</span>
                </div>
                <input type="password" name="password_2" id="password_2"  class="form-control"   aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
        
        <button  type="submit" name="reg_user" class="btn btn-outline-success btn-lg btn-block" >Create account</button>
        <br>
        <p>Already a member? <a href="login.php">Sign in</a></p>
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <p>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </p>
            </div>
        <?php endif ?>
      
        </form>
      </div>
      <div class="col-12 col-sm-6">
      <p id="ct"><img  src="img/regis.jpg" class="img-fluid"   ></p>
      </div>

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