
<?php


  $category = $_POST['select1'];
  $username = $_POST['user_name'];
  $Title = $_POST['Title'];
  $Time = $_POST['Time'];
  $Ingredients = $_POST['Ingredients'];
  $Description = $_POST['Description'];
$Images = $_POST['Images'];

$conn = new mysqli('localhost','root','','iwt');
if($conn->connect_error){
	die('connection failed:'.$conn->connect_error);
}
else{
	$stmt ="insert into add_recipe(category,user_name,Title,Time,Ingredients,Description,Images)values('$category','$username','$Title','$Time','$Ingredients','$Description','$Images')";
	if($conn->query($stmt)){
		
		
	header("location:./my.php");
	
		
	}
	
	else
		echo "Ërror :".$conn->error;

 


$conn->close();


}


?>











































