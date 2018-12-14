<?php

$conn = mysqli_connect("macgapoy.com", "mac13v_alumni", 'YSp5$q[wh%\pD[Y?', "mac13v_alumni");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>
