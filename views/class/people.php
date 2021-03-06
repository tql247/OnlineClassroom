<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="../../static/style.css">

    <!-- <link rel="icon" href="images/logobar.png"> -->
    <title>Danh sách học viên</title>
</head>

<body>

    <main class="container">
        <?php require("../../component/class_header.php") ?>
        <br>
        <div class="app-view">
            <div class="app-view-controll">
                <?php require("../../component/class_cover.php") ?>
                <br>

                <div class="content">
                    <div class="controll-bar d-flex">
                        <div class="controll-title"><a class="no-decor" href="index.php">Stream</a></div>
                        <div class="controll-title"><a class="no-decor" href="assignment.php">Assignment</a></div>
                        <div class="controll-title active">Học viên</div>
                    </div>
                    <hr>
                    <br>
                    <div>
                        <div class="mb-5">
                            <?php
                            if (isset($_SESSION['Admin']) || isset($_SESSION['Teacher'])) {
                                require("../../component/invite_student.php");
                                require("../../component/student_peding.php");
                                echo "<hr>";
                            }
                            ?>

                            <?php require("../../component/list_student.php")  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Modal Group-->
    <?php require("../../component/modals/confirm_kick.php") ?>

    <?php require("../../component/modals/confirm_allow_join_class.php") ?>
    <?php require("../../component/modals/confirm_disallow_join_class.php") ?>
    <!-- Modal Group-->


    <!-- Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- My javascript below -->
    <script type="text/javascript" src="../../static/main.js"></script>
</body>

</html>