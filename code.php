<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['update']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "masterdb";

        $con = mysqli_connect("localhost","root","","masterdb");
        $Vehical_NO = $_POST['vehicalnum'];
        $Wheel = $_POST['wheelnum'];
        $First_WT = $_POST['firstwt'];
    
        // Sql query to be executed
        $querry = "UPDATE `student` SET  `Vehical_NO`='".$Vehical_NO."',`Wheel`='".$Wheel."',`First_WT`='".$First_WT."' 
        WHERE `Serial_NO`= '$Serial_NO'";
        $query_run=mysqli_query($con, $querry);
    
        if ($query_run) 
        {
            $_SESSION['status']= " succesfully updatd";
            header("location: php-retrive.php");
        }
        else 
        {
            $_SESSION['status']= " Not updatd";
            header("location: php-retrive.php");
        }
    }
    
    }
?>

