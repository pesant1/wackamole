<!DOCTYPE html>
<html>
<head>

<title>Test serial txd file</title>

</head>
<body>
<body style="background-color:gray;">
<h1>Test file to send serial from pi to avr</h1>

<?php
        $serialPort = "/dev/ttyUSB0"
        $baudrate = "2400"  
        
        $fp = $fopen($serialPort, "w+");
        exec("ssty -F $serialPort $baudrate cs8 -cstopb -parenb");

        $datasend = "Goodbye World\n";
        fwrite($fp, $daasend);

        fclose($fp);
?>


</body>
</html> 

