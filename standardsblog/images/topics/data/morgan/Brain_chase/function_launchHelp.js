//----------------------------------------------------------
var pwin=null;

//----------------------------------------------------------
function launchHelp( filename )
{
	var windowWidth  = 644;
	var windowHeight = 538;
	if (filename.toLowerCase()=="help")
	{
		filename="http://www.chase.com/pages/chaseonline/help/main_help";
	}
	if (pwin)
	{
		if (pwin.closed)
		{
			pwin = window.open( filename, "parent", "scrollbars,width="+windowWidth+",height="+windowHeight);
		}
		else
		{
			pwin.location = filename;
		}
	}
	else
	{
		pwin = window.open( filename, "parent", "scrollbars,width="+windowWidth+",height="+windowHeight);
	}
	pwin.focus();
}

//--------------------added new function for popup print agreements-------
//date 10/29/2002***************
//added by: Ravi L.
//-------------------------------------------------------------------------------

function launchPrintWindow( filename )
{
	var windowWidth  = 644;
	var windowHeight = 340;
	if (filename.toLowerCase()=="help")
	{
		filename="http://www.chase.com/pages/chaseonline/help/main_help";
	}
	if (pwin)
	{
		if (pwin.closed)
		{
			pwin = window.open( filename, "parent", "scrollbars,width="+windowWidth+",height="+windowHeight);
		}
		else
		{
			pwin.location = filename;
		}
	}
	else
	{
		pwin = window.open( filename, "parent", "scrollbars,width="+windowWidth+",height="+windowHeight);
	}
	pwin.focus();
}


//--------------------added new funcations for new browser functionality-------
//date 31-07-2002***************
//added by: gayatri Kumta.
//-------------------------------------------------------------------------------

function LaunchNewWindowFor( filename ){
var windowWidth  = 644;
	var windowHeight = 538;
	if (filename.toLowerCase()=="internationalBanking")
	{
		filename="http://www.chase.com/pages/chase/pf/banking/intbank";
	}
	else if (filename.toLowerCase()=="privacySecurity")
	{
		filename="http://www.chase.com/pages/chase/cc/privacysecurity";
	}
	else if (filename.toLowerCase()=="termsConditions")
	{
		filename="http://www.chase.com/pages/chase/cc/terms";
	}

	if (pwin)
	{
		if (pwin.closed)
		{
			pwin = window.open( filename, "parent", "scrollbars,width="+windowWidth+",height="+windowHeight);
		}
		else
		{
			pwin.location = filename;
		}
	}
	else
	{
		pwin = window.open( filename, "parent", "scrollbars,width="+windowWidth+",height="+windowHeight);
	}
	pwin.focus();
}//LaunchNewWindowFor

//*******************************************************************************


//----------------------------------------------------------
function launchHelpWithMenubar( filename )
{
	var windowWidth  = 644;
	var windowHeight = 538;
	if (filename.toLowerCase()=="help")
	{
		filename="http://www.chase.com/pages/chaseonline/help/main_help";
	}
	if (pwin)
	{
		if (pwin.closed)
		{
			pwin = window.open( filename, "parent", "menubar,scrollbars,width="+windowWidth+",height="+windowHeight);
		}
		else
		{
			pwin.location = filename;
		}
	}
	else
	{
		pwin = window.open( filename, "parent", "menubar,scrollbars,width="+windowWidth+",height="+windowHeight);
	}
	pwin.focus();
}


//--------------------added new function for popup -------
//date 02/28/2003***************
//added by: Suraj R.
//-------------------------------------------------------------------------------

function launchLink( filename )
{
	var windowWidth  = 644;
	var windowHeight = 538;
	if (pwin)
	{
		if (pwin.closed)
		{
			pwin = window.open( filename, "parent", "resizable, scrollbars,width="+windowWidth+",height="+windowHeight);
		}
		else
		{
			pwin.location = filename;
		}
	}
	else
	{
		pwin = window.open( filename, "parent", "resizable, scrollbars,width="+windowWidth+",height="+windowHeight);
	}
	pwin.focus();
}

