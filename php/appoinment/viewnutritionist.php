<?php 

require 'config.php';  //Linking the configuration file
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Viewe Nutrisionist</title>
	<link rel="stylesheet"  href="../../css/appoinment/userapp.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
    
		<nav>
		


		
		<ul> 
						

			<li><a href="userapp.php">Book Appoinment</a></li>
			<li><a href="viewnutritionist.php">View Nutrisionist</a></li>
		    <li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="../../html/home/index.html">Back to Home</a></li>
							

		</ul>

		<div id="banner"><img src="../../images/appoinment/logo.png" class="img0"></div>

		
	</nav>




</header>




<body>
	<h1 style="margin-left:35% ;margin-top:80px">Nutrisionist Information</h1>
	<table class="table4">
		<tr>
		<th>Nutrisionist ID</th>
		<th>Nutrisionist Name</th>
		<th>NIC</th>
		</tr>

		<?php
		 $sql3="SELECT  * FROM  nutriacc " ;
		$result3=$con->query($sql3);
		
				$row3=$result3->fetch_assoc();  

				echo "<tr><td>".$row3["ID"]."</td><td>".$row3["Nutri_Name"]."</td><td>".$row3["NIC"]."</td></tr>";
			


			

		?>
		
	</table>
</body>
</html>