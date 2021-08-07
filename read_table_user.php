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
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css_form.css" type="text/css" />
	<title> Read Data from Database </title>
</head>

<body style="font-family: 'sans-serif';">

<?php

// Include database connection file
require_once "dbconnect.php";


//เชื่อมกับช่อง login ดึงมาเก็บในตัวแปร เเล้วเทียบ
//ดึงข้อมูลจาก ตาราง data base


// Database query.
$sql = "SELECT semester,ayear,Out_Student_ID,Mname,Fname,Lname,
Student_ID,study_in_school,Program_of,Mobile,GPAX,Student_Status,Probation_no_value,credits,
semester1,ayear2,Course_code1,Course_title1,Section1,Examination1,Final1,Course_code2,
Course_title2,Section2,Examination2,Final2 FROM insert_database 
where Student_ID = '$show_your_id'";

$result = mysqli_query($conn,$sql);
?>
<div class="container">
<br>

<div class="row">
	<div class="col-6" >
		<h1>FORM REG-217</h1>
	</div>
	<div class="col-6"  id="rt">
	<?php if (isset($_SESSION['username'])) : ?>
            <p >Student ID :<strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="read_table_user.php?logout='1'"class="btn btn-danger" >Logout</a></p>
		<?php endif ?>
	</div>

</div>
	
	<p>คำร้องขอลงทะเบียนเรียนรายวิชานอกหลักสูตรของนักศึกษาระดับบัณฑิตศึกษา</p>
	<p >Enrollment Form for Extracurricular : Graduate Students</p>

<form method="POST" action="form.php">

<button type="Submit" class="btn btn-info" value="Add New Employee" >Add Request </button>
</form>
	
<br>

<table border="3" class="table table-warning " >
<tr align="center">
	<th>Student_ID</th>
	<th>Prefix</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>School</th>
	<th>GPAX</th>
	<th>Action</th>
</tr>


<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$show_semester = $row["semester"];
		$show_ayear = $row["ayear"];
		$show_Out_Student_ID = $row["Out_Student_ID"];
		$show_Mname = $row["Mname"];
		$show_Fname = $row["Fname"];
		$show_Lname = $row["Lname"];
		$show_Student_ID = $row["Student_ID"];
		$show_study_in_school = $row["study_in_school"];
		$show_Program_of = $row["Program_of"];
		$show_Mobile = $row["Mobile"];
		$show_GPAX = $row["GPAX"];
		$show_Student_Status = $row["Student_Status"];
		//$show_Probation_no_value =$row["Probation_no_value"];
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
		?>
		<tr align="center">
			<td><?= $show_Student_ID ?></td>
			<td><?= $show_Mname ?></td>
			<td><?= $show_Fname ?></td>
			<td><?= $show_Lname ?></td>
			<td><?= $show_study_in_school ?></td>
			<td><?= $show_GPAX ?></td>
			<td>
			<a href="view_data.php?idst=<?=$show_Student_ID?>" class="btn btn-primary" >Print</a>
			<a href="input_update_data.php?idst=<?=$show_Student_ID?>" class="btn btn-warning" >Update</a>
			<a href="delete.php?idst=<?=$show_Student_ID?>" onClick="return confirm('Delete this department?')"class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</table>
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