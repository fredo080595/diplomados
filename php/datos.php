<?php  


class enviar{

	public function enviarDatos($datos){

		var_dump($datos);
	}

}

$datos = array();

$datos[0] = $_POST['tel'];
$datos[1] = $_POST['nom'];


$obj = new enviar();
echo $obj->enviarDatos($datos);