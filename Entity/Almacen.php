<?php 
/**
* 
*/
class ClassName extends AnotherClass
{
	private $idAlmacen;
	private $lugar;
	function __construct($idAlmacen,$lugar)
	{
		$this->idAlmacen=$idAlmacen;
		$this->lugar=$lugar;
	}
	public function setIdAlmacen($idAlmacen){
		$this->idAlmacen=$idAlmacen;
	}

	public function setLugar($lugar){
		$this->lugar=$lugar;
	}
	public function getIdAlmacen(){
		return $this->idAlmacen;
	}
	public function getLugar(){
		return $this->lugar;
	}
}
 ?>