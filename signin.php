<?php
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

//Connect DB
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect("localhost","root","","marketz") or die("Error connecting to db");

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
			<h1 style="font-size: 20px">Sign In</h1>
			<form method="post" action="" style="border: 0px;">
			<?php
				// Remember me
				if(isset($_POST['userid']) AND isset($_POST['userpasswd'])){
					if(isset($_POST['remember'])){
						if($_POST['userid']!="" AND $_POST['userpasswd']!=""){
							$cookie_name = $_POST['userid'];
							$cookie_value = $_POST['userpasswd'];
							setcookie($cookie_name,$cookie_value);
						}
					}

					$id = $_POST['userid'];
					$pass = $_POST['userpasswd'];

					//Check DB
					$query = " SELECT * FROM `user` WHERE ID = '$id' AND Password = '$pass'";
					$dbid = array();

					$result = mysqli_query($con,$query);
					//if($result){	
						while($row = mysqli_fetch_assoc($result)){
							$dbid[] = $row;
						}

						$numId = count($dbid);

						$url = "Marketz.html";

						if($numId > 0){
							redirect($url);
						}
					//}

				}else {	
					$id = "";
					$pass = "";		
				}
			?>

			ID : <input type="text" name="userid" value="<?= $id ?>" style="width: 59.5%; margin-bottom: 10px;"><br>
			Password : <input type="password" name="userpasswd" value="<?=$pass ?>" style="width: 50%; height: 35px;"><br>
			<input type="checkbox" name="remember" value="Remember"> Remember me<br>

			<input class="btn btn-primary" type="submit" name="signin" value="Sign In">
			
			</form>
			<button class="btn btn-secondary" onclick="window.location.href = 'Register.php';" style="margin-top: 5px">
				Register
			</button>
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