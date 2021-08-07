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

<!DOCTYPE html>
<html>
<head>
	<title> View data </title>
</head>
<body>

<?php
// Include database connection file
require_once "dbconnect.php";

$show_student_id = $_GET['idst'];

$sql = "SELECT semester,ayear,Out_Student_ID,Mname,Fname,Lname,
Student_ID,study_in_school,Program_of,Mobile,GPAX,Student_Status,Probation_no_value,
credits,semester1,ayear2,Course_code1,Course_title1,Section1,Examination1,Final1,
Course_code2,Course_title2,Section2,Examination2,Final2,Advisor,Dean
FROM insert_database WHERE Student_ID = $show_student_id";

$result = mysqli_query($conn,$sql);

?>

<h2></h2>

<?php
while($row = mysqli_fetch_assoc($result)) {
	$show_semester = $row["semester"];
	$show_ayear = $row["ayear"];
	$show_Out_Student_ID = $row["Out_Student_ID"];
	$show_Mname = $row["Mname"];
	$show_Fname = $row["Fname"];
	$show_Lname = $row["Lname"];
	$show_ID = $row["Student_ID"];
	$show_study_in_school = $row["study_in_school"];
	$show_Program_of = $row["Program_of"];
	$show_Mobile = $row["Mobile"];
	$show_GPAX = $row["GPAX"];
	$show_Student_Status = $row["Student_Status"];
	$show_Probation_no_value = $row["Probation_no_value"];
	$show_credits = $row["credits"];
	$show_semester1 = $row["semester1"];
	$show_ayear2 = $row["ayear2"];
	$show_Course_code1 = $row["Course_code1"];
	$show_Course_title1 = $row["Course_title1"];
	$show_Section1 = $row["Section1"];
	$show_Examination1 = $row["Examination1"];
	$show_Final1 = $row["Final1"];
	$show_Course_code2 = $row["Course_code2"];
	$show_Course_title2 = $row["Course_title2"];
	$show_Section2 = $row["Section2"];
	$show_Examination2 = $row["Examination2"];
  $show_Final2 = $row["Final2"];
  $show_Advisor = $row["Advisor"];
  $show_Dean = $row["Dean"];
}
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
  <body>
     <form action="insert_student.php" method="POST">
    

<?php
// Include database connection file
require_once "dbconnect.php";
// Database query.
//********************************แก้
//$sql = "SELECT EMPLOYEE_ID, FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUMBER  FROM employees";
//$result = mysqli_query($conn,$sql);
?>

  <div class="container" ><br>
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
          <label >Recorded by :  ...................................</label>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <center><p>DIVISION OF REGISTER, MAE FAH LUANG UNIVERSITY</p></center>
          <center><p>Request Form for Enroll in courses with special concurrent examinations</p></center>
          <center><label>Semester :</label>&ensp;&ensp;&ensp;
          <?php if(trim($show_semester)=="first"){ ?>
              <input type="radio" name="semester" value="first" checked>first&ensp;&ensp;&ensp;
              <input type="radio" name="semester" value="second" disabled>second&ensp;&ensp;&ensp;
              <input type="radio" name="semester" value="summer" disabled>summer
            <?php }else if(trim($show_semester)=="second"){ ?>
              <input type="radio" name="semester" value="first" disabled> first&ensp;&ensp;&ensp;
              <input type="radio" name="semester" value="second" checked > second&ensp;&ensp;&ensp;
              <input type="radio" name="semester" value="summer" disabled> summer
            <?php } else { ?>
                <input type="radio" name="semester" value="first"disabled> first&ensp;&ensp;&ensp;
                <input type="radio" name="semester" value="second" disabled>second&ensp;&ensp;&ensp;
                <input type="radio" name="semester" value="summer"  checked> summer
            <?php } ?>&ensp;&ensp;
            <label for="ayear" name="ayear">Academic year :</label>&ensp;&ensp;<?=$show_ayear?>
              
        </div>
        <div class="col-4"></div> 
      </div><br>
      <div class="row">
        <div>
          <p1  class="col-6">(1) To Head of the Division of Registrar</p1>  
        </div>
      </div><br>
      <div class="row">
        <div class="col-8" ></div>
        <div class="col-4" >
          <label for="Out_Student_ID">Out of status's Student ID : </label>&ensp;&ensp;<?=$show_Out_Student_ID?> 
        </div>   
	  </div> 
	  
      <div class="row" > 
    	<div class = "col-3"><label for="Fname">Name : </label>&ensp;&ensp;<?= $show_Mname ?> <?= $show_Fname ?></div>
		<div class = "col-3"><label for="Lname">Last name : </label>&ensp;&ensp;<?=$show_Lname?></div>
		<div class = "col-2"></div>
		<div class="col-4">  
            <label for="Student_ID" > &ensp;&ensp;&ensp;&ensp;&ensp;  Current Student ID : </label>&ensp;&ensp;<?=$show_ID?> 	
        </div>
	  </div>
	  
      <div class="row">
        <div class="col-5"  >
          <label for="study_in_school"> Study in the School of : </label>&ensp;&ensp;<?=$show_study_in_school?>
        </div>  
        <div class="col-4"  >      
                <label for="Program_of">Program of : </label> &ensp;&ensp;<?=$show_Program_of?>
        </div>
        <div class="col-3">
            <label for="Mobile" >Mobile phone : </label>&ensp;&ensp;<?=$show_Mobile?>
        </div>
    </div>

<div class="row">
        <div class="col-4" >
        <label  for="GPAX">Cumulative grade point average (GPAX) : </label>&ensp;&ensp;<?=$show_GPAX?>
        </div>
        <div class="col-8" id="rt">
        <label >Student Status : </label>&ensp;&ensp;&ensp;&ensp;

        <?php if(trim($show_Student_Status)=="Normal"){ ?>
          <input type="radio" name="Student_Status" id="Normal" value="Normal" checked>Normal&ensp;&ensp;&ensp;
          <input type="radio" name="Student_Status" id="Probation_no" value="Probation_no" disabled>Probation No
          &ensp;&ensp;&ensp;<?=$show_Probation_no_value?>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <?php } else { ?>
          <input type="radio" name="Student_Status" id="Normal" value="Normal" disabled>Normal&ensp;&ensp;&ensp;
          <input type="radio" name="Student_Status" id="Probation_no" value="Probation_no" checked>Probation No
          &ensp;&ensp;&ensp;<?=$show_Probation_no_value?>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <?php } ?> 
        </div>    

</div>

<div class="row">
    <div class="col-4" >
            <label for="credits">Total credits left : </label>&ensp;&ensp;&ensp;<?=$show_credits?>
    </div>
    <div class="col-8" id="rt" >
            <label>credits and registrered in the : </label>&ensp;&ensp;<?=$show_semester1?>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <label for="ayear2">Academic year : </label>&ensp;&ensp;&ensp;<?=$show_ayear2?>  
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
          <label for="Course_code1">1. Course code : </label>&ensp;&ensp;<?=$show_Course_code1?>
        </div >
        <div  class="col-6"> 
        <label for="Course_title1">Course title : </label>&ensp;&ensp;<?=$show_Course_title1?>
        </div >
     
</div>

<div class="row">
        <div class="col-1">
        </div>
          <div class="col-3"> &ensp;  
              <label for="Section1">Section : </label>&ensp;<?=$show_Section1?>
          </div>

          <div class="col-5" >    
              <label for="Examination1">Examination date Midterm : </label>&ensp;&ensp;<?=$show_Examination1?>
              </div>
              <div class="col-3"  id="rt" >
              <label for="Final1">Final : </label>&ensp;&ensp;<?=$show_Final1?>
              </div>
</div>




<div class="row">
      <div class="col-1">
        </div>
        <div  class="col-5">     
          <label for="Course_code2">2. Course code : </label>&ensp;&ensp;<?=$show_Course_code2?>
          </div>
          <div  class="col-6">  
          <label for="Course_title2">Course title : </label>&ensp;&ensp;<?=$show_Course_title2?>
        </div>
</div>

<div class="row">
        <div class="col-1">
        </div>
          <div class="col-3"> &ensp;  
              <label for="Section2">Section : </label>&ensp;&ensp;<?=$show_Section2?>
          </div>
          <div class="col-5" >    
              <label for="Examination2">Examination date Midterm : </label>&ensp;&ensp;<?=$show_Examination2?> 
          </div>
          <div  class="col-3"  id="rt">      
              <label for="Final2">Final : </label>&ensp;&ensp;<?=$show_Final2?>
          </div>
</div>
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
      
</div>
<div class="container">
        <table border="3" class="col-12">
          <tr>
            <th>
            (2) Advisor's Comment<br><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;.............................................................&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;.............................................................&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;.............................................................&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<br><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Signature ........................... <br>  
            <?php if($show_Advisor==NULL){ ?>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;(............................)<br>
            <?php }else{ ?>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;(<?=$show_Advisor?>)<br>
            <?php } ?>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;........./.........../........
            </th>
          <th >
            (4) Recorded by the Division of Register's staff<br><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;▢ Redundancy of Midterm Exam &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;▢ Redundancy of Final Exam<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;▢ Both of redundancy<br><br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Signature ........................... <br>  
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;(............................)<br>
            &ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;........./.........../........
            <br>
             
            </th>
          </tr>
        <tr>
          <th>(3) Dean's Coment<br><br>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;▢ Approved<br>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;▢ Disapproved because......................................<br>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;...............................................................................<br>
          <br>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Signature ........................... <br>  
          <?php if($show_Dean==NULL){ ?>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;(............................)<br>
          <?php }else{ ?>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;(<?=$show_Dean?>)<br>
          <?php } ?>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;........./.........../........
            
          
          </th>
          <th>(5) Head of Division of Registrar's Comment <br><br>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;▢ Acknowlegded<br>
          <br>
          <br>
          <br>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Signature ........................... <br>  
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;(............................)<br>
          &ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;........./.........../........
            
          </th>
        </tr>
        </table>

</div>



  <div class="container" id="ct">
    <div><br><br><br>
    <input type="button" name="Button" value="Print" onclick="javascript:this.style.display='none';window.print();" class="btn btn-secondary" id="result">
    <?php if($show_your_id == "admin"){?>
        <a href="read_table_admin.php" class="btn btn-secondary">back</a> </button>
      <?php } else { ?>
        <a href="read_table_user.php" class="btn btn-secondary">back</a> </button>
      <?php } ?>
      <br><br><br><br>
    </div>




  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>

	
	</body>
</html>