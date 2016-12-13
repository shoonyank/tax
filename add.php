<?php
require("connect.php");
if (isset($_SESSION['newsigned_in']))
{
$pr=$_GET["pr"];
$sn=$_GET["sn"];
$rate=$_GET["rate"];
$qn=$_GET["qn"];
$per=$_GET["per"];
$sql = "INSERT INTO `SHANTI_INDUSTRIES`.`item_details`(`sn`, `part`, `qun`, `rate`, `per`) VALUES($sn, '$pr', $qn, $rate, '$per') ";
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
