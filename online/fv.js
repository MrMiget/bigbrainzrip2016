function echeck(str)
{var at="@"
var dot="."
var lat=str.indexOf(at)
var lstr=str.length
var ldot=str.indexOf(dot)
if(str.indexOf(at)==-1){alert("Invalid E-mail ID")
return false}
if(str.indexOf(at)==-1||str.indexOf(at)==0||str.indexOf(at)==lstr){alert("Invalid E-mail ID")
return false}
if(str.indexOf(dot)==-1||str.indexOf(dot)==0||str.indexOf(dot)==lstr){alert("Invalid E-mail ID")
return false}
if(str.indexOf(at,(lat+1))!=-1){alert("Invalid E-mail ID")
return false}
if(str.substring(lat-1,lat)==dot||str.substring(lat+1,lat+2)==dot){alert("Invalid E-mail ID")
return false}
if(str.indexOf(dot,(lat+2))==-1){alert("Invalid E-mail ID")
return false}
if(str.indexOf(" ")!=-1){alert("Invalid E-mail ID")
return false}
return true}
function ValidateEmail(emailName,emailConfirmName)
{emailID=document.getElementsByName(emailName)[0];emailConfirmID=document.getElementsByName(emailConfirmName)[0];if((emailID.value==null)||(emailID.value=="")){alert("Please Enter your Email ID")
emailID.focus()
return false}
if((emailID.value!=emailConfirmID.value)){alert("Please make sure you email addresses match")
emailID.focus()
return false}
if(echeck(emailID.value)==false){emailID.value=""
emailConfirmID.value=""
emailID.focus()
return false}
return true}
function ValidateEmailID(emailID,emailConfirmID)
{emailID=document.getElementById(emailID);emailConfirmID=document.getElementById(emailConfirmID);if((emailID.value==null)||(emailID.value=="")){alert("Please Enter your Email ID")
emailID.focus()
return false}
if((emailID.value!=emailConfirmID.value)){alert("Please make sure you email addresses match")
emailID.focus()
return false}
if(echeck(emailID.value)==false){emailID.value=""
emailConfirmID.value=""
emailID.focus()
return false}
return true}
var digits="0123456789";var phoneNumberDelimiters="()- ";var validWorldPhoneChars=phoneNumberDelimiters+"+";var minDigitsInIPhoneNumber=10;function isInteger(s)
{var i;for(i=0;i<s.length;i++)
{var c=s.charAt(i);if(((c<"0")||(c>"9")))return false;}
return true;}
function trim(s)
{var i;var returnString="";for(i=0;i<s.length;i++)
{var c=s.charAt(i);if(c!=" ")returnString+=c;}
return returnString;}
function stripCharsInBag(s,bag)
{var i;var returnString="";for(i=0;i<s.length;i++)
{var c=s.charAt(i);if(bag.indexOf(c)==-1)returnString+=c;}
return returnString;}
function checkInternationalPhone(strPhone){var bracket=3
strPhone=trim(strPhone)
if(strPhone.indexOf("+")>1)
{return false}
if(strPhone.indexOf("-")!=-1)bracket=bracket+1
if(strPhone.indexOf("(")!=-1&&strPhone.indexOf("(")>bracket)
{return false}
var brchr=strPhone.indexOf("(")
if(strPhone.indexOf("(")!=-1&&strPhone.charAt(brchr+4)!=")")
{return false}
if(strPhone.indexOf("(")==-1&&strPhone.indexOf(")")!=-1)
{return false}
s=stripCharsInBag(strPhone,validWorldPhoneChars);return(isInteger(s)&&s.length>=minDigitsInIPhoneNumber);}
function ValidatePhoneNumber(phoneName){var Phone=document.getElementsByName(phoneName)[0];if(Phone.value=="(Optional)")
Phone.value="";if((Phone.value=="")||(Phone.value==null)){return true}
if(checkInternationalPhone(Phone.value)==false){alert("If provided, you must enter a Valid Phone Number")
Phone.value=""
Phone.focus()
return false}
return true}
function ValidatePhoneNumberID(phoneID){var Phone=document.getElementById(phoneID);if(Phone.value=="(Optional)")
Phone.value="";if((Phone.value=="")||(Phone.value==null)){return true}
if(checkInternationalPhone(Phone.value)==false){alert("If provided, you must enter a Valid Phone Number")
Phone.value=""
Phone.focus()
return false}
return true}
function ValidateName(nameName)
{nameID=document.getElementsByName(nameName)[0];if((nameID.value==null)||(nameID.value=="")){alert("Please Enter your name")
nameID.focus()
return false}
return true}
function ValidateNameID(nameID)
{nameID=document.getElementById(nameID);if((nameID.value==null)||(nameID.value=="")){alert("Please Enter your name")
nameID.focus()
return false}
return true}
function ValidateTitle(titleName)
{titleID=document.getElementsByName(titleName)[0];if((titleID.value==null)||(titleID.value=="")){alert("Please Enter your title")
titleID.focus()
return false}
return true}
function ValidateTitleID(titleID)
{titleID=document.getElementsByName(titleID)[0];if((titleID.value==null)||(titleID.value=="")){alert("Please Enter your title")
titleID.focus()
return false}
return true}
function ValidateEducatorCredentials()
{if(!ValidateName("name"))
return false;if(!ValidateTitle("title"))
return false;if(!ValidateEmail("emailAddress","emailAddressConfirm"))
return false;if(!ValidatePhoneNumber("phoneNumber"))
return false;return true}