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
        <div class="basic-width-center-900px">	
            <div class="head" style="overflow:hidden;display:flex;flex-flow:column;border:1px solid black;padding:15px;display: block;width:100%;box-sizing: border-box;">

                <div class="head-top">
                    <p class="survey-name">Survey Makanan<a href="" style="padding-left:10px;font-size:15px;"><i class="far fa-edit"></i></a></p>
                    
                    <ul class="save-stat none-list-style">
                        <li style="color:red;">Not Saved</li>
                        <li>-</li>
                        <li>2 Min Ago</li>
                    </ul>
                </div>

                <div class="head-bottom">
                        <div class="head-options">
                                <!-- <a href="" class="options-button button-global">Preview</a> -->
                                <a href="#statistic" class="options-button button-global" id="statbutton">Statistic</a>
                                <a href="respondent_info.php" class="options-button button-global">Respondent</a>
                            </div>
                        <a href="" class="options-button save-button" >Save</a>
                </div>


            </div>

            <div class="content-survey">
                    <div class="fillable">
                    <div class="multiple-choice-test">
                            <div class="content-body">
                                <p style="margin:0;margin-bottom:10px;font-size:20px;margin-bottom:5px;">Pick This Choice Of Word <a href=""><i class="far fa-edit"></i></a></p>
                            
                                <p style="margin:0;margin-bottom:10px;">Pick This Choice Of Word <a href=""><i class="far fa-edit"></i></a></p>
                                <p class="text add-new">+ Add New</p>
                            </div>
                            <div class="options-body">
                                <a href="" class="option-click button-global">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                    </div>




                <div class="multiple-choice-test">
                                    <div class="content-body">
                                <p style="margin:0;margin-bottom:10px;">Pick This Choice Of Word <a href=""><i class="far fa-edit"></i></a></p>
                                <ul class="none-list-style choice-list" >
                                    <li class="choice"><input type="radio" name="" id="" class="checkbox"><p class="text">Lorem Ipsum <a href="" style="padding-left:10px;font-size:15px;"id="clickedit" ><i class="far fa-edit"></i></a> <a href="" style="padding-left:10px;font-size:15px;"><i class="fas fa-minus-square"></i></a></p></li>
                                    <li class="choice"><input type="radio" name="" id="" class="checkbox"><p class="text add-new" id="clickadd" data-add-second="x"> + Add New</p></li>
                                </ul>
                                </div>
                                <div class="options-body">
                                <a href="" class="option-click button-global">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                </div>
                    </div>


                <a href="#" class="add-new-object button-global" id="addmainbutton">
                    + Add New
                </a>

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