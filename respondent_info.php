<?php require 'signin_info.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey Makanan</title>
	<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
	<link rel="stylesheet" type="text/css" href="css/survey.css">
	<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
	<link rel="stylesheet" href="vendor/grid/simple-grid.css">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/sidenav_user.css">
    <link rel="stylesheet" href="css/basic.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/respondent.css">

</head>
<body>


    <!-- add Modal -->
    <?php require "tools/add_test_1.php";?>
    <?php require "tools/info.php";?>
    <?php require "tools/edit_text.php";?>
    <?php require "tools/add_test_input.php";?>

    <!-- main navbar -->
    <?php require "tools/nav_bar/main_nav.php";?>

        <div class="basic-content">
            <div class="basic-width-center-900px respondent" >
                    
                <div class="navbar-survey">

                    <div class="survey-info">
                        <p class="survey-name margin-0">Survey Makanan</p>
                        <p class="survey-total-respondent margin-0">20 respondent</p>
                    </div>
                    <div class="list-user">
                        <a href="" class="respondent-button">
                            <img src="Images/base_image_user.jpg" alt="" class="round-image">
                            <p class="margin-0">Guest</p>
                        </a>

                        <a href="" class="respondent-button">
                            <img src="Images/base_image_user.jpg" alt="" class="round-image">
                            <p class="margin-0">Guest</p>
                        </a>
                    </div>

                </div>


                <iframe class="survey-content" src="http://localhost/laptop/uas_php/test_data/survey_answer.php">

                </iframe>

            </div>
        </div>



    </div>
    <?php include "right_nav.php"?> 


</body>
<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
<script src="js/user.js"></script>
<script src="js/builder.js"></script>

</html>