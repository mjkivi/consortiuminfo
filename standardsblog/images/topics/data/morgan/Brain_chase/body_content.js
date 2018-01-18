function openClose2(valuePassed) 
{
  closeAll();
  getItem = "linkBox" + valuePassed + "closed";
  if(document.getElementById)
  {
    thisName = document.getElementById(getItem).style;
    thisName.display = "none";
    thisName.visibility = "hidden";
    getItem = "linkBox" + valuePassed + "open";
    thisName = document.getElementById(getItem).style;
    thisName.display = "block";
    thisName.visibility = "visible";
  }
}

function closeAll () 
{
  for (x=1; x<4; x++)
	{
		if(document.getElementById)
		{
      getItem = "linkBox" + x + "closed";
      thisName = document.getElementById(getItem).style;
      thisName.display = "block";
      thisName.visibility = "visible";
      getItem = "linkBox" + x + "open";
      thisName = document.getElementById(getItem).style;
      thisName.display = "none";
      thisName.visibility = "hidden";	
    }
  }
}

function altForProgressBar(){
	var imgWidth='100%';
	var imgHeight=(document.all)?'8px':'6px';
	if(document.step1){
		document.step1.style.width=imgWidth;
		document.step1.style.height=imgHeight;
	}
	if(document.step2){
		document.step2.style.width=imgWidth;
		document.step2.style.height=imgHeight;
	}
	if(document.step3){
		document.step3.style.width=imgWidth;
		document.step3.style.height=imgHeight;
	}
	if(document.step4){
		document.step4.style.width=imgWidth;
		document.step4.style.height=imgHeight;
	}
	if(document.step5){
		document.step5.style.width=imgWidth;
		document.step5.style.height=imgHeight;
	}
	if(document.step6){
		document.step6.style.width=imgWidth;
		document.step6.style.height=imgHeight;
	}
}