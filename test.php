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
        
        //$sql = "SELECT * FROM test ORDER BY score DESC;";
        $sql = "SELECT * FROM test2 ORDER BY score DESC;";
        $result = mysqli_query($conn, $sql);       
?>

<table>
        <tr>
            <th>Name</th>
            <th>Score</th>
            <th>Time</th>

        </tr>   
        <?php
            if($result -> num_rows > 0) 
            { 
                while($row = $result->fetch_assoc())
                {
                    echo
                    "<tr>
                        <td> 
                            {$row["name"]} 
                        </td>
                        <td>
                            {$row["score"]} 
                        </td>
                        <td>
                            {$row["month"]} 
                            {$row["day"]} 
                            |
                            {$row["time"]} 
                            {$row["zone"]} 
                        </td>                        
                    ";
                }
            } 
            //mysqli_close($conn);    
        ?>
</table>

<?php
    $sql = "SELECT NAME FROM test2 WHERE name='bob';";
    $result = mysqli_query($conn, $sql);
        if($row = $result->fetch_assoc())
        {
            $nully = "{$row["NAME"]}";
        } 
?>

<?php if ($nully == "shahs") 
    { ?> 
        <form action="newname.php" method = "post">
        <input type="text" name="fname">
        <input type="submit"> 
<?php 
    } ?>







 

<meta http-equiv="refresh" content="5">

</body>
</html> 

