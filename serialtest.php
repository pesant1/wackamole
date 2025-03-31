<?php
        $bluetooth = "/dev/rfcomm0";
        $server = "localhost";
        $username = "php";
        $password = "php1";
        $database = "finalproject";
        $conn = mysqli_connect($server, $username, $password, $database);

        //$output = shell_exec('sudo rfcomm bind /dev/rfcomm0 98:D3:31:F6:92:6D 1');      

        $fp = fopen($bluetooth, "r");
        if (!$fp) 
        {
                die("Not open");
        }
        ob_start();

        while(true)
        {
                $data = fread($fp, 4);
                $data2 = strval($data)
                //$data = fgets($fp);
                //$ascii = hexdec($data);
                

                if($data2)
                {
                        $data2 = trim($data2);
                        $sql = "INSERT INTO test (name, score) VALUES ('NULLY', $data2);";            
                        $result = mysqli_query($conn, $sql);                                    
                }
        }
        $fclose($fp);
        mysqli_close($conn); 
?>
