<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Install 68Downloads</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma, Verdana, Arial;
	font-size: 12px;
}
body {
	background-color: #BBBABA;
}
.wrapper {
	border-top: 6px none #FFFFFF;
	border-right: 6px solid #FFFFFF;
	border-bottom: 6px none #FFFFFF;
	border-left: 6px solid #FFFFFF;
	background-color:#FFFFFF;
}
h1 {
	font-family: Tahoma, Arial, Verdana;
	font-size: 14px;
	font-style: normal;
	color: #333333;
}
input {
	font-family: Tahoma, Verdana, Arial;
	font-size: 12px;
	color: #666666;
}
select {
font-family: Tahoma, Verdana, Arial;
	font-size: 12px;
	color: #666666;
}
.dotted {
	border: 1px solid #000;
}
-->
</style></head>

<body>
<table width="500" align="center" class="wrapper">
  <tr><td>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>


<form action="/install.php" method="post" onSubmit="MM_validateForm('ordID','','RisNum','ordEmail','','RisEmail','license','','R');return document.MM_returnValue">
<table width="100%" align="center">
	<tr><td colspan="2"><div align="center">
	  <h1><strong>Install 68 Downloads</strong></h1>
	</div></td></tr>
	<tr>
	  <td width="50%"><div align="right"><strong>Order ID: &nbsp;</strong></div></td>
      <td><input name="ordID" type="text" id="ordID" size="35"></td>
  </tr>
	<tr>
	  <td><div align="right"><strong>Order Email: &nbsp;</strong></div></td>
	  <td><input name="ordEmail" type="text" id="ordEmail" size="35"></td>
  </tr>
	<tr>
	  <td><div align="right"><strong>License Key: &nbsp;</strong></div></td>
	  <td><input name="license" type="text" id="license" size="35"></td>
  </tr>
	<tr>
	  <td colspan="2"><div align="center">
	  	<p>If you do not have any of these values please visit our <a href="http://www.68designs.com/shopping/orderstatus.php" target="_blank">order status</a> page</p>
	    <input type="submit" name="Submit" value="Install V1.0.2">
	  </div></td>
    </tr>
</table>
<input type="hidden" name="action" value="install">
</form>
</td></tr></table>
</body>
</html>
