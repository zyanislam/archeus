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
                Archeus
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
                        <form action="teacher_searchprocess.php" method="GET" enctype="multipart/form-data">
                            <li class="search-box">
                                <i class='bx bx-search icon'></i>
                                <input type="text" placeholder="Search..." name="t_seacrh" id="t_seacrh">
                            </li>
                        </form>

                        <ul class="menu-links">
                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bx-target-lock icon' style='color:#ec9e3d'></i>
                                    <span class="text nav-text" id="menuitems">All</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bxs-user-circle icon' style='color:#77a0ff'></i>
                                    <span class="text nav-text" id="menuitems">People</span>
                                </a>
                            </li>

                            <li class="nav-link" id="link_list">
                                <a href="#">
                                    <i class='bx bxs-message-edit icon' style='color:#ffffff'></i>
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

                    <div class="ui card profilebox">
                        <div class="userimg" id="userimg">

                        </div>

                        <div class="user_name_div">
                            <p> User's Name</p>
                            <p id="user_des"> User's Designation</p>
                        </div>

                        <div class="user_misc">

                            <i class='bx bxl-linkedin-square iconbox' style='color:#45b3ff'></i>

                            <div id="smallmiscbox">
                                <p id="content_title">ID</p>
                                <p id="point_no">011XXXXXX/XX</p>
                            </div>


                            <div id="smallmiscbox">
                                <p id="content_title">Points</p>
                                <p id="point_no">42</p>
                            </div>

                        </div>

                        <div class="user_misc">

                            <p id="content_title">email: </p>

                            <div id="smallmiscbox">
                                <p id="content_title">Dept</p>
                                <p id="point_no">XXX</p>
                            </div>

                        </div>

                    </div>
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