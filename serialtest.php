<?php
        $bluetooth = "/dev/rfcomm0";
        $server = "localhost";
        $username = "php";
        $password = "php1";
        $database = "finalproject";
        $conn = mysqli_connect($server, $username, $password, $database);

        $output = shell_exec('sudo rfcomm bind /dev/rfcomm0 98:D3:31:F6:92:6D 1');      

?>
