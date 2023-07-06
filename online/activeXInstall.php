<form action="" method="post" name="form_336567987" >
<input type="hidden" name="LaunchGame" value="false" />
</form>
				
				
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Big Brainz ActiveX Installation Info</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="http://www.bigbrainz.com/Templates/BigBrainzStyle.css" rel="stylesheet" type="text/css" />
<script language="VBScript">
		function DetectBigBrainzActiveX
			on error resume next
			dim tControl
			dim res
			res = 0
			set tControl = CreateObject("BIGBRAINZACTIVEX.BigBrainzActiveXCtrl.1")
			if IsObject(tControl) then
				res = 1
			end if
			DetectBigBrainzActiveX = res
		end function
</script>
<script language="javascript1.1" type="text/javascript">
	var count = 0;
	function GetUnity () {
		if (navigator.appVersion.indexOf("MSIE") != -1 && navigator.appVersion.toLowerCase().indexOf("win") != -1)
			return document.getElementById("BBObject");
	}
	
	function DetectBB () {
    	var tInstalled = false;
    	if (navigator.appVersion.indexOf("MSIE") != -1 && navigator.appVersion.toLowerCase().indexOf("win") != -1) {
			tInstalled = DetectBigBrainzActiveX();
    	}
		return tInstalled;	
	}
	function AutomaticBack () {
		navigator.plugins.refresh();
		if (DetectBB()) {
			form_336567987.submit();
		}
	}
	
</script>
</head>

<body>

<div align="center">
  <table width="600" border="0" cellpadding="0" cellspacing="0">
    <tr>

      <td width="100" height="175" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="100" height="175">
        <param name="movie" value="../Assets/Flash/ActiveXInstallationInfo.swf" />
        <param name="quality" value="high" />
        <embed src="../Assets/Flash/ActiveXInstallationInfo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="175"></embed>
      </object></td>
      <td><div align="center" class="bullet">
        <p><img src="../Assets/Images/BigBrainzLogo60.jpg" alt="Big Brainz" width="145" height="60" /></p>
        <style type="text/css">
			.return
			{
				margin: 0px;
				padding: 0px;
			}
		</style>
	    <style type="text/css">

    		#note1 {
            position: absolute;
            top: 0px;
            left: 0px;
            background: #ffc;
            padding: 10px;
            border: 1px solid #000;
            z-index: 1;
            visibility: hidden;
            font: bold 11px "Verdana", Arial, Helvetica, sans-serif;
            color: #000;
    		}
    		#note2 {
            position: absolute;
            top: 0px;
            left: 0px;
            background: #ffc;
            padding: 10px;
            border: 1px solid #000;
            z-index: 1;
            visibility: hidden;
            font: bold 11px "Verdana", Arial, Helvetica, sans-serif;
            color: #000;
    		}
    		#note3 {
            position: absolute;
            top: 0px;
            left: 0px;
            background: #ffc;
            padding: 10px;
            border: 1px solid #000;
            z-index: 1;
            visibility: hidden;
            font: bold 11px "Verdana", Arial, Helvetica, sans-serif;
            color: #000;
    		}
    	</style>
        
        <form action="" method="post" name="form_385619628" ><a href='javascript:document.form_385619628.submit()' class="return" >Return to Class</a><input type="hidden" name="Action" value="GamePage" /><input type="hidden" name="CurrentRegionType" value="GameSelected" /></form>
        <p class="notice3">Please click the yellow bar  above 
          to<br />
          install 
          the Big Brainz ActiveX Plug-in.</p>
        <p class="text">If you don't see a yellow bar, please try this <a href="http://www.bigbrainz.com/TimezAttackLauncher.exe" class="textShowLink">desktop launcher</a></p>
        <p class="text">. . . or call us!<br />
          (877) 356-7040</p>
      </div></td>
      <td width="100" valign="top"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="100" height="175">
        <param name="movie" value="../Assets/Flash/ActiveXInstallationInfo.swf" />
        <param name="quality" value="high" />
        <embed src="../Assets/Flash/ActiveXInstallationInfo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="175"></embed>
      </object></td>

    </tr>
  </table>
  <p>&nbsp;</p>
  
  <script>
  	document.write('<object id="BigBrainzActiveXControl1" width=20 height=20 \n');
	document.write('classid="CLSID:C94F6648-5B33-4EFE-BE66-AA217A058035" \n');
	document.write('codebase="http://www.bigbrainz.com/Online/bbactx1.cab#version=1,0,0,1"> \n');
	document.write('<param name="appID" value=""> \n');
	document.write('<param name="schoolID" value=""> \n');
	document.write('<param name="studentID" value=""> \n');
	document.write('</object>\n');
	AutomaticBack();
  </script>
  <script>
  createNotes=function(){

      showNote=function(){
                  // gets note1 element
                  var note1=document.getElementById('note1');
//                  note1.style.left=event.clientX;
//                  note1.style.top=event.clientY;
                  // shows note1 element
                  note1.style.visibility='visible';
      }

      hideNote=function(){
                  // gets note1 element
                  var note1=document.getElementById('note1');
                  // hides note1 element
                  note1.style.visibility='hidden';
    }
    showNote2=function(){
        // gets note1 element
        var note2=document.getElementById('note2');
//        note2.style.left=event.clientX;
//        note2.style.top=event.clientY;
        // shows note1 element
    	note2.style.visibility='visible';
	}
	
	hideNote2=function(){
	          // gets note1 element
	          var note2=document.getElementById('note2');
	          // hides note1 element
	          note2.style.visibility='hidden';
	}
	showNote3=function(){
	    // gets note1 element
	    var note3=document.getElementById('note3');
//	    note3.style.left=event.clientX;
//	    note3.style.top=event.clientY;
	    // shows note1 element
	    note3.style.visibility='visible';
	}

	hideNote3=function(){
	    // gets note1 element
	    var note3=document.getElementById('note3');
	    // hides note1 element
	    note3.style.visibility='hidden';
	}


	  var a1=document.getElementById('retry');
      // shows note1 element when mouse is over
      a1.onmouseover=showNote;
      // hides note1 element when mouse is out 
      a1.onmouseout=hideNote;


      var b1=document.getElementById('vista');
      b1.onmouseover=showNote2; 
      b1.onmouseout=hideNote2;

      var c1=document.getElementById('security');
      c1.onmouseover=showNote3; 
      c1.onmouseout=hideNote3;
	}
	//execute code once page is loaded
	window.onload=createNotes;
  </script>
</div>
</body>
</html>