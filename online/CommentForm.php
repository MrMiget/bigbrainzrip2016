<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Comments to Big Brainz</title>
<script src="javascripts/effects.js" type="text/javascript"></script>
</head>
<body>
	<form action="Control.php" method = "post">
	<input type="hidden" name = "Action" value = "EmailComments" />
	<table>
		<tr>
			<td>Name: </td>
			<td><input type = "text" name = "name" /></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type = "text" name = "email" /></td>
		</tr>
		<tr>
			<td>Comment: </td>
			<td><textarea rows="5" cols="30" name = "comments" ></textarea></td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				<span class="explain">click on the image to reload it</span>
		 		<img src="Captcha/image.php" alt="Click to reload image" title="Click to reload image" id="captcha" onclick="javascript:reloadCaptcha()" /> 
			</td>
			<td><p class = "boxQuote" >=&nbsp;&nbsp;</p></td>
			<td><input maxlength = '3' type='text' name='secure' size = '4' onclick="this.value=''" />
			<td><p class = "boxQuote" >?</p></td>
		</tr>
	</table>
		<table align = "center"><tr><td align = "center"><input style = "align: center;" type="submit" value = "Send" /></td></tr></table>
	</form>
	<script language="javascript" type="text/javascript">
		/* this is just a simple reload; you can safely remove it; remember to remove it from the image too */
		function reloadCaptcha()
		{
			document.getElementById('captcha').src = document.getElementById('captcha').src+ '?' +new Date();
		}
	</script>
</body>
</html>