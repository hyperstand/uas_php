<?php require 'signin_info.php'?>
<?php require 'right_nav.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>game_title|Maketz</title>
	<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
	<link rel="stylesheet" type="text/css" href="css/survey.css">
	<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
	<link rel="stylesheet" href="vendor/grid/simple-grid.css">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/sidenav_user.css">
    
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
        <div style="max-width:850px;margin:0 auto;">
        <iframe class="gamescreen" style="border:1px solid black; display: flex;justify-content: start;height:550px;width:100%;" src="test_data/survey_test.html"></iframe>
        <div class="gamedetail" style="margin-top:15px;">
            <h2>Creed: Rise to Glory™</h2>
            <ul style="display:flex;list-style:none;padding:0;margin:0;align-items: stretch;border:1px solid black;">
                <li style="margin-right:10px;"><a href="">Shard</a></li>
                <li style="margin-right:10px;">•</li>
                <li style="margin-right:10px;">1000 Plays</li>
                <!-- <li style="margin-left:auto;">
                    <ul class="likedislike" style="display:flex;list-style:none;padding:0;margin:0;align-items: stretch;border:1px solid black;">
                        <li style="font-size:16px;">10</li>
                        <li><img src="Images/thumbsup.png" alt=""></li>
                    </ul>
                </li> -->
            </ul>
            <article style="margin-top:10px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, et? Beatae facere aspernatur quisquam soluta adipisci fuga porro ipsum voluptatem cupiditate culpa, delectus cumque perspiciatis numquam tempora ea pariatur blanditiis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In esse nihil rerum magnam quasi, ullam delectus voluptatem libero accusamus officiis repudiandae? Quis, accusantium ratione placeat illum suscipit a sit temporibus?</p>
            </article>
        </div>
    </div>
    </div>
</body>
<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
<script src="js/user.js"></script>
</html>