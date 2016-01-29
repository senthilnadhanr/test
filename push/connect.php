<?php

    $db_host = "localhost";
    $db_user = "root"; //change to your database username, it is root by default
    $db_pass = '';     //change to your database password, for XAMPP it is nothing for WAMPP it is root
    $db_db = 'push'; //change to your database name

    if(!@mysql_connect($db_host, $db_user, $db_pass) || !@mysql_select_db($db_db)) {
        die('couldnt connect to database ' .mysql_error());
    }

?>