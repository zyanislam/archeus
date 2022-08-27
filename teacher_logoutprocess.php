
<?php
session_start();

if(isset($_SESSION['t_user']) && !empty($_SESSION['t_user']))
{
    unset($_SESSION['t_user']); ///deleting the session stored value
    session_destroy();

    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";
    
}
else{
    echo '<script>alert("You have logged out of session.");</script>';
    echo"<script>location.assign('welcome.php')</script>";
}
?>