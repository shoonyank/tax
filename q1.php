<head>
<title>SHANTI INDUSTRIES</title>
</head>
<body>
<table width=100% border=.1>
<tr><td width=85%><center><h1>SHANTI INDUSTRIES</h1>
Dealers of:- All Sort of Laboratory Equipments,<br>Chemicals, A.R. & C.P. Grade Acids.<br>
Off.:-74, Dabhaw(Dandi) Rewa Road, Allahabad-8<br>Resi:-95/118, Sarvodaya Nagar, Allapur, Allahabad-6</center></td>
<td width=15%><p align=right style='text-align:right'>0532-2501753<br>0532-3293049<br>9415235381<br>9335343064<br>9335112617<br>
</p></td></tr></table><br><br><center>
<?php
require("connect.php");
if (isset($_SESSION['newsigned_in']))
{
$n=$_GET["n"];
$sql1 = "SELECT * FROM `SHANTI_INDUSTRIES`.`item_details` WHERE n = ".$n;
$result1 = $cxn->query($sql1);
if ($result1->num_rows==0)
{
	echo "No entry found";
}
else
{
	$row1 = $result1->fetch_assoc();
	if(isset($_POST['save']))
	{
		$sql = "UPDATE `SHANTI_INDUSTRIES`.`item_details` SET `part` = '".$_POST['pr']."',`qun` = ".$_POST['qn'].",`rate` = ".$_POST['rate'].",`per` = '".$_POST['per']."' WHERE `item_details`.`n` = $n";
		$result = $cxn->query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo "<script>alert('Error: ". mysql_error()."');close();</script>";
		}
		else
		{
			echo "<script>alert('field updated');close();</script>";
		}
	}
	else
	{
		echo "Enter data to update<br><form action='' method=POST>";
		echo "<table><tr><td>Particulars:</td><td><input type=text size=50 name=pr value='".$row1['part']."'></td></tr>";
		echo "<tr><td>Quantity:</td><td><input type=text size=50 name=qn value='".$row1['qun']."'></td></tr>";
		echo "<tr><td>Rate:</td><td><input type=text size=50 name=rate value='".$row1['rate']."'></td></tr>";
		echo "<tr><td>Per:</td><td><input type=text size=50 name=per value='".$row1['per']."'></td></tr></table>";
		echo "<tr><td></td><td><input type=submit name=save value='Save'></td></tr></table>";
	}
}
}
else 
{
	echo "Login";
}
?>
</center>
</body>
</html>
