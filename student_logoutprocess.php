
<?php
include "db_connect.php";
session_start();

$logout_time = date("H:i:s");

$sql = "SELECT * FROM student";
$out = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM teacher";
$out2 = mysqli_query($conn, $sql2);

$row = mysqli_fetch_assoc($out);
$row2 = mysqli_fetch_assoc($out2);

if(isset($_SESSION['st_user']) && !empty($_SESSION['st_user']))
{
    $suser = $_SESSION['st_user'];
    unset($_SESSION['st_user']); ///deleting the session stored value
    session_destroy();

    // if($row['flag'] == 1){
    //     $sql3 = "UPDATE student_log SET stlog_logout_date_time = now()  WHERE st_username = '$suser' ";
    //     $out3 = mysqli_query($conn, $sql5);
    // }
    
    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";

}
else{
    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";
}
?>