<!DOCTYPE html>
<html>
<head>
<style>
table, th, td 
{
  border: 1px solid black;
}
</style>
<title>Test file</title>

</head>
<body>
<body style="background-color:gray;">
<h1>Test file to display db content</h1>

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
        
        <p><?= var_dump($_GET) ?></p> 
        <p><?= var_dump($_POST) ?></p>      
?>

</body>
</html> 

