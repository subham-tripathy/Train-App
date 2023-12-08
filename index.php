<?php

include_once('./dbcon.php');
if (!isset($_COOKIE["mailID"])){


if (isset($_POST['LoginBTN'])){
$qry = "select * from customer where mailid = '".$_POST['uname']."'";
$result = mysqli_query($conn, $qry);
$result = $result->fetch_assoc();
setcookie("mailID", $_POST['uname'], time() + (86400 * 30), "/"); // 86400 = 1 day
echo '<script>
		alert("Welcome '.$result['FNAME'].'");
		window.location.replace("./UserHome.php");
	</script>';





}
else{


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
				<a href="./UserHome.php">Profile</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="userlogout">Logout</a>
			</p>
		</div>
	</header>
	<div class="tab green">User Login</div>
	<form action="./" class="tab brown" method="post">
		<br /> UserName: <input type="text" name="uname"
			placeholder="Enter Your EmailId"> <br /> <br /> Password: <input
			type="password" name="pword"> <br /> <br /> <input
			type="submit" value=" LOGIN " name="LoginBTN"><br />
	</form>
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

}

}
else{
    echo '<script>
        // alert("Login First");
        window.location.replace("./UserHome.php");
    </script>';
}


?>