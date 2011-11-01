function listOpen(itemID, testId)
{
	document.getElementById(itemID).style.height = "150px";
	document.getElementById(testId).onclick=function(){return listClose(itemID, testId)};
}
function listClose(itemID, testId)
{
	document.getElementById(itemID).style.height = "50px";
	document.getElementById(testId).onclick=function(){return listOpen(itemID, testId)};
}