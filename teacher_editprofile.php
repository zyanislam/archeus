<!-- $_SESSION['t_user'] -->
<?php 
 session_start();
 if(
    isset($_SESSION['t_user']) && !empty($_SESSION['t_user'])
 ){
    ?>  
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!----======== CSS ======== -->
            <link rel="stylesheet" href="teacher_editprofile.css">

            <!----===== Boxicons CSS ===== -->
            <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
            <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
            <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
            <script src="custom_tags_input.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js" type="module"></script>

            <title>Edit Your Profile | Archeus</title>
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
                                <form action="teacher_searchpage.php" method="GET" enctype="multipart/form-data">
                                    <li class="search-box">
                                        <i class='bx bx-search icon'></i>
                                        <input type="text" placeholder="Search..." name="t_seacrh" id="t_seacrh">
                                    </li>
                                </form>

                                <ul class="menu-links">
                                    <li class="nav-link" id="link_list">
                                        <a href="#">
                                            <i class='bx bx-home-smile icon' style='color:#857de7'></i>
                                            <span class="text nav-text" onclick="window.location.href = 'teacher_home.php';" id="menuitems">Home Page</span>
                                        </a>
                                    </li>

                                    <li class="nav-link" id="link_list">
                                        <a href="#">
                                            <i class='bx bxs-pencil icon' style='color:#f24e1e'></i>
                                            <span class="text nav-text" onclick="window.location.href = 'teacher_editprofile.php';" id="menuitems">Edit Profile</span>
                                        </a>
                                    </li>

                                    <li class="nav-link" id="link_list">
                                        <a href="#">
                                            <i class="bx bx-check icon" style="color:#4ecb71"></i>
                                            <span class="text nav-text" id="menuitems">Pending Validation Requests</span>
                                        </a>
                                    </li>

                                    <li class="nav-link" id="link_list">
                                        <a href="#">
                                            <i class='bx bx-filter-alt icon' style='color:#4873ff'></i>
                                            <span class="text nav-text" onclick="window.location.href = 'teacher_filter.php';" id="menuitems">Filter</span>
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

                            <span class="spaceboxv"></span>

                            <h1 class="request_title">Edit Information</h1>

                            <span class="spaceboxv2"></span>

                            <div class="rowdiv">

                                <div class="boxdiv1">
                                    <div class="boxdivlabel">
                                        <label class="labelfield">Name</label>
                                    </div>

                                    <div>
                                        <input class="field" type="text" name="post_cc" id="post_cc" placeholder="Name of Teacher" disabled>
                                    </div>
                                </div>

                                <div class="boxdiv1">
                                    <div class="boxdivlabel">
                                        <label class="labelfield">Email</label>
                                    </div>

                                    <div>
                                        <input class="field" type="text" name="post_cc" id="post_cc" placeholder="Email" disabled>
                                    </div>
                                </div>

                            </div>

                            <span class="spaceboxv2"></span>


                            <div class="rowdiv">

                                <div class="boxdiv1">
                                    <div class="boxdivlabel">
                                        <label class="labelfield">User/ID</label>
                                    </div>

                                    <div>
                                        <input class="field" type="text" name="post_cc" id="post_cc" placeholder="User/ID" disabled>
                                    </div>
                                </div>

                                <div class="boxdiv1">
                                    <div class="boxdivlabel">
                                        <label class="labelfield">Gender</label>
                                    </div>

                                    <div>
                                        <input class="field" type="text" name="post_cc" id="post_cc" placeholder="Gender">
                                    </div>
                                </div>

                            </div>

                            <span class="spaceboxv2"></span>

                            <div class="rowdiv">

                                <div class="boxdiv1">
                                    <div class="boxdivlabel">
                                        <label class="labelfield">Department</label>
                                    </div>

                                    <div>
                                        <input class="field" type="text" name="post_cc" id="post_cc" placeholder="Department">
                                    </div>
                                </div>

                                <div class="boxdiv1">
                                    <div class="boxdivlabel">
                                        <label class="labelfield">Room No</label>
                                    </div>

                                    <div>
                                        <input class="field" type="text" name="post_cc" id="post_cc" placeholder="XXX/X">
                                    </div>
                                </div>

                            </div>

                            <span class="spaceboxv2"></span>

                            <div class="rowdiv">

                                <div class="boxdiv1">
                                    <div class="boxdivlabel">
                                        <label class="labelfield">Phone No #1</label>
                                    </div>

                                    <div>
                                        <input class="field" type="text" name="post_cc" id="post_cc" placeholder="01XXXXXXXXX">
                                    </div>
                                </div>

                                <div class="boxdiv1">
                                    <div class="boxdivlabel">
                                        <label class="labelfield">Phone No #2</label>
                                    </div>

                                    <div>
                                        <input class="field" type="text" name="post_cc" id="post_cc" placeholder="01XXXXXXXXX">
                                    </div>
                                </div>

                            </div>

                            <span class="spaceboxv2"></span>

                            <span class="spaceboxv2"></span>

                            <h1 class="request_title">Password</h1>

                            <span class="spaceboxv2"></span>



                            <div class="boxdiv1">

                                <input class="field" type="text" name="post_cc" id="post_cc" placeholder="Old Password">

                            </div>

                            <span class="spaceboxv2"></span>

                            <div class="boxdiv1">

                                <input class="field" type="text" name="post_cc" id="post_cc" placeholder="New Password">

                            </div>

                            <span class="spaceboxv2"></span>

                            <div align="right">
                                <button class="ui secondary button huge" id="buttonbox2" type="submit" name="submit">Save</button>
                            </div>

                            <span class="spaceboxv"></span>

                            <div align="right">
                                <button class="ui secondary button huge" id="buttonbox1" type="submit" name="submit">Cancel</button>
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
    <?php
 }
 else{
    ?>
       <script>location.assign('welcome.php')</script>
   <?php
}
?>