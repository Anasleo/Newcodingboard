<?php  
include_once 'db.php';

if (isset($_POST['Submit'])) {
$name = $_POST ['name'];	//from index.php(html form) name
		$email = $_POST ['email'];	//from index.php(html form) name
		$password = $_POST ['password'];//from index.php(html form) name

		$query = "INSERT INTO `userinfo`( `name`, `email`, `password`) VALUES ($name,$email,$password)";

		$run = mysqli_query($conn, $query);

		if ($run == TRUE){
			echo "This is insert into Database table";
		}
		else 
			echo "error!";	
    }
?>