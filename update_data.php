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
if(empty(trim($_POST["Student_ID"]))){
  // URL doesn't contain id parameter. Redirect to error page
  // header("location: error.php");
  exit();
}
else{

// Include database connection file
require_once "dbconnect.php";


$update_semester = $_POST["semester"];
$update_ayear = $_POST["ayear"];
$update_Out_Student_ID = $_POST["Out_Student_ID"];
$update_Mname = $_POST["Mname"];
$update_Fname = $_POST["Fname"];
$update_Lname = $_POST["Lname"];
$update_ID = $_POST["Student_ID"];
$update_study_in_school = $_POST["study_in_school"];
$update_Program_of = $_POST["Program_of"];
$update_Mobile = $_POST["Mobile"];
$update_GPAX = $_POST["GPAX"];
$update_Student_Status = $_POST["Student_Status"];
$update_Probation_no_value = $_POST["Probation_no_value"];
$update_credits = $_POST["credits"];
$update_semester1 = $_POST["semester1"];
$update_ayear2 = $_POST["ayear2"];
$update_Course_code1 = $_POST["Course_code1"];
$update_Course_title1 = $_POST["Course_title1"];
$update_Section1 = $_POST["Section1"];
$update_Examination1 = $_POST["Examination1"];
$update_Final1 = $_POST["Final1"];
$update_Course_code2 = $_POST["Course_code2"];
$update_Course_title2 = $_POST["Course_title2"];
$update_Section2 = $_POST["Section2"];
$update_Examination2 = $_POST["Examination2"];
$update_Final2 = $_POST["Final2"];



$sql="UPDATE insert_database SET semester = '$update_semester', 
ayear = '$update_ayear', Out_Student_ID = '$update_Out_Student_ID',
Mname = '$update_Mname', Fname = '$update_Fname', Lname = '$update_Lname', 
Student_ID = '$update_ID', study_in_school = '$update_study_in_school',
Program_of = '$update_Program_of', Mobile = '$update_Mobile', GPAX = '$update_GPAX',
Student_Status = '$update_Student_Status', Probation_no_value = '$update_Probation_no_value',
credits = '$update_credits', semester1 = '$update_semester1', ayear2 ='$update_ayear2',
Course_code1 = '$update_Course_code1', Course_title1 = '$update_Course_title1',
Section1 = '$update_Section1',Examination1 = '$update_Examination1',Final1 = '$update_Final1',
Course_code2 = '$update_Course_code2', Course_title2= '$update_Course_title2',
Section2 = '$update_Section2', Examination2 = '$update_Examination2', Final2 = '$update_Final2'
WHERE Student_ID = $update_ID";
$result = mysqli_query($conn,$sql);

if (!$result)
  {
  die('Error: ' . mysql_error($conn));
  }
else {
    if($show_your_id == "admin"){
    header("location: read_table_admin.php");
    }else{
    header("location: read_table_user.php");
    }
}
mysqli_close($conn);
}

?>

