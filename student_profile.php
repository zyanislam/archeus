<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Archeus</title>

    <link rel="stylesheet" href="student_profile.css">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

</head>

<body>
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

            <div class="topinfobox">

                <div class="leftinfo">

                    <div class="imgdiv">
                        <div class="userimg" id="userimg">
                        </div>
                    </div>

                    <div class="userinfo">
                        <div>
                            <label class="user_name">Fahad AL Islam</label>
                            <label class="user_id"><em>(011183070)</em></label>
                        </div>

                        <label class="user_uni">4th year at United International University</label>
                    </div>

                </div>

                <div class="midinfo">
                    <div class="imgdiv">
                        <i class='bx bxs-bookmark-alt iconbox' style='color:#7b7fed'></i>

                        <i class='bx bx-file iconbox' style='color:#f8881a'></i>
                    </div>

                </div>

                <div class="rightinfo">
                    <div class="basicdiv">
                        <label class="user_phone">Contact Details: </label>
                        <label class="user_dept">Department: </label>
                        <label class="user_email">Email: </label>
                    </div>

                </div>




            </div>


            <div class="contentbox">

            </div>

        </div>

    </div>



</body>

</html>