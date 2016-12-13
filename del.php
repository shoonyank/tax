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
		$sql="DELETE FROM `SHANTI_INDUSTRIES`.`item_details` WHERE `item_details`.`n` = ".$n;
		$result = $cxn->query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo "Error: ". mysql_error();
		}
		else
		{
			echo "field updated";
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
