<?php
define('DB_DRIVER', 'amysqli');
define('DB_HOST','localhost');
define('DB_USER','instasto_instasto');
define('DB_PASS' ,'adedapo@123');
define('DB_NAME', 'instasto_ss');
define('DB_PREFIX', 'abwf_');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

