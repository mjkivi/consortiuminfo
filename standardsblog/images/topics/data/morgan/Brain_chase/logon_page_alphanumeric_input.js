//------------------------------------------------------------------
var pageLoaded=false;
var userKeys=false;

//------------------------------------------------------------------
function init()
{
	/*
	if (!isMac())
	{
		if (parseFloat(navigator.appVersion)>=4)
		{
			document.onkeypress = processKey;
			if (navigator.appName=="Netscape")
			{
				document.captureEvents(Event.KEYPRESS);
			}

		}
	}
	*/
	window.focus();
	for (var i=0; i<document.forms.length; i++)
	{
		for (var j=0; j<document.forms[i].elements.length; j++)
		{
			if (document.forms[i].elements[j].type=="text" || document.forms[i].elements[j].type=="textarea")
			{
				if (!userKeys)
				{
					document.forms[i].elements[j].focus();
				}
				break;
			}
		}
	}
	pageLoaded=true;
}

//------------------------------------------------------------------
function isMac()
{
	if (navigator.appVersion.indexOf("PPC")!=-1 || navigator.appVersion.indexOf("Mac")!=-1)
	{
		return true;
	}
	else
	{
		return false;
	}
}

//------------------------------------------------------------------
function processKey(e)
{
	var eKey, eName
	if (navigator.appName=="Netscape")
	{
		eKey=e.which;
		eName=e.target.name;
	}
	else
	{
		eKey=window.event.keyCode;
		eName=window.event.srcElement.name;
	}
	//window.status=eKey+"    "+eName;
	if (eKey==13)
	{
		return true;
	}
	AlphaNumericOnly="usr_name_input-usr_password_input-Id-Password-VerifyPassword-otherID";
	if (AlphaNumericOnly.indexOf(eName) >= 0)
	{
		if ((eKey<48 || eKey>57) && eKey !=0  && eKey !=8 && !((eKey>=65 && eKey<=90) || (eKey>=97 && eKey<=122) || eKey ==8))
		{
			return false;
		}
	}
	userKeys=true;
	return true;
}

//------------------------------------------------------------------
function checkInput(formValue)
{
	var alphaNumericStr = "abcdefghijklmnopqrstuvwxyz0123456789"
	retVal = true;
	for (i=0;i<formValue.length;i++)
	{
		if (!(alphaNumericStr.indexOf( formValue.substring(i,i+1).toLowerCase() ) >= 0))
		{
			retVal = false;
		}
	}
	return retVal;
}
//-------------------------------------------------------------
function checkInputPwResetAns(formValue)
{
	var alphaNumericStr = "abcdefghijklmnopqrstuvwxyz0123456789 '.,-"
	retVal = true;
	for (i=0;i<formValue.length;i++)
	{
		if (!(alphaNumericStr.indexOf( formValue.substring(i,i+1).toLowerCase() ) >= 0))
		{
			retVal = false;
		}
	}
	return retVal;
}
//------------------------------------------------------------------
function check_all_fields()
{
    //var username = document[getNetuiTagName('usernameform', this)][getNetuiTagName('usr_name_input', this)];
    //var password = document[getNetuiTagName('passwordform', this)][getNetuiTagName('usr_password_input', this)];

    var username = document[getNetuiTagName('loginform', this)][getNetuiTagName('usr_name', this)];
    var password = document[getNetuiTagName('loginform', this)][getNetuiTagName('usr_password', this)];

	if ( (username.value.length<1) || (password.value.length<1) )
	{
		alert("Error Message LO001:\nPlease enter both your User ID and Password.");
	}
	else if ( !checkInput(username.value) || !checkInput(password.value) )
	{
		alert("Error Message LO011:\nThe User ID and/or Password you entered is not valid.\nYour User ID and Password must consist only of letters and numbers.");
	}
	else
	{
		document[getNetuiTagName('loginform', this)].submit();
		//if (window.name=="popupWin") self.close();
        //Added timeout for Netscape  6.2 bug - Anish
        if (window.name=="popupWin")
        {
            window.setTimeout("self.close()",1000);
        }
	}
	return false;
}

//------------------------------------------------------------------
function insertValues(usrFrm, passFrm, trgtFrm)
{
	//trgtFrm[getNetuiTagName('usr_name', this)].value = usrFrm[getNetuiTagName('usr_name_input', usrFrm)].value.toLowerCase();
	trgtFrm[getNetuiTagName('usr_name', this)].value = usrFrm[getNetuiTagName('usr_name_input', this)].value.toLowerCase();
	//trgtFrm[getNetuiTagName('usr_password', this)].value = passFrm[getNetuiTagName('usr_password_input', passFrm)].value.toLowerCase();
	trgtFrm[getNetuiTagName('usr_password',this)].value = passFrm[getNetuiTagName('usr_password_input', this)].value.toLowerCase();
}

//------------------------------------------------------------------
function setFocus()
{
	//document.usernameform.usr_name_input.focus();
    document[getNetuiTagName('usernameform', this)][getNetuiTagName('usr_name_input', this)].focus();
}

//------------------------------------------------------------------
function breakFrames()
{
  if (top.location != location)
    top.location.href = document.location.href ;
}