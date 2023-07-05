<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
  <div align="center">
  <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center"><p>Explicit Test</p>
                    <input type="hidden" id="hiddencurr" value="$0.00" /><script language="javascript" type="text/javascript">
/* <![CDATA[ */
function subformid(tid){
	var tform=document.getElementById('ectform'+tid);
	if(tform.onsubmit())tform.submit();
	return(false);
}
var op=[]; // Option Price Difference
var aIM=[]; // Option Alternate Image
var dIM=[]; // Default Image
var pIM=[]; // Product Image
var pIX=[]; // Product Image Index
var ot=[]; // Option Text
var pp=[]; // Product Price
var pi=[]; // Alternate Product Image
var or=[]; // Option Alt Id
var cp=[]; // Current Price
var oos=[]; // Option Out of Stock Id
var opttype=[];
var optperc=[];
var fid=[];
var baseid='';var isW3 = (document.getElementById&&true);
var tax=0;
function dummyfunc(){};
function pricechecker(cnt,i){
if(i!=''&&i in op)return(op[i]);return(0);}
function regchecker(cnt,i){
if(i!='')return(or[i]);return('');}
function enterValue(x){
alert('Please enter a value where indicated.');
x.focus();return(false);}
function enterDigits(x){alert("Please enter only digits in this field.");x.focus();return(false);}
function enterMultValue(){alert("Please enter a quantity for at least one option.");return(false);}
function chooseOption(x){
alert('Please choose from the available product options.');
x.focus();return(false);}
function dataLimit(x){
alert('Please enter a maximum of 255 chars in the field indicated.');
x.focus();return(false);}
var hiddencurr='';
function addCommas(ns,decs,thos){
if((dpos=ns.indexOf(decs))<0)dpos=ns.length;
dpos-=3;
while(dpos>0){
	ns=ns.substr(0,dpos)+thos+ns.substr(dpos);
	dpos-=3;
}
return(ns);
}
function formatprice(i, currcode, currformat){
if(hiddencurr=='')hiddencurr=document.getElementById('hiddencurr').value;var pTemplate=hiddencurr;
if(currcode!='') pTemplate=' 0.00' + (currcode!=' '?'<strong>'+currcode+'<\/strong>':'');if(currcode==" JPY")i=Math.round(i).toString();else if(i==Math.round(i))i=i.toString()+".00";
else if(i*10.0==Math.round(i*10.0))i=i.toString()+"0";
else if(i*100.0==Math.round(i*100.0))i=i.toString();
i=addCommas(i.toString(),'.',',');if(currcode!="")pTemplate = currformat.toString().replace(/%s/,i.toString());else pTemplate = pTemplate.toString().replace(/\d[,.]*\d*/,i.toString());return(pTemplate);}
function openEFWindow(id){
window.open('emailfriend.php?id='+id,'email_friend','menubar=no, scrollbars=no, width=400, height=400, directories=no,location=no,resizable=yes,status=no,toolbar=no')
}
function updateoptimage(theitem,themenu,opttype){
if(imageitem=document.getElementById("prodimage"+theitem)){
var imageitemsrc='';
if(opttype==1){
	theopt=document.getElementsByName('optn'+theitem+'x'+themenu)
	for(var i=0; i<theopt.length; i++)
		if(theopt[i].checked)theid=theopt[i].value;
}else{
	theopt=document.getElementById('optn'+theitem+'x'+themenu)
	theid=theopt.options[theopt.selectedIndex].value;
}
if(aIM[theid]){
	if(typeof(imageitem.src)!='unknown')imageitem.src=aIM[theid];
}
}
}
function updateprodimage(theitem,isnext){
var imlist=pIM[theitem].split('\|');
if(isnext) pIX[theitem]++; else pIX[theitem]--;
if(pIX[theitem]<0) pIX[theitem]=imlist.length-2;
if(pIX[theitem]>imlist.length-2) pIX[theitem]=0;
document.getElementById("prodimage"+theitem).src=imlist[pIX[theitem]];
document.getElementById("extraimcnt"+theitem).innerHTML=pIX[theitem]+1;
return false;
}
function sz(szid,szprice,szimage){
	pp[szid]=szprice;
	szimage = szimage.replace("|", "prodimages/")
	szimage = szimage.replace("<", ".gif")
	szimage = szimage.replace(">", ".jpg")
	if(szimage!='')pi[szid]=szimage;
}
function gfid(tid){
	if(tid in fid)
		return(fid[tid]);
	fid[tid]=document.getElementById(tid);
	return(fid[tid]);
}
function applyreg(arid,arreg){
	if(arreg&&arreg!=''){
		arreg = arreg.replace('%s', arid);
		if(arreg.indexOf(' ')>0){
			var ida = arreg.split(' ', 2);
			arid = arid.replace(ida[0], ida[1]);
		}else
			arid = arreg;
	}
	return(arid);
}
function getaltid(theid,optns,prodnum,optnum,optitem,numoptions){
	var thereg = '';
	for(var index=0; index<numoptions; index++){
		if(Math.abs(opttype[index])==2){
			if(optnum==index)
				thereg = or[optns.options[optitem].value];
			else{
				var opt=gfid("optn"+prodnum+"x"+index);
				thereg = or[opt.options[opt.selectedIndex].value];
			}
		}else if(Math.abs(opttype[index])==1){
			opt=document.getElementsByName("optn"+prodnum+"x"+index);
			if(optnum==index){
				thereg = or[opt[optitem].value];
			}else{
				for(var y=0;y<opt.length;y++)
					if(opt[y].checked) thereg = or[opt[y].value];
			}
		}else
			continue;
		theid = applyreg(theid,thereg);
	}
	return(theid);
}
function getnonaltpricediff(optns,prodnum,optnum,optitem,numoptions,theoptprice){
	var nonaltdiff=0;
	for(index=0; index<numoptions; index++){
		var optid = '';
		if(Math.abs(opttype[index])==2){
			if(optnum==index)
				optid = optns.options[optitem].value;
			else{
				var opt=gfid("optn"+prodnum+"x"+index);
				optid = opt.options[opt.selectedIndex].value;
			}
		}else if(Math.abs(opttype[index])==1){
			var opt=document.getElementsByName("optn"+prodnum+"x"+index);
			if(optnum==index)
				optid = opt[optitem].value;
			else{
				for(var y=0;y<opt.length;y++){ if(opt[y].checked) optid=opt[y].value; }
			}
		}else
			continue;
		if(!or[optid]&&optid in op)
			if(optperc[index])nonaltdiff+=(op[optid]*theoptprice)/100.0;else nonaltdiff+=op[optid];
	}
	return(nonaltdiff);
}
function updateprice(numoptions,prodnum,prodprice,origid,thetax,stkbyopts,taxexmpt){
	baseid=origid;
	if(!isW3) return;
	oos[prodnum]='';
	var origprice=prodprice;
	for(cnt=0; cnt<numoptions; cnt++){
		if(Math.abs(opttype[cnt])==2){
			optns=gfid("optn"+prodnum+"x"+cnt);
			baseid=applyreg(baseid,regchecker(prodnum,optns.options[optns.selectedIndex].value));
		}else if(Math.abs(opttype[cnt])==1){
			optns=document.getElementsByName("optn"+prodnum+"x"+cnt);
			for(var i=0;i<optns.length;i++){ if(optns[i].checked) baseid=applyreg(baseid,regchecker(prodnum,optns[i].value)); }
		}
		if(baseid in pp)prodprice=pp[baseid];
	}
	var baseprice=prodprice;
	for(cnt=0; cnt<numoptions; cnt++){
		if(Math.abs(opttype[cnt])==2){
			optns=gfid("optn"+prodnum+"x"+cnt);
			if(optperc[cnt])
				prodprice+=((baseprice*pricechecker(prodnum,optns.options[optns.selectedIndex].value))/100.0);
			else
				prodprice+=pricechecker(prodnum,optns.options[optns.selectedIndex].value);
		}else if(Math.abs(opttype[cnt])==1){
			optns=document.getElementsByName("optn"+prodnum+"x"+cnt);
			if(optperc[cnt])
				for(var i=0;i<optns.length;i++){ if(optns[i].checked) prodprice+=((baseprice*pricechecker(prodnum,optns[i].value))/100.0); }
			else
				for(var i=0;i<optns.length;i++){ if(optns[i].checked) prodprice+=pricechecker(prodnum,optns[i].value); }
		}
	}
	var totalprice=prodprice;
	for(cnt=0; cnt<numoptions; cnt++){
		if(Math.abs(opttype[cnt])==2){
			var optns=gfid("optn"+prodnum+"x"+cnt);
			for(var i=0;i<optns.length;i++){
				if(optns.options[i].value!=''){
					theid = origid;
					optns.options[i].text=ot[optns.options[i].value];
					theid = getaltid(theid,optns,prodnum,cnt,i,numoptions);
					theoptprice = (theid in pp?pp[theid]:origprice);
					if(pi[theid]&&pi[theid]!=''&&or[optns.options[i].value])aIM[optns.options[i].value]=pi[theid];					var staticpricediff = getnonaltpricediff(optns,prodnum,cnt,i,numoptions,theoptprice);
					theoptpricediff=(theoptprice+staticpricediff)-totalprice;
if(theoptpricediff!=0)optns.options[i].text+=' ('+(theoptpricediff>0?'+':'-')+formatprice(Math.abs(Math.round((theoptpricediff)*100)/100.0), '', '')+')';				}
			}
		}else if(Math.abs(opttype[cnt])==1){
			optns=document.getElementsByName("optn"+prodnum+"x"+cnt);
			for(var i=0;i<optns.length;i++){
				theid = origid;
				optn=gfid("optn"+prodnum+"x"+cnt+"y"+i);
				optn.innerHTML=ot[optns[i].value];
				theid = getaltid(theid,optns,prodnum,cnt,i,numoptions);
				theoptprice = (theid in pp?pp[theid]:origprice);
				if(pi[theid]&&pi[theid]!=''&&or[optns[i].value])aIM[optns[i].value]=pi[theid];				var staticpricediff = getnonaltpricediff(optns,prodnum,cnt,i,numoptions,theoptprice);
				theoptpricediff=(theoptprice+staticpricediff)-totalprice;
if(theoptpricediff!=0)optn.innerHTML+=' ('+(theoptpricediff>0?'+':'-')+formatprice(Math.abs(Math.round((theoptpricediff)*100)/100.0), '', '')+')';			}
		}
	}
	if((!cp[prodnum]||cp[prodnum]==0)&&prodprice==0)return;
	cp[prodnum]=prodprice;
if(document.getElementById('taxmsg'+prodnum))document.getElementById('taxmsg'+prodnum).style.display='';document.getElementById('pricediv'+prodnum).innerHTML=formatprice(Math.round((prodprice)*100.0)/100.0, '', '');
}
function ectvalidate(theForm,numoptions,prodnum,stkbyopts){
	for(cnt=0; cnt<numoptions; cnt++){
		if(Math.abs(opttype[cnt])==4){
			var intreg = /^(\d*)$/;var inputs = theForm.getElementsByTagName('input');var tt='';
			for(var i=0;i<inputs.length;i++){if(inputs[i].type=='text'){if(! inputs[i].value.match(intreg))return(enterDigits(inputs[i]));tt+=inputs[i].value;}}if(tt=='')return(enterMultValue());
		}else if(Math.abs(opttype[cnt])==3){
			if(opttype[cnt]==3&&eval('theForm.voptn'+cnt+'.value')=='')return(enterValue(eval('theForm.voptn'+cnt)));
			if(eval('theForm.voptn'+cnt+'.value.length')>255)return(dataLimit(eval('theForm.voptn'+cnt)));
		}else if(Math.abs(opttype[cnt])==2){
			optn=document.getElementById("optn"+prodnum+"x"+cnt);
			if(opttype[cnt]==2){ if(optn.selectedIndex==0)return(chooseOption(eval('theForm.optn'+cnt))); }
			if(stkbyopts&&optn.options[optn.selectedIndex].value!=''){ if(!checkStock(optn,optn.options[optn.selectedIndex].value))return(false); }
		}else if(Math.abs(opttype[cnt])==1){
			havefound='';optns=document.getElementsByName('optn'+prodnum+'x'+cnt);
			if(opttype[cnt]==1){ for(var i=0; i<optns.length; i++) if(optns[i].checked)havefound=optns[i].value;if(havefound=='')return(chooseOption(optns[0])); }
			if(stkbyopts){ if(havefound!=''){if(!checkStock(optns[0],havefound))return(false);} }
		}
	}
if(oos[prodnum]&&oos[prodnum]!=''){alert("I'm sorry, that particular option is currently out of stock");document.getElementById(oos[prodnum]).focus();return(false);}
return (true);
}
/* ]]> */
</script><script language="javascript" type="text/javascript">
/* <![CDATA[ */
function setvals0(){opttype[0]=2;optperc[0]=false;
}
function formvalidator0(theForm){
setvals0();return(ectvalidate(theForm,1,0,false));}
function updateprice0(){setvals0();updateprice(1,0,39.99,'02',0,false,false);}
/* ]]> */
</script><script language="javascript" type="text/javascript">
/* <![CDATA[ */

function showgiantimage(imgname){
document.getElementById('giantimgspan').style.display='';
document.getElementById('mainbodyspan').style.display='none';
document.getElementById('prodimage999').src=imgname;
}
function hidegiantimage(){
document.getElementById('giantimgspan').style.display='none';
document.getElementById('mainbodyspan').style.display='';
return(false);
}

/* ]]> */
</script>
	  <table id="giantimgspan" border="0" cellspacing="0" cellpadding="0" width="98%" align="center" style="display:none">
	    <tr><td><strong><span class="giantimgname detailname">Timez Attack </span> <span class="giantimgback">(<a class="ectlink" href="proddetail.php?prod=02" onclick="javascript:return hidegiantimage();" >Back to product</a>)</span></strong><br />&nbsp;</td></tr>
		<tr>
		  <td>
		  <table border="0" cellspacing="1" cellpadding="1" align="center">
			<tr><td align="center" colspan="2"><img id="prodimage999" class="giantimage prodimage" src="images/clearpixel.gif" border="0" alt="Timez Attack"  style="margin:0px;" /></td></tr>
		  </table>
		  </td>
		</tr>
	  </table>
	  <table id="mainbodyspan" border="0" cellspacing="0" cellpadding="0" width="100%" align="center">
		<tr> 
		  <td width="100%">

			
          </td>
        </tr>
<tr><td class="review"><span xmlns:v="http://rdf.data-vocabulary.org/#" typeof="v:Review-aggregate"><span style="display:none" property="v:itemreviewed">Timez Attack</span><a name="reviews"></a>&nbsp;<br /><span class="review numreviews"><span property="v:count">1 </span>Product Reviews - Average rating <span rel="v:rating"><span property="v:average">5</span></span> / 5</span><span class="review showallreview"> (<a class="ectlink" href="proddetail.php?prod=02&amp;review=all">Show All</a>)</span><br /><hr class="review" /><span class="review clickreview"><a class="ectlink" rel="nofollow" href="proddetail.php?prod=02&amp;review=true">Click to review this product</a></span><br /><hr class="review" /><span xmlns:v="http://rdf.data-vocabulary.org/#" typeof="v:Review"><span style="display:none" property="v:itemreviewed">Timez Attack</span><span style="display:none" property="v:rating">5</span><img src="images/reviewcart.gif" alt="" style="vertical-align:middle;margin:0px;" /><img src="images/reviewcart.gif" alt="" style="vertical-align:middle;margin:0px;" /><img src="images/reviewcart.gif" alt="" style="vertical-align:middle;margin:0px;" /><img src="images/reviewcart.gif" alt="" style="vertical-align:middle;margin:0px;" /><img src="images/reviewcart.gif" alt="" style="vertical-align:middle;margin:0px;" /> <span class="review reviewheader">Revolutionizing Educational Software</span><br /><br /><span class="review reviewname"><span property="v:reviewer">Ben Harrison</span> - <span property="v:dtreviewed">10th November 2010</span></span><br /><br /><span class="review reviewcomments" property="v:summary">Well, it's possible I'm a tad biased--I mean, I did start the company afterall.  But I'm so grateful to see seducational software being developed that's as entertaining as a top video game, yet as rigorous and effective as a top teacher one-on-one.  The ne...</span><br /><hr class="review" /></span><span class="review clickreview"><a class="ectlink" rel="nofollow" href="proddetail.php?prod=02&amp;review=true">Click to review this product</a></span><br /><hr class="review" /></td></tr></table><script language="javascript" type="text/javascript">updateprice0();updateoptimage(0,0,2);</script>		</td>
    </tr>
  </table>
  </div>
</body>
</html>
