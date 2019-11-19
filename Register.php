<?php
isset($_POST['username']) ? $username = $_POST['username'] : $username = "";
isset($_POST['userid']) ? $userid = $_POST['userid'] : $userid = "";
isset($_POST['userpasswd']) ? $userpasswd = $_POST['userpasswd'] : $userpasswd = "";
isset($_POST['confirm']) ? $confirm = $_POST['confirm'] : $confirm = "";
isset($_POST['useremail']) ? $useremail = $_POST['useremail'] : $useremail = "";
isset($_POST['usercountry']) ? $usercountry = $_POST['usercountry'] : $usercountry = "";

//Connect DB
$con = mysqli_connect("localhost","root","","marketz") or die("Error connecting to db");

$query = "INSERT INTO user(ID,Username,Password,Email,Country)";
$query .= "VALUES('$userid' ,'$username', '$userpasswd' , '$useremail', '$usercountry');";

if(isset($_POST['register'])) {
	if($userpasswd == $confirm AND $userpasswd != "") $result = mysqli_query($con, $query);
	else {
		$userpasswd = "";
		$confirm = "";
	}		
}

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Keywords " content="game,survey,market">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Marketz</title>
	<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  
</head>



<body>
	<section id="signin_section">
		<div class="container offset-5" style="padding-top: 100px">
			<h1 style="font-size: 20px">Register</h1>
			<form method="post" action="" style="border: 0px;">
			
			Username : <input type="text" name="username" value="<?= $username ?>" style="width: 59%; margin-bottom: 10px;"><br>
			ID : <input type="text" name="userid" value="<?= $userid ?>" style="width: 69%; margin-bottom: 10px;"><br>
			Password : <input type="password" name="userpasswd" value="<?= $userpasswd ?>" style="width: 59.5%; margin-bottom: 10px;"><br>
			Confirm : <input type="password" name="confirm" value="<?= $confirm ?>" style="width: 61%; margin-bottom: 10px;"><br>
			Email : <input type="email" name="useremail" value="<?= $useremail ?>" style="width: 64.5%; margin-bottom: 10px;"><br>
			Country : <input type="text" name="usercountry" value="<?= $usercountry ?>" style="width: 61%; margin-bottom: 10px;"><br>


			<input class="btn btn-primary" type="submit" name="register" value="Register">
			</form>
		</div>
	</section>

    <section class="sidenav">
		<nav>
			<div class="logo-slide">
					<div id="logo">
						<h1>~Marketz~</h1>
					</div>
			</div>

			<ul class="nav-list">
                <li class="list-data"><a href="Marketz.html"class="active">Games</a></li>
				<li class="list-data"><a href="survey.html" >Need Survey Data</a></li>
				<li class="list-data"><a href="not_available.html">Be A Game Creator</a></li>
				<li class="list-data"><a href="not_available.html">Help</a></li>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>




</html>