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



<?php

if (isset($_POST['findTrain'])){

?>

<section style="background-color: rgba(211, 211, 211, 1); border: 3px solid white; width: max-content; margin: auto; padding: 2%; box-shadow: 0 0 15px black; border-radius: 10px;">
		<table style="border: none; font-family: monospace; color: ; font-size: 20px; width: max-content;">
			<tbody>
				<tr>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">TRAIN NO</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">TRAIN NAME</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">FROM STATION</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">TO STATION</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">SEATS</td>
					<td style="font-family: sans-serif; font-weight: bolder; text-align: center; font-size: 25px;">FARE</td>
				</tr>

				<?php
			$qry = "select * from train where FROM_STN = \"".$_POST['fromSTN']."\" and TO_STN = \"".$_POST['toSTN']."\"";
			$result = mysqli_query($conn, $qry);
			foreach($result as $x){
				echo "<tr>";
				foreach($x as $a){
					echo "<td style='padding: 10px 15px;'>".$a."</td>";
				}
				echo "</tr>";
			}
			?>
			</tbody>
		</table>
</section>









<?php

}

else{
?>

	<section>

		<div class="tab">
			<p class="menu">Trains Between Stations</p>
		</div>
		<form action="TrainBwStn.php" class="tab red" method="post">
			From Station: 

		<select name="fromSTN" id="fromSTN">
			<option hidden>Select</option>
			<?php
			$qry = "select distinct FROM_STN from train";
			$result = mysqli_query($conn, $qry);
			foreach ($result as $a) {
				echo '<option>'.$a['FROM_STN'].'</option>';
			}
			?>
		</select>

		<br />
		<br /> To Station: 
		
		<select name="toSTN" id="toSTN">
			<option hidden>Select</option>
			<?php
			$qry = "select distinct TO_STN from train";
			$result = mysqli_query($conn, $qry);
			foreach ($result as $a) {
				echo '<option>'.$a['TO_STN'].'</option>';
			}
			?>
		</select>
		
		<br />
		<br /> <input type="submit" name="findTrain" value=" SEARCH TRAIN "><br />
	</form>
	<br />
	</section>
<?php
}
?>
</body>
</html>

<?php

// }

?>