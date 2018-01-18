
	if (!(hasRightVersion)) {
		var altClickthrough1 = "javascript:popUp('http://resources.chase.com/ViewAd.aspx?AD=|||28540|||');";
		var altClickthrough2 = "javascript:popUp('http://resources.chase.com/ViewAd.aspx?AD=|||28672|||');";
		var altClickthroughURL;
		var randomize = Math.random() * 1000;
		randomize = (Math.round(randomize) % 2);
		if (randomize)
		{
			altClickthroughURL = altClickthrough1;
		}
		else
		{
			altClickthroughURL = altClickthrough2;
		}
		var altImageURL = "/ccpmweb/generic/image/T3_DR_marquee_lft.gif";
		var altImageURL2 = "/ccpmweb/generic/image/T3_DR_marquee_rt.gif";
		var altImageText = "The Chase FreedomSM Credit Card. 0% Intro APR. 1% Cash Back for every $1 spent. 3% Cash back for every eligible $1 spent on select purchases. Learn more.";
		
		document.write('<DIV STYLE="z-index:3; position:absolute; top:63px; id="altAd" align="center"><div style="width:779px;text-align:right;position:relative; left:-1;">');
		document.write('<a href="'+altClickthroughURL+'"><img src="'+altImageURL+'" width="312" height="90" border="0" alt="'+altImageText+'" style="position:relative;top:-60px;"></a><a href="'+altClickthroughURL+'"><img src="'+altImageURL2+'" width="260" height="150" border="0" alt="'+altImageText+'"></a>');
		document.write('</DIV></DIV>');
		}
