<html>
<?php
require ('connect.php');
if (isset($_GET['run'])) $linkchoice=$_GET['run'];
	else $linkchoice='';
?>
<head>
<title>SHANTI INDUSTRIES</title>
<script type="text/javascript" src=f.js>
</script>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<table width=100% border=.1>
<tr><td width=85%><center><h1>SHANTI INDUSTRIES</h1>
Dealers of:- All Sort of Laboratory Equipments,<br>Chemicals, A.R. & C.P. Grade Acids.<br>
Off.:-74, Dabhaw(Dandi) Rewa Road, Allahabad-8<br>Resi:-95/118, Sarvodaya Nagar, Allapur, Allahabad-6</center></td>
<td width=15%><p align=right style='text-align:right'>0532-2501753<br>0532-3293049<br>9415235381<br>9335343064<br>9335112617<br>
<?php include("log.php");
echo "</p></td></tr></table>";
echo "<br><br><center>";
switch($linkchoice)
{
	case 'New':
		include("new.php");
		break;
	case 'Open':
		include("open.php");
		break;
	case 'Edit':
		include("edit.php");
		break;
	default:
		echo "<form action='' method=GET>";
		echo "<input type=submit name=run value=New> ";
		echo "<input type=submit name=run value=Open> ";
		echo "<input type=submit name=run value=Edit>";
		echo "</form>";
		break;
}
echo "</center>";
?>
</body>
</html>
