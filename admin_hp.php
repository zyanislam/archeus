<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>

    <link rel="stylesheet" href="admin_hp.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body class="dark">
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--<img src="images/logo.png" alt="">-->
            </div>

            <span class="logo_name">Admin Home</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                        <i class='bx bx-home'></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="#">
                        <i class='bx bxs-group'></i>
                        <span class="link-name">Students</span>
                    </a></li>
                <li><a href="#">
                        <i class='bx bxs-user'></i>
                        <span class="link-name">Teachers</span>
                    </a></li>
                <li><a href="#">
                        <i class='bx bx-plus-circle'></i>
                        <span class="link-name" onclick="window.location.href = 'teacher_signup.php';">Create Teacher Account</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class='bx bx-log-out'></i>
                        <span class="link-name" onclick="window.location.href = 'admin_logoutprocess.php';">Logout</span>
                    </a></li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">

        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </div>
                <!-- Main content box here -->
                <?php
                try{
                    include "db_connect.php";
                    // total student
                    $sqlquery1="SELECT COUNT(*) FROM student";
                    $result1 =mysqli_query($conn, $sqlquery1);
                    $row1 = mysqli_fetch_assoc($result1);
                    foreach($row1 as $x){
                        $total_student = $x;
                    }
                    // total teacher
                    $sqlquery2="SELECT COUNT(*) FROM teacher";
                    $result2 =mysqli_query($conn, $sqlquery2);
                    $row2 = mysqli_fetch_assoc($result2);
                    foreach($row2 as $x){
                        $total_teacher = $x;
                    }
                    // total user
                    $total_user = $total_student + $total_teacher;

                ?>
                    <div class="boxes">
                        <div class="box box1">
                            <i class='bx bx-male-female'></i>
                            <span class="text">Total Students</span>
                            <span class="number"><?php echo $total_student; ?></span>
                        </div>
                        <div class="box box2">
                            <i class='bx bxs-user'></i>
                            <span class="text">Total Teachers</span>
                            <span class="number"><?php echo $total_teacher; ?></span>
                        </div>
                        <div class="box box3">
                            <i class='bx bxs-user-account'></i>
                            <span class="text">Total Users</span>
                            <span class="number"><?php echo $total_user; ?></span>
                        </div>
                    </div>                   
                <?php
                }catch (PDOException $ex) {
                    echo '<script>alert("Found error");window.location = "welcome.php";</script>';
                }
                ?>
                
            </div>

            <!-- Mid Table (Teacher Table) -->

            <div class="activity">
                <div class="title">
                    <i class='bx bxs-user-badge'></i>
                    <span class="text">Teachers</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">Prem Shahi</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">Prem Shahi</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--<script src="script.js"></script>-->
    <script>
        const body = document.querySelector("body"),
            modeToggle = body.querySelector(".mode-toggle");
        sidebar = body.querySelector("nav");
        sidebarToggle = body.querySelector(".sidebar-toggle");

        let getMode = localStorage.getItem("mode");
        if (getMode && getMode === "dark") {
            body.classList.toggle("dark");
        }

        let getStatus = localStorage.getItem("status");
        if (getStatus && getStatus === "close") {
            sidebar.classList.toggle("close");
        }

        modeToggle.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
                localStorage.setItem("mode", "dark");
            } else {
                localStorage.setItem("mode", "light");
            }
        });

        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if (sidebar.classList.contains("close")) {
                localStorage.setItem("status", "close");
            } else {
                localStorage.setItem("status", "open");
            }
        })
    </script>
</body>

</html>