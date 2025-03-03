<!DOCTYPE html>
<html>
<head>

<title>Test serial txd file</title>

</head>
<body>
<body style="background-color:gray;">
<h1>Test file to send serial from pi to avr</h1>

    <?php
            if($_SERVER["REQUEST_METHOD"] =="POST")
            {
                exec("/usr/bin/stty -F /dev/ttyUSB0 2400 cs8 -parenb -cstopb");
                
                $fp = fopen("/dev/ttyUSB0", "w+");            
            }
                $datasend = "1Goodbye World0";
                fwrite($fp, $datasend);
                fclose($fp);   
    ?>


</body>
</html> 

