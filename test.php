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
        $sql = "select name, score from test order by score DESC;";
        $result = mysqli_query($conn, $sql);
        
        $countresult = $conn->query("select count(*) as total from test");
        $countrow = $countresult->fetch_assoc();
        $entrycnt = $countrow['total'];        
?>

<table>
        <?php
            if($result -> num_rows > 0) 
            { 
                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td> {$row["name"]} </td><td> score: {$row["score"]} </td><td> <br>";
                }
            }
            mysqli_close($conn); 
        ?>
</table>

<script>
        let currententrycnt = <?php echo $countrow['total'];?>
        function newentry


</script>

<body style="background-color:gray;">

</body>
</html> 

