<?php 
	require_once "connection.php";
	class managerDB extends conecction{
		public function executeQuery($query,$user,$name){				
		 	$sql="";
		 	switch ($query) {
		 		case "Delete":
		 			$sql="DELETE FROM Almacen WHERE idAlmacen = ".$user;
		 			break;	
		 		case "Update":
		 			$sql="UPDATE Almacen SET lugar = '".$name."' WHERE idAlmacen = ".$user;
		 			break;	
		 		case "Insert":
		 			$sql="INSERT INTO Almacen (idAlmacen,lugar) VALUES (".$user.",'".$name."')";
		 			break;
		 	}
		 	$this->conecctionDB();
		 	$this->db->query($sql);
		 	$this->closeConecction();

		 	

		}

		public function getControler(){
			$this->conecctionDB();
			$result = $this->db->query('SELECT * FROM Almacen');
			$this->closeConecction();
			return $result; 
		}

	}
 ?>