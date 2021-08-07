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
        if(empty(trim($_GET["idst"]))){
        // URL doesn't contain id parameter. Redirect to error page
        // header("location: error.php");
        exit();
        }
        else{

        // Include database connection file
        require_once "dbconnect.php";

        $delete_ID = $_GET["idst"];
        /*แก้ตรงนี้้้้ */
        $sql="DELETE FROM insert_database WHERE Student_ID = $delete_ID";

        $result = mysqli_query($conn,$sql);

        if (!$result){
        die('Error: ' . mysqli_error($conn));
        }
        else {
            if($show_your_id=="admin"){
                header("location: read_table_admin.php");
            }else{
                header("location: read_table_user.php");
            }
        }
        mysqli_close($conn);
        }

        ?>
    

