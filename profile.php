<?php require 'signin_info.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Name - Marketz</title>
	<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
	<link rel="stylesheet" type="text/css" href="css/survey.css">
	<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
	<link rel="stylesheet" href="vendor/grid/simple-grid.css">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/sidenav_user.css">
    <link rel="stylesheet" href="css/profile.css">
    
</head>
<body>
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
 
    
    <div class="content" style="margin-left:200px;padding-top:40px;padding-bottom:20px;">
        <div style="max-width:800px;margin:0 auto;">
            
            <div style="display: grid;grid-template-columns: 350px 440px;grid-gap:10px;border:1px solid transparent;box-sizing: border-box;">
                    <div class="basic-info">
                            <img src="Images/base_image_user.jpg" alt="" class="round-image user-image">
                            <p class="user-fname margin-0"><?php echo $user_logged_username ?></p> 
                            <p class="user-country"><?php echo $user_logged_country ?></p>       
                    </div>
          
                    <div class="about-user">
                        <p class="margin-0 title">About Me</p>
                        <p class="margin-0 content">
                            <?php echo $user_logged_desc ?>
                        </p>
                    </div>
            </div>
            
            <div class="tabs-profile">
               <a href="" class="general-button">Games</a>
               <a href="" class="general-button">Favorite</a>
            </div>

            <div class="content-profile">
                <div class="head" style="border:1px solid transparent !important;">
                    <p class="margin-0 title">Games</p>
                    <a href="" class="general-button" style="margin-left:auto;margin-right:20px;">Filter</a>
                </div>

                <div class="games-info">
                    <div class="game-img" style="background-image:url('https://steamcdn-a.akamaihd.net/steam/apps/804490/header_292x136.jpg?t=1565043724');"></div>
                    <div class="detail" style="border:1px solid transparent !important;">
                        <p class="name margin-0">Creed: Rise to Glory™</p>
                        <p class="plays">200 Plays</p>
                        <div class="category">
                            <a href="" class="category-button">Action</a>
                            <a href="" class="category-button">Simulation</a>
                            <a href="" class="category-button">Single Player</a>
                        </div>
                    </div>
                </div>

                <div class="games-info">
                    <div class="game-img" style="background-image:url('https://steamcdn-a.akamaihd.net/steam/apps/400940/header_292x136.jpg?t=1560862004');"></div>
                    <div class="detail" style="border:1px solid transparent !important;">
                        <p class="name margin-0">Budget Cuts</p>
                        <p class="plays">10 Plays</p>
                        <div class="category">
                            <a href="" class="category-button">Simulation</a>
                            <a href="" class="category-button">Single Player</a>
                        </div>
                    </div>
                </div>
                <div class="games-info">
                    <div class="game-img" style="background-image:url('https://steamcdn-a.akamaihd.net/steam/apps/355790/header_292x136.jpg?t=1565102104');"></div>
                    <div class="detail" style="border:1px solid transparent !important;">
                        <p class="name margin-0">Styx: Shards of Darkness</p>
                        <p class="plays">2000 Plays</p>
                        <div class="category">
                            <a href="" class="category-button">Rpg</a>
                            <a href="" class="category-button">Simulation</a>
                        </div>
                    </div>
                </div>

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
</html>