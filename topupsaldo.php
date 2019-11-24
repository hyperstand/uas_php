<?php include "signin_info.php"?>
<?php
if(isset($_POST['topup'])) {
	$user_logged_balance += $_POST['topup'];
	$topupQuery = "UPDATE user SET Saldo = '$user_logged_balance' WHERE ID = '$user_logged_id'";
	$topupResult = mysqli_query($con, $topupQuery);
	if($topupResult){
		echo "<script> location.href='logged_in_user.php'; </script>";
		exit;
	}
}	
?>
<html>
<head>
<meta charset="utf-8">
<title>Top Up</title>
<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
	<form action="" method="post">
		Top Up : <input type="text" name="topup">

		<input type="submit" name="Submit">

	</form>
</body>
</html>