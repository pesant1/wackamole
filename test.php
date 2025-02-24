<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

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

<!DOCTYPE html>
<html>
<head>
<title>Final Project test sql + php</title>
</head>
<body>

