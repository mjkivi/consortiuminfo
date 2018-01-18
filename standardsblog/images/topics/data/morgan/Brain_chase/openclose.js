function ScottsOpenClose(changeStatusTo, set, rows)
{
	if (changeStatusTo == 'close')
	{
		var state1 = 'block';
		var state2 = 'none';
	}
	else
	{
		var state1 = 'none';
		var state2 = 'block';
	}
	eval("document.all.row" + set + "Closed.style.display = '" + state1 + "';");
	eval("document.all.row" + set + "Open.style.display = '" + state2 + "';");
	for (x=1; x<= rows; x++)
	{
		eval("document.all.row" + set + x + ".style.display = '" + state2 + "';");
	}
}