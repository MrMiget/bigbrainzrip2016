<html>
<head>
<title>oemPro > Administrator login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="pragma" content="no-cache">
<link href="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/css/styles_screen.css" rel="stylesheet" type="text/css">
<link href="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/css/styles_menu.css" rel="stylesheet" type="text/css">
<link href="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/css/styles_help.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://www.bigbrainz.com/oemPro/favico.ico">
<script language="JavaScript" type="text/JavaScript" src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/scripts/functions_administrator.js"></script>
<script language="JavaScript" type="text/JavaScript" src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/scripts/menu.js"></script>
<script language="JavaScript" type="text/JavaScript" src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/scripts/help.js"></script>
<script language="JavaScript" type="text/JavaScript" src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/scripts/help_texts.js"></script>

<script language="JavaScript">
	IdentityBackColor	=	'#FBFBD6';
</script>



</head>

<body onLoad="DisplayActionMessage('');">

<div id="Header">
<table border="0" cellpadding="0" cellspacing="0" id="LogoTable">
	<tr>
		<td id="LeftTD">
		<BRANDING:DefaultProductLogo>
		<img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/013.gif" width="173" height="89" border="0">
		</BRANDING:DefaultProductLogo>
		
		</td>
		<td id="RightTD">

<br><br>

		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" id="MenuTable">
	<tr>
		<td width="21"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/015.gif" width="21" height="32" border="0"></td>
		<td style="background-image:url(http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/017.gif);">

			&nbsp;
		</td>
		<td width="21"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/016.gif" width="21" height="32" border="0"></td>
	</tr>
</table>
</div>

<div id="PageName">
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="12"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/036.gif" width="12" height="37" border="0"></td>
		<td style="background-image:url(http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/021.gif);"><span class="PageNameTitle">Administrator login</span></td>
		<td width="12"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/020.gif" width="12" height="37" border="0"></td>
	</tr>
</table>
</div>

<div id="PageContent">
<table border="0" cellpadding="0" cellspacing="0" id="PageContentTable">
	<tr>
		<td width="26" height="10"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/022.gif" width="26" height="10" border="0"></td>
		<td height="10" bgcolor="#FFFFFF"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/027.gif" width="1" height="10" border="0"></td>
		<td width="26" height="10"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/023.gif" width="26" height="10" border="0"></td>
	</tr>
	<tr id="ContentBar">
		<td width="26" bgcolor="#FFFFFF">&nbsp;</td>
		<td bgcolor="#FFFFFF" id="ContentTD">
		<form action="./index.php" method="post" enctype="multipart/form-data" name="form1">



<fieldset><legend>Please enter your login information</legend>
<table border="0" cellspacing="0" cellpadding="0" class="FormTable">
		<tr>
			<td class="FieldLabelColumn">Username</td>
			<td class="FieldValueColumn">
				<input name="FormValue_Username" type="text" id="FormValue_Username" value="" size="15" class="_errorclassUsername_">
				
			</td>
		</tr>
		<tr>
			<td class="FieldLabelColumn">Password</td>
			<td class="FieldValueColumn">
				<input name="FormValue_Password" type="password" id="FormValue_Password" value="" size="15" class="_errorclassPassword_">
				
			</td>
		</tr>
<SHOWHIDE:CAPTCHA>
		<tr>
			<td class="FieldLabelColumn">Enter the text in the image</td>
			<td class="FieldValueColumn">
				<input name="FormValue_Captcha" type="text" id="FormValue_Captcha" value="" size="5" class="_errorclassCaptcha_">
				<img src="./captcha.php" />
				
			</td>
		</tr>
</SHOWHIDE:CAPTCHA>
		<tr>
			<td class="FieldLabelColumn">&nbsp;</td>
			<td class="FieldValueColumn">
				<input type="checkbox" name="FormValue_RememberMe" id="FormValue_RememberMe" value="Yes" _selectedcheckboxRememberMeYes_>
				<label for="FormValue_RememberMe">Remember me on next login </label>
				</td>
		</tr>
</table>
<p> <a href="./forgot_pwd.php">Forgot your password?</a>
</fieldset>
<br>
<p>
	<span class="FormTable">
		<span class="FieldButtonColumn">
			<input name="FormButton_Login" type="submit" id="FormButton_Login" value="Login">
			<input name="FormValue_FromURL" type="hidden" id="FormValue_FromURL" value="%2FoemPro%2Fadmin%2Fsettings_test.php">
		</span>
	</span>
</p>
</form>

		</td>
		<td width="26" bgcolor="#FFFFFF">&nbsp;</td>
	</tr>
	<tr>
		<td width="26" height="10"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/025.gif" width="26" height="10" border="0"></td>
		<td height="10" style="background-image:url(http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/026.gif);"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/027.gif" width="1" height="10" border="0"></td>
		<td width="26" height="10"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/024.gif" width="26" height="10" border="0"></td>
	</tr>
</table>
</div>

<div id="Footer">
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="14"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/018.gif" width="14" height="60" border="0"></td>
	 <td bgcolor="#6490D1">
<BRANDING:ShowCopyright>
			&copy;Copyright <a href="http://www.octeth.com/" target="_blank">Octeth Technologies</a><br>
			All rights reserved.<br>
</BRANDING:ShowCopyright>

<BRANDING:ShowProductVersion>
		 <a href="http://www.octeth.com/products/oempro/" target="_blank">oemPro v3.6.1	</a>		<br>
</BRANDING:ShowProductVersion>

<BRANDING:ShowLicenseAndSupportLinks>

</BRANDING:ShowLicenseAndSupportLinks>

		</td>
		<td width="82"><BRANDING:ShowOctethLogo><a href="http://www.octeth.com/" target="_blank"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/019.gif" alt="(c)Copyright Octeth Technologies" width="82" height="60" border="0"></a></BRANDING:ShowOctethLogo></td>
	</tr>
	<tr>
		<td width="14"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/029.gif" width="14" height="13" border="0"></td>
		<td bgcolor="#6490D1">&nbsp;</td>
		<td width="82"><img src="http://www.bigbrainz.com/oemPro/system/data/templates/enhanced_english/media/images/theme/030.gif" width="82" height="13" border="0"></td>
	</tr>

</table>
</div>

<script language="JavaScript" type="text/javascript">
Menu();
</script>

</body>
</html>
