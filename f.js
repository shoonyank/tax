function nan(val)
{
	if(isNaN(val))
	{
		alert("Must be a number");
		location.reload(true);
	}
}

/*
function snck()
{
	sn=document.getElementById("s").value;
	if(isNaN(sn))
	{
		alert("Serial Number must be a number");
		return;
	}
	if (window.XMLHttpRequest)
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
	  		if(xmlhttp.responseText==1)
	  		{
	  			alert("Serial Number already exist");
	  		}
		}
  	}
	xmlhttp.open("GET","chk.php?&sn="+sn,true);
	xmlhttp.send();
}
*/
function change(str,sn,back,id)
{
	if (str=="")
	{
	alert("Field can not be empty");
	document.getElementById(id).value = back;
	str = back;
	//return;
	}
	if (window.XMLHttpRequest)
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() 
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{
  			alert(xmlhttp.responseText);
		}
  	}
	xmlhttp.open("GET","query.php?upstr="+str+"&sn="+sn+"&rname="+id,true);
	xmlhttp.send();
	if(id=="VAT"||id=="ox")
	{
  		cal2(parseFloat(document.getElementById('total').innerHTML));
	}
}


function test_value()
{
	var junkVal=document.getElementById('gt').innerHTML;
	junkVal = Math.floor(junkVal);
	var obStr = new String(junkVal);
	numReversed= obStr.split("");
	actnumber=numReversed.reverse();
	if(Number(junkVal) >=0)
	{
		//do nothing
	}
	else
	{
		alert('wrong Number cannot be converted');
		return false;
	}
	if(Number(junkVal)==0)
	{
		document.getElementById('aiw').innerHTML=obStr+''+'Rupees Zero Only';
		return false;
	}
	if(actnumber.length>9)
	{
		alert('Oops!!!! the Number is too big to covertes');
		return false;
	}
	var iWords=["Zero", " One", " Two", " Three", " Four", " Five", " Six", " Seven", " Eight", " Nine"];
	var ePlace=['Ten', ' Eleven', ' Twelve', ' Thirteen', ' Fourteen', ' Fifteen', ' Sixteen', ' Seventeen', ' Eighteen', ' Nineteen'];
	var tensPlace=['dummy', ' Ten', ' Twenty', ' Thirty', ' Forty', ' Fifty', ' Sixty', ' Seventy', ' Eighty', ' Ninety' ];
	var iWordsLength=numReversed.length;
	var totalWords="";
	var inWords=new Array();
	var finalWord="";
	j=0;
	for(i=0; i<iWordsLength; i++)
	{
		switch(i)
		{
			case 0:
				if(actnumber[i]==0 || actnumber[i+1]==1 ) 
				{
					inWords[j]='';
				}
				else 
				{
					inWords[j]=iWords[actnumber[i]];
				}
				inWords[j]=inWords[j];
				break;
			case 1:
				tens_complication();
				break;
			case 2:
				if(actnumber[i]==0) 
				{
					inWords[j]='';
				}
				else if(actnumber[i-1]!=0 && actnumber[i-2]!=0) 
				{
					inWords[j]=iWords[actnumber[i]]+' Hundred and';
				}
				else
				{
					inWords[j]=iWords[actnumber[i]]+' Hundred';
				}
				break;
			case 3:
				if(actnumber[i]==0 || actnumber[i+1]==1) 
				{
					inWords[j]='';
				}
				else
				{
					inWords[j]=iWords[actnumber[i]];
				}
				if(actnumber[i+1] != 0 || actnumber[i] > 0)
				{
					inWords[j]=inWords[j]+" Thousand";
				}
				break;
			case 4:
				tens_complication();
				break;
			case 5:
				if(actnumber[i]==0 || actnumber[i+1]==1 )
				{
					inWords[j]='';
				}
				else
				{
					inWords[j]=iWords[actnumber[i]];
				}
				inWords[j]=inWords[j]+" Lakh";
				break;
			case 6:
				tens_complication();
				break;
			case 7:
				if(actnumber[i]==0 || actnumber[i+1]==1 )
				{
					inWords[j]='';
				}
				else
				{
					inWords[j]=iWords[actnumber[i]];
				}
				inWords[j]=inWords[j]+" Crore";
				break;
			case 8:
				tens_complication();
				break;
			default:
				break;
		}
		j++;
	}
	function tens_complication()
	{
		if(actnumber[i]==0)
		{
			inWords[j]='';
		}
		else if(actnumber[i]==1) 
		{
			inWords[j]=ePlace[actnumber[i-1]];
		}
		else
		{
			inWords[j]=tensPlace[actnumber[i]];
		}
	}
	inWords.reverse();
	for(i=0; i<inWords.length; i++)
	{
		finalWord+=inWords[i];
	}
	return finalWord;
}


function convert_amount_into_rupees_paisa()
{
	var finalWord1 = test_value();
	var finalWord2 = "";
	var val = document.getElementById('gt').innerHTML;
	var actual_val = document.getElementById('gt').innerHTML;
	document.getElementById('gt').innerHTML = val;
	if(val.indexOf('.')!=-1)
	{
		val = val.substring(val.indexOf('.')+1,val.length);
		if(val.length==0)
		{
			finalWord2 = "";
			document.getElementById('aiw').innerHTML=finalWord1 +" Rupees Only"+finalWord2;
		}
		else
		{
			document.getElementById('gt').innerHTML = val;
			if(val != '00')
			{
				finalWord2 = test_value() + " paisa only";
				document.getElementById('aiw').innerHTML=finalWord1 +" Rupees and "+finalWord2;
			}
			else
			{
				finalWord2 = "";
				document.getElementById('aiw').innerHTML=finalWord1 +" Rupees only"+finalWord2;
			}
		}
	}
	else
	{
		//finalWord2 = " Zero paisa only";
		document.getElementById('aiw').innerHTML=finalWord1 +" Rupees Only";
	}
	document.getElementById('gt').innerHTML = actual_val;
}


Number.prototype.formatMoney = function(c, d, t)
{
	var n = this, 
	c = isNaN(c = Math.abs(c)) ? 2 : c, 
	d = d == undefined ? "." : d, 
	t = t == undefined ? "" : t, 
	s = n < 0 ? "-" : "", 
	i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
	j = (j = i.length) > 3 ? j % 3 : 0;
	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};


function cal(tl)
{
	if(tl==null)
	{
		tl = parseFloat(document.getElementById('total').innerHTML);
	}
	q=parseFloat(document.getElementById('qn').value);
	r=parseFloat(document.getElementById('rate').value);
	a=q*r;
	document.getElementById('amount').innerHTML = (a).formatMoney(2);
	t=parseFloat(tl)+a;
	document.getElementById('total').innerHTML = (t).formatMoney(2);
	vt=parseFloat(document.getElementById('VAT').value);
	v=t*(vt/100);
	document.getElementById('vat').innerHTML = (v).formatMoney(2);	
	ox=parseFloat(document.getElementById('ox').value);
	gt = t+v+ox;
	document.getElementById('gt').innerHTML = (gt).formatMoney(2);
	convert_amount_into_rupees_paisa();
	
}


function cal2(tl)
{
	if(tl==null){
		tl = parseFloat(document.getElementById('total').innerHTML);
	}
	q=parseFloat(document.getElementById('qn').value);
	r=parseFloat(document.getElementById('rate').value);
	document.getElementById('amount').innerHTML = (a).formatMoney(2);
	t=parseFloat(tl);
	document.getElementById('total').innerHTML = (t).formatMoney(2);
	vt=parseFloat(document.getElementById('VAT').value);
	v=t*(vt/100);
	document.getElementById('vat').innerHTML = (v).formatMoney(2);	
	ox=parseFloat(document.getElementById('ox').value);
	gt = t+v+ox;
	document.getElementById('gt').innerHTML = (gt).formatMoney(2);
	convert_amount_into_rupees_paisa();	
}
function add_new(id,sn)
{
	pr = document.getElementById('pr').value;
	qn = document.getElementById('qn').value;
	rate = document.getElementById('rate').value;
	per = document.getElementById('per').value;
	if(pr=="")
	{
		alert("\"Particulars\" field is empty");
		return;
	}
	if(per=="")
	{
		alert("\"Per\" field is empty");
		return;
	}
	if (window.XMLHttpRequest)
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
	  		alert(xmlhttp.responseText);
	  		location.reload(true);
		}
  	}
	xmlhttp.open("GET","add.php?pr="+pr+"&sn="+sn+"&qn="+qn+"&rate="+rate+"&per="+per,true);
	xmlhttp.send();
}


function save(id,sn)
{
	pr = document.getElementById('pr').value;
	qn = document.getElementById('qn').value;
	rate = document.getElementById('rate').value;
	per = document.getElementById('per').value;
	if(pr=="")
	{
		alert("\"Particulars\" field is empty");
		return;
	}
	if(per=="")
	{
		alert("\"Per\" field is empty");
		return;
	}
	if (window.XMLHttpRequest)
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
	  		alert(xmlhttp.responseText);
	  		window.location.assign("?run=Open&sn="+sn+"&file=print");
		}
  	}
	xmlhttp.open("GET","add.php?pr="+pr+"&sn="+sn+"&qn="+qn+"&rate="+rate+"&per="+per,true);
	xmlhttp.send();
}


function pt(id,sn)
{
	window.location.assign("?run=Open&sn="+sn+"&file=print");
}


function en_update(n)
{
	url=window.location.host;
	var myWindow = window.open("http://"+url+"/tax/q1.php?n="+n, "Edit", 1);
	alert("Editing......");
	//myWindow.close();
}

function del(n)
{
	var con = confirm("Delete?");
	if(con)
	{
		if (window.XMLHttpRequest)
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
		  		alert(xmlhttp.responseText);
			}
  		}
		xmlhttp.open("GET","del.php?n="+n,true);
		xmlhttp.send();
	}
}

