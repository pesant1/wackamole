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

        $sql = "select name, score from test order by score DESC;";
        $dbcnt = "select count(*) as total from test";
        $result = mysqli_query($conn, $sql);
        $cntresult = mysqli_query($conn, $dbcnt)
 
        $countrow = $cntresult->fetch_assoc();
        $entrycnt = $countrow['total'];
        echo $countrow['total'];
        mysqli_close($conn); 


?>

<body style="background-color:gray;">

</body>
</html> 

