<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "crudoperation");

    $connection = mysqli_connect(HOSTNAME , USERNAME , PASSWORD , DATABASE);

    if(!$connection) {
        echo"connection made";
    }
   
    ?>