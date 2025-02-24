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
        $sql = "select * from test;";
        $result = mysqli_query($conn, $sql);

        foreach($result as $row) 
        { 
            echo "<option value='{$row['id']}'>{$row['book_name']}</option>\n";
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

