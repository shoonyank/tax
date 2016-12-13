<?php
if (isset($_SESSION['newsigned_in']))
{
	if(isset($_POST['submit']))
	{
		echo "<center><a href=?run=New>Back</a><hr width=50%>";
		if($_POST['cn']&&$_POST['add']&&$_POST['tin'])
		{
			$sql = "INSERT INTO `SHANTI_INDUSTRIES`.`customer_details` (`date`, `cname`, `add`, `TIN`, `VAT`, `ox`) VALUES ('".$_POST['date']."','".safe(nl2br($_POST['cn']))."','".safe(nl2br($_POST['add']))."',".$_POST['tin'].",'','')";
			$result = $cxn->query($sql);
			$query="select max(sn) as sn from `SHANTI_INDUSTRIES`.`customer_details`";
			$row=$cxn->query($query);
			$sn=$row->fetch_object()->sn;
			if(!$result)
			{
				//something went wrong, display the error
				echo "Error: " . $sql . "<br>" . $cxn->error;
			}
			else
			{
				header("refresh:1 ?run=Edit&sn=$sn");
			}
		}
		else
		{
			echo "error";
		}
		echo "</center>";
	}
	else
	{
		echo "<center><a href=?run=0>Back</a><hr width=50%><form action=?run=New method=post>";
		echo "<input type='hidden' name='date' value=".Date("Y-m-d").">";
		//echo "<table><tr><td>Serial No:</td><td><input type='text' name='sn' onchange=snck() ID=s></td></tr>";
		//echo "<tr><td>Book No:</td><td><input type='text' name='bn' ID='b' onchange=nan(this.value)></td></tr>";
		echo "<table><tr><td>Customer Name:</td><td><input type='text' name=cn></td></tr>";
		echo "<tr><td>Address:</td><td><textarea name='add'></textarea></td></tr>";
		echo "<tr><td>TIN:</td><td><input type='text' name=tin id=t onchange='nan(this.value)'></td></tr>";
		echo "<tr><td> </td><td><input type=submit name=submit Value=Submit></td></tr></table><hr width=50%></center>";
		echo "</form>";
	}
}
else
{
	echo "You have to log in";
}
?>
