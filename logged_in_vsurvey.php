<?php require "signin_info.php" ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Survey</title>
	<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
	<link rel="stylesheet" type="text/css" href="css/survey.css">
	<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
	<link rel="stylesheet" href="vendor/grid/simple-grid.css">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/sidenav_user.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/basic.css">
</head>
<body>


    <?php require "tools/my_survey/modal/buy_survey.php"?>






    <section class="sidenav" style="z-index: 99999">
            <nav>
                <div class="logo-slide">
                        <div id="logo">
                            <h1>~Marketz~</h1>
                        </div>
                </div>
    
                <ul class="nav-list">
                    <li class="list-data"><a href="logged_in_user.php">Games</a></li>
                    <li class="list-data"><a href="logged_in_vsurvey.php" >Need Survey Data</a></li>
                    <li class="list-data"><a href="not_available.html">Be A Game Creator</a></li>
                    <li class="list-data"><a href="">Help</a></li>
                </ul>
            </nav>
    
            <div class="footer">
                    <div>
                    <a href="not_available.html" style="font-size:15px;">About Us</a>
                    <a href="not_available.html" style="font-size:15px;">Contact Us</a>
                    </div>
                    <p style="font-size:15px;">© 2019 Marketz, LLC</p>
                </div>
    </section>

    
    <div class="basic-content">
        <div class="basic-width-center-850px">
            <div class="head align-items-center" >
                    <div class="title">
                            <h1>My Survey</h1>
                            <p>Create Own Survey</p>        
                    </div>
            </div>

            <ul class="survey-list none-list-style">

                    <li class="survey-add button-global" id="createsurveybutton">
                            <i class="fas fa-plus-square large" style="margin-bottom:10px;"></i>
                            <p class="text-desc">Create New Survey</p>
                    </li>

                <li  class="survey-content">
                    <p class="content-title">Survey Makanan</p>
                    <p class="total-response">30 respondent</p>
                    <div class="tools none-list-style">
                        <a href="respondent_info.php" class="button-tools"  data-id=""><i class="fas fa-users"></i></a>
                        <a href="logged_in_csurvey.php" class="button-tools"><i class="far fa-edit"></i></a>
                    </div>
                </li>

            

            </ul>

        </div>
    </div>

    <?php include "right_nav.php"?>  

</body>
<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
            <script src="js/user.js"></script>
            <script src="js/create_survey.js"></script>
</html>