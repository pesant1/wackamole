<!DOCTYPE html>
<html>
<head>
<title>Test file</title>



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
        $sql = "select name, score from test;";
        $result = mysqli_query($conn, $sql);       
?>
</meta http-equiv="refresh" content="5">
<?php
    if($result -> num_rows > 0) 
    { 
        while($row = $result->fetch_assoc())
        {
            echo "name: {$row["name"]} | score: {$row["score"]} <br>";
        }
    }
    mysqli_close($conn); 
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

