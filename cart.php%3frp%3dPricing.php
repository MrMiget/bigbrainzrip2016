<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><!-- InstanceBegin template="/Templates/BigBrainzTemplate2010.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Big Brainz Cart</title>
<!-- InstanceEndEditable --><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<link href="/Templates/BigBrainzStyle.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="/Assets/Scripts/PopUpWindow.txt"></script>

<!-- FlashObject embed by Geoff Stearns geoff@deconcept.com  -->
<script type="text/javascript" src="/Assets/Scripts/flashobject.js"></script>

<!-- InstanceBeginEditable name="Desciption and Keywords" -->

<!-- InstanceEndEditable -->

<style type="text/css">
<!--
body {
	background-image: url(Assets/Images/Gradient_300_Blue_White.jpg);
	background-repeat: repeat-x;
}
-->
</style></head>
<body>
  <table width="840" border="0" align="center" cellpadding="0" cellspacing="0">
  
  <tr>
    <td colspan="2" align="center" valign="middle"><div align="left">
      <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
          <td width="120" rowspan="2"><a href="/index.php"><img src="Assets/Images/BigBrainzLogoGradient120.jpg" alt="Big Brainz Logo Gradient" width="120" height="54" border="0"></a></td>
          <td width="658" valign="middle"><div align="center"> 
            <h1><!-- InstanceBeginEditable name=" " -->     <!-- InstanceEndEditable --> </h1>
          </div></td>
        </tr>
        <tr>
          <td valign="middle" class="ThinCell"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr background="/Assets/Images/NavBarC_02.jpg">
              <td width="10" background="/Assets/Images/NavBarC_02.jpg"><img src="/Assets/Images/NavBarC_01_Grad.jpg" width="13" height="25"></td>
              <td valign="middle" background="/Assets/Images/NavBarC_02.jpg"><div align="center"><a href="/index.php" class="dark">Home</a></div></td>
              <td valign="middle" background="/Assets/Images/NavBarC_02.jpg"><div align="center"><a href="/Support.php" class="dark">Support</a></div></td>
              <td valign="middle" background="/Assets/Images/NavBarC_02.jpg"><div align="center"><a href="/orderstatus.php" class="dark">My Orders </a></div></td>
              <td valign="middle" background="/Assets/Images/NavBarC_02.jpg"><div align="center"><a href="/Teachers.php" class="dark">Teachers</a></div></td>
              <td valign="middle" background="/Assets/Images/NavBarC_02.jpg"><div align="center"><a href="/VideoTour.html" class="dark">Video Tour </a></div></td>
              <td valign="middle" background="/Assets/Images/NavBarC_02.jpg"><div align="center"><a href="/Reviews.html" class="dark">Reviews </a></div></td>
			  <td valign="middle" background="/Assets/Images/NavBarC_02.jpg"><img src="/images/clearpixel.gif" width="100" height="20"></td>
              <td valign="middle" background="/Assets/Images/NavBarC_02.jpg"><div align="center"><a href="/cart.php" class="dark">Checkout</a></div></td>
              <td width="10" background="/Assets/Images/NavBarC_02.jpg"><img src="/Assets/Images/NavBarC_04_Grad.jpg" width="13" height="25"></td>
            </tr>
          </table></td>
        </tr>
      </table>
    </div>
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="100" align="center" valign="middle"><!-- InstanceBeginEditable name="Edit Region 1" -->

      <div align="center">
        <table width="100%" height="97%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><div align="center">
	<br />
<script language="javascript" type="text/javascript">
<!--
var checkedfullname=false;
function checknewaccount(){
frm=document.forms.checkoutform;
if(frm.name.value==""){
	alert("Please enter a value in the field \"Full Name\".");
	frm.name.focus();
	return(false);
}
gotspace=false;
var checkStr = frm.name.value;
for(i = 0; i < checkStr.length; i++){
	if(checkStr.charAt(i)==" ")
		gotspace=true;
}
if(!checkedfullname && !gotspace){
	alert("This message will not be shown again.\nPlease be sure to enter your first and last name in the field \"Full Name\".");
	frm.name.focus();
	checkedfullname=true;
	return(false);
}
if(frm.email.value==""){
	alert("Please enter a value in the field \"Email\".");
	frm.email.focus();
	return(false);
}
validemail=0;
var checkStr = frm.email.value;
for(i = 0; i < checkStr.length; i++){
	if(checkStr.charAt(i)==" "||checkStr.charAt(i)=="("||checkStr.charAt(i)==")"||checkStr.charAt(i)=="'"||checkStr.charAt(i)=='"')
		validemail|=4;
	else if(checkStr.charAt(i)=="@"){
		if((validemail&1)==1)validemail|=4; else validemail|=1;
	}
	if(checkStr.charAt(i)==".")
		validemail|=2;
}
if(validemail!=3){
	alert("Please enter a valid email address.");
	frm.email.focus();
	return(false);
}
if(frm.pass.value==""){
	alert("Please enter a value in the field \"Password\".");
	frm.pass.focus();
	return(false);
}
var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789_@.-";
var checkStr = frm.pass.value;
var allValid = true;
for(i = 0;  i < checkStr.length;  i++){
    ch = checkStr.charAt(i);
    for(j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length){
      allValid = false;
      break;
    }
}
if (!allValid){
    alert("Please enter only alphanumeric characters with no spaces in the field \"Password\".");
    frm.pass.focus();
    return(false);
}
document.forms.checkoutform.mode.value='donewaccount';
document.forms.checkoutform.action='cart.php';
return true;
}
function checkchecked(){
	ischecked=false
	var inputs = document.getElementsByTagName('input');
	for(var i = 0; i < inputs.length; i++)
		if(inputs[i].type == 'checkbox'){
			if(inputs[i].checked&&inputs[i].name.substr(0,5)=='delet') ischecked = true;
		}
	if(! ischecked) alert("You haven't selected any items.");
	return(ischecked);
}
function doupdate(){
	document.forms.checkoutform.mode.value='update';
	document.forms.checkoutform.action='cart.php?rp=Pricing.php';
	document.forms.checkoutform.onsubmit='';
	document.forms.checkoutform.submit();
}
var savemenuaction='saveitem';
function dosaveitem(lid){
	if(savemenuaction=='saveitem'){
		if(!checkchecked()) return;
		document.forms.checkoutform.mode.value='savecart';
		document.forms.checkoutform.listid.value=lid;
		document.forms.checkoutform.action='cart.php?rp=Pricing.php';
		document.forms.checkoutform.onsubmit='';
		document.forms.checkoutform.submit();
	}else{
		document.location='cart.php?mode=sc&lid='+lid;
	}
}
function movetocart(){
	if(!checkchecked()) return(false);
	document.forms.checkoutform.mode.value='movetocart';
	document.forms.checkoutform.action='cart.php?rp=Pricing.php';
	document.forms.checkoutform.onsubmit='';
	document.forms.checkoutform.submit();
	return(false);
}
var cartoversldiv;
function cartdispsavelist(isleft,wantextras,evt,twin){
	cartoversldiv=false
	var theevnt=(!evt)?twin.event:evt;//IE:FF
	if(wantextras){
		document.getElementById('savelistcartrow').style.display='';
		document.getElementById('savelistcreaterow').style.display='';
	}else{
		document.getElementById('savelistcartrow').style.display='none';
		document.getElementById('savelistcreaterow').style.display='none';
	}
	var sld = document.getElementById('savelistdiv');
	var scrolltop=(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop);
	var scrollleft=(document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft);
	sld.style.left = ((theevnt.clientX+scrollleft)-(isleft?0:sld.offsetWidth))+'px';
    sld.style.top = (theevnt.clientY+scrolltop)+'px';
	sld.style.visibility = "visible";
	setTimeout('cartchecksldiv()',2000);
	return(false);
}
function cartchecksldiv(){
	var sld = document.getElementById('savelistdiv');
	if(! cartoversldiv)
		sld.style.visibility = 'hidden';
}
function selaltrate(id){
	document.forms.checkoutform.altrates.value=id;
	doupdate();
}
//--></script>
	<form method="post" name="checkoutform" action="https://www.bigbrainz.com/cart.php">
	<input type="hidden" name="mode" value="checkout" />
	<input type="hidden" name="sessionid" value="5lcvggfslrl3nj40al6j44f092" />
	<input type="hidden" name="PARTNER" value="" />
	<input type="hidden" name="cart" value="" />
	<input type="hidden" name="listid" value="" />
	<input type="hidden" name="altrates" value="" />
			<table class="cobtbl" width="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#B1B1B1">
			  <tr>
				<td class="cobll" bgcolor="#FFFFFF" height="30" colspan="6" align="center">You are not currently logged in. To log in please <a class="ectlink" href="cart.php?mode=login"><strong>click here</strong></a> or <a class="ectlink" href="cart.php?mode=newaccount"><strong>click here</strong></a> to create an account.</td>
			  </tr>
			  <tr>
			    <td class="cobll" bgcolor="#FFFFFF" colspan="6" align="center">
				  <p>&nbsp;</p><p>Sorry, your shopping cart is empty</p><p>If you would like to get started browsing our store please <a class="ectlink" href="index.php"><strong>click here</strong></a>.</p><p>&nbsp;</p>

<script language="javascript" type="text/javascript">
<!--
if(document.cookie=="") document.write("Cookies seem to be currently disabled in your browser. This could mean that this shopping site will not function correctly. If you experience problems, please check that your browsers security settings are not set to too high a level and that you don't have a firewall blocking cookies or javascript.");
//--></script>
<noscript>Javascript seems to be currently disabled in your browser. This could mean that this shopping site will not function correctly. If you experience problems, please check that your browsers security settings are not set to too high a level and that you don't have a firewall blocking cookies or javascript.</noscript>
				  <p><a class="ectlink" href="index.php" onmouseover="window.status='Continue Shopping';return true" onmouseout="window.status='';return true"><strong>Continue Shopping</strong></a></p><p>&nbsp;</p>
				</td>
			  </tr>
	</table>
	</form>
			</div></td>
          </tr>
        </table>
      </div>
    <!-- InstanceEndEditable --></td>
          </tr>
    </table>    </td>
  </tr>
  
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="/Assets/Images/NavBarC_02.jpg">
        <tr>
          <td width="13" align="left" valign="top"><img src="/Assets/Images/NavBarC_01.jpg" width="13" height="25"></td>
          <td valign="middle"><div align="center"><a href="/About.php" class="dark">About</a></div>          </td>
          <td valign="middle"><div align="center"><a href="/Privacy.php" class="dark">Privacy</a></div>          </td>
		  <td valign="middle"><div align="center"><a href="/TermsOfUse.php" class="dark">Terms of Use</a></div>          </td>
          <td valign="middle"><div align="center"><a href="/Guarantee.php" class="dark">Guarantee</a></div></td>
          <td valign="middle"><div align="center"><a href="/Shipping.php" class="dark">Shipping</a></div>          </td>
          <td valign="middle"><div align="center"><a href="/affiliate1.php" class="dark">Affiliates</a></div></td>
          <td valign="middle"><div align="center"><a href="/LinkToUs/LinkToUs.html" class="dark">Link To Us</a></div></td>
          <td valign="middle"><div align="center"><a href="/Contact.php" class="dark">Contact</a></div></td>
          <td width="18" align="right" valign="top"><div align="right"><img src="/Assets/Images/NavBarC_04.jpg" width="13" height="25"></div></td>
        </tr>
    </table>    
	</td>
  </tr>
  <tr>
  </tr>
</table>
<p align="center"><span class="BigBrainzStyle">&copy; 2004 - 2010 Big Brainz, Inc. </span></p>
<!-- InstanceBeginEditable name="EditRegion6" -->

<!-- (c) 2005, 2008. Authorize.Net is a registered trademark of CyberSource Corporation --> 
<div align="center">
  <table width="90" border="0" align="center" cellpadding="0">
    <tr>
      <td><div class="AuthorizeNetSeal"> 
  <div align="center">
    <p>
      <script type="text/javascript" language="javascript">var ANS_customer_id="e2c08295-bf97-4095-968c-e187388523d6";</script> 
      <script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js" ></script> 
      <a href="http://www.authorize.net/" id="AuthorizeNetText" target="_blank">Secure Online Payments</a> </p>
  </div>
</div></td>
    </tr>
  </table>
</div>
<!-- InstanceEndEditable --><br>
<img src="/Assets/Images/spacer.gif" width="10" height="1">

<!-- NEW Google Analytics Tracking Code-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-94233-1");
pageTracker._trackPageview();
} catch(err) {}</script>


</body>
<!-- InstanceEnd --></html>
