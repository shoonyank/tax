<?php
if (isset($_SESSION['newsigned_in']))
{
  $sn = $_GET['sn'];
  $sql = "SELECT * FROM customer_details WHERE sn = ".$sn;
  $result = $cxn->query($sql);
  $row = $result->fetch_assoc();
?>

<div class="WordSection1">

<table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" style='margin-left:2.65pt;border-collapse:collapse;border:none'>
 <tr style='height:141.0pt'>
  <td width="552" colspan="5" valign="top" style='width:414.1pt;border-top:solid #000001 1.0pt;  border-left:solid #000001 1.0pt;border-bottom:solid #00000A 1.0pt;border-right:none;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:141.0pt'>
  <p class="TableContents" align="center" style='text-align:center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b><u>TAX-INVOICE</u></b></p>
  <p class="TableContents">TIN09613400274  WEF-23-04-1988</p>
  <p class="TableContents" align="center" style='text-align:center'>
  <b><u><span style='font-size:32.0pt'>S</span></u></b><b><u><span style='font-size:22.0pt'>HANTI</span></u></b><b><u><span style='font-size:32.0pt'>I</span></u></b>
  <b><u><span style='font-size:22.0pt'>NDUSTRIES</span></u></b></p>
  <p class="TableContents" align="center" style='text-align:center'>
  <span style='font-size:16.0pt'>Dealers of:- All Sort of Laboratory Equipments,</span></p>
  <p class="TableContents" align="center" style='text-align:center'>
  <span style='font-size:16.0pt'>Chemicals, A.R. &amp; C.P. Grade Acids.</span></p>
  <p class="TableContents" align="center" style='text-align:center'>
  <span style='font-size:16.0pt'>Off.:-74, Dabhaw(Dandi) Rewa Road, Allahabad-8</span></p>
  <p class="TableContents" align="center" style='text-align:center'>
  <span style='font-size:16.0pt'>Resi:-95/118, Sarvodaya Nagar, Allapur, Allahabad-6</span></p>
  </td>
  <td width="204" colspan="3" rowspan="2" valign="top" style='width:152.95pt;border:solid #000001 1.0pt;border-left:none;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:141.0pt'>
  <p class="TableContents" align="right" style='text-align:right'>
  <span style='font-size:10.0pt'>0532-2501753</span></p>
  <p class="TableContents" align="right" style='text-align:right'>
  <span style='font-size:10.0pt'>0532-3293049</span></p>
  <p class="TableContents" align="right" style='text-align:right'>
  <span style='font-size:10.0pt'>9415235381</span></p>
  <p class="TableContents" align="right" style='text-align:right'>
  <span style='font-size:10.0pt'>9335343064</span></p>
  <p class="TableContents" align="right" style='text-align:right'>
  <span style='font-size:10.0pt'>9335112617</span></p>
  <p class="TableContents" align="right" style='text-align:right'>
  <table cellpadding="0" cellspacing="0" align="left">
   <tr>
    <td width=3 height="14"></td>
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
  <td width="552" colspan="5" rowspan="4" valign="top" style='width:414.1pt;border-top:none;border-left:solid #000001 1.0pt;border-bottom:solid #000001 1.0pt;border-right:solid #00000A 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;
  height:13.8pt'><table>
  <p class="TableContents"><tr><td>Customer Name:</td><td>
  <input type="text" name="cname" value="<?php echo $row['cname'];?>" ID="cname" onchange="change(this.value,<?php echo $sn;?>,'<?php echo $row['cname'];?>',this.id)">
  </td></tr></p>
  <p class="TableContents"><tr><td>Address:</td><td>
  <textarea name="add" ID="add" onchange="change(this.value,<?php echo $sn;?>,'<?php echo $row['add'];?>',this.id)"><?php echo $row['add'];?></textarea></p>
  <p class="TableContents"><tr><td>TIN:</td><td>
  <input type="text" name="tin" value="<?php echo $row['TIN'];?>" ID="TIN" onchange="change(this.value,<?php echo $sn;?>,<?php echo $row['TIN'];?>,this.id)"></td></tr></p></table>
  </td>
  <td style='height:13.8pt;border:none' width="0" height="18"></td>
 </tr>
 <tr>
  <td width="204" colspan="3" valign="top" style='width:152.95pt;border-top:none;border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.45pt'>
  <p class="TableContents">Book No: <?php echo $row['bn'];?></p>
  </td>
  <td style='border:none' width="0"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr>
  <td width=204 colspan=3 valign=top style='width:152.95pt;border-top:none;border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.45pt'>
  <p class="TableContents">Serial No: <?php echo $row['sn'];?></p>
  </td>
  <td style='border:none' width="0"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr>
  <td width="204" colspan="3" valign="top" style='width:152.95pt;border-top:none;border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.45pt'>
  <p class="TableContents">Date: <?php echo $row['date'];?></p>
  </td>
  <td style='border:none' width="0"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='height:1.25pt'>
  <td width="756" colspan="8" valign="top" style='width:567.05pt;border:solid #000001 1.0pt;
  border-top:none;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;
  height:1.25pt'>
  <p class="TableContents"><span style='font-size:2.0pt'>&nbsp;</span></p>
  </td>
  <td style='height:1.25pt;border:none' width=0 height=2></td>
 </tr>
 <tr>
  <td width="54" valign="top" style='width:40.4pt;border-top:none;border-left:solid #000001 1.0pt;
  border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt'>
  <p class="TableContents" align="center" style='text-align:center'>SL No.</p>
  </td>
  <td width="408" valign="top" style='width:4.25in;border-top:none;border-left:
  none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt'>
  <p class="TableContents" align="center" style='text-align:center'>Particulars</p>
  </td>
  <td width=84 colspan=2 valign=top style='width:63.0pt;border-top:none;
  border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt'>
  <p class="TableContents" align="center" style='text-align:center'>Quantity</p>
  </td>
  <td width=48 colspan=2 valign=top style='width:.5in;border-top:none;
  border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt'>
  <p class="TableContents" align="center" style='text-align:center'>Rate</p>
  </td>
  <td width=60 valign=top style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt'>
  <p class="TableContents" align="center" style='text-align:center'>Per</p>
  </td>
  <td width=102 valign=top style='width:76.65pt;border-top:none;border-left:
  none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt'>
  <p class="TableContents" align="center" style='text-align:center'>Amount</p>
  </td>
  <td style='border:none' width="0"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <?php
$sql1 = "SELECT * FROM `SHANTI_INDUSTRIES`.`item_details` WHERE sn = ".$sn;
$result1 = $cxn->query($sql1);
$i=1;
$total=0;
while($row1 = $result1->fetch_assoc())
{
?>
 <tr style='height:13.85pt'>
  <td width="54" valign="top" style='width:40.4pt;border-top:none;border-left:solid #000001 1.0pt;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><a href onclick="del(<?php echo $row1['n'];?>);"><img src="images/b_drop.png"></a> <a href onclick="en_update(<?php echo $row1['n'];?>);"><img src="images/b_edit.png"></a> <?php echo $i;?></p>
  </td>
  <td width="408" valign=top style='width:4.25in;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><?php echo $row1['part'];?></p>
  </td>
  <td width=84 colspan=2 valign=top style='width:63.0pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><?php echo $row1['qun'];?></p>
  </td>
  <td width=48 colspan=2 valign=top style='width:.5in;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents"><?php echo $row1['rate'];?></p>
  </td>
  <td width=60 valign=top style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><?php echo $row1['per'];?></p>
  </td>
  <td width="102" valign="top" style='width:76.65pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'>
  <?php $amount = $row1['rate'] * $row1['qun'];
  echo number_format($amount, 2, '.', ',');?>
  </p>
  </td>
  <td style='height:13.85pt;border:none' width="0" height="18"></td>
 </tr>
 <?php
 $i++;
 $total+=$amount;
 }
 ?>
  <div ID="<?php echo $i;?>_ed">
   <tr style='height:13.85pt'>
  <td width=54 valign=top style='width:40.4pt;border-top:none;border-left:solid #000001 1.0pt;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><?php echo $i;?></p>
  </td>
  <td width=408 valign=top style='width:4.25in;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;
  background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><input type=text size=50 name=pr ID="pr"></p>
  </td>
  <td width="84" colspan="2" valign="top" style='width:63.0pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><input type=text size=5 name=qn value=1 ID="qn" onchange="cal(<?php echo $total;?>)"></p>
  </td>
  <td width="48" colspan="2" valign="top" style='width:.5in;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents"><input type=text size=5 name=rate value=0 ID="rate" onchange="cal(<?php echo $total;?>)"></p>
  </td>
  <td width="60" valign="top" style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><input type=text size=5 name=per ID="per"></p>
  </td>
  <td width="102" valign="top" style='width:76.65pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:13.85pt'>
  <p class="TableContents" align="center" style='text-align:center'><div ID="amount"><?php echo number_format(0, 2, '.', ',');?></div></p>
  </td>
  <td style='height:13.85pt;border:none' width="0" height="18"></td>
 </tr>
 </div>
 <tr style='height:1.0pt'>
  <td width="462" colspan="2" rowspan="4" valign="top" style='width:346.4pt;border-top:none;border-left:solid #000001 1.0pt;border-bottom:solid #000001 1.0pt;border-right:solid #00000A 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;
  height:1.0pt'>
  <p class="TableContents" align="center" style='text-align:center'>
  <span lang=EN-IN><br><br><button onclick="add_new(<?php echo $i; ?>,<?php echo $sn; ?>)">Add New</button> <button onclick="save(<?php echo $i; ?>,<?php echo $sn; ?>)">Save</button> <button onclick="pt(<?php echo $i; ?>,<?php echo $sn; ?>)">Print</button></span></p>
  </td>
  <td width="192" colspan="5" valign="top" style='width:2.0in;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:1.0pt'>
  <p class="TableContents">Total</p>
  </td>
  <td width="102" valign="top" style='width:76.65pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:1.0pt'>
  <p class="TableContents" align="center" style='text-align:center'><div ID="total"><?php echo number_format($total, 2, '.', ',');?></div></p>
  </td>
  <td style='height:1.0pt;border:none' width=0 height=1></td>
 </tr>
 <tr style='height:7.8pt'>
  <td width="192" colspan="5" valign="top" style='width:2.0in;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:7.8pt'>
  <p class="TableContents">VAT @ <input type=text name=vat value="<?php echo $row['VAT'];?>" size=4 ID="VAT" onchange="change(this.value,<?php echo $sn;?>,<?php echo $row['VAT'];?>,this.id)"> %</p>
  </td>
  <td width="102" valign="top" style='width:76.65pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:7.8pt'>
  <p class="TableContents" align="center" style='text-align:center'><div ID="vat"><?php $vat=$total*($row['VAT']/100); echo number_format($vat, 2, '.', ','); ?></div></p>
  </td>
  <td style='height:7.8pt;border:none' width="0" height="10"></td>
 </tr>
 <tr style='height:1.05pt'>
  <td width="192" colspan=5 valign=top style='width:2.0in;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:1.05pt'>
  <p class="TableContents">Other Exp.</p>
  </td>
  <td width=102 valign=top style='width:76.65pt;border-top:none;border-left:none;border-bottom:solid #00000A 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:1.05pt'>
  <p class="TableContents" align="center" style='text-align:center'><input type=text name=ox value="<?php echo number_format($row['ox'], 2, '.', ',');?>" size=5 ID="ox" onchange="change(this.value,<?php echo $sn;?>,<?php echo $row['ox'];?>,this.id)"></p>
  </td>
  <td style='height:1.05pt;border:none' width=0 height=1></td>
 </tr>
 <tr style='height:4.2pt'>
  <td width="192" colspan="5" valign="top" style='width:2.0in;border-top:none;border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:4.2pt'>
  <p class="TableContents">Grand Total</p>
  </td>
  <td width="102" valign="top" style='width:76.65pt;border-top:none;border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.65pt;height:4.2pt'>
  <p class="TableContents" align="center" style='text-align:center'><div ID="gt"><?php $gt=$total+$vat+$row['ox']; echo number_format($gt, 2, '.', ''); ?></div></p>
  </td>
  <td style='height:4.2pt;border:none' width=0 height=6></td>
 </tr>
 <tr>
  <td width="756" colspan="8" valign="top" style='width:567.05pt;border:solid #000001 1.0pt;border-top:none;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt'>
  <p class="TableContents"><table><tr><td>Amount In Words:</td><td><div ID="aiw"><script>convert_amount_into_rupees_paisa();</script></div>
  </td></tr></table></p>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'></td>
 </tr>
 <tr style='height:82.1pt'>
  <td width=511 colspan=3 valign=top style='width:383.1pt;border-top:none;border-left:solid #000001 1.0pt;border-bottom:solid #000001 1.0pt;border-right:none;background:white;padding:2.75pt 2.75pt 2.75pt 2.55pt;height:82.1pt'>
  <p class="TableContents">E. &amp; O. E</p>
  <p class="TableContents">1. Goods once sold will not be taken back.</p>
  <p class="TableContents">2. Payment of bill should be made within one month
  from the date of submission otherwise interest 24% P.A will be charge extra.</p>
  <p class="TableContents">3. All dispute are subject of Allahabad Jurisdiction.</p>
  </td>
  <td width=245 colspan=5 valign=top style='width:183.95pt;border-top:none;border-left:none;border-bottom:solid #000001 1.0pt;border-right:solid #000001 1.0pt;background:white;padding:2.75pt 2.75pt 2.75pt 2.8pt;height:82.1pt'>
  <p class="TableContents" align="center" style='text-align:center'>
  <span style='font-size:20.0pt'>For Shanti Industries</span></p>
  <p class="TableContents"><span style='font-size:20.0pt'>&nbsp;</span></p>
  <p class="TableContents"><span style='font-size:20.0pt'>&nbsp;</span></p>
  <p class="TableContents" align="center" style='text-align:center'>
  <span style='font-size:14.0pt'>Authorized Signature </span></p>
  </td>
  <td style='height:82.1pt;border:none' width=0 height=109></td>
 </tr>
 <tr height="0">
  <td width="53" style='border:none'></td>
  <td width="371" style='border:none'></td>
  <td width="48" style='border:none'></td>
  <td width="33" style='border:none'></td>
  <td width="6" style='border:none'></td>
  <td width="40" style='border:none'></td>
  <td width="56" style='border:none'></td>
  <td width="97" style='border:none'></td>
  <td style='border:none' width="0"><p class='MsoNormal'>&nbsp;</td>
 </tr>
</table>

<p class="MsoNormal">&nbsp;</p>

<p class="MsoNormal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

</div>
<?php
}
else
{
	echo "Login";
}
?>