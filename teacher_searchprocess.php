<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="teacher_searchprocess.css">

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
        <span class="spaceboxv"></span> <span class="spaceboxv"></span>
        <span class="spaceboxv"></span> <span class="spaceboxv"></span>
        <span class="spaceboxv"></span>
        <span class="spaceboxv"></span>
        <h1 class="people">People</h1>

        <!-- search backend here -->
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

                if(empty($search) || $search==' '){
                    echo "<script>location.assign('teacher_home.php')</script>";
                }
                else{
                    // found a string
                    $sqlquery1 = "SELECT * FROM student WHERE (st_name LIKE '%$search%')";
                    $returnobj1 = $conn->query($sqlquery1);

                    $sqlquery2 = "SELECT * FROM post_teacher WHERE (t_name LIKE '%$search%')";
                    $returnobj2 = $conn->query($sqlquery2);
                    
                    if($returnobj1->rowCount()==0){
                        ///no data found
                        echo"No data found"; 
                    }
                    else{
                        // st_id, st_username, st_name, st_email, st_dept
                        $searchdata=$returnobj1->fetchAll();
                        foreach($searchdata AS $row){
                            ?>  
                                <div class="temp">
                                    <div class="ui card postbox">
                                        <div class="content">
                                            <i class='right floated bx bx-star iconbox' style='color:#343400'></i>
                                            <div class="header" id="post_title"><?php echo $row['st_name'];?></div>
                                            <div class="header" id="author_name"><?php echo $row['st_username'];?> </div>
                                            <div class="description">
                                                <p id="post_desc"><?php echo $row['st_email'];?> | Dept: <?php echo $row['st_dept'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <div class="header" id="author_name"><?php echo $row['t_name'];?> |Author</div>

                                            <div class="description">
                                                <p id="post_desc"><?php echo $row['tpost_desc'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
       <!-- ends here -->

    </div>
</body>

</html>


