<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/BigBrainzTemplate2014.dwt" codeOutsideHTMLIsLocked="false" --> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<!-- InstanceBeginEditable name="doctitle" -->
<title>Big Brainz - Shopping Cart</title>
<meta name="description" content="Add the video games you want to purchase to your cart and find out just how easy it is to learn subtraction, addition, division, and multiplication!">
<!-- InstanceEndEditable -->

<link href="/Templates/BigBrainzStyle2014.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<!--[if !IE 7]><style type="text/css">#wrap {display:table;height:100%}</style><![endif]-->
<script language="JavaScript" type="text/javascript" src="/Assets/Scripts/PopUpWindow.txt"></script>



<!-- InstanceBeginEditable name="Desciption and Keywords" -->

<!-- InstanceEndEditable -->

<!-- Google Analytics Code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-94233-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- End Google Analaytics Code -->

</head> 
<body> 
  <div id="pagewrapper">
	<div id="header"> 
		<h1><a href="http://www.bigbrainz.com">Multiplication Games</a></h1> 
		<ul id="topMenu"> 
			<li><a href="/Store.php">Store</a></li>
			<li><a href="/Downloads.html">Downloads<br>(Home-Use)</a></li>
			<li><a href="/Schools.php">Schools</a></li>
			<li><a href="/Support.php">Support</a></li>
			<li><a href="/games/launcher/app.html">Reports</a></li>
			<li><a href=""></a></li>			
			<li><a href="/blog/">Blog</a></li>
			<li><a href="/cart.php">Checkout</a></li>
		</ul> 
	</div> 



	<div id="main">
		<div id="boxmain">
<!-- InstanceBeginEditable name="Edit Region 1" -->

      <div align="center">
        <table width="100%" height="97%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td><div align="center">
<script type="text/javascript">/* <![CDATA[ */
var checkedfullname=false;
function checknewaccount(){
var frm=document.forms.checkoutform;
if(frm.name.value==""){
	alert("Please enter a value in the field \"Full Name\".");
	frm.name.focus();
	return(false);
}
var regex=/ /;
if(!checkedfullname && !regex.test(frm.name.value)){
	alert("This message will not be shown again.\nPlease be sure to enter your first and last name in the field \"Full Name\".");
	frm.name.focus();
	checkedfullname=true;
	return(false);
}
var regex=/[^@]+@[^@]+\.[a-z]{2,}$/i;
if(!regex.test(frm.email.value)){
	alert("Please enter a valid email address.");
	frm.email.focus();
	return(false);
}
if(frm.pass.value==""){
	alert("Please enter a value in the field \"Password\".");
	frm.pass.focus();
	return(false);
}
var regex=/^[0-9A-Za-z\_\@\.\-]+$/;
if(!regex.test(frm.pass.value)){
    alert("Please enter only alphanumeric characters with no spaces in the field \"Password\".");
    frm.pass.focus();
    return(false);
}
frm.mode.value='donewaccount';
frm.action='cart.php';
return true;
}
function checkchecked(){
	ischecked=false
	var inputs=document.getElementsByTagName('input');
	for(var i=0; i < inputs.length; i++)
		if(inputs[i].type=='checkbox'){
			if(inputs[i].checked&&inputs[i].name.substr(0,5)=='delet') ischecked=true;
		}
	if(! ischecked) alert("You haven't selected any items.");
	return(ischecked);
}
function dodelete(cid){
var ECinput=document.createElement("input");
ECinput.setAttribute("type", "hidden");
ECinput.setAttribute("name", "delet"+cid);
ECinput.setAttribute("value", "ON");
document.forms.checkoutform.appendChild(ECinput);
doupdate();
return false;
}
function doupdate(){
	document.forms.checkoutform.mode.value='update';
	document.forms.checkoutform.action='cart.php';
	document.forms.checkoutform.onsubmit='';
	document.forms.checkoutform.submit();
	return false;
}
var savemenuaction='saveitem';
function dosaveitem(lid){
	if(savemenuaction=='saveitem'){
		var ECinput=document.createElement("input");
		ECinput.setAttribute("type", "hidden");
		ECinput.setAttribute("name", "delet"+whichcartid);
		ECinput.setAttribute("value", "ON");
		document.forms.checkoutform.appendChild(ECinput);
		document.forms.checkoutform.mode.value='savecart';
		document.forms.checkoutform.listid.value=lid;
		document.forms.checkoutform.action='cart.php';
		document.forms.checkoutform.onsubmit='';
		document.forms.checkoutform.submit();
	}else{
		document.location='cart.php?mode=sc&lid='+lid;
	}
}
function movetocart(cid){
	var ECinput=document.createElement("input");
	ECinput.setAttribute("type", "hidden");
	ECinput.setAttribute("name", "delet"+cid);
	ECinput.setAttribute("value", "ON");
	document.forms.checkoutform.appendChild(ECinput);
	document.forms.checkoutform.mode.value='movetocart';
	document.forms.checkoutform.action='cart.php';
	document.forms.checkoutform.onsubmit='';
	document.forms.checkoutform.submit();
	return(false);
}
var cartoversldiv,whichcartid;
function cartdispsavelist(clid,isleft,wantextras,evt,twin){
	whichcartid=clid;
	cartoversldiv=false
	var theevnt=(!evt)?twin.event:evt;//IE:FF
	if(wantextras){
		document.getElementById('savelistcartrow').style.display='';
		document.getElementById('savelistcreaterow').style.display='';
	}else{
		document.getElementById('savelistcartrow').style.display='none';
		document.getElementById('savelistcreaterow').style.display='none';
	}
	var sld=document.getElementById('savecartlist');
	var scrolltop=(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop);
	var scrollleft=(document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft);
	sld.style.left=((theevnt.clientX+scrollleft)-(isleft?0:sld.offsetWidth))+'px';
    sld.style.top=(theevnt.clientY+scrolltop)+'px';
	sld.style.visibility="visible";
	setTimeout('cartchecksldiv()',2000);
	return(false);
}
function cartchecksldiv(){
	var sld=document.getElementById('savecartlist');
	if(! cartoversldiv)
		sld.style.visibility='hidden';
}
function selaltrate(id){
	document.forms.checkoutform.altrates.value=id;
	doupdate();
}
function applycertcallback(){
	if(ajaxobj.readyState==4){
		var retvals=ajaxobj.responseText.split('&');
		alert(retvals[1]);
		if(retvals[0]=='success')document.location.reload();
	}
}
function applycert(){
	var cpncode=document.getElementById("cpncode").value;
	if(cpncode!=""){
		ajaxobj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("MSXML2.XMLHTTP");
		ajaxobj.onreadystatechange=applycertcallback;
		ajaxobj.open("GET", "vsadmin/ajaxservice.php?action=applycert&stg1=1&cpncode="+cpncode, true);
		ajaxobj.send(null);
	}
}
function removecert(){
	var cpncode=document.getElementById("cpncode").value;
	ajaxobj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("MSXML2.XMLHTTP");
	ajaxobj.onreadystatechange=applycertcallback;
	ajaxobj.open("GET", "vsadmin/ajaxservice.php?action=applycert&stg1=1&act=delete&cpncode="+cpncode, true);
	ajaxobj.send(null);
	document.getElementById("cpncode").value="";
}
/* ]]> */</script>
	<form method="post" name="checkoutform" action="https://www.bigbrainz.com/cart.php">
	<input type="hidden" name="mode" value="checkout" />
	<input type="hidden" name="sessionid" value="04lhqheb93uc8lm01lh8auscp6" />
	<input type="hidden" name="PARTNER" value="" />
	<input type="hidden" name="cart" value="" />
	<input type="hidden" name="listid" value="" />
			<table class="cobtbl" width="100%" border="0" cellspacing="1" cellpadding="3">
			  <tr>
				<td class="cobll" height="30" colspan="6"><div class="loginprompt" style="padding:4px">
			<div class="logintoaccount" style="width:50%;float:left;text-align:center"><input type="button" value="Login to Account" class="logintoaccount" onclick="document.location=(((ECTbh=document.getElementsByTagName('base')).length>0?ECTbh[0].href+'/':'')+'cart.php?mode=login').replace(/([^:]\/)\/+/g,'$1')" /></div>
			<div class="createaccount" style="width:50%;text-align:center;float:right"><input type="button" value="Create New Account" class="createaccount" onclick="document.location=(((ECTbh=document.getElementsByTagName('base')).length>0?ECTbh[0].href+'/':'')+'cart.php?mode=newaccount').replace(/([^:]\/)\/+/g,'$1')" /></div>				</div></td>
			  </tr>
			  <tr>
			    <td class="cobll" colspan="6" align="center">
				  <p>&nbsp;</p><p>There are currently no items in your shopping cart.</p><p>If you would like to get started browsing our store please <a class="ectlink" href="http://www.bigbrainz.com"><strong>click here</strong></a>.</p><p>&nbsp;</p>

<script type="text/javascript">/* <![CDATA[ */
var ectvalue=Math.floor(Math.random()*10000 + 1);
document.cookie="ECTTESTCART=" + ectvalue + "; path=/";
if((document.cookie+";").indexOf("ECTTESTCART=" + ectvalue + ";") < 0) document.write("Cookies seem to be currently disabled in your browser. This could mean that this shopping site will not function correctly. If you experience problems, please check that your browsers security settings are not set to too high a level and that you don't have a firewall blocking cookies or javascript.");
/* ]]> */</script>
<noscript>Javascript seems to be currently disabled in your browser. This could mean that this shopping site will not function correctly. If you experience problems, please check that your browsers security settings are not set to too high a level and that you don't have a firewall blocking cookies or javascript.</noscript>
				  <p><a class="ectlink" href="http://www.bigbrainz.com" onmouseover="window.status='Continue Shopping';return true" onmouseout="window.status='';return true"><strong>Continue Shopping</strong></a></p><p>&nbsp;</p>
				</td>
			  </tr>
	</table>
	</form>
			</div></td>
          </tr>
        </table>
      </div>
    <!-- InstanceEndEditable -->
	  	</div>
		
	  <!-- InstanceBeginEditable name="EditRegion4" -->
		<!-- InstanceEndEditable -->
		
		<!-- InstanceBeginEditable name="EditRegion5" -->

<!-- (c) 2005, 2008. Authorize.Net is a registered trademark of CyberSource Corporation --> 
<div align="center">
  <table width="90" border="0" align="center" cellpadding="0">
    <tr>
      <td><div class="AuthorizeNetSeal"> 
  <div align="center">
    <p>
      <script type="text/javascript" language="JavaScript">var ANS_customer_id="e2c08295-bf97-4095-968c-e187388523d6";</script> 
      <script type="text/javascript" language="JavaScript" src="//verify.authorize.net/anetseal/seal.js" ></script> 
      <a href="https://www.authorize.net/" id="AuthorizeNetText" target="_blank">Secure Online Payments</a> 
      <a href="https://www.securitymetrics.com/site_certificate.adp?s=97%2e75%2e160%2e82&amp;i=963526" target="_blank" >
<img src="https://www.securitymetrics.com/images/sm_ccsafe_whborder.gif" alt="SecurityMetrics for PCI Compliance, QSA, IDS, Penetration Testing, Forensics, and Vulnerability Assessment" border="0"></a></p>
  </div>
</div></td>
    </tr>
  </table>
</div>
<!-- InstanceEndEditable -->
	</div>
	  
</div>
<div id="footer">
		<ul id="bottomMenu"> 
			<li><a href="/Contact.php">Contact</a></li> 
			<li><a href="/Reviews.html">Reviews</a></li> 
			<li><a href="/Articles">Articles</a></li> 
			
			<li><a href="/LinkToUs/LinkToUs.html">Link<br /> 
		    To Us</a></li> 
			<li><a href="/affiliate1.php">Affiliates</a></li> 
			<li><a href="/Shipping.php">Shipping</a></li> 
			<li><a href="/Guarantee.php">Guarantee</a></li> 
			<li><a href="/TermsOfUse.php">Terms <br />
		    of Use</a></li> 
			<li><a href="/Legal.php">Legal</a></li> 
			<li><a href="/About.php">About</a></li> 
			<li><a href="/orderstatus.php">My Orders </a></li>
		</ul> 
<div id="copyright">&copy; 2004 - 2014 Big Brainz, Inc.</div>
</div>

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
<!-- END Google Analytics Tracking Code-->

<!-- BEGIN AdRoll Tracking Code-->
<script type="text/javascript">
adroll_adv_id = "X36G6FX3ABDDTKTJBOZMWT";
adroll_pix_id = "UFCWAPQTOJBVNAE2Q4G3XI";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>
<!-- END AdRoll Tracking Code-->

</body>

<!-- InstanceEnd --></html>
