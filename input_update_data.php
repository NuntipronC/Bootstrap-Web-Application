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
	<title> Update </title>
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
<form action="update_data.php" method="post">
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
 
  <body >
     <form action="update_data.php" method="POST">
    

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
          <label >Recorded by :  ........................................</label>
        </div>
      </div>
      <div class="row">
        <div class="col-12"  >
          <center><p>DIVISION OF REGISTER, MAE FAH LUANG UNIVERSITY</p></center>
          <center><p>Request Form for Enrool in courses with special concurrent examinations</p></center>
          <center><label>Semester</label>&ensp;&ensp;          
            <?php if(trim($show_semester)=="first"){ ?>
              <input type="radio" name="semester" value="first" checked>first&ensp;&ensp;&ensp;
              <input type="radio" name="semester" value="second" >second&ensp;&ensp;&ensp;
              <input type="radio" name="semester" value="summer" >summer
            <?php }else if(trim($show_semester)=="second"){ ?>
              <input type="radio" name="semester" value="first" > first&ensp;&ensp;&ensp;
              <input type="radio" name="semester" value="second" checked > second&ensp;&ensp;&ensp;
              <input type="radio" name="semester" value="summer" > summer
            <?php } else { ?>
                <input type="radio" name="semester" value="first"> first&ensp;&ensp;&ensp;
                <input type="radio" name="semester" value="second" >second&ensp;&ensp;&ensp;
                <input type="radio" name="semester" value="summer"  checked> summer
            <?php } ?>
         


            
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <label for="ayear" name="ayear">Academic year :</label>            
              <select name="ayear" id="ayear" >
              <?php if(trim($show_ayear)=="1"){ ?>
                <option value="1" selected >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php }else if (trim($show_ayear)=="2"){ ?>
                <option value="1" >1</option>
                <option value="2" selected >2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php }else if (trim($show_ayear)=="3"){ ?>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" selected>3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php }else if (trim($show_ayear)=="4"){ ?>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4"  selected>4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php }else if (trim($show_ayear)=="5"){ ?>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4"  >4</option>
                <option value="5"  selected>5</option>
                <option value="6">6</option>
              <?php }else { ?>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4"  >4</option>
                <option value="5"  >5</option>
                <option value="6"selected >6</option>
              <?php } ?>
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
        <div class="col-6" ></div>
        <div class="col-6" id="rt" >
          <label for="Out_Student_ID">Out of status's Student ID</label>
          <input type="text" name="Out_Student_ID" id="Out_Student_ID"  size = "40" value="<?=$show_Out_Student_ID?>"> 
        </div>   
      </div> 
      <div class="row" > 
    
        <div class="col-6"  >
        
            <label for="Fname">First name</label>
            <select  name="Mname" id="Mname" >
            <?php if(trim($show_Mname)=="Mr"){ ?>
                <option value="Mr" selected >Mr.</option>
                <option value="Miss">Miss.</option>
                <option value="Mrs">Mrs.</option>
              <?php }else if (trim($show_Mname)=="Miss"){ ?>
                <option value="1" >Mr.</option>
                <option value="Miss" selected >Miss.</option>
                <option value="Mrs">Mrs.</option>
              <?php }else{ ?>
                <option value="Mr" >Mr.</option>
                <option value="Miss" >Miss.</option>
                <option value="Mrs" selected>Mrs.</option>
              <?php }?>
                  </select>
                  
                    <input type="text" name="Fname" id="Fname" required size = "15" value="<?=$show_Fname?>">
                    <label for="Lname">Last name</label>
                    <input type="text" name="Lname" id="Lname" required size = "15" value="<?=$show_Lname?>">
        </div>  
        <div class="col-6" id="rt" >  
            <label for="Student_ID">Current Student ID </label>
            <input type="text" name="Student_ID" id="Student_ID" required size = "40" value="<?=$show_ID?>" readonly> 
        </div>
      </div>
      <div class="row">
        <div class="col-5"  >
          <label for="study_in_school"> Study in the School of </label>
                 <select name="study_in_school" id="study_in_school" >
                    <?php if(trim($show_study_in_school)=="School of Liberal Arts"){ ?>
                      <option value="School of Liberal Arts"selected>Liberal Arts</option>
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
                    <?php }else if(trim($show_study_in_school)=="School of Science"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science"selected>Science</option>
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
                    <?php }else if(trim($show_study_in_school)=="School of Management"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science">Science</option>
                      <option value="School of Management"selected>Management</option>
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
                    <?php }else if(trim($show_study_in_school)=="School of Information Technology"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science">Science</option>
                      <option value="School of Management">Management</option>
                      <option value="School of Information Technology"selected>Information Technology</option>
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
                    <?php }else if(trim($show_study_in_school)=="School of Agro-Industry"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science">Science</option>
                      <option value="School of Management">Management</option>
                      <option value="School of Information Technology">Information Technology</option>
                      <option value="School of Agro-Industry"selected>Agro-Industry</option>
                      <option value="School of Law">Law</option>
                      <option value="School of Cosmetic Science">Cosmetic Science</option>
                      <option value="School of Health Science">Health Science</option>
                      <option value="School of Nursing">Nursing</option>
                      <option value="School of Medicine">Medicine</option>
                      <option value="School of Dentistry">Dentistry</option>
                      <option value="School of Social Innovation">Social Innovation</option>
                      <option value="School of Sinology">Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php }else if(trim($show_study_in_school)=="School of Law"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science">Science</option>
                      <option value="School of Management">Management</option>
                      <option value="School of Information Technology">Information Technology</option>
                      <option value="School of Agro-Industry">Agro-Industry</option>
                      <option value="School of Law"selected>Law</option>
                      <option value="School of Cosmetic Science">Cosmetic Science</option>
                      <option value="School of Health Science">Health Science</option>
                      <option value="School of Nursing">Nursing</option>
                      <option value="School of Medicine">Medicine</option>
                      <option value="School of Dentistry">Dentistry</option>
                      <option value="School of Social Innovation">Social Innovation</option>
                      <option value="School of Sinology">Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php }else if(trim($show_study_in_school)=="School of Cosmetic Science"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science">Science</option>
                      <option value="School of Management">Management</option>
                      <option value="School of Information Technology">Information Technology</option>
                      <option value="School of Agro-Industry">Agro-Industry</option>
                      <option value="School of Law">Law</option>
                      <option value="School of Cosmetic Science"selected>Cosmetic Science</option>
                      <option value="School of Health Science">Health Science</option>
                      <option value="School of Nursing">Nursing</option>
                      <option value="School of Medicine">Medicine</option>
                      <option value="School of Dentistry">Dentistry</option>
                      <option value="School of Social Innovation">Social Innovation</option>
                      <option value="School of Sinology">Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php }else if(trim($show_study_in_school)=="School of Health Science"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science">Science</option>
                      <option value="School of Management">Management</option>
                      <option value="School of Information Technology">Information Technology</option>
                      <option value="School of Agro-Industry">Agro-Industry</option>
                      <option value="School of Law">Law</option>
                      <option value="School of Cosmetic Science">Cosmetic Science</option>
                      <option value="School of Health Science"selected>Health Science</option>
                      <option value="School of Nursing">Nursing</option>
                      <option value="School of Medicine">Medicine</option>
                      <option value="School of Dentistry">Dentistry</option>
                      <option value="School of Social Innovation">Social Innovation</option>
                      <option value="School of Sinology">Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php }else if(trim($show_study_in_school)=="School of Nursing"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science">Science</option>
                      <option value="School of Management">Management</option>
                      <option value="School of Information Technology">Information Technology</option>
                      <option value="School of Agro-Industry">Agro-Industry</option>
                      <option value="School of Law">Law</option>
                      <option value="School of Cosmetic Science">Cosmetic Science</option>
                      <option value="School of Health Science">Health Science</option>
                      <option value="School of Nursing"selected>Nursing</option>
                      <option value="School of Medicine">Medicine</option>
                      <option value="School of Dentistry">Dentistry</option>
                      <option value="School of Social Innovation">Social Innovation</option>
                      <option value="School of Sinology">Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php }else if(trim($show_study_in_school)=="School of Medicine"){ ?>
                      <option value="School of Liberal Arts">Liberal Arts</option>
                      <option value="School of Science">Science</option>
                      <option value="School of Management">Management</option>
                      <option value="School of Information Technology">Information Technology</option>
                      <option value="School of Agro-Industry">Agro-Industry</option>
                      <option value="School of Law">Law</option>
                      <option value="School of Cosmetic Science">Cosmetic Science</option>
                      <option value="School of Health Science">Health Science</option>
                      <option value="School of Nursing">Nursing</option>
                      <option value="School of Medicine"selected>Medicine</option>
                      <option value="School of Dentistry">Dentistry</option>
                      <option value="School of Social Innovation">Social Innovation</option>
                      <option value="School of Sinology">Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php }else if(trim($show_study_in_school)=="School of Dentistry"){ ?>
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
                      <option value="School of Dentistry"selected>Dentistry</option>
                      <option value="School of Social Innovation">Social Innovation</option>
                      <option value="School of Sinology">Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php }else if(trim($show_study_in_school)=="School of Social Innovation"){ ?>
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
                      <option value="School of Social Innovation"selected>Social Innovation</option>
                      <option value="School of Sinology">Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php }else if(trim($show_study_in_school)=="School of Sinology"){ ?>
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
                      <option value="School of Sinology"selected>Sinology</option>
                      <option value="School of Integrative Medicine">Integrative Medicine</option>
                    <?php } else { ?>
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
                      <option value="School of Integrative Medicine"selected>Integrative Medicine</option>
                    <?php } ?>                      
                </select>
         </div>  
        <div class="col-7"  >      
            <label for="Program_of">Program of</label>
            <input type="text" name="Program_of" id="Program_of" size="30" value="<?=$show_Program_of?>">
            <label for="Mobile" >Mobile phone</label>
            <input type="text" name="Mobile" id="Mobile" required  size="20" value="<?=$show_Mobile?>">
        </div>
    </div>

<div class="row">
        <div class="col-4" >
        <label  for="GPAX">Cumulative grade point average (GPAX)</label>
            <input type="text" name="GPAX" id="GPAX" required size="1" value="<?=$show_GPAX?>">
        </div>
        <div class="col-8" id="rt">
        <label >Student Status</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;

        <?php if(trim($show_Student_Status)=="Normal"){ ?>
          <input type="radio" name="Student_Status" id="Normal" value="Normal" checked>Normal&ensp;&ensp;&ensp;
          <input type="radio" name="Student_Status" id="Probation" value="Probation<?=$show_Probation_no_value?>" >Probation No
          <input type="text" name="Probation_no_value" id="Probation_no_value"  size="30" value="">
        <?php } else { ?>
          <input type="radio" name="Student_Status" id="Normal" value="Normal">Normal&ensp;&ensp;&ensp;
          <input type="radio" name="Student_Status" id="Probation" value="Probation<?=$show_Probation_no_value?>" checked>Probation No
          <input type="text" name="Probation_no_value" id="Probation_no_value"  size="30" value="<?=$show_Probation_no_value?>">
        <?php } ?>       
        </div>    

</div>

<div class="row">
    <div class="col-4" >
            <label for="credits">Total credits left</label>&ensp;
            <input type="number" name="credits" id="credits" required value="<?=$show_credits?>"> 
    </div>
    <div class="col-8" id="rt" >
            <label>credits and registrered in the</label>&ensp;&ensp;&ensp;&ensp;
            <?php if(trim($show_semester1)=="first"){ ?>
              <input type="radio" name="semester1" value="first" checked>first&ensp;&ensp;&ensp;
              <input type="radio" name="semester1" value="second" >second&ensp;&ensp;&ensp;
              <input type="radio" name="semester1" value="summer" >summer
            <?php }else if(trim($show_semester1)=="second"){ ?>
              <input type="radio" name="semester1" value="first" > first&ensp;&ensp;&ensp;
              <input type="radio" name="semester1" value="second" checked > second&ensp;&ensp;&ensp;
              <input type="radio" name="semester1" value="summer" > summer
            <?php } else { ?>
                <input type="radio" name="semester1" value="first"> first&ensp;&ensp;&ensp;
                <input type="radio" name="semester1" value="second" >second&ensp;&ensp;&ensp;
                <input type="radio" name="semester1" value="summer"  checked> summer
            <?php } ?>

    

            <label for="ayear2">Academic year</label>&ensp;&ensp;&ensp;
                 <select name="ayear2" id="ayear2" >
                 <?php if(trim($show_ayear)=="1"){ ?>
                <option value="1" selected >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php }else if (trim($show_ayear)=="2"){ ?>
                <option value="1" >1</option>
                <option value="2" selected >2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php }else if (trim($show_ayear)=="3"){ ?>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" selected>3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php }else if (trim($show_ayear)=="4"){ ?>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4"  selected>4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              <?php }else if (trim($show_ayear)=="5"){ ?>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4"  >4</option>
                <option value="5"  selected>5</option>
                <option value="6">6</option>
              <?php }else { ?>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4"  >4</option>
                <option value="5"  >5</option>
                <option value="6"selected >6</option>
              <?php } ?>
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
          <input type="text" name="Course_code1" id="Course_code1" required size = "30" value="<?=$show_Course_code1?>"> 
        </div >
        <div  class="col-6"  id="rt"> 
        <label for="Course_title1">Course title</label>&ensp;&ensp;
        <input type="text" name="Course_title1" id="Course_title1" required size = "50" value="<?=$show_Course_title1?>"> 
        </div >
     
</div>

<div class="row">
        <div class="col-1">
        </div>
          <div class="col-3"> &ensp;  
              <label for="Section1">Section</label>&ensp;
              <input type="text" name="Section1" id="Section1" required size = "10" value="<?=$show_Section1?>"> 
          </div>

          <div class="col-5" >    
              <label for="Examination1">Examination date Midterm</label>&ensp;&ensp;
              <input type="date" name="Examination1" id="Examination1" required value="<?=$show_Examination1?>"> 
              </div>
              <div class="col-3"  id="rt" >
              <label for="Final1">Final</label>&ensp;&ensp;
              <input type="date" name="Final1" id="Final1" required value="<?=$show_Final1?>"> 
              </div>
</div>




<div class="row">
      <div class="col-1">
        </div>
        <div  class="col-5">     
          <label for="Course_code2">2. Course code</label>&ensp;&ensp;
          <input type="text" name="Course_code2" id="Course_code2" required size = "30" value="<?=$show_Course_code2?>"> 
          </div>
          <div  class="col-6"  id="rt">  
          <label for="Course_title2">Course title</label>&ensp;&ensp;
          <input type="text" name="Course_title2" id="Course_title2" required size = "50" value="<?=$show_Course_title2?>"> 
        </div>
</div>

<div class="row">
        <div class="col-1">
        </div>
          <div class="col-3"> &ensp;  
              <label for="Section2">Section</label>
              <input type="text" name="Section2" id="Section2" required size = "10" value="<?=$show_Section2?>"> 
          </div>
          <div class="col-5" >    
              <label for="Examination2">Examination date Midterm</label>&ensp;&ensp;  
              <input type="date" name="Examination2" id="Examination2" required value="<?=$show_Examination2?>"> 
          </div>
          <div  class="col-3"  id="rt">      
              <label for="Final2">Final</label>&ensp;&ensp;  
              <input type="date" name="Final2" id="Final2" required value="<?=$show_Final2?>"> 
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
      
</div><br><br>
<div class="container">
<table border="3" class="col-12">
          <tr>
            <th >
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
            
            
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;........./.........../........&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            
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
<br>
<br>
          </th>
          <th>(5) Head of Division of Registrar's Comment <br><br>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;▢ Acknowlegded<br>
          <br>
          <br>
          <br>
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Signature ........................... <br>  
          &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;(............................)<br>
          &ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;........./.........../........
<br><br>
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

      <br><br><br><br>
    </div>




  </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>

</form>
	</body >
</html>