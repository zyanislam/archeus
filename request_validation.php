<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Skill | Archeus</title>

    <link rel="stylesheet" href="request_validate.css">

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
                <a class="ui orange button huge" name="signup" onclick="window.location.href = 'welcome.php';" id="logout_button">Logout</a>
            </div>

        </div>

        <div class="mid">
            <div class="contentbox">

                <div>
                    <br>
                    <br>
                    <p class="welcometag">Skill Validation</p>

                    <form action="request_validationprocess.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <div class="field">
                                <input class="inup" type="text" placeholder="Skill Name" name="skill_name" id="skill_name">
                            </div>
                        </div>

                        <br>

                        <div>
                            <div class="field">
                                <input class="inup" type="text" placeholder="Trimester" name="t_user" id="t_user">
                            </div>
                        </div>

                        <br>

                        <!-- ddd = drop down department -->
                        <div class="field">
                            <select class="inup_ddd" name="t_dept" id="t_dept">
                                <option value="">Faculty Name</option>
                                <option value="EEE">EEE</option>

                            </select>
                        </div>

                        <br>

                        <div class="spaceboxv"></div>

                        <div id="buttonspan">
                            <div>
                                <button class="ui secondary button huge" id="buttonbox1" type="submit" name="submit">Submit</button>
                            </div>

                            <div class="spaceboxv2"></div>

                            <div>
                                <a class="ui orange button huge" name="signup" onclick="window.location.href = '_home.php';" id="buttonbox2">Go Back</a>
                            </div>

                        </div>

                        <br>
                        <form>

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