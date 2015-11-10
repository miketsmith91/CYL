<?php
function getConnection() {
    $servername = "127.0.0.1";
    $dbname = "cyl";
    $username = "root";
    $password = "admin";
    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname",
                $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (Exception $ex) {
        echo "EXCEPTION: Connection failed : " . $ex->getMessage();
    }
}
?>

