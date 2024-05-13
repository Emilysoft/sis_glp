<?php
$host = 'localhost';
$dbname = 'rg_glp';
$username = 'root';
$password = 'root';

class conectar {
    public static function conexion()
    {
        try {
            $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conexion;
    }
}









?>
