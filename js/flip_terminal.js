// // stores the terminal link's id
// var termLinkID = "onOffTermLink";
// 
// // store info as array
// var termInfo = new Array(2);
// 
// // This makes it two dimensional
// termInfo[0] = new Array(2);
// termInfo[1] = new Array(2);
// 
// 
// // stores the open command for the terminal
// termInfo[0][0] = "termOpen();";
// 
// // Stores the close command for the terminal
// termInfo[1][0] = "termClose();";
// 
// // value for open terminal link
// termInfo[0][1] = "open terminal";
// 
// // value for clse terminal link
// termInfo[1][1] = "close terminal";
// 
// 
// // /**
 // // * If the terminal is on, the flip function
 // // * 		-changes the a tag to say "Open Terminal"
 // // * 		-swaps the onclick pages to the step tutorials
 // // * 		-changes the onclick to "open_term()"
 // // * 
 // // * Vice versa if its off
 // // */
// // function flipTermLink(linkObject){
	// // var link = linkObject;
// // 	
	// // // store the current text value for the link
	// // var aText = "";
// // 	
	// // // get the aText value for the link
	// // if (link.innerHTML){ 
		// // aText =	link.innerHTML; 
	// // } else if (link.innertext) { 
		// // aText =	link.innertext; 
	// // }
// // 	
	// // // determine what info to display
	// // // get current value
	// // var val = checkOpenOrCloseTerm(aText);
// // 	
	// // // check if valid output
	// // if (val >= 0){
		// // // perform function
		// // eval(termInfo[val][0]);
// // 		
		// // // flip the tag
		// // val = (val+1)% termInfo.length;
// // 		
		// // // change the tag
		// // if (link.innerHTML){ 
			// // link.innerHTML = termInfo[val][1]; 
		// // } else if (link.innertext) { 
			// // link.innertext = termInfo[val][1]; 
		// // }	
// // 		
		// // // change its value
		// // link.value = val;
// // 		
		// // // change to different page
		// // if (val == 1){
			// // // Swap for page steps
			// // swapElem(curPageSteps, mainContentDivID);
// // 			
		// // } else if (val == 0){
			// // // swap for tutorialized page
			// // swapElem(curPage, mainContentDivID);
		// // }
	// // }
// // }
// 
// /* Checks the value of the link
 // * Returns 0 if its an open term, 1 if its close, -1 otherwise
 // */
// function checkOpenOrCloseTerm(label){
	// var value = -1;
// 	
	// // check if its open terminal
	// if (label === termInfo[0][1]){
		// value = 0;
	// } else if (label === termInfo[1][1]){
		// value = 1;	
	// }
// 	
	// return value
// }
// 
// /*
 // * Checks if the terminal is showing by looking at the controls value
 // * returns the links value:
 // * 		1	if its showing
 // * 		0	if its not
 // */
// function isTerminalShowing(){
	// // store the result
	// var result = 0;
// 	
	// // get the terminal link element
	// var termLink = getTerminalLinkElement(); 
// 	
	// // Check if it existed
	// if (termLink){
		// // get its value
		// result = termLink.value;
	// }
// 
	// return result;
// }
// 
// /**
 // * Returns the terminal link element
 // */
// function getTerminalLinkElement(){
	// return document.getElementById(termLinkID); 
// }
// 
// /*
 // * Returns true if Terminal Link is showing
 // */
// function terminalLinkExists(){
	// var result = false;
// 	
	// var termLink = getTerminalLinkElement();
// 	
	// if (termLink){
		// result = true;	
	// }
// 	
	// return result;
// }
