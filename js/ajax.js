// http://www.switchonthecode.com/tutorials/simple-ajax-php-and-javascript

function swapMultiple(mainContentPage, sidebarTab){
	swapMain(mainContentPage);
	swapElem(sidebarTab,'sidebar_content');
}

function swapMain(pageName){
	swapElem(pageName, 'content_target_inner');
} 

// makes a request to load the specified page in the specified elementId.
function swapElem(pageName, elementId){
  var xmlHttp = getXMLHttp();
  
  xmlHttp.onreadystatechange = function()
  {
    if(xmlHttp.readyState == 4)
    {
      handleResponse(xmlHttp.responseText, elementId);
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
function handleResponse(response, elementId){
  document.getElementById(elementId).innerHTML = response;
  stripATags();
}
