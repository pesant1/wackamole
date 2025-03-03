<!DOCTYPE html>
<html>
<head>

<title>Test serial txd file</title>

</head>
<body>
<body style="background-color:gray;">
<h1>Test file to send serial from pi to avr</h1>

<?php
        exec("mode /dev/ttyUSB0 BAUD=2400 PARITY=N data=8 stop=1 xon=off");
        
        $fp = fopen("/dev/ttyUSB0", "w+");

        $datasend = "Goodbye World\n";
        fwrite($fp, $daasend);

        fclose($fp);
?>


</body>
</html> 

