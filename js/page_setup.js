/**
 * @author drom296
 */

// Store the name of the terminal div
var terminalDivContainerID = "terminal";
var terminalDivID = "termDiv";

// store the id div of the actual terminal
var terminalID = "termDiv";

// store the start page
var startPage = "page_parts/home/home.php";

// Store the current page
var curPage = "";

// store the current pageSteps
var curPageSteps = "";

/**
 * Returns functions needed on page setup
 */
function page_init(){
	// strip the a tags from having links to main pages
	stripATags();
	
	// Update the page vars to be the home page
	// updatePageVars(startPage, "");
	
}

// 
// function updatePageVars(currentPage, currentPageSteps){
	// curPage = currentPage;
	// curPageSteps = currentPageSteps; 
// }


/**
 * Adds the terminal parts
 */
function includeTerminal(){
	if (!document.getElementById(terminalDivID)){
		swapElem('page_parts/terminal.php',terminalDivContainerID);
		termOpen();
	}
	
	// Show the terminal
	// Terminal class sets viaible to 1, but we want to change
	// The display rule as well
	// Changing display does not work, causes other things to break
	// document.getElementById(terminalID).style = "display: block;"
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
	
	// Show the terminal
	// Terminal class sets viaible to 1, but we want to change
	// The display rule as well
	// Changing display does not work, causes other things to break
	// document.getElementById(terminalID).style = "display: block;"
}
