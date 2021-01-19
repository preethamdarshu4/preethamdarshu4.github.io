<?php
    define("DB_SERVER", "localhost:3306");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "mxs4yaM@40vz");
    define("DB_NAME", "phpdb");
    $table = "regdata";

    try {
        $conn = new PDO("mysql:host=".DB_SERVER.";dbname=". DB_NAME, DB_USERNAME, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        die("ERROR: Could'nt connect to DataBase. ". $e->getMessage() );
    }
?>