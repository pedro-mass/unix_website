function listOpen(itemID, testId, size)
{
	document.getElementById(itemID).style.height = size;
	document.getElementById(testId).onclick=function(){return listClose(itemID, testId, size)};
}
function listClose(itemID, testId, size)
{
	document.getElementById(itemID).style.height = "40px";
	document.getElementById(testId).onclick=function(){return listOpen(itemID, testId, size)};
}