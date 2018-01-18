function TodayDate()
{
	var Today=new Date();
	var ThisDay = Today.getDay();
	var ThisDayName = new Array();
		ThisDayName[0] = "Sunday";
		ThisDayName[1] = "Monday";
		ThisDayName[2] = "Tuesday";
		ThisDayName[3] = "Wednesday";
		ThisDayName[4] = "Thursday";
		ThisDayName[5] = "Friday";
		ThisDayName[6] = "Saturday";
	var ThisDate=Today.getDate();
	var ThisMonth=Today.getMonth()+1;
	var ThisYear=Today.getYear();
    if(ThisYear <1000)
        ThisYear+=1900;
        
	function MonthText (ThisMonth)
	{
		var aMonth=new Array();
		aMonth[1]="January";
		aMonth[2]="February";
		aMonth[3]="March";
		aMonth[4]="April";
		aMonth[5]="May";
		aMonth[6]="June";
		aMonth[7]="July";
		aMonth[8]="August";
		aMonth[9]="September";
		aMonth[10]="October";
		aMonth[11]="November";
		aMonth[12]="December";
		return aMonth[ThisMonth];
	}
	var thisMonthName=MonthText(ThisMonth);
	function DayDisplay (ThisDate)
	{
		var Day=new Array();
		Day[1]="01";
		Day[2]="02";
		Day[3]="03";
		Day[4]="04";
		Day[5]="05";
		Day[6]="06";
		Day[7]="07";
		Day[8]="08";
		Day[9]="09";
		Day[10]="10";
		Day[11]="11";
		Day[12]="12";
		Day[13]="13";
		Day[14]="14";
		Day[15]="15";
		Day[16]="16";
		Day[17]="17";
		Day[18]="18";
		Day[19]="19";
		Day[20]="20";
		Day[21]="21";
		Day[22]="22";
		Day[23]="23";
		Day[24]="24";
		Day[25]="25";
		Day[26]="26";
		Day[27]="27";
		Day[28]="28";
		Day[29]="29";
		Day[30]="30";
		Day[31]="31";
		return Day[ThisDate];
	}
	var DayValue=DayDisplay(ThisDate);
	document.write("<p align='right' style='margin-bottom:5; margin-top:5; margin-right:14'><b>"+ThisDayName[ThisDay]+", "+thisMonthName+" "+DayValue+", "+ThisYear+"</b></p>");
}
