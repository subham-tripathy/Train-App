<?php

include_once('./dbcon.php');
if (isset($_COOKIE["mailID"])){
if (isset($_POST["searchTrainNumber"])){
	$qry = "select * from train where TR_NO = ".$_POST['searchTrainNumber']."";
	$result = mysqli_query($conn, $qry);
	$result = $result->fetch_assoc();
	if(gettype($result) == 'NULL'){
		echo '<script>
        	alert("Invalid Train Number");
    	</script>';	
	}
	else{
		$showTrain = true;
	}
}

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
				<a href="./TrainBwStn.php">Trains Between Stations</a>
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

	<div class="main">
		<p class="menu">Trains Enquiry</p>
	</div>
	<form action="SearchTrains.php" class="tab red" method="post">
		TrainNumber: <input type="text" name="searchTrainNumber" name="trainnumber"><br />
		<br /> <input type="submit"  value=" SEARCH TRAIN "><br />
	</form>
	<br />

	


	
	
	<?php
	if (isset($showTrain)){
	echo '
	<section style="background-color: rgba(211, 211, 211, 1); border: 3px solid white; width: max-content; margin: auto; padding: 2%; box-shadow: 0 0 15px black; border-radius: 10px;">

		<table  style="border: none; font-family: monospace; color: ; font-size: 20px; width: max-content;">
		<tbody>
				<tr>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">TRAIN NO</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">TRAIN NAME</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">FROM STATION</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">TO STATION</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">SEATS</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">FARE</td>
				</tr>';


				echo "<tr>";
			foreach($result as $a){
					echo "<td style='padding: 10px 15px'>".$a."</td>";
				}
				echo "</tr>";
			echo '
			</tbody>
			</table>
		</section>
		';
}
?>
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