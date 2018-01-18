/**
  * Java Script for the Google search integration in the marketing site
 **********************************************************
 * Version	Author		  Date		    Description
 **********************************************************
 *  1.0     Kanwaldeep Singh   15-Dec-05   Inital Draft
  **********************************************************
*/


/****************************************************************/
/* Functional methods for executing the search                  */
/****************************************************************/
//method to execute the search
function doSearch(text) 
{
  var url = "/ccp/index.jsp?pg_name=ccpmapp/cms/shared/page/cms_search&q=";
  text = trimSpace(text);	
  if(text == '' || text == ' ') 
  {
    url += "&emptyQueryText=true";
    window.location.href = url;
    return false;
  }
  url += removeSpecialChar(encodeAMP(encodePLUS(encodeHASH(text))));
  url +="&emptyQueryText=false";
  window.location.href = url;
  return false;
}

//method to execute the search tips
function doSearchTips()
{
  var url = "/ccp/index.jsp?pg_name=ccpmapp/cms/shared/page/search_tips";
	window.location.href = url;
	return false;
}

function doHideSummary(status)
{
  var url = "/ccp/index.jsp?pg_name=ccpmapp/cms/shared/page/cms_search&emptyQueryText=false&hs="+status+"";
  window.location.href = url;
  return false;
}

function doNarrowSearch() 
{
  var url = "/ccp/index.jsp?pg_name=ccpmapp/cms/shared/page/cms_search&emptyQueryText=false&doNarrowSearch=true&ns=true";
  window.location.href = url;
  return false;
}  

function navigateToPage(pageurl) 
{
  var url = "/ccp/index.jsp?pg_name=ccpmapp/cms/shared/page/cms_search&emptyQueryText=false&";
  url += pageurl;
  window.location.href = url;
  return false;
}

function navigateCreditCard(creditCardUrl)
{
  var url = "/ccp/index.jsp?pg_name=ccpmapp/cms/shared/page/cms_search&emptyQueryText=false&";
  url += creditCardUrl+"&currentSite=cms";
  window.location.href = url;
  return false;
}

function navigateOtherCreditCard(otherCreditCardUrl) 
{
  var url = "/ccp/index.jsp?pg_name=ccpmapp/cms/shared/page/cms_search&emptyQueryText=false&";
  url += otherCreditCardUrl+"&currentSite=dummy";
  window.location.href = url;
  return false;
}  

/****************************************************************/
/* Utility Methods for endcoing the special symbols in url      */
/****************************************************************/

// for trimming spaces
function trimSpace(searchText)
{
  var newSearchText = '';
  var spaceCounter = 0;
  for (var i = 0; i < searchText.length; i++)
  {
    if (searchText.charAt(i) == ' ')
    {
      spaceCounter++;
      if (spaceCounter > 1)
        continue;
      else
        newSearchText += searchText.charAt(i);
    }
    else
    {
      spaceCounter = 0;
      newSearchText += searchText.charAt(i);
    }
  }
  return newSearchText;
}

//Removing the Special character
function removeSpecialChar(searchText)
{
  var newSearchText = "";					
  for (var i = 0; i < searchText.length; i++)
  {
    if (searchText.charCodeAt(i) > 255)
      continue;
    newSearchText += searchText.charAt(i);			
  }
  return newSearchText;
}

//Encode the Ampersand Symbol ( '&' )
function encodeAMP(inString)
{
  var outString = "";
  for (var i=0; i<inString.length; i++)
  {
    if (inString.substring(i, i+1) == "&")
      outString += '%26';
    else
      outString += inString.substring(i, i+1);
  }
  return outString;
}

//Encode the Plus Symbol ( '+' )
function encodePLUS(inString)
{
  var outString = "";
  for (var i=0; i<inString.length; i++)
  {
    if (inString.substring(i, i+1) == "+")
      outString += '%2B';
    else
      outString += inString.substring(i, i+1);
  }
  return outString;
}	

//Encode the Hash Symbol ( '#' )
function encodeHASH(inString)
{
  var outString = "";
  for (var i=0; i<inString.length; i++)
  {
    if (inString.substring(i, i+1) == "#")
      outString += '%23';
    else
      outString += inString.substring(i, i+1);
  }
  return outString;
}

function bolOffSiteLink(gotoName,gotoURL){  
gotoName = escape(gotoName);
gotoURL = escape(gotoURL); 
var OffSitePopUpURL;
var leftOffset=0;
var topOffset=0;    
OffSitePopUpURL="/ccp/index.jsp?pg_name=ccpmapp/shared/assets/page/cmsOffsiteLink&";
if(screen.width){
if(screen.width < 800){
leftOffset=60;
topOffset=90;
}else{
if(screen.width>=800&&screen.width<1024){
leftOffset=160;
topOffset=134;
}else{
if(screen.width>=1024){
leftOffset=272;
topOffset=250;
}
}
}
}
var loadURL=OffSitePopUpURL+'site='+gotoName+'&url='+gotoURL;
var webLinkWin=window.open(loadURL,"weblinking",'width=550,height=375,left='+leftOffset+',top='+topOffset+',screenx='+leftOffset+',screeny='+topOffset+',resizable=no,scrollbars=yes,menubar=no');
webLinkWin.focus();
}
