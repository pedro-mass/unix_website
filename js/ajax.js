// http://www.switchonthecode.com/tutorials/simple-ajax-php-and-javascript

// store the name of the side bar div
var sidebarDivID = "sidebar_content";
// store the name of the main content div
var mainContentDivID = "content_target_inner";
// stores the terminal link's id
var termLinkID = "onOffTermLink";

// check to see if the baseURL variable is set
// if not, set it
// var baseURL = "/409_unix_site/";

/*
 * Swaps the "content_target_inner" div with the mainContentPage
 */
function swapMain(pageName){
	//removeTerminal();	

	swapElem(pageName, mainContentDivID, false);

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
	// swap the page
	// swapElem(pageName, mainContentDivID, false);
	//includeTerminal();
	
	// swap the page
	swapElem(pageName, mainContentDivID, true);
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
// lterm should only be true, if includeTerminal() is calling this function
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
	// Make use of a baseURL to enforce root relational links
	
	// Check if the baseURL is undefined
	if (typeof baseURL=="undefined"){
		// setup a default
		baseURL = "/";
	}

  xmlHttp.open("GET", baseURL+"load_page.php"+"?"+params, true); 
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
  
  // if they want the terminal
  if(lterm){
	// include it
  	includeTerminal();
  } else{
	// else remove it
	removeTerminal();
  }
}




/////////////////////////////////////////////////////////////////////////////////////
/**
 * @author drom296
 */

// Store the name of the terminal div
var terminalDivContainerID = "terminal";
var terminalDivID = "termDiv";

/**
 * Adds the terminal parts
 */
function includeTerminal(){
		// get the terminal div
	var terminalDiv = document.getElementById(terminalDivContainerID);
	
	var actualTerminal = document.getElementById(terminalDivID);
	
	// Check if terminal div existed
	if (terminalDiv && !actualTerminal){
		// add The term div html
		terminalDiv.innerHTML = "<div id="+terminalDivID+"></div>";
	}
	
	// open the terminal
	termOpen();
}

/*
 * Removes the terminal parts
 */
function removeTerminal(){
	// get the terminal div
	var terminalDiv = document.getElementById(terminalDivContainerID);
	
	var actualTerminal = document.getElementById(terminalDivID);
	
	// Check if terminal div existed
	if (terminalDiv && actualTerminal){
		// remove its html
		terminalDiv.innerHTML = "<p></p>";
	}
}



