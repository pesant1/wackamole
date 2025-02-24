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

        $dbcnt = "select count(*) as total from test";
        $dbtot = mysqli_query($conn, $dbcnt);

        mysqli_num_rows($dbtot);
        echo mysqli_free_result($dbtot);

        //$countresult = $conn->query("select count(*) as total from test");
        //$countrow = $countresult->fetch_assoc();
        //echo $countrow['total'];
        //echo $dbtot['total'];
        mysqli_close($conn);        
?>

<body style="background-color:gray;">

</body>
</html> 

