<?php

define("DB_HOST", "localhost");
define("DB_NAME", "employee_db");
define("DB_USER", "dbuser");
define("DB_PASSWORD", "Password1@");

$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($connection->connect_error) {
    trigger_error("Database connection failed: " . $conn->connection_error, E_USER_ERROR);
}

$sql = "select id, first_name, last_name from employees";

$result = $connection->query($sql);

if($result === false) {
    trigger_error("Sql Error, verify SQL", E_USER_ERROR);
}

while($row = $result->fetch_assoc()) {
    echo $row['id']." ".$row['first_name']." ".$row['last_name']."\n";
}


?>
