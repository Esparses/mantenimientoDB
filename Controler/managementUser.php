<?php 
	require_once "managerDB.php";
		if(isset($_POST["user"]) || isset($_POST["name"])){
							$user = $_POST["user"];
							$name = $_POST["name"];
							$query =$_POST["operation"];
						    $manager = new managerDB();
						    $manager->executeQuery($query,$user,$name);
				
			}
	header('Location: ../index.php');


 ?>
 