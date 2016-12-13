<?php
require("connect.php");
if (isset($_SESSION['newsigned_in']))
{
$sn = $_GET['sn'];
$sql = "SELECT * FROM `SHANTI_INDUSTRIES`.`customer_details` WHERE sn = ".$sn;
$result = $cxn->query($sql);
$row = $result->fetch_assoc();
?>
<html>

<head>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body lang="EN-US">

<div class="WordSection1">

<table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0"
 style='margin-left:2.65pt;border-collapse:collapse;border:none'>
 <tr style='height:141.0pt'>
  <td width="552" colspan="3" valign="top" style='width:414.2pt;border-top:solid #000001 1.0pt;
  border-left:solid #000001 1.0pt;border-bottom:solid #00000A 1.0pt;border-right:
  none;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:141.0pt'>
  <p class="TableContents">
  <b><u>TAX-INVOICE</u></b></p>
  <p class="TableContents" align="center" style='text-align:center'>TIN09613400274
  WEF-23-04-1988</p>
  <p class="TableContents" align="center" style='text-align:center'><b><u><span
  style='font-size:32.0pt'>S</span></u></b><b><u><span style='font-size:22.0pt'>HANTI
  </span></u></b><b><u><span style='font-size:32.0pt'>I</span></u></b><b><u><span
  style='font-size:22.0pt'>NDUSTRIES</span></u></b></p>
  <p class="TableContents" align="center" style='text-align:center'><span
  style='font-size:16.0pt'>Dealers of:- All Sort of Laboratory Equipments,</span></p>
  <p class="TableContents" align="center" style='text-align:center'><span
  style='font-size:16.0pt'>Chemicals, A.R. &amp; C.P. Grade Acids.</span></p>
  <p class="TableContents" align="center" style='text-align:center'><span
  style='font-size:16.0pt'>Off.:-74, Dabhaw(Dandi) Rewa Road, Allahabad-8</span></p>
  <p class="TableContents" align="center" style='text-align:center'><span
  style='font-size:16.0pt'>Resi:-95/118, Sarvodaya Nagar, Allapur, Allahabad-6</span></p>
  </td>
  <td width="204" colspan="3" rowspan="2" valign="top" style='width:153.35pt;
  border:solid #000001 1.0pt;border-left:none;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;
  height:141.0pt'>
  <p class="TableContents" align="right" style='text-align:right'><span
  style='font-size:10.0pt'>0532-2501753</span></p>
  <p class="TableContents" align="right" style='text-align:right'><span
  style='font-size:10.0pt'>0532-3293049</span></p>
  <p class="TableContents" align="right" style='text-align:right'><span
  style='font-size:10.0pt'>9415235381</span></p>
  <p class="TableContents" align="right" style='text-align:right'><span
  style='font-size:10.0pt'>9335343064</span></p>
  <p class="TableContents" align="right" style='text-align:right'><span
  style='font-size:10.0pt'>9335112617</span></p>
  <p class="TableContents" align="right" style='text-align:right'>
  <table cellpadding="0" cellspacing="0" align="left">
   <tr>
    <td width="3" height="14"></td>
   </tr>
   <tr>
    <td></td>
    <td><img width="195" height="133" src="images/image001.gif"></td>
   </tr>
  </table>
  <span style='font-size:10.0pt'>&nbsp;</span></p>
  <p class="TableContents" align="center" style='text-align:center'>&nbsp;</p>
  <p class="TableContents" align="center" style='text-align:center'>&nbsp;</p>
  <p class="TableContents" align="center" style='text-align:center'>&nbsp;</p>
  <p class="TableContents" align="center" style='text-align:center'>&nbsp;</p>
  <p class="TableContents" align="center" style='text-align:center'>&nbsp;</p>
  <p class="TableContents" align="center" style='text-align:center'>&nbsp;</p>
  <p class="TableContents" align="center" style='text-align:center'>&nbsp;</p>
  </td>
  <td style='height:141.0pt;border:none' width="0" height="188"></td>
 </tr>
 <tr style='height:13.8pt'>
  <td width="552" colspan="3" rowspan="4" valign="top" style='width:414.2pt;border-top:
  none;border-left:solid #000001 1.0pt;border-bottom:solid #000001 1.0pt;
  border-right:solid #00000A 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;
  height:13.8pt'><br clear="ALL">
  <p class="TableContents">Customer Name: <?php echo $row['cname'];?></p>
  <p class="TableContents">Address: <?php echo $row['add'];?></p>
  <p class="TableContents">TIN: <?php echo $row['TIN'];?></p>
  </td>
  <td style='height:13.8pt;border:none' width="0" height="18"></td>
 </tr>
 <tr>
  <td width="204" colspan="3" valign="top" style='width:153.35pt;border-top:none;
  border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.45pt'>
  <p class="TableContents">Book No: <?php echo $row['bn'];?></p>
  </td>
  <td style='border:none' width="0"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr>
  <td width="204" colspan="3" valign="top" style='width:153.35pt;border-top:none;
  border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.45pt'>
  <p class="TableContents">Serial No: <?php echo $row['sn'];?></p>
  </td>
  <td style='border:none' width="0"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr>
  <td width="204" colspan="3" valign="top" style='width:153.35pt;border-top:none;
  border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.45pt'>
  <p class="TableContents">Date: <?php echo $row['date'];?></p>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='height:15.0pt'>
  <td width="54" valign="top" style='width:40.5pt;border-top:none;border-left:solid #000001 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents">SL No.</p>
  </td>
  <td width="498" colspan="2" valign="top" style='width:373.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents" align="center" style='text-align:center'>Particulars</p>
  </td>
  <td width="66" valign="top" style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents" align="center" style='text-align:center'>Quantity</p>
  </td>
  <td width="78" valign="top" style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents" align="center" style='text-align:center'>Rate</p>
  </td>
  <td width="60" valign="top" style='width:45.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents" align="center" style='text-align:center'>Per</p>
  </td>
  <td style='height:15.0pt;border:none' width="0" height="20"></td>
 </tr>
  <?php
$sql1 = "SELECT * FROM `SHANTI_INDUSTRIES`.`item_details` WHERE sn = ".$sn;
$result1 = $cxn->query($sql1);
$i=1;
if ($result1->num_rows==0)
{
	echo '<script>alert("No Item found");back();</script>';
}
while($row1 = $result1->fetch_assoc())
{
?>
 <tr style='height:15.0pt'>
  <td width="54" valign="top" style='width:40.5pt;border-top:none;border-left:solid #000001 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents"><?php echo $i;?></p>
  </td>
  <td width="498" colspan="2" valign="top" style='width:373.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents" align="center" style='text-align:center'><?php echo $row1['part'];?></p>
  </td>
  <td width="66" valign="top" style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents" align="center" style='text-align:center'><?php echo $row1['qun'];?></p>
  </td>
  <td width="78" valign="top" style='width:58.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents" align="center" style='text-align:center'><?php echo $row1['rate'];?></p>
  </td>
  <td width="60" valign="top" style='width:45.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:15.0pt'>
  <p class="TableContents" align="center" style='text-align:center'><?php echo $row1['per'];?></p>
  </td>
  <td style='height:15.0pt;border:none' width="0" height="20"></td>
 </tr>
 <?php
 $i++;
}
 ?>
 <tr style='height:82.1pt'>
  <td width="511" colspan="2" valign="top" style='width:383.1pt;border-top:none;
  border-left:solid #000001 1.0pt;border-bottom:solid #000001 1.0pt;border-right:
  none;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:82.1pt'>
  <p class="TableContents">E. &amp; O. E</p>
  <p class="TableContents">1. Goods once sold will not be taken back.</p>
  <p class="TableContents">2. Payment of bill should be made within one month
  from the date of submission otherwise interest 24% P.A will be charge extra.</p>
  <p class="TableContents">3. All dispute are subject of Allahabad Jurisdiction.</p>
  </td>
  <td width="246" colspan="4" valign="top" style='width:184.45pt;border-top:none;
  border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.8pt;height:82.1pt'>
  <p class="TableContents" align="center" style='text-align:center'><span
  style='font-size:20.0pt'>For Shanti Industries</span></p>
  <p class="TableContents"><span style='font-size:20.0pt'>&nbsp;</span></p>
  <p class="TableContents"><span style='font-size:20.0pt'>&nbsp;</span></p>
  <p class="TableContents" align="center" style='text-align:center'><span
  style='font-size:14.0pt'>Authorized Signature </span></p>
  </td>
  <td style='height:82.1pt;border:none' width="0" height="109"></td>
 </tr>
 <tr height="0">
  <td width="54" style='border:none'></td>
  <td width="416" style='border:none'></td>
  <td width="38" style='border:none'></td>
  <td width="66" style='border:none'></td>
  <td width="73" style='border:none'></td>
  <td width="57" style='border:none'></td>
  <td style='border:none' width="0"><p class='MsoNormal'>&nbsp;</td>
 </tr>
</table>

<p class="MsoNormal">&nbsp;</p>

</div>

</body>

</html>
<?php
}
else
{
 echo "Login";
}
?>
