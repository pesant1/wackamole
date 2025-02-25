<!DOCTYPE html>
<html>
<head>

<title>Test file3</title>

</head>
<body>
<body style="background-color:gray;">
<h1>Ajax backend test</h1>

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
        
        $sql = "SELECT * FROM test ORDER BY score DESC, created_at ASC";
        $result = mysqli_query($conn, $sql);       

        $board = [];
        if($result -> num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $board[] = $row;
            }
        }

        header('Content-Type: application/json');
        echo json_encode($board);
        mysqli_close($conn); 
?>




</body>
</html> 

