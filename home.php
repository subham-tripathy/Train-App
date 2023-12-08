<?php

include_once('./dbcon.php');


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>E-Trains</title>
<link rel="stylesheet" href="UserHome_Css.css">
</head>
<body>
	<header>
		<h1 class="hd">National Ticket Booking Spot</h1>
		<div class="home">
			<p class="menu">
				<a href="./UserHome.html">Home</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="./UserViewTrains.php">View Trains</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="./TrainBwStn.php">Trains Between Stations</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="bookingdetails">Ticket Booking History</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="./Fare.html">Fare Enquiry</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="./Availability.html">Seat Availability</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="./SearchTrains.html">Search By TrainNo</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="./UserHome.html">Profile</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="userlogout">Logout</a>
			</p>
		</div>
	</header>
    <section style="text-align: center; width: 100%;">
        <h1>WELCOME TO THE HOME PAGE OF "National Ticket Booking Spot"</h1>
    </section>
	<br />
	<footer>
		<address id="cent">
			Contact: Mr. Shashi Raj<br />Email:<a href="mailto">Shashi@alumni.com</a><br />PhoneNo:
			9547462319
		</address>
	</footer>
</body>
</html>

<?php






?>