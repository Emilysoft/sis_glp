<?php
require_once('../../db/conect.php');
class model_cilindros {
private $db;
private $cilindros;

public function __construct() {
    $this -> db=conectar::conexion();
    $this -> cilindros = array();
}

function listar_cilindros()
    {
        $consulta = 'SELECT * FROM cilindros';
        $resultado = $this->db->prepare($consulta);
        $resultado->execute();
        echo var_dump($resultado);
        return $resultado;
    }




}







?>