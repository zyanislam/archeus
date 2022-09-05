<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="teacher_home.css">

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
                Archeus
            </div>
            <div id="top_logout">
                <a class="ui orange button huge" name="logout" onclick="window.location.href = 'teacher_logoutprocess.php';" id="buttonbox2">Logout</a>
            </div>
        </nav>

        <!-- <div class="top">
            <div id="top_title">
                Archeus
            </div>

            <div id="top_logout">
                <a class="ui orange button huge" name="logout" onclick="window.location.href = 'teacher_logoutprocess.php';" id="buttonbox2">Logout</a>
            </div>
        </div> -->

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
                    <form action="teacher_searchprocess.php" method="GET" enctype="multipart/form-data">
                        <li class="search-box">
                            <i class='bx bx-search icon'></i>
                            <input type="text" placeholder="Search..." name="t_seacrh" id="t_seacrh">
                        </li>
                    </form>

                        <ul class="menu-links">
                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bxs-pencil icon' style='color:#f24e1e'></i>
                                    <span class="text nav-text" id="menuitems">Edit Profile</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bx-bookmarks icon' style='color:#ffffff'></i>
                                    <span class="text nav-text" id="menuitems">Student List</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class="bx bx-check icon" style="color:#4ecb71"></i>
                                    <span class="text nav-text" id="menuitems">Pending Validation Requests</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="bottom-content">

                        <!-- <li class="mode">
                        <div class="sun-moon">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark mode</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                        </li> -->
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

                    <form action="teacher_newpostprocess.php" method="POST" enctype="multipart/form-data">

                        <div class="ui card newpostbox">

                            <p id="write">Write about an upcoming opportunity</p>

                            <input class="inup" type="text" name="post_title" id="post_title" placeholder="Title Of Your Post">

                            <span class="spaceboxv"></span>

                            <textarea class="form-control" placeholder="Describe The Opportunity For The Students" name="newpost" id="newpost" style="height: 80px;"></textarea>

                            <span class="spaceboxv2"></span>

                            <div align="right">
                                <button class="ui secondary button huge" id="buttonbox1" type="submit" name="submit">Post</button>
                            </div>

                        </div>

                    </form>

                    <span class="spaceboxv"></span>

                    <!-- here is the feed-post BackEnd Part -->
                    <?php
                    try{
                        $conn=new PDO('mysql:host=localhost:3306;dbname=archeus;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        $sqlquery="SELECT * FROM post_teacher";
                        $returnobj=$conn->query($sqlquery);

                        if($returnobj->rowCount()==0){
                            ///no data found
                            echo"No data found"; 
                        }
                        else{
                            /*<?php echo $row['id'];?>*/
                            //tpost_id,t_username, t_name,tpost_title, tpost_desc
                            $tabledata=$returnobj->fetchAll();
                            foreach($tabledata AS $row){
                                ?>
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
                                <?php
                            }
                        }
                    }catch(PDOException $ex){
                        //if found error forward to login page
                        // echo"<script>location.assign('welcome.php')</script>";
                        echo '<script>
                        alert("Found error");
                        window.location = "welcome.php";
                        </script>';
                    }
                    ?>
                    <!-- BackEnd ends here -->
                    
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