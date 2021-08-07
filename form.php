<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

$show_your_id = $_SESSION['username'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="css_form.css" type="text/css" />

    <title>FORM</title>
  </head>

  <script>
    function Submit() {
      var showAL = document.getElementById('Fname').value;
      alert ("Thank you, " + showAL + " for your application.");}
    
  </script>
  <body >
     <form action="insert_student.php" method="POST">
    

<?php
// Include database connection file
require_once "dbconnect.php";
// Database query.
//********************************แก้
//$sql = "SELECT EMPLOYEE_ID, FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUMBER  FROM employees";
//$result = mysqli_query($conn,$sql);


?>

  <div class="container" ><br><br><br>
  <div id="rt">REG-217</div>
    <div class="row">  
      <div class="col-3" id="sq"><br>           
        <label >School of : ........................................ </label><br>
        <label>Mae Fah Luang University</label><br>
        <label >No : ................................................</label><br>
        <label >Date : ........................................</label><br>
        <label>Time : .............</label>
        <label >Recorded by : ...........</label>
      </div>
      <div class="col-6"><center><img src="img\logo_mfu_3d_colour.png" alt="LOGO"  width="140 "></center></div>
        <div class="col-3" id="sq" ><br>
          <label>The Division of Register</label><br>
          <label>Mae Fah Luang University</label><br>
          <label >No : ................................................</label><br>
          <label >Date : ........................................</label><br>
          <label >Time : ........................................</label><br>
          <label >Recorded by :  .....................................</label>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <center><p>DIVISION OF REGISTER, MAE FAH LUANG UNIVERSITY</p></center>
          <center><p>Request Form for Enroll in courses with special concurrent examinations</p></center>
          <center><label>Semester</label>&ensp;&ensp;
          
            <input type="radio" name="semester" id="first" value="first" >
            <label for="first">First</label>&ensp;&ensp;

            <input type="radio" name="semester" id="second" value="second" >
            <label for="second">Second</label>&ensp;&ensp;

            <input type="radio" name="semester" id="summer" value="summer" >
            <label for="summer">Summer</label>&ensp;&ensp;
         
            <label for="ayear" name="ayear">Academic year :</label>
              <select name="ayear" id="ayear" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="3">5</option>
                <option value="4">6</option>
              </select>  
        </div>
        <div class="col-4"></div> 
      </div><br>
      <div class="row">
        <div>
          <p1  class="col-6">(1) To Head of the Division of Registrar</p1>  
        </div>
      </div><br>
      <div class="row">
        <div class="col-7" ></div>
        <div class="col-5" id="rt" >
          <label for="Out_Student_ID">Out of status's Student ID</label>
          <input type="text" name="Out_Student_ID" id="Out_Student_ID"  size = "30" > 
        </div>   
      </div> 
      <div class="row" > 
    
        <div class="col-7" id="rt"  >
        
            <label for="Fname">First name</label>
            <select  name="Mname" id="Mname" >
                    <option value="Mr">Mr.</option>
                    <option value="Miss">Miss.</option>
                    <option value="Mrs">Mrs.</option> 
                  </select>
                  
                    <input type="text" name="Fname" id="Fname" required size = "20">
                    <label for="Lname">Last name</label>
                    <input type="text" name="Lname" id="Lname" required size = "20">
        </div>  
        <div class="col-5" id="rt" >  
            <label for="Student_ID">Current Student ID </label>
            <input type="text" name="Student_ID" id="Student_ID"  size = "30" required > 
        </div>
      </div>
      <div class="row">
        <div class="col-5"  >
          <label for="study_in_school"> Study in the School of </label>
                 <select name="study_in_school" id="study_in_school" >
                    <option value="School of Liberal Arts">Liberal Arts</option>
                    <option value="School of Science">Science</option>
                    <option value="School of Management">Management</option>
                    <option value="School of Information Technology">Information Technology</option>
                    <option value="School of Agro-Industry">Agro-Industry</option>
                    <option value="School of Law">Law</option>
                    <option value="School of Cosmetic Science">Cosmetic Science</option>
                    <option value="School of Health Science">Health Science</option>
                    <option value="School of Nursing">Nursing</option>
                    <option value="School of Medicine">Medicine</option>
                    <option value="School of Dentistry">Dentistry</option>
                    <option value="School of Social Innovation">Social Innovation</option>
                    <option value="School of Sinology">Sinology</option>
                    <option value="School of Integrative Medicine">Integrative Medicine</option>                       
                </select>
         </div>  
         <div class="col-7" id="rt"  >     
                <label for="Program_of">Program of</label>
                <input type="text" name="Program_of" id="Program_of"  size="30">
               
                
            <label for="Mobile" >Mobile phone</label>
            <input type="text" name="Mobile" id="Mobile" required  size="20" >
        </div>
    </div>

<div class="row">
        <div class="col-4" >
        <label  for="GPAX">Cumulative grade point average (GPAX)</label>
            <input type="text" name="GPAX" id="GPAX" required size="1" >
        </div>
        <div class="col-8" id="rt">
        <label >Student Status</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;

            <input type="radio" name="Student_Status" id="Normal" value="Normal" >
            <label for="Normal">Normal</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <input type="radio" name="Student_Status" id="Probation" value="Probation" >
            <label for="Probation_no_value">Probation No</label>&ensp;
            <input type="text" name="Probation_no_value" id="Probation_no_value"  size="30" value="-">
        </div>    

</div>

<div class="row">
    <div class="col-4" >
            <label for="credits">Total credits left</label>&ensp;
            <input type="number" name="credits" id="credits" required > 
    </div>
    <div class="col-8" id="rt" >
            <label>credits and registrered in the</label>&ensp;&ensp;&ensp;&ensp;
            <input type="radio" name="semester1" id="first1" value="first" >
            <label for="first1">First</label>&ensp;&ensp;&ensp;&ensp;

            <input type="radio" name="semester1" id="second1" value="second" >
            <label for="second1">Second</label>&ensp;&ensp;&ensp;&ensp;

          <input type="radio" name="semester1" id="summer1" value="summer" >
            <label for="summer1">Summer</label>&ensp;&ensp;&ensp;&ensp;

            <label for="ayear2">Academic year</label>&ensp;&ensp;&ensp;
                 <select name="ayear2" id="ayear2" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="3">5</option>
                    <option value="4">6</option>
                </select>  
    </div>        
</div>

<div class="row">
    <div class="col-12" >
        has the courses with concurrent examinations in which I would like to enroll
      </div>    
</div>
<br>
<div class="row">
      <div class="col-1">
        </div>
        <div  class="col-5">     
          <label for="Course_code1">1. Course code</label>&ensp;&ensp;
          <input type="text" name="Course_code1" id="Course_code1" required size = "30" > 
        </div >
        <div  class="col-6"  id="rt"> 
        <label for="Course_title1">Course title</label>&ensp;&ensp;
        <input type="text" name="Course_title1" id="Course_title1" required size = "50" > 
        </div >
     
</div>

<div class="row">
        <div class="col-1">
        </div>
          <div class="col-3"> &ensp;  
              <label for="Section1">Section</label>&ensp;
              <input type="text" name="Section1" id="Section1" required size = "10" > 
          </div>

          <div class="col-5" >    
              <label for="Examination1">Examination date Midterm</label>&ensp;&ensp;
              <input type="date" name="Examination1" id="Examination1" required  > 
              </div>
              <div class="col-3"  id="rt" >
              <label for="Final1">Final</label>&ensp;&ensp;
              <input type="date" name="Final1" id="Final1" required  > 
              </div>
</div>




<div class="row">
      <div class="col-1">
        </div>
        <div  class="col-5">     
          <label for="Course_code2">2. Course code</label>&ensp;&ensp;
          <input type="text" name="Course_code2" id="Course_code2" required size = "30" > 
          </div>
          <div  class="col-6"  id="rt">  
          <label for="Course_title2">Course title</label>&ensp;&ensp;
          <input type="text" name="Course_title2" id="Course_title2" required size = "50" > 
        </div>
</div>

<div class="row">
        <div class="col-1">
        </div>
          <div class="col-3"> &ensp;  
              <label for="Section2">Section</label>
              <input type="text" name="Section2" id="Section2" required size = "10" > 
          </div>
          <div class="col-5" >    
              <label for="Examination2">Examination date Midterm</label>&ensp;&ensp;  
              <input type="date" name="Examination2" id="Examination2" required > 
          </div>
          <div  class="col-3"  id="rt">      
              <label for="Final2">Final</label>&ensp;&ensp;  
              <input type="date" name="Final2" id="Final2" required > 
          </div>
</div>
<br>
<br>
<br>
  <div class="name" >
   <div id="rt">   
     <label for="Student_Signature" >Student's Signature............................................................................</label>

      </div>
      <div id="rt">   
     <label for="Student_Signature" >(............................................................................)</label>

      </div>
      <div>
        <label for="Date3">Date.............../.............../...............</label>
        
        </div>
        </div>
      
<br><br>
        
        <table border="3" class="col-12">
          <tr>
            <th >
            (2) Advisor's Comment<br><br><br>
              <pre>
            ..........................................       
            ..........................................       
            ..........................................                  


                      Singnature ............................
                                 (..........................)
                                 ........./........./........
              </pre>
            </th>
          <th >
          (4) Recorded by the Division of Register's staff<br><br><br>
              <pre>
              ▢  Redundancy of Midterm Exam      
              ▢  Redundancy of Final Exam     
              ▢  Both of redundancy          


                      Singnature ............................
                                 (..........................)
                                 ........./........./........
              </pre>
            </th>
          </tr>
        <tr>
          <th>(3) Dean's Coment<br><br><br>
          <pre>
              ▢  Approved        
              ▢  Disapproved because......................       
              .............................................      


                      Singnature ............................
                                 (..........................)
                                 ........./........./........
              </pre>
          </th>
          <th>(5) Head of Division of Registrar's Comment <br><br><br>
          <pre>
              ▢  Acknowlegded        
                    



                      Singnature ............................
                                 ( Mr.Ruangsak  Kiengkamon  )
                                 ........./........./........
              </pre>
          </th>
        </tr>
        </table>

</div>



  <div class="container" id="ct">
    <div><br><br><br>
      <button type="reset" value="Reset" class="btn btn-secondary">Reset</button>
      <button onclick="Submit()" class="btn btn-secondary">Submit</button>

      <?php if($show_your_id == "admin"){?>
        <a href="read_table_admin.php" class="btn btn-secondary">back</a> </button>
      <?php } else { ?>
        <a href="read_table_user.php" class="btn btn-secondary">back</a> </button>
      <?php } ?>

      <a href="home_page.php" class="btn btn-secondary">Log out</a> </button>


      <br><br><br><br>
    </div>




  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>