/** CHA23-Begin-SMS.003 & SMS.019
			Created/Modified by:    Mohammad Jaffer
			Created/Modified Date:  10-Apr-2003
			Description:  javascript function for spawning of secure window 
			History:

				Created/Modified by		Date  	Description
				Unmesh				06-July-2005 javascript function for spawning of secure window which takes the full screen	
**/

var SecureWinHandle = null;
var SecureWinCloseAlertMessage = "Closing Parent Window will close the existing Dedicated Messaging Window";
function openSecureWin( secureWinURL )
{
    	if ( secureWinURL == null  ||  secureWinURL == ""  ||   secureWinURL == "undefined")
   	{    		//alert("secureWinURL" + secureWinURL);
    	}
    	else
    	{
		<!-- CHA23 - SMS - BEGIN - Change done by Ravi to fix TR # 4564 - 07/09/2003 -->

    		if(document.layers)
    		{
			SecureWinHandle = window.open(secureWinURL,'SecureMessagingWindow','width=650,height=500,screenX=150,screen=150,top=150,left=150,scrollbars=yes');
		}
		else {
			SecureWinHandle = window.open(secureWinURL,'SecureMessagingWindow','width=636,height=500,screenX=150,screen=150,top=150,left=150,scrollbars=yes');
		}
	
		// SecureWinHandle = 	window.open(secureWinURL,'SecureMessagingWindow','width=636,height=500,screenX=150,screen=150,top=150,left=150,scrollbars=yes'); 

		<!-- CHA23 - SMS - END - Change done by Ravi to fix TR # 4564 - 07/09/2003 -->


		SecureWinHandle.focus();
    	}
    
}

function openFullWindow( secureWinURL )
{
    	if ( secureWinURL == null  ||  secureWinURL == ""  ||   secureWinURL == "undefined")
   	{    		//alert("secureWinURL" + secureWinURL);
    	}
    	else
    	{
		<!-- CHA23 - SMS - BEGIN - Change done by Ravi to fix TR # 4564 - 07/09/2003 -->

    		if(document.layers)
    		{
			SecureWinHandle = window.open(secureWinURL,'SecureMessagingWindow','width='+screen.width+',height='+screen.height+',screenX=0,screen=0,top=0,left=0,scrollbars=yes,resizable=yes');
		}
		else {
			SecureWinHandle = window.open(secureWinURL,'SecureMessagingWindow','width='+screen.width+',height='+screen.height+',screenX=0,screen=0,top=0,left=0,scrollbars=yes,resizable=yes');
		}
	
		// SecureWinHandle = 	window.open(secureWinURL,'SecureMessagingWindow','width=636,height=500,screenX=150,screen=150,top=150,left=150,scrollbars=yes'); 

		<!-- CHA23 - SMS - END - Change done by Ravi to fix TR # 4564 - 07/09/2003 -->


		SecureWinHandle.focus();
    	}
    
}

function openNewWindow( secureWinURL )
{
    	if ( secureWinURL == null  ||  secureWinURL == ""  ||   secureWinURL == "undefined")
   	{    		//alert("secureWinURL" + secureWinURL);
    	}
    	else
    	{
		<!-- CHA23 - SMS - BEGIN - Change done by Ravi to fix TR # 4564 - 07/09/2003 -->

    		if(document.layers)
    		{
			SecureWinHandle = window.open(secureWinURL,'SecureMessagingWindow','width=650,height=500,screenX=150,screen=150,top=150,left=150,scrollbars=yes,resizable=yes');
		}
		else {
			SecureWinHandle = window.open(secureWinURL,'SecureMessagingWindow','width=636,height=500,screenX=150,screen=150,top=150,left=150,scrollbars=yes,resizable=yes');
		}
	
		// SecureWinHandle = 	window.open(secureWinURL,'SecureMessagingWindow','width=636,height=500,screenX=150,screen=150,top=150,left=150,scrollbars=yes'); 

		<!-- CHA23 - SMS - END - Change done by Ravi to fix TR # 4564 - 07/09/2003 -->


		SecureWinHandle.focus();
    	}
    
}

/** CHA23-END-SMS.003 & SMS.019 **/

