<?php 
session_start();
include "db_connect.php";

if(isset($_SESSION['LAST_ACTIVE_TIME'])){
    if((time() - $_SESSION['LAST_ACTIVE_TIME']) > 500)
        {
            header('location:logout.php');
            die();
        }
}

$_SESSION['LAST_ACTIVE_TIME'] = time();
if(!isset($_SESSION['IS_LOGIN']))
{
    header('location:admin.php');
    die();
}

$id=$_SESSION['admin_id'];
$query="SELECT * from all_courses";
$result=mysqli_query($conn,$query);

$query2="SELECT * from stu_log";
$result2=mysqli_query($conn,$query2);

$query3="SELECT * from teach_log";
$result3=mysqli_query($conn,$query3);




if (isset($_SESSION['admin_id']) && isset($_SESSION['ad_name'])) {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

   

    <title>Admin Panel</title>
</head>

<body>

<nav class="navbar  navbar-expand-lg" id="itemstyle">

<a class="navbar-brand" id="logoutstyle"s href="#"><?php echo $id ?></a>



<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="navbarToggleExternalContent">
  <ul class="navbar-nav ms-auto">
    
    <li class="nav-item">
      <a class="nav-link" id="logoutstyle" href = 'logout.php'>Logout</a>
    </li>
  </ul>

</div>
</nav>
<div></div>
<br>

    <div class="pagebody">
        

        <div class="mid">

            <div class="c1">
                <button class="ui orange button large" id="buttonbox" onclick="window.location.href = 'signupteacher.php';">Sign Up Teacher</button>
            </div>
            <br>
            <br>

        
            <div><br></div>
            <div class="c2">
                <table  border="5px" align-content="center" width="900px" height="100px">
                <tr>
                        <th>Student ID</th>
                        <th>Login time</th>
                        <th>Login Date</th>
                        <th>Logout time</th>
                    </tr>

                    <?php
                        while ($row = $result2->fetch_assoc()) {
                    ?>
                        <tr>
                            <?php
                                echo "<td>{$row['student_id']}</td>";
                                echo "<td>{$row['s_login_time']}</td>";
                                echo "<td>{$row['s_login_date']}</td>";
                                echo "<td>{$row['s_logout_time']}</td>";
                            ?>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

            <div><br></div>
            <div><br></div>

            <div class="c2">
                <table  border="5px" align-content="center" width="900px" height="100px">
                <tr>
                        <th>Teacher ID</th>
                        <th>Login time</th>
                        <th>Login Date</th>
                        <th>Logout time</th>
                    </tr>

                    <?php
                        while ($row2 = $result3->fetch_assoc()) {
                    ?>
                        <tr>
                            <?php
                                echo "<td>{$row2['teacher_id']}</td>";
                                echo "<td>{$row2['t_login_time']}</td>";
                                echo "<td>{$row2['t_login_date']}</td>";
                                echo "<td>{$row2['t_logout_time']}</td>";
                            ?>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

        </div>
        <div></div>
<br>

        <footer class="footer">
        <span id="fspan1">Developed by </span><span id="fspan2">Tres Commas"</span>  | 2022 | <span id="fspan1">All Rights Reserved</span> 
    </footer>

    </div>

</body>
</html>

<?php 
    }
    else{
        header("Location: welcome.php");
        exit();
   }
?>


