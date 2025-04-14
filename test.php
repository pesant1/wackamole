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
        
        //$entry = "SELECT name FROM test2 ORDER BY id DESC LIMIT 1;";
        //$result = mysqli_query($conn, $sql); 

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
        ?>
</table>

<?php
    $sql = "SELECT NAME FROM test2 WHERE name='NULLY';";
    $result = mysqli_query($conn, $sql);
        if($row = $result->fetch_assoc())
        {
            $nully = "{$row["NAME"]}";
        } 
?>

<?php if ($nully == "NULLY") 
    { ?> 
        <p?> New entry detected, put your name? </p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
        Name: <input type="text" name="fname">
        <input type="submit">
        <br>
        <input type="submit" value="no">
        </form>   
<?php 
    } ?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // collect value of input field
            $name = $_POST['fname'];
            $nname = $_POST['nname'];
            if ($name) 
            {
                $sql = "UPDATE test2 SET name='$name' where name ='Nully';";
                $result = mysqli_query($conn, $sql);
            } elseif(empty($name) || (empty($nname))) 
            {
                $sql = "UPDATE test2 SET name='Anony' where name ='Nully';";
                $result = mysqli_query($conn, $sql);                
            }
            header("Location: test.php", true, 303);
        }   
        mysqli_close($conn);
?>

</body>
</html> 

