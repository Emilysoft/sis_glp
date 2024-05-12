<?php
$host = 'localhost';
$dbname = 'rg_glp';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

   // echo "conectado";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
