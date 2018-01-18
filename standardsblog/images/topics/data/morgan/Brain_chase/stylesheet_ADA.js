var expDays = 1825;
var exp = new Date(); 
exp.setTime(exp.getTime() + (expDays*24*60*60*1000));

function setStyle (name, value, exp) {  
var argv = setStyle.arguments;  
var argc = setStyle.arguments.length;  
var expires = (argc > 2) ? argv[2] : null;  
var path = (argc > 3) ? argv[3] : null;  
var domain = (argc > 4) ? argv[4] : null;  
var secure = (argc > 5) ? argv[5] : false;  
document.cookie = name + "=" + escape (value) + 
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) + 
((path == null) ? "" : ("; path=" + path)) +  
((domain == null) ? "" : ("; domain=" + domain)) +    
((secure == true) ? "; secure" : "");
document.location=this.location;
}

// following function is called by styleSheetReset
// styleSheetReset is triggerd by an onLoad event on the Home and Secure Landing pages
function resetStyle (name, value) {  
var argv = resetStyle.arguments;  
var argc = resetStyle.arguments.length;  
var expires = (argc > 2) ? argv[2] : null;  
var path = (argc > 3) ? argv[3] : null;  
var domain = (argc > 4) ? argv[4] : null;  
var secure = (argc > 5) ? argv[5] : false;  
document.cookie = name + "=" + escape (value) + 
((expires == null) ? "" : ("; expires=" + expires.toGMTString())) + 
((path == null) ? "" : ("; path=" + path)) +  
((domain == null) ? "" : ("; domain=" + domain)) +    
((secure == true) ? "; secure" : "");
}

function styleSheetTest()
{
	var styleSel = getStyle('stylePref');
	document.write (styleSel)

}

// following function used only by the page users selects presentation preference on
// it reads the cookie onLoad and places a check on the correct radio button control
function styleSheetPrefPage()
{
	var styleSel = getStyle('stylePref');
	if (styleSel != null) {
		switch (styleSel) {
			case 'sracc' :  url = 'style/chase_ADA_sracc.css'; document.style.stylechoice[0].checked=true;
					break;
			case 'basic' : 	url = 'style/chase_ADA.css'; document.style.stylechoice[1].checked=true;
				    break;
			case 'mdfnt' : 	url = 'style/chase_ADA_mdfnt.css'; document.style.stylechoice[2].checked=true;
				    break;
			case 'lgfnt' :  url = 'style/chase_ADA_lgfnt.css'; document.style.stylechoice[3].checked=true;
					break;
		}
	document.getElementById("styleLink").href = url;
	}

}

// following function used by Home and Secure Landing pages only
// it reads and resets the cookie
function styleSheetReset()
{
	var styleSel = getStyle('stylePref');
	if (styleSel != null) {
		switch (styleSel) {
			case 'basic' : 	url = 'style/chase_ADA.css'; resetStyle('stylePref', 'basic', exp);
				    break;
			case 'mdfnt' : 	url = 'style/chase_ADA_mdfnt.css'; resetStyle('stylePref', 'mdfnt', exp);
				    break;
			case 'lgfnt' :  url = 'style/chase_ADA_lgfnt.css'; resetStyle('stylePref', 'lgfnt', exp);
					break;
			case 'sracc' :  url = 'style/chase_ADA_sracc.css'; resetStyle('stylePref', 'sracc', exp);
					break;
		}
	document.getElementById("styleLink").href = url;
	}

}

// following function used by ALL pages except Home, Secure Landing, and page users selects 
// presentation preference on
// it only reads the cookie
function styleSheet()
{
	var styleSel = getStyle('stylePref');
	if (styleSel != null) {
		switch (styleSel) {
			case 'basic' : 	url = 'style/chase_ADA.css';
				    break;
			case 'mdfnt' : 	url = 'style/chase_ADA_mdfnt.css'; 
				    break;
			case 'lgfnt' :  url = 'style/chase_ADA_lgfnt.css';
					break;
			case 'sracc' :  url = 'style/chase_ADA_sracc.css';
					break;
		}
	document.getElementById("styleLink").href = url;
	}

}


function getCookieVal (offset) {  
var endstr = document.cookie.indexOf (";", offset);  
if (endstr == -1)    
endstr = document.cookie.length;  
return unescape(document.cookie.substring(offset, endstr));
}


function getStyle (name) {  
var arg = name + "=";  
var alen = arg.length;  
var clen = document.cookie.length;  
var i = 0;  
while (i < clen) {    
var j = i + alen;    
if (document.cookie.substring(i, j) == arg)      
return getCookieVal (j);    
i = document.cookie.indexOf(" ", i) + 1;    
if (i == 0) break;   
}  
return null;
}


function selectAcctAction(Obj)
{
	var styleSel = getStyle('stylePref');
	if (styleSel != null) {
		switch (styleSel) {
			case 'basic' : 	SelAct(Obj);
				    break;
			case 'mdfnt' : 	SelAct(Obj);
				    break;
			case 'lgfnt' :  SelAct(Obj);
					break;
			case 'sracc' :  SelActNone(Obj);
					break;
		}
	}
}


function SelAct(Obj)
{
	var SelLink=Obj.options[Obj.selectedIndex].value;
	eval("top.location='"+SelLink+"'");
}


function SelActNone(Obj)
{
}




