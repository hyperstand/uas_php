<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Keywords " content="game,survey,market">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Balance</title>
	<link rel="stylesheet" type="text/css" href="css/marketzstyle.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="vendor/fontawesome5_10_2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="vendor/grid/simple-grid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/boostrap.css">
    <link rel="stylesheet" href="css/sidenav_user.css">
	<link rel="stylesheet" href="css/help.css">
	<link rel="stylesheet" href="css/payment.css">
	<link rel="stylesheet" href="css/modal.css">
	
  
</head>

<body>


<div class="basic-content">
	<div class="basic-width-center-850px payment">
				<div class="head">
					<div class="payment-info">
						<p class="margin-0 small">My Balance</p>
						<p class="margin-0 large">Rp 9.999.999</p>
					</div>
					<div class="options-button">
						<a href="#addbalance" class="button-options button-global" id="addbalancebutton">
							<span>Add Balance</span>
						</a>
						<a href="#withdraw" class="button-options button-global" id="withdrawbalancebutton">
								<span>withdraw</span>
						</a>
					</div>
				</div>

				<div class="history-transactions none-list-style">
					<div class="title-head">
						<p class="title">History Transactions</p>
					</div>
					<div class="card-transactions-info">
						<p class="transaction-date-box">2018-06-13</p>
						<p class="transaction-Desc-box">Income From Game ABC</p>
						<p class="transaction-Total-box plus">+ Rp 300.000</p>
					</div>
					<div class="card-transactions-info">
							<p class="transaction-date-box">2018-06-13</p>
							<p class="transaction-Desc-box">Withdraw</p>
							<p class="transaction-Total-box minus">- Rp 300.000</p>
					</div>
				</div>
	</div>
</div>





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
					<li class="list-data"><a href="signin.php">Login</a></li>
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


		<?php require"tools/payment/add_balance.php";?>

				<!-- The Modal -->
				<div id="withdraw-balance-modal" class="modal">
					<!-- Modal content -->
					<div class="modal-content withdraw-balance">

						<div class="title">
							<p style="font-size:20px;" class="margin-0">Withdraw Balance</p>
							<i class="fas fa-times-circle close"></i>
						</div>

						<div class="input-box">
							<p class="margin-0">Bank Account Number</p>
							<input type="text" style="width:100%;">
							<p class="error-text margin-0">Please Fill It</p>
						</div>
						
						<div class="input-box">
							<p class="margin-0">Bank Name</p>
							<select style="width:100%;">
							<option value="mdri">Mandiri</option>
							<option value="bca">BCA</option>
							<option value="bni">BNI</option>
							</select>
							<p class="error-text margin-0">Please Fill It</p>
						</div>

						<div class="input-box">
							<p class="margin-0">Number</p>
							<input type="text" style="width:100%;">
							<p class="error-text margin-0">Please Fill It</p>
						</div>

						<a href="" class="upload-button">
							Withdraw Balance
						</a>
					</div>
        		</div> 

		<?php include "right_nav.php"?>
	<!-- <div  id="hideAll">&nbsp;</div> -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="js/user.js"></script>
	<script src="js/payment.js"></script>
</body>
</html>



<!-- 		<div id="logopic">
			<a href="marketz.html"><img src="images/logoM.gif" width="80" height="80" alt="LOGO"></a>
		</div> -->
