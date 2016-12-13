</!DOCTYPE html>
<html>
<head>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body lang="EN-US">
<?php
echo "<a href=?run=0>Back</a><hr width=50%>";
if (isset($_SESSION['newsigned_in']))
{
	if(!(isset($_GET['sn'])))
	{
		$query="select * from `SHANTI_INDUSTRIES`.`customer_details` order by date asc";
		$result=$cxn->query($query);
		while($row=$result->fetch_assoc()){
			echo "<form action='' method=get>";
			echo "<input type=hidden name=run value=Edit>";
			echo $row['cname']."\t \t \t".$row['date']."<br/>";
			echo "<input type=hidden name=sn value='".$row['sn']."'>";
			echo "<input type=submit value=Edit>";
			echo "</form>";
		}
	}
	else
	{
		$sql = "SELECT * FROM `SHANTI_INDUSTRIES`.`customer_details` WHERE sn = ".$_GET['sn'];
		$result = $cxn->query($sql);
    	if ($result->num_rows==0)
    	{
    		echo "Serial Number not found";
    	}
    	else
    	{
			include("entry.php");
		}
	}
}
else
{
	echo "You have to log in";
}
?>
</body>
</html>