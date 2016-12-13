<?php
require("connect.php");
if (isset($_SESSION['newsigned_in']))
{
$sn=$_GET["sn"];
$sql1 = "SELECT * FROM `SHANTI_INDUSTRIES`.`customer_details` WHERE sn = ".$sn;
$result1 = mysql_query($sql1);
if (mysql_num_rows($result1)==0)
{
	echo "0";
}
else
{
	echo "1";
}
}
else
{
	echo "Login";
}
?>
