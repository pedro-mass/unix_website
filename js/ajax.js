// http://www.switchonthecode.com/tutorials/simple-ajax-php-and-javascript

function addMultiple(mainContentPage, sidebarTab){
	swapMain(mainContentPage);
	makeRequest(sidebarTab,'sidebar_content', false);
}

function swapMain(pageName){
	makeRequest(pageName, 'content_target', false);
} 

// makes a request to load the specified page in the specified elementId.
// if lterm is true, then we also load in the terminal
function makeRequest(pageName, elementId, lterm){
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
// If lterm is true, it also loads in the terminal
// Also strips out the a href 
function handleResponse(response, elementId, lterm){
  document.getElementById(elementId).innerHTML = response;
  
  if (lterm){
	termOpen();
  }
  
  stripATags();
}
