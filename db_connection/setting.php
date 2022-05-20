<?php

include('E:\php-todo_application\config\config.php');

//Create Connection
$connect = new mysqli($server, $user, $password, $db_name);

//Check Connection
if($connect->connect_error) {
    die("Connection Failed: " . $connect->connect_error);
}

echo "Connected Successfully";

?>