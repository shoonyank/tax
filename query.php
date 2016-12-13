<?php
require("connect.php");
if (isset($_SESSION['newsigned_in']))
{
$q=$_GET["upstr"];
$sn=$_GET["sn"];
$rn=$_GET["rname"];
$sql = "UPDATE `SHANTI_INDUSTRIES`.`customer_details` SET `$rn` = '$q' WHERE `customer_details`.`sn` = $sn";
$result = $cxn->query($sql);
if(!$result)
{
	//something went wrong, display the error
	echo 'Error: '. mysql_error();
}
else
{
	echo "field updated";
}
}
else
{
	echo "Login";
}
?>
