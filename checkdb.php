<!DOCTYPE html>
<html>
<head>
<title>Test file2</title>
</head>
<body>

<h1>Test file to check db</h1>

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

        $countresult = $conn->query("select count(*) as total from test");
        $countrow = $countresult->fetch_assoc();
        echo $countrow['total'];

        mysqli_close($conn);        
?>

<body style="background-color:gray;">

</body>
</html> 

