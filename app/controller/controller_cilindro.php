<?php

    require_once("app/model/model_cilindros.php");
    $cilindro = new model_cilindros();
    $resultado = $cilindro->listar_cilindros();
    require_once("app/view/view_cilindro.php");







?>