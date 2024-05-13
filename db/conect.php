<?php



class conectar {
    public static function conexion()
    {
        try {
            $host = 'localhost';
            $dbname = 'rg_glp';
            $username = 'root';
            $password = 'root';

            $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $conexion;
    }
}

?>
