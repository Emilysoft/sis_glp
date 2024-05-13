<?php

function listar_cilindro()
{
    require_once("../model/model_cilindro.php");
    $cilindro = new model_cilindros();
    $resultado = $cilindro->listar_cilindros();
    echo '<pre>'.var_dump($cilindro).'</pre>';
    require_once("../view/view_cilindro.php");

};







?>