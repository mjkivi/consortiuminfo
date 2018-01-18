function getDocumentDomain() {
  var d = document.domain;
  if(d.indexOf(".") > -1) {
    var end = d.substring(d.lastIndexOf("."), d.length);
	d = d.substring(0, d.lastIndexOf("."));
	d = d.substring(d.lastIndexOf(".") + 1, d.length);
	d = d + end;
  }
  return d;
}

function getDocumentCookie(name) {
  var dcookie = document.cookie; 
  var cname = name + "=";
  var clen = dcookie.length;
  var cbegin = 0;
  var hasempty = 0;
  while(cbegin < clen) {
    var vbegin = cbegin + cname.length;
    if(dcookie.substring(cbegin, vbegin) == cname) { 
      var vend = dcookie.indexOf(";", vbegin);
      if(vend == -1)
        vend = clen;
      if(vbegin == vend)
        ++hasempty;
      else
        return unescape(dcookie.substring(vbegin, vend));
    }
    cbegin = dcookie.indexOf(" ", cbegin) + 1;
    if(cbegin == 0)
      break;
  }
  if(hasempty > 0)
    return "";
  else
    return null;
}

function deviceCookie() {
  return "adtoken"
}

function deviceId() {
   var name = deviceCookie();
   var value = getDocumentCookie(name);
   if (value == null || value == "" || value == "undefined")
     value = "";
   return value;
}

function deviceSignature() {
   return jsonSignature();
}