<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="teacher_searchpage.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

    <title>Teacher Home | Archeus</title>
</head>

<body class="dark">
    <div class="layout">

        <nav class="navbar fixed-top navbar top">
            <div id="top_title">
                <span class="home_button" onclick="window.location.href = 'teacher_home.php';">Archeus</span>
            </div>
            <div id="top_logout">
                <a class="ui orange button huge" name="logout" onclick="window.location.href = 'teacher_logoutprocess.php';" id="buttonbox2">Logout</a>
            </div>
        </nav>


        <div class="mid">
            <nav class="sidebar open">
                <header>
                    <div class="image-text">

                        <div class="text logo-text">
                            <span class="name">Archeus</span>
                            <span class="profession">Teacher Home</span>
                        </div>
                    </div>

                </header>

                <div class="menu-bar">
                    <div class="menu">

                    <!-- search here -->
                    <form action="teacher_searchpage.php" method="GET" enctype="multipart/form-data">
                        <li class="search-box">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Search..." name="t_seacrh" id="t_seacrh">
                        </li>
                    </form>

                        <ul class="menu-links">
                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bxs-pencil icon' style='color:#f24e1e'></i>
                                    <span class="text nav-text" id="menuitems">All</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bx-bookmarks icon' style='color:#ffffff'></i>
                                    <span class="text nav-text" id="menuitems">People</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class="bx bx-check icon" style="color:#4ecb71"></i>
                                    <span class="text nav-text" id="menuitems">Posts</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="bottom-content">

                        <div id="bottomdev" align="right">
                            <div>
                                Developed by
                            </div>
                            <div class="spaceboxv"></div>
                            <div>
                                Deadly Diamond Of Death | 2022
                            </div>
                        </div>

                    </div>
                </div>

            </nav>

            <div class="bg_contentbox">

                <div class="contentbox">

                    <?php
                    /*this is the backend of teacher home search
                    1. we will search for student , teacher profiles firstly
                    2. secondly search for posts using post title and author
                    */

                        if(isset($_GET['t_seacrh'])){
                            $search=$_GET['t_seacrh'];
                        }

                        try{
                            $conn=new PDO('mysql:host=localhost:3306;dbname=archeus;','root','');
                            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                            if(empty($search)){
                                echo "<script>location.assign('teacher_home.php')</script>";
                            }
                            else if($search==' '){
                                echo "<script>location.assign('teacher_searchpage.php')</script>";
                                ?>
                                    <h2 class="no_data"><?php echo"No data found"; ?></h2>
                                <?php
                            }
                            else{
                                // found a string
                                $sqlquery1 = "SELECT * FROM student WHERE (st_name LIKE '%$search%')";
                                $returnobj1 = $conn->query($sqlquery1);

                                $sqlquery2 = "SELECT * FROM post_teacher WHERE (t_name LIKE '%$search%') ORDER BY tpost_datetime DESC";
                                $returnobj2 = $conn->query($sqlquery2);

                                if($returnobj1->rowCount()==0){
                                    ///no data found
                                    ?>
                                    <h2 class="no_data"><?php echo"No data found"; ?></h2>
                                    <?php
                                }
                                else{
                                    // st_id, st_username, st_name, st_email, st_dept
                                    ?> <h1 class="people">People</h1> <?php
            
                                    $searchdata=$returnobj1->fetchAll();
                                    foreach($searchdata AS $row){
                                        ?>  
                                        <!-- here -->
                                        <div class="ui card profilebox">
                                            <div class="userimg" id="userimg">
                                            </div>
                                            <div class="user_name_div">
                                                <p><?php echo $row['st_name'];?></p>
                                            </div>
                                            <div class="user_misc">
                                                <div id="pointbox">
                                                    <p><?php echo $row['st_username'];?> | <?php echo $row['st_dept'];?></p>
                                                    <p><?php echo $row['st_email'];?></p>
                                                    
                                                </div>
                                                <i class='bx bxl-linkedin-square iconbox' id="pointbox" style='color:#45b3ff'></i>
                                                <div id="pointbox">
                                                    <p>Points</p>
                                                    <p id="point_no"><?php echo $row['st_point'];?></p>
                                                </div>                   
                                            </div>                     
                                        </div>
                                        <!-- here -->
                                        <?php
                                    }
                                }

                                if($returnobj2->rowCount()==0){
                                    // do nothing
                                }
                                else{
                                    //tpost_id,t_username,t_name,tpost_title,tpost_desc
                                    ?>
                                        <span class="spaceboxv"></span>
                                        <span class="spaceboxv"></span>
                                        <h1 class="people">Posts</h1>
                                    <?php
            
                                    $searchdata2=$returnobj2->fetchAll();
                                    foreach($searchdata2 AS $row){
                                        ?>  
                                            <div class="temp">
                                                <div class="ui card postbox">
                                                    <div class="content">
                                                        <i class='right floated bx bx-star iconbox' style='color:#343400'></i>
                                                        <div class="header" id="post_title"><?php echo $row['tpost_title'];?></div>
                                                        <div class="header" id="author_name"><?php echo $row['t_name'];?> | Author</div>
            
                                                        <div class="description">
                                                            <p id="post_desc"><?php echo $row['tpost_desc'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="spaceboxv2"></span>
                                        <?php
                                    }
                                }
                            }
                        }catch(PDOException $ex){
                                //if found error forward to login page
                                // echo"<script>location.assign('welcome.php')</script>";
                                echo '<script>
                                alert("Found error");
                                window.location = "teacher_home.php";
                                </script>';
                        }
                    ?>
                    <!-- backend ends here -->

                </div>

            </div>

        </div>
    </div>


    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";
            }
        });
    </script>

</body>

</html>