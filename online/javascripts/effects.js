function flash_setup(divId, numFlash, numSeconds)
{
	var timeInt = numSeconds*1000/numFlash;
	var currentTime = 0;
	for (i = 0; i < numFlash; i++)
	{
		if (i % 2)
		{	
			setTimeout("document.getElementById('"+divId+"').style.visibility = 'visible';", currentTime);
		}
		else
		{
			setTimeout("document.getElementById('"+divId+"').style.visibility = 'hidden';", currentTime);
		}
		currentTime += timeInt;
	}
	setTimeout("document.getElementById('"+divId+"').style.visibility = 'visible';", currentTime);
}
