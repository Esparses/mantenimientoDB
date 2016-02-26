<?php 
	require_once "config.php";
	class conecction{
		protected $db;
		function conecctionDB(){
			$this->db = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			$this->db->set_charset(DB_CHARSET);
		}
		function closeConecction(){
			$this->db->close();
		}
	}
 ?>