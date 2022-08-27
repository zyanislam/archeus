<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>

    <link rel="stylesheet" href="admin_home.css">

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

        <div class="top">
            <div id="top_title">
                Archeus
            </div>

            <div id="top_logout">
                <a class="ui orange button huge" name="signup" onclick="window.location.href = 'admin_logoutprocess.php';" id="logout_button">Logout</a>
            </div>


        </div>

        <div class="mid">
            <div class="contentbox">
                <div>
                    <span>
                        <label>Create Teacher Account</label>
                    </span>

                    <span class="spaceboxh"></span>

                    <span>
                        <a class="ui orange button huge" name="signup" onclick="window.location.href = 'teacher_signup.php';" id="t_signup">Sign Up</a>
                    </span>
                </div>

                <div class="spaceboxv"></div>
                <div class="spaceboxv"></div>

                <div class="usertable">
                    <div>
                        <label>Student</label>
                        <table id="displaytb" align="center">
                            <tr id="displaytr">
                                <th>Username/ID</th>
                                <th>Name</th>
                                <th>Last Login Time</th>
                                <th>Last Logout Time</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>




                        </table>
                    </div>

                    <div class="spaceboxh2"></div>

                    <div>
                        <label>Teacher</label>
                        <table id="displaytb" align="center">
                            <tr id="displaytr">
                                <th>Username/ID</th>
                                <th>Name</th>
                                <th>Last Login Time</th>
                                <th>Last Logout Time</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>




                        </table>
                    </div>
                </div>

            </div>

        </div>

        <div class="bottom">
            <div>
                Developed by
            </div>
            <div>
                Deadly Diamond Of Death | 2022
            </div>
        </div>

    </div>

</body>

</html>