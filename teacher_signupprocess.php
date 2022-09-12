<?php
/*
1.WE will receive data of teacher Register information here
2.IF the data is valid, we will store it in Database and forward to login page.
3.Else forward to Sign up page.
cname,cemail,cpass,caddress
id=st_user, name=st_name, email=st_email, dept=st_dept, dob=st_dob,
gender=st_gender, pass=st_pass, cpass=st_cpass
*/

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //checking if the info are valid and not empty.
    if (
        !empty($_POST["t_name"]) && !empty($_POST["t_user"]) &&
        !empty($_POST["t_email"]) && !empty($_POST["t_dept"]) &&
        !empty($_POST["t_des"]) &&
        isset($_POST["t_name"]) && isset($_POST["t_user"]) &&
        isset($_POST["t_email"]) && isset($_POST["t_dept"]) &&
        isset($_POST["t_des"])
    ) {
        //storing the informations in variables
        $tname = $_POST["t_name"];
        $tuser = $_POST["t_user"];
        $temail = $_POST["t_email"];
        $tdept = $_POST["t_dept"];
        $tdes = $_POST["t_des"];

        /*trying to access database and store all the information there.*/
        try {
            //creating connection with Archeus database
            include "db_connect.php";

            date_default_timezone_set('Asia/Dhaka');
            $joined_date = date('y-m-d g:i:s');

            //every entry is valid and ready to be registered
            //database code executing
            $sqlquery = "INSERT INTO teacher(t_id, t_username, t_name, t_email, t_pass, t_dept, t_des, role,t_joined_date) VALUES(NULL, '$tuser', '$tname', '$temail', '1234', '$tdept', '$tdes', 'teacher','$joined_date')";
            mysqli_query($conn, $sqlquery);

            $sqlquery2 = "INSERT INTO teacher_log(tlog_id,t_username,	tlog_name) VALUES(NULL,'$tuser','$tname') ";
            mysqli_query($conn, $sqlquery2);

            //after successful registration forwarding to login page
            echo "<script>location.assign('teacher_signupsuccess.php')</script>";
        } catch (PDOException $ex) {
            //if found error forward to register page
            echo '<script>
             alert("Oops!! Caught An Error");
             </script>';
            echo "<script>location.assign('teacher_signup.php')</script>";
        }
    } else {
        //if any value is empty or invalid, then forward to register page again.
        echo '<script>alert("You forgot to put your information in one of the fields. Check again");</script>';
        echo "<script>location.assign('teacher_signup.php')</script>";
    }
} else {
    //forwarding to register page if not post method.
    echo '<script>
    alert("Not Post Method");
    </script>';
    echo "<script>location.assign('teacher_signup.php')</scrpit>";
}
