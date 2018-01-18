var ind=0;
var flashRequiredVersion = 7;
function callImageTag1(arrayImgPath,arrayImgWidth,arrayImgHeight,arrayImgAltText,arrayImgURL)
{
    var index = Math.floor(Math.random()*10);
    while(index >= arrayImgPath.length)
    {
        index = Math.floor(Math.random()*10);
    }
    ind=index;
    if(arrayImgURL[ind]!='')
    {
        document.write("<a href=" + arrayImgURL[ind] + " target='_top'><img src='" + arrayImgPath[index] + "' border='0' width='" + arrayImgWidth[index] + "' height='" + arrayImgHeight[index] + "' alt='" + arrayImgAltText[index] + "'></a>");
    }
    else
    {
        document.write("<img src='" + arrayImgPath[index] + "' border='0' width='" + arrayImgWidth[index] + "' height='" + arrayImgHeight[index] + "' alt='" + arrayImgAltText[index] + "'>");
    }
}

function popUp(URL) 
{
    pipeIndex = URL.indexOf("|");
	pipeIndexPlusOneVal = URL.substring(pipeIndex+1, pipeIndex+2);
    if (pipeIndex == -1){
		var leftOffset=0;
		var topOffset=0;    
		if(screen.width)
		{
			if(screen.width < 800)
			{
				leftOffset=60;
				topOffset=90;
			}
			else
			{
				if(screen.width>=800&&screen.width<1024)
				{
					leftOffset=160;
					topOffset=134;
				}
				else
				{
					if(screen.width>=1024)
					{
						leftOffset=272;
						topOffset=250;
					}
				}
			}
		}
		var winParam = "left=0,top=0,resizable=yes,scrollbars=yes,menubar=yes,location=yes,height="+screen.height+",width="+screen.width;
	}
	else if (pipeIndexPlusOneVal == "|")
	{
		var leftOffset=0;
		var topOffset=0;    
		if(screen.width)
		{
			if(screen.width < 800)
			{
				leftOffset=60;
				topOffset=90;
			}
			else
			{
				if(screen.width>=800&&screen.width<1024)
				{
					leftOffset=160;
					topOffset=134;
				}
				else
				{
					if(screen.width>=1024)
					{
						leftOffset=272;
						topOffset=250;
					}
				}
			}
		}
		var winParam = "left=0,top=0,resizable=yes,scrollbars=yes,menubar=yes,location=yes,height="+screen.height+",width="+screen.width;
	}
	else {
		var winParam = URL.substring(pipeIndex+1, URL.length);
		URL = URL.substring(0, pipeIndex);
	}
    //alert(winParam);
    //var webWin=window.open(URL,"winview",'left='+leftOffset+',top='+topOffset+',screenx='+leftOffset+',screeny='+topOffset+',resizable=yes,scrollbars=yes,menubar=yes,location=yes');
    var webWin=window.open(URL,"winview",winParam);
    webWin.focus();
}

function callFlash(arrayImgPath,arrayImgWidth,arrayImgHeight)
{
    var index = Math.floor(Math.random()*10);
    while(index >= arrayImgPath.length)
    {
        index = Math.floor(Math.random()*10);
    }
    ind=index;

    if(hasRightVersion)
    {
       	var so = new SWFObject(arrayImgPath[index], arrayImgPath[index], arrayImgWidth[index], arrayImgHeight[index], flashRequiredVersion, "#FFFFFF");
       	document.write(so.getSWFHTML());

    }

else
	{
		document.write(flashAlt);
	}

}