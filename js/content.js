// string to remove
var extraPart = "_steps";

// string to add

/**
 * Based on the boolean, changes the links
 */
function updateLinks(ltermOnOff){
	changeElemsWithOnClickFunction("", extraPart, ltermOnOff);
}

/** This functions first looks for all elements that have an onclick event
 	
 	Just ignores all elements with specified class
 	
 	if lremove=true
 		then remove that "extra" portion
	else
		add that "extra" portion before the file extension
		
		
**/
function changeElemsWithOnClickFunction(ignoreClass, extra, lremove){
	var allElements = document.getElementsByTagName('*');
	for ( var i = 0; i<allElements.length; i++ ) {
	    if ( allElements[i].className !== ignoreClass ) {
	        continue;
	    }
	    if ( typeof allElements[i].onclick === 'function' ) {
	        // do something with the element here
	        var link = String(allElements[i].onclick);
	        
	        if (lremove){
	        	// get the extension
	        	var ext = getExtension(link);
	        	
	        	// remove the extra section
	        	link = removeLinkPart(link, extra+ext);
	        	
	        	// add the extension back
	        	link += ext;
	        	
	        	
	        } else {
	        	// add the part
	        	link = addLinkPart(link, extra);
	        }
	        
	        // update the onclick
	        allElements[i].onclick = link;
	    }
	}
} 


/**
 * Removes the part specified in the link 
 */
function removeLinkPart(link, extra){
	// variable to store the result
	var result = link;
	
	// check if the extra section exists
	var pos = link.indexOf(extra);
	
	// if extra section exists remove it
	if (pos>0){
		// string before the extra section
		var before = link.substring(0, pos);
		
		// string after the extra section
		var after = link.substring(pos);
		
		// combine the before and after
		result = before + after;
	}
	
	// return the result
	return result;
}

/**
 * Adds the part specified in the link right before the extension,
 * only if it has an extension
 */
function addLinkPart(link, extra){
	// variable to store the result
	var result = link;
	
	// get the extension of the link
	var ext = getExtension(link);
	
	// if it has an extension
	if (ext > 0){
		// remove the extenstion from the string
		result = link.substring(0, link.indexOf("."));
		
		// add the extra portion + the extension of the original links
		result += extra + ext;	
	}
	
	// return the result
	return result;
}

/*
 * Gets the extension of the specified link
 * 
 * ex: welcome.php
 * 
 * returns .php
 */
function getExtension(link){	
	return link.subtring(link.indexOf("."));
}
