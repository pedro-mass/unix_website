function stripATags(){
	// get all a tags
	var nodes = document.getElementsByTagName("A");
	
	// loop thru them
	for(var i = 0, aLen = nodes.length; i < aLen;i++){
		var iNode = nodes[i];
	
		// check if one of the base pages: welcome.php or unix.php
		if (isBasePage(iNode.href)){
			// since it is, strip the hrefs
			iNode.href="#";
		}
	}
}

// Checks to see if the base page was passed in
// which is welcome.php or unix.php
function isBasePage(href){
	// store the pages we want to check
	var basePages = new Array("WELCOME.PHP","UNIX.PHP");
	
	// store the result
	var lresult = false;
	
	for (var i = 0, aLen = basePages.length; i < aLen; i++){
		// check to see if the base page is anywhere in the string
		if (href.toUpperCase().indexOf(basePages[i])>0){
			// since it is return true and break
			lresult = true;
			break;
		}
	}
	
	return lresult;
}