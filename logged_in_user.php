<?php require 'signin_info.php'?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Keywords " content="game,survey,market">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Marketz</title>
	<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="vendor/grid/simple-grid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/sidenav_user.css">
</head>
<body>

    <!-- <div style="margin-left:200px;margin-top:100px;">
            <div class="welcome" style="margin:auto;width:450px;align-items:center;border:1px solid ">
                    <p style="font-size:23px;">Halo , <span>Lorem Ipsum</span></p>
					<form>
                            <input type="text" placeholder="Search..." name="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
            </div>
    </div> -->


    <!-- <div class="content" style="margin-left:200px;padding-top:100px;padding-bottom:20px;">
			<div style="max-width:950px;margin:0 auto;border:1px solid black;">
					<div class="welcome" style="margin:auto;width:450px;align-items:center;border:1px solid ">
							<p style="font-size:23px;">Halo , <span>Lorem Ipsum</span></p>
							<form>
									<input type="text" placeholder="Search..." name="Search">
									<button type="submit"><i class="fa fa-search"></i></button>
							</form>
					</div>
				</div>
	</div> -->
		


	<section id="top">
		<div class="pad">
			
		<div class="content">

				<div style="margin:0 auto;border:1px solid black;margin-top:40px;box-sizing:border-box;padding-top:20px;padding-bottom:20px;">
						<div class="welcome" style="margin:auto;width:450px;align-items:center;border:1px solid;margin-bottom:15px;">
								<p style="font-size:23px;">hello , <span><?php echo $user_logged_username ?></span></p>
								<form>
										<input type="text" placeholder="Search..." name="Search">
										<button type="submit"><i class="fa fa-search"></i></button>
								</form>
						</div>
						<div class="main-button">
							<a href="" style="border:1px solid black;background: #4d0000;color:white;padding:5px 10px;">Category</a>
							<a href="" style="border:1px solid black;background: #4d0000;color:white;padding:5px 10px;">Filter</a>
						</div>
				</div>

			<!-- <div class="top-category">
			<p>Top Categories</p>
			<ul class="category-list">
				<li id="catergory-button">Action</li>
				<li id="catergory-button">Role-Play</li>
				<li id="catergory-button">Simulation</li>
				<li id="catergory-button">Racing</li>
				<li id="catergory-button">Education</li>
				<li id="catergory-button">Simulation</li>
			</ul>
			</div> -->

			<div class="game-body" style="display: flex;flex-wrap: wrap;">
				<div id="game-info">
					<div class="image-holder" style="background-image:url('https://steamcdn-a.akamaihd.net/steam/apps/400940/header_292x136.jpg?t=1560862004');"></div>
					<div class="detail">
						<p class="name">Budget Cuts</p>
						<ul class="info-parent">
								<li class="info-child" id="creator"><a href="">Shard</a></li>
								<li class="info-child">•</li>
								<li class="info-child"id="total_play">55000 Plays</li>
						</ul>
					</div>
				</div>
				
				<div id="game-info">
					<div class="image-holder" style="background-image:url('https://steamcdn-a.akamaihd.net/steam/apps/804490/header_292x136.jpg?t=1565043724');"></div>
					<div class="detail">
							<p class="name">Creed: Rise to Glory™</p>
							<ul class="info-parent">
									<li class="info-child" id="creator"><a href="">Shard</a></li>
									<li class="info-child">•</li>
									<li class="info-child"id="total_play">1000 Plays</li>
							</ul>
					</div>
				</div>

				<div id="game-info">
					<div class="image-holder" style="background-image:url('https://steamcdn-a.akamaihd.net/steam/apps/355790/header_292x136.jpg?t=1565102104');"></div>
					<div class="detail">
						<p class="name">Styx: Shards of Darkness</p>
						<ul class="info-parent">
								<li class="info-child" id="creator"><a href="">Shard</a></li>
								<li class="info-child">•</li>
								<li class="info-child"id="total_play">30 Plays</li>
						</ul>
					</div>
				</div>

				<div id="game-info">
					<div class="image-holder" style="background-image:url('https://steamcdn-a.akamaihd.net/steam/apps/620980/header_292x136.jpg?t=1566319139');"></div>
					<div class="detail">
							<p class="name">Beat Saber</p>
							<ul class="info-parent">
								<li class="info-child" id="creator"><a href="">Y8</a></li>
								<li class="info-child">•</li>
								<li class="info-child"id="total_play">3000 Plays</li>
							</ul>	
					</div>
				</div>

			</div>

			<div class="game-loader">
				<img src="images/logoM.gif" width="80" height="80" alt="LOGO">
				<p class="text">Loading...</p>
			</div>
</div>


			</div>
	</section>

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


	<?php include "right_nav.php"?>  
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="js/user.js"></script>
</body>
</html>
