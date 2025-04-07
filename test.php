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
        
        $sql = "SELECT name, score FROM test2 ORDER BY score DESC;";
        $result = mysqli_query($conn, $sql);       
?>

<table>
        <tr>
            <td>Name</td>
            <td>Score</td>
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
                    <br>";
                }
            } 
        ?>
</table>


<?php
    $sql = "SELECT name, from test where name='NULLY';";
    $result = mysqli_query($conn, $sql); 
    if($result)
    {
 //       <h1>Test file to display db content</h1>
    }
    
    mysqli_close($conn);
?>

<script>
        if()
        {}
</script> 
<meta http-equiv="refresh" content="5">


</body>
</html> 

