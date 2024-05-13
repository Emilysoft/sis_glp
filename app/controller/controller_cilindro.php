<?php

    require_once("../model/model_cilindros.php");

    $cilindro = new model_cilindros();
    $resultado = $cilindro->listar_cilindros();
    require_once("../view/view_cilindro.php");

?>