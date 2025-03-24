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
                        $sql = "INSERT INTO test (name, score) VALUES ('NULLY', $data);";            
                        $result = mysqli_query($conn, $sql);                                    
                }
        }
        $fclose($fp);
        mysqli_close($conn); 
?>
