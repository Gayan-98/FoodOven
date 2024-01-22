<?php 

require 'config.php';  //Linking the configuration file

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Recipe User</title>
	<link rel="stylesheet"  href="../../css/appoinment/nutri.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>

		<nav>		
		<ul> 
			
		
		    
		    <li><a href="nutrionistapp.php">My Appointments</a></li> 
			<li><a href="searchuser.php">Get Recipe User contact details</a></li>			
		    <li><a href="../../html/home/index.html">Back to Home</a></li>
					

		</ul>

		<div id="banner"><img src="../../images/appoinment/logo.png" class="img0"></div>


        </nav>


</header>

<body>


	
<form method="post" action="searchuser.php" class="usersearch">

	

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Recipe User ID</label>
		<label style="font-weight: bold">*Recipe User Name</label>
		<input type="text" name="PID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>

			
	</form>


	

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" >Recipe User Information</caption>

		<tr>
		
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		
   

		</tr> <?php  


		$PID =$_POST['PID'];

		$sqlP="SELECT  * FROM  user  WHERE ID=('$PID') OR Fname=('$PID') " ;  //retrieve the data
		$resultP=$con->query($sqlP);





		if($resultP->num_rows > 0){
		
		 while ($rowP=$resultP->fetch_assoc()){

			//Display the details of user 	
			echo "<tr><td>".$rowP["FullName"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["Tel"]."</td><td>".$rowP["Email"]."</td></tr>";
             
		 }


		 echo ("</table>");


	}  


	else{
		echo '<div id="mbox"><h3 id="message"> No Result Found</h3></div>';
		}

		 }	
	?>
 </table>
			
    
	
	

</body>
</html>


