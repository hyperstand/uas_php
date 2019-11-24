<?php require "signin_info.php" ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit Games</title>
	<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
	<link rel="stylesheet" type="text/css" href="css/survey.css">
	<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
	<link rel="stylesheet" href="vendor/grid/simple-grid.css">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidenav_user.css">
	<!-- <link rel="stylesheet" href="css/profile.css"> -->
    <link rel="stylesheet" href="css/games.css">
    <link rel="stylesheet" href="css/modal.css">   
    <link rel="stylesheet" href="css/basic.css"> 
        
</head>
<body>
	<section class="sidenav">
		<nav>
			<div class="logo-slide">
					<div id="logo">
						<h1>~Marketz~</h1>
					</div>
			</div>

			<ul class="nav-list">
				<li class="list-data"><a href="Marketz.html">Games</a></li>
				<li class="list-data"><a href="survey.html">Need Survey Data</a></li>
				<li class="list-data"><a href="">Be A Game Creator</a></li>
				<li class="list-data"><a href="">Help</a></li>
			</ul>
		</nav>

		<div class="footer">
                <div>
                <a href="" style="font-size:15px;">About Us</a>
                <a href="" style="font-size:15px;">Contact Us</a>
                </div>
                <p style="font-size:15px;">© 2019 YouTube, LLC</p>
            </div>
	</section>
    

 

    <?php require"tools/submit_game/modal/add_games.php";?>
    <?php require"tools/submit_game/modal/edit_games.php";?>
    <?php require"tools/submit_game/modal/earning.php";?>

    <div class="content" style="margin-left:200px;padding-top:40px;padding-bottom:20px;">
        <div style="max-width:900px;margin:0 auto;">
            
           
            
			<div class="head-info">
				<div class="info">
                    <p style="font-size:20px;" class="margin-0">My Games</p>
                    <div style="display:flex;flex:1 1">
                        <div class="" style="border:1px solid black;width:100%;"><p style="color:blue;" class="margin-0">This Month Earning :</p><p class="margin-0">Rp 300.000</p></div>
                        <div class="" style="border:1px solid black;width:100%;"><p style="color:blue;" class="margin-0">Total Games :</p> <p class="margin-0">20</p> </div>
                        <!-- <div class="" style="border:1px solid black;width:100%;"><p style="color:blue;" class="margin-0">This Month Respondents :</p> <p class="margin-0">150</p> </div> -->
                    </div>
                </div>
				<a href="#create_game" id="addbutton" class="button-big">
					<i class="fas fa-upload"></i>
					<span>Submit Games</span>
				</a>
			</div>

			
                <table class="game-list">
                <tr>
                    <th>Game</th>
                    <th>Status</th>
                    <th>Total Plays</th>
                    <th>My Earning</th>
                    <!-- <th>Respondents</th> -->
                </tr>
                <tr>
                    <td style="display:flex;align-items: center;">
                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/1172380/capsule_184x69.jpg?t=1573860540">
                        
                        <div class="detail game" style="margin-left:8px;margin-right:8px;" data-game-id=<?php echo "";?>>
                            <p class="margin-0">Creed: Rise to Glory™</p>
                            <div class="options">
                                <a href=<?php echo "#edit_game=11"?> id="editbutton"><i class="fas fa-edit"></i></a>
                                <a href=<?php echo "#my_earn=11"?> id="earningbutton"><i class="fas fa-money-bill"></i></a>
                                <!-- <a href="#respondent" id="respondentbutton"><i class="fas fa-users"></i></a> -->
                            </div>
                        </div>
                    </td>
                    <td style="color:blue;">Pending</td>
                    <td>200 Plays</td>
                    <td>Rp 9.999.999</td>
                    <!-- <td>50</td> -->
                </tr>
                <tr>
                    <td style="display:flex;align-items: center;">
                        <img src="https://steamcdn-a.akamaihd.net/steam/apps/1172380/capsule_184x69.jpg?t=1573860540">
                        
                        <div class="detail" style="margin-left:8px;margin-right:8px;" data-game-id="11">
                            <p class="margin-0">Creed: Rise to Glory™</p>
                            <div class="options">
                                <a href="#edit_game=" id="infobutton"><i class="fas fa-edit"></i></a>
                                <a href="#my_earn" id="earningbutton"><i class="fas fa-money-bill"></i></a>
                            </div>
                        </div>
                    </td>
                    <td style="color:Green;">Accepted</td>
                    <td>200 Plays</td>
                    <td>Rp 9.999.999</td>
                    <!-- <td>500</td> -->
                </tr>
                </table>
			

        </div>
    </div>

    <?php include "right_nav.php"?>

</body>
<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
<script src="js/user.js"></script>
<script src="js/submit_games.js"></script>
</html>