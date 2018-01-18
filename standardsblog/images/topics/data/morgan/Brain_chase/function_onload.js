function loadPageDetails(pageName)
{
  // NOTE:  add if condition specifying the pagename and call your 
  // specific funtion
  alert(pageName);
  if(pageName=='signup')
  {
    loadSignup();
  }
  else if(pageName=='page_logon')
  {
    init();
  }
  else if(pageName=='sso_manage_profile_view.jsp')
  {
      serverAlert();
  }
}


// add the function specific to the page
function loadSignup()
{}

function addLoadEvent(func) 
{
  var oldonload = window.onload;
  if (typeof window.onload != 'function') 
  { window.onload = func; } 
  else
  {
    window.onload = function() 
    {
      oldonload();
      func();
    }
  }
}