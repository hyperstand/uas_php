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

session_start();

if(isset($_SESSION['user_logged_id'])) $user_logged_id = $_SESSION['user_logged_id'];
else $user_logged_id = "";

$selectQuery = "SELECT * FROM `user` WHERE ID = '$user_logged_id'";

$selectResult = $con->query($selectQuery);

if ($selectResult->num_rows > 0) {
    while($row = $selectResult->fetch_assoc()) {
    	$user_logged_username = $row["Username"];
    	$user_logged_country = $row["Country"];
    	$user_logged_desc = $row["About_Me"];
    	$user_logged_balance = $row["Saldo"];
    }
}

if($user_logged_id != NULL){
	if($user_logged_desc == NULL){
		$user_logged_desc = "This user has not set their profile";
	}
}

?>