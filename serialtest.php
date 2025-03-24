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
        $bluetooth = "/dev/rfcomm0";
        $server = "localhost";
        $username = "php";
        $password = "php1";
        $database = "finalproject";
        $conn = mysqli_connect($server, $username, $password, $database);

        $fp = fopen($bluetooth, "r");
        if (!$fp) 
        {
                die("Not open");
        }
        while(true)
        {
                $data = fgets($fp);
                if($data)
                {
                        $data = trim($data);
                        $why = "INSERT INTO test (name, score) VALUES (NULLY, $data)";            
                        $conn -> query($why);            
                }
        }
        $fclose($fp);
        mysqli_close($conn); 
?>


</body>
</html> 

