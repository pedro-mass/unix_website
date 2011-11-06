// http://www.switchonthecode.com/tutorials/simple-ajax-php-and-javascript

// store the name of the side bar div
var sidebarDivID = "sidebar_content";
// store the name of the main content div
var mainContentDivID = "content_target_inner";
// stores the terminal link's id
var termLinkID = "onOffTermLink";

/*
 * Swaps the "content_target_inner" div with the mainContentPage
 */
function swapMain(pageName){
	// // remove the terminal parts, if not there already
	// if (terminalLinkExists()){
		// remove terminal
		removeTerminal();	
	// }
	
	swapElem(pageName, mainContentDivID, false);
	
	// updatePageVars(pageName, "");
}

/*
 * Swaps the "content_target_inner" div with the mainContentPage
 * Swaps teh "sidebar_content" div
 */
function swapMultiple(mainContentPage, sidebarTab){
	swapMain(mainContentPage);
	swapElem(sidebarTab, sidebarDivID, false);
}

/*
 * Swaps the "content_target_inner" div with the mainContentPage
 */
function swapMainTerm(pageName){
	// include the terminal parts, if not there already
	// if (!terminalLinkExists()){
		// // include terminal
	// includeTerminal();	
	// }
	
	// store the page to swap
	var page = pageName;
	
	// check if terminal is on
	// if (isTerminalShowing()){
		// // change the page to swap
		// page = pageStepsName
	// } else {
// 		
	// }
	
	// swap the page
	swapElem(page, mainContentDivID, true);
	
	// update page vars
	// updatePageVars(pageName, pageStepsName);
}

/*
 * Swaps the "content_target_inner" div with the mainContentPage
 * Swaps teh "sidebar_content" div
 */
function swapMultipleTerm(mainContentPage, sidebarTab){
	swapMainTerm(mainContentPage);
	swapElem(sidebarTab, sidebarDivID, false);
}

// makes a request to load the specified page in the specified elementId.
function swapElem(pageName, elementId, lterm){
  var xmlHttp = getXMLHttp();
  
  xmlHttp.onreadystatechange = function()
  {
    if(xmlHttp.readyState == 4)
    {
      handleResponse(xmlHttp.responseText, elementId, lterm);
    }
  }

  // to pass arguments to php page
  // http://www.openjs.com/articles/ajax_xmlhttp_using_post.php
  
  var params ="page="+pageName;
  xmlHttp.open("GET", "load_page.php"+"?"+params, true); 
  xmlHttp.send(null);
}

function getXMLHttp(){
  var xmlHttp

  try
  {
    //Firefox, Opera 8.0+, Safari
    xmlHttp = new XMLHttpRequest();
  }
  catch(e)
  {
    //Internet Explorer
    try
    {
      xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e)
    {
      try
      {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e)
      {
        alert("Your browser does not support AJAX!")
        return false;
      }
    }
  }
  return xmlHttp;
}

// Loads the response from the server in the specified elementId
// Also strips out the a href 
function handleResponse(response, elementId, lterm){
  document.getElementById(elementId).innerHTML = response;
  stripATags();
  
  if(lterm){
  	includeTerminal();
  }
}
