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
			echo "<input type=hidden name=run value=Open>";
			echo $row['cname']."\t \t \t".$row['date']."<br/>";
			echo "<input type=hidden name=sn value='".$row['sn']."'>";
			echo "<br><input type=radio name=file value=print checked=yes> Detailed <input type=radio name=file value=print2> Short<br>";
			echo "<input type=submit value=Submit>";
			echo "</form>";
		}
	}
	/*	
		while($row=$result->fetch_assoc()){
			echo "<form method=get>";
			echo "<input type=hidden name=run value=Open>";
			echo "<input type=hidden name=sn value='".$row['sn']."'>";
			echo $row['cname']."\t \t \t".$row['date']."<br/>"."<input type=submit value=Open>";
			echo "</form>";
		}		
		*/
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
			header("location:".$_GET['file'].".php?sn=".$_GET['sn']);
		}
	}
}
else
{
	echo "You have to log in";
}
?>
