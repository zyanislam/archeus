<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>

    <link rel="stylesheet" href="admin_student.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">Archeus</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin_hp.php">
                        <i class='bx bx-home'></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="admin_student.php">
                        <i class='bx bxs-group active'></i>
                        <span class="link-name active">Students</span>
                    </a></li>
                <li><a href="admin_teacher.php">
                        <i class='bx bxs-user'></i>
                        <span class="link-name">Teachers</span>
                    </a></li>
                <li><a href="teacher_signup.php">
                        <i class='bx bx-plus-circle'></i>
                        <span class="link-name">Create Teacher
                            Account</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class='bx bx-log-out'></i>
                        <span class="link-name"
                            onclick="window.location.href = 'admin_logoutprocess.php';">Logout</span>
                    </a></li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="col">
            <h1>Students List</h1>
        </div>
        <?php
        try{
            include "db_connect.php";

            // student list
            $sqlquery1="SELECT * FROM student";
            $result1 = mysqli_query($conn, $sqlquery1);

            $sqlquery2="SELECT * FROM student_log";
            $result2 = mysqli_query($conn, $sqlquery2);
            ?>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Login time</th>
                    <th>Logout time</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        foreach($result1 as $x){
                            ?>
                <tr>
                    <td><?php echo $x['st_username']; ?></td>
                    <td><?php echo $x['st_name']; ?></td>
                    <td><?php echo $x['st_email']; ?></td>
                    <td>ssg</td>
                    <td>xdfd</td>
                    <td>sdas</td>
                    <td class="toggle">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </td>
                </tr>
                <?php
                        }
                    ?>
                <!-- and so on... -->
            </tbody>
        </table>
        <?php
        }catch (PDOException $ex) {
            echo '<script>alert("Found error");window.location = "welcome.php";</script>';
        }
        ?>
    </section>
</body>

</html>