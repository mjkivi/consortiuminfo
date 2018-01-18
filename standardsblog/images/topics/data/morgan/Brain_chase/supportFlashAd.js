// Required for Plug-in Detection
// Major version of Flash required
var requiredMajorVersion = 5; //5
// Minor version of Flash required
var requiredMinorVersion = 0;
// Minor version of Flash required
var requiredRevision = 0;
// the version of javascript supported
var jsVersion = 1.0;

// Specific to Our Solution
var clickthroughURL = new Array();
var weblink = new Array();
var flashCount = 0;
var flashChecked = false;

function clickthrough(flashFile)
	{
		var u = clickthroughURL[flashFile];
		var rCms = /popunder=cms/;
		var rChase = /popunder=chase/;
		var popUnderUrl = "";
		if (u.search(rChase) >= 0) { 
				popUnderUrl = "https://resources.chase.com/MyAccounts.aspx";
			 }
		if (u.search(rCms) >= 0) { 
				popUnderUrl = "https://resources.cardmemberservices.com/MyAccounts.aspx" 
			}
		if (weblink[flashFile])
			{
				// open weblinking pop-up
//***********NEED TO CHANGE**********
				if (popUnderUrl != "") {
					window.location = popUnderUrl;
					window.open(clickthroughURL[flashFile],'','width=800, height=600, resizable=yes, menubar=yes, toolbar=yes');
					}
				else {
					window.location = clickthroughURL[flashFile];  
					}
			}
		else
			{
				if (popUnderUrl != "") {
					window.location = popUnderUrl;
					window.open(clickthroughURL[flashFile],'','width=800, height=600, resizable=yes, menubar=yes, toolbar=yes');
					}
				else {
					window.location = clickthroughURL[flashFile];  
					}
			}
	}



// Detect Client Browser type
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
jsVersion = 1.1;
// JavaScript helper required to detect Flash Player PlugIn version information
function JSGetSwfVer(i){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
      		var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			descArray = flashDescription.split(" ");
			tempArrayMajor = descArray[2].split(".");
			versionMajor = tempArrayMajor[0];
			versionMinor = tempArrayMajor[1];
			if ( descArray[3] != "" ) {
				tempArrayMinor = descArray[3].split("r");
			} else {
				tempArrayMinor = descArray[4].split("r");
			}
      		versionRevision = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
            flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
      	} else {
			flashVer = -1;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	// Can't detect in all other cases
	else {
		
		flashVer = -1;
	}
	return flashVer;
} 
// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision) 
{
	flashChecked = true;
 	reqVer = parseFloat(reqMajorVer + "." + reqRevision);
   	// loop backwards through the versions until we find the newest version	
	for (i=25;i>0;i--) {	
		if (isIE && isWin && !isOpera) {
			versionStr = VBGetSwfVer(i);
		} else {
			versionStr = JSGetSwfVer(i);		
		}
		if (versionStr == -1 ) { 
			return false;
		} else if (versionStr != 0) {
			if(isIE && isWin && !isOpera) {
				tempArray         = versionStr.split(" ");
				tempString        = tempArray[1];
				versionArray      = tempString .split(",");				
			} else {
				versionArray      = versionStr.split(".");
			}
			versionMajor      = versionArray[0];
			versionMinor      = versionArray[1];
			versionRevision   = versionArray[2];
			
			versionString     = versionMajor + "." + versionRevision;   // 7.0r24 == 7.24
			versionNum        = parseFloat(versionString);
        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
			if ( (versionMajor > reqMajorVer) && (versionNum >= reqVer) ) {
				return true;
			} else {
				return ((versionNum >= reqVer && versionMinor >= reqMinorVer) ? true : false );	
			}
		}
	}	
}

function writeSWF() {
	    var oeTags = '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'
	    + 'width="' + flashWidth + '" height="' + flashHeight + '">'
	    + '<param name="movie" value="' + flashLocation + '" /><param name="quality" value="high" /><param name="bgcolor" value="#FFFFFF" />'
	    + '<embed src="' + flashLocation + '" quality="high" bgcolor="#FFFFFF" '
	    + 'width="' + flashWidth + '" height="' + flashHeight + '" name="detectiontest" aligh="middle"'
	    + 'play="true"'
	    + 'loop="false"'
	    + 'quality="high"'
	    + 'allowScriptAccess="sameDomain"'
	    + 'type="application/x-shockwave-flash">'
	    + '<\/embed>'
	    + '<\/object>'
		+ '<\/div>';
	    document.write(oeTags);   // embed the Flash Content SWF when all tests are passed
}

document.write('<scr'+'ipt language="VBScript" type="text/vbscript" src="/content/ecpweb/sso/document/IEdetection.vbs"></scr'+'ipt>');
