<?php

define("DB_HOST", "localhost");
define("DB_NAME", "employee_db");
define("DB_USER", "dbuser");
define("DB_PASSWORD", "Password1@");

try{

    $connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

}
catch (Exception $ex){
    echo $ex->getMessage();
}
finally{
    $connection = null;
}

?>
