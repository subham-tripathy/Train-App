<?php
include_once('./dbcon.php');
if (isset($_COOKIE["mailID"])){
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>E-Trains</title>
<link rel="stylesheet" href="UserHome_Css.css">
<style>
</style>
</head>
<body>
	<header>
		<h1 class="hd">National Ticket Booking Spot</h1>
		<div class="home">
			<p class="menu">
				<a href="./">Home</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="UserViewTrains.php">View Trains</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="./UserViewTrains.php">Trains Between Stations</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="bookingHistory.php">Ticket Booking History</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="FareEnq.php">Fare Enquiry</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="SearchTrains.php">Search By TrainNo</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="userHome.php">Profile</a>
			</p>
		</div>
		<div class="home">
			<p class="menu">
				<a href="logout.php">Logout</a>
			</p>
		</div>
	</header>




	<section style='
		display: flex;
		margin-left: 100px;
		align-items: center;
		justify-content: space-between;
	'>
		<img src="./profileicon.png" alt="profile-pic" style=" height: 150px; margin-right: 30px;">
			<?php
			$qry = "select * from customer where mailid = '".$_COOKIE['mailID']."'";
			$result = mysqli_query($conn, $qry);
			$result = $result->fetch_assoc();
			echo "<h1> NAME:<br> ".$result['FNAME'];
			echo $result['LNAME']."</h1>";
			echo "<h1> EMAIL:<br>".$result['MAILID']."</h1>";
			echo "<h1> Phone No:<br> ".$result['PHNO']."</h1>";
			echo "<h1> Address:<br> ".$result['ADDR']."</h1>";
			?>
			</tbody>
		</table>
	</section>





</body>
</html>


<?php

}
else{
    echo '<script>
        alert("Login First");
        window.location.replace("./");
    </script>';
}


?>