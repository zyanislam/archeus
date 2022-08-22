<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create CV</title>
    <link rel="stylesheet" href="cv.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</head>


<body>
    <div class="layout">
        <div class="top">
            <button id="back"><i class="fa fa-arrow-left go_back"></i></button>
            <div id="logo">ARCHEUS</div>
        </div>
        <div class="mid">
            <h1 class="cv_head"><u>Create Your Own CV</u></h1>
            <div class="basic">
                <div class="basic_head">
                    <h2><u>Basic Information</u></h2>
                </div>
                <br>
                <div class="fcol">
                    <div class="fcol1">
                        <form action="">
                            <h5>Name: </h5>
                            <input type="text" name="name">
                            <h5>Email: </h5>
                            <input type="text" name="email">
                            <h5>Phone: </h5>
                            <input type="number" name="phone">
                            <h5>City: </h5>
                            <input type="text" name="city">
                        </form>
                    </div>
                    <div class="fcol2">
                        <form action="">
                            <h5>Facebook: </h5>
                            <input type="link" name="link">
                            <h5>LinkedIn: </h5>
                            <input type="link" name="link">
                        </form>
                    </div>
                </div>
            </div>
            <br>    
            <br>    
            <div class="basic">
                <div class="basic_head">
                    <h2><u>Education</u></h2>
                </div>
                <br>
                <div class="fcol">
                    <div class="fcol1">
                        <form action="">
                            <h5>Secondary School: </h5>
                            <input type="text" name="ss">
                            <h5>Starting Year: </h5>
                            <input type="number" name="syear">
                            <h5>Ending Year: </h5>
                            <input type="number" name="eyear">
                            <br>
                            <br>
                            <br>
                            <h5>Higher Secondary School: </h5>
                            <input type="text" name="hss">
                            <h5>Starting Year: </h5>
                            <input type="number" name="syear">
                            <h5>Ending Year: </h5>
                            <input type="number" name="eyear">
                        </form>
                    </div>
                    <div class="fcol2">
                        <form action="">
                            <h5>College/University: </h5>
                            <input type="name" name="uni">
                            <h5>Starting Year: </h5>
                            <input type="number" name="syear">
                            <h5>Ending Year: </h5>
                            <input type="number" name="eyear">
                            <h5>Department: </h5>
                            <input type="text" name="dept">
                            <h5>Major: </h5>
                            <input type="text" name="major">
                            <h5>CGPA: </h5>
                            <input type="number" name="cgpa">
                        </form>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="basic">
                <div class="basic_head">
                    <h2><u>Technical Skills</u></h2>
                </div>
                <br>
                <div class="fcol">
                    <div class="fcol1">
                        <form action="">
                            <h5>Define Skill: </h5>
                            <input type="text" name="skill_name">
                            <h5>Describe: </h5>
                            <input type="text" name="des">
                            <h5>Related Projects: </h5>
                            <input type="number" name="eyear">
                            <br>
                            <br>
                            <div class="add_skill">
                                <label>Add Skill</label>
                                <button id="add"><i class="plus circle icon big add_btn"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <div class="basic">
                <div class="basic_head">
                    <h2><u>Soft Skills</u></h2>
                </div>
                <br>
                <div class="fcol">
                    <div class="fcol1">
                        <form action="">
                            <h5>Define Skill: </h5>
                            <input type="text" name="skill_name">
                            <br>
                            <br>
                            <div class="add_skill">
                                <label>Add Skill</label>
                                <button id="add"><i class="plus circle icon big add_btn"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <div class="basic">
                <div class="basic_head">
                    <h2><u>Volunteer Experience</u></h2>
                </div>
                <br>
                <div class="fcol">
                    <div class="fcol1">
                        <form action="">
                            <h5>Event Name: </h5>
                            <input type="text" name="skill_name">
                            <h5>Role: </h5>
                            <input type="text" name="role">
                            <h5>Your Contribution: </h5>
                            <input type="text" name="cont">
                            <br>
                            <br>
                            <div class="add_skill">
                                <label>Add </label>
                                <button id="add"><i class="plus circle icon big add_btn"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <div class="basic">
                <div class="basic_head">
                    <h2><u>Personal Projects</u></h2>
                </div>
                <br>
                <div class="fcol">
                    <div class="fcol1">
                        <form action="">
                            <h5>Project Name: </h5>
                            <input type="text" name="project_name">
                            <h5>Verified by: </h5>
                            <input type="text" name="ver">
                            <h5>Project Description: </h5>
                            <input type="text" name="pro_des">
                            <br>
                            <br>
                            <div class="add_skill">
                                <label>Add </label>
                                <button id="add"><i class="plus circle icon big add_btn"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="basic">
                <div class="basic_head">
                    <h2><u>Publications</u></h2>
                </div>
                <br>
                <div class="fcol">
                    <div class="fcol1">
                        <form action="">
                            <h5>Title: </h5>
                            <input type="text" name="project_name">
                            <h5>Year Published: </h5>
                            <input type="text" name="ver">
                            <h5>Verified By: </h5>
                            <input type="text" name="pro_des">
                            <br>
                            <br>
                            <div class="add_skill">
                                <label>Add </label>
                                <button id="add"><i class="plus circle icon big add_btn"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <br>

        <div class="submit">
            <button class="submit"><i class="check circle icon huge submit_btn"></i></button>
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