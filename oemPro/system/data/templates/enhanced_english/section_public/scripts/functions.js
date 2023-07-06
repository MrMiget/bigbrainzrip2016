function ShowHideItem(WhichID, Ignore)
	{
	if (Ignore == false)
		{
		Item = document.getElementById(WhichID);
	
		if (Item.style.display == 'none')
			{
			Item.style.display = 'block';
			}
		else if (Item.style.display == 'block')
			{
			Item.style.display = 'none';
			}
		else
			{
			Item.style.display = 'none';
			}
		}
	}
	
function ChangeColor(What, BackColor)
	{
	What.style.backgroundColor = BackColor;
	}

function DisplayActionMessage(PageActionMessage)
	{
	if (PageActionMessage != '')
		{
		alert(PageActionMessage);
		}
	}
	
function OpenPopUp(theURL,winName,features)
	{
	// Ex: features = 'scrollbars=yes,menubar=no,resizable=0,location=no,width=400,height=400';
	window.open(theURL,winName,features);
	}

function GenerateUniqueNumber()
	{
	date = new Date() ;
	return date.getTime() ;
	}

function CheckAllCheckboxes(ownercheckbox,targetcheckbox,formname)
	{	
	var formname  = eval('document.' + formname);
    var elts      = formname.elements[targetcheckbox];

	if (elts != null)
		{
		var elts_cnt  = elts.length;
		var do_check  = true;
		owner_checkbox = formname.elements[ownercheckbox];
	
		if (owner_checkbox.checked == true)
			{
			do_check = true;
			}
		else
			{
			do_check = false;
			}
	
		if (elts_cnt != null)
			{
			for (var i = 0; i < elts_cnt; i++)
				{
				elts[i].checked = do_check;
				} // end for
			}
		else
			{
			elts.checked = do_check;
			}
		}
    return true;
	}