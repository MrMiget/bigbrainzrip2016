function Menu()
	{
	if (document.all&&document.getElementById)
		{
		for (TMPCounter = 0; TMPCounter <= 9; TMPCounter++)
			{
			navRoot = document.getElementById("DivMenuUl_" + TMPCounter);
			if (navRoot != null)
				{
				for (i=0; i<navRoot.childNodes.length; i++)
					{
					node = navRoot.childNodes[i];
					if (node.nodeName=="LI")
						{
						node.onmouseover=function()
							{
							this.className+=" over";
							}
						node.onmouseout=function()
							{
							this.className=this.className.replace(" over", "");
							}
						}
					}
				}
			}
		}
	}
