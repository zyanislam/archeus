<?php
/*
1.WE will receive data of Student Register information here
2.IF the data is valid, we will store it in Database and forward to login page.
3.Else forward to Sign up page.
cname,cemail,cpass,caddress
id=st_user, name=st_name, email=st_email, dept=st_dept, dob=st_dob,
gender=st_gender, pass=st_pass, cpass=st_cpass
*/

 if($_SERVER['REQUEST_METHOD']=="POST"){
     //checking if the info are valid and not empty.
     if(
         !empty($_POST["st_user"]) && !empty($_POST["st_name"]) &&
         !empty($_POST["st_email"]) && !empty($_POST["st_dept"]) &&
         !empty($_POST["st_dob"]) && !empty($_POST["st_gender"]) &&
         !empty($_POST["st_pass"]) && !empty($_POST["st_cpass"]) &&
         isset($_POST["st_user"]) && isset($_POST["st_name"]) && 
         isset($_POST["st_email"]) && isset($_POST["st_dept"]) &&
         isset($_POST["st_dob"]) && isset($_POST["st_gender"]) &&
         isset($_POST["st_pass"]) && isset($_POST["st_cpass"])
       ){
         //storing the informations in variables
         $user=$_POST["st_user"];
         $name=$_POST["st_name"];
         $email=$_POST["st_email"];
         $dept=$_POST["st_dept"];
         $dob=$_POST["st_dob"];
         $gender=$_POST["st_gender"];
         $pass=$_POST["st_pass"];
         $cpass=$_POST["st_cpass"];
         
         /*trying to access database and store all the information there.*/
         try{
             //creating connection with Archeus database
             $conn=new PDO('mysql:host=localhost:3306;dbname=archeus;','root','');
             $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           
             //database code executing
             $sqlquery="INSERT INTO student(st_id,st_username,st_name,st_email,st_pass,st_dept,st_contact,st_dob,st_gender,role) VALUES(NULL,'$user','$name','$email','$pass','$dept',NULL,'$dob','$gender','student')";
             $conn->exec($sqlquery);
            
             //after successful registration forwarding to login page
             echo '<script>alert("Registration completed successfully!! Login to Process");</script>';
             echo"<script>location.assign('welcome.php')</script>";
             
         }catch(PDOException $ex){
             //if found error forward to register page
             echo '<script>
             alert("catch error");
             </script>';
            echo"<script>location.assign('student_signupprocess.php')</script>";
         }
     }else{
         //if any value is empty or invalid, then forward to register page again.
         echo '<script>
         alert("empty error");
         </script>';
         echo"<script>location.assign('student_signupprocess.php')</script>";
     }
 }
else{
    //forwarding to register page if not post method.
    echo '<script>
    alert("not post method");
    </script>';
    echo"<script>location.assign('student_signupprocess.php')</scrpit>";
}
?>