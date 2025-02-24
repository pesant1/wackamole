<!DOCTYPE html>
<html>
<head>
<title>Final Project test sql + php</title>
</head>
<body>

<?php
        $server = "localhost";
        $username = "php";
        $password = "php1";
        $database = "finalproject";
        $conn = mysqli_connect($server, $username, $password, $database);

        //Connection checker
        if (!$conn)
        {
            die("Connection failed: {mysqli_connect_error()}");
            echo "Connected successfully";
        }
        $sql = "select * from test;";
        $result = mysqli_query($conn, $sql);
    ?>

<body style="background-color:gray;">

</body>
</html> 