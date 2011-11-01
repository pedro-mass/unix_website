// Updates just the page content
function loadTerm(pageName){
	swapMain2(pageName,sidebarTab, true);
}

// updates the page content as well as the side bar content
function loadTermMult(pageName, sidebarTab){
	addMultiple2(pageName,sidebarTab, true);
}

function addMultiple2(mainContentPage, sidebarTab, lterm){
	swapMain2(mainContentPage, lterm);
	makeRequest(sidebarTab,'sidebar_content', false);
}

function swapMain2(pageName, lterm){
	makeRequest(pageName, 'content_target', lterm);
} 