<?php
        $bluetooth = "/dev/rfcomm0";
        $server = "localhost";
        $username = "php";
        $password = "php1";
        $database = "finalproject";
        $conn = mysqli_connect($server, $username, $password, $database);

        date_default_timezone_set('America/New_York');
        //$output = shell_exec('sudo rfcomm bind /dev/rfcomm0 98:D3:31:F6:92:6D 1');      

        $mo = date("F");
        $day = date("j");
        $time = date("g:i");
        $zone = date("a");

        $fp = fopen($bluetooth, "r");
        if (!$fp) 
        {
                die("Not open");
        }

        while(true)
        {
                $data = fread($fp, 3);
                fclose($fp);
                
                if($data)
                {
                        $data = trim($data);
                        //$sql = "INSERT INTO test (name, score) VALUES ('NULLY', $data);";            
                        $sql = "INSERT INTO test2 (name, score, month, day, time, zone) VALUES ('NULLY', $data, '$mo', $day, '$time', '$zone');"; 
                        $result = mysqli_query($conn, $sql);                                
                }
        }
        $fclose($fp);
        mysqli_close($conn); 
        exit(0);

?>
        
