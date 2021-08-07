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
<?php
// Include database connection file
require_once "dbconnect.php";



// Get data from input form
$semester=$_POST['semester'];
$ayear=$_POST['ayear'];
$Out_Student_ID=$_POST['Out_Student_ID'];
$Mname=$_POST['Mname'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$Student_ID=$_POST['Student_ID'];
$study_in_school=$_POST['study_in_school'];
$Program_of=$_POST['Program_of'];
$Mobile=$_POST['Mobile'];
$GPAX=$_POST['GPAX'];
$Student_Status=$_POST['Student_Status'];
$Probation_no_value=$_POST['Probation_no_value'];
$Status=$Student_Status.$Probation_no_value;
$credits=$_POST['credits'];
$semester1=$_POST['semester1'];
$ayear2=$_POST['ayear2'];
$Course_code1=$_POST['Course_code1'];
$Course_title1=$_POST['Course_title1'];
$Section1=$_POST['Section1'];
$Examination1=$_POST['Examination1'];
$Final1=$_POST['Final1'];
$Course_code2=$_POST['Course_code2'];
$Course_title2=$_POST['Course_title2'];
$Section2=$_POST['Section2'];
$Examination2=$_POST['Examination2'];
$Final2=$_POST['Final2'];


// Insert data
$sql="INSERT INTO insert_database(semester,ayear,Out_Student_ID,Mname,Fname,Lname,
Student_ID,study_in_school,Program_of,Mobile,GPAX,Student_Status,Probation_no_value,credits,
semester1,ayear2,Course_code1,Course_title1,Section1,Examination1,Final1,Course_code2,
Course_title2,Section2,Examination2,Final2)
VALUE ('$semester','$ayear','$Out_Student_ID','$Mname','$Fname','$Lname',
'$Student_ID','$study_in_school','$Program_of','$Mobile','$GPAX','$Status','$Probation_no_value','$credits','$semester1','$ayear2','$Course_title1','$Course_title1',
'$Section1','$Examination1','$Final1','$Course_code2','$Course_title2','$Section2',
'$Examination2','$Final2')";

$result=mysqli_query($conn, $sql);

if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  if($show_your_id == "admin"){
  header("location: read_table_admin.php");
  }
  else{
    header("location: read_table_user.php");
    }
}
mysqli_close($conn);

?>

