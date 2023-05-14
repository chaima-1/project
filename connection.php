<?php

    $database= new mysqli("edoc.cbz9gbamyctk.eu-north-1.rds.amazonaws.com", "admin", "123456789", "edoc", 3306);
    if ($database->connect_error){
        die("Connection failed: ".$database->connect_error);
    }

?>
