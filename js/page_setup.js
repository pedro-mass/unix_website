/**
 * @author drom296
 */

// Store the baseURL of the website to be able to use absolute positioning from now on
var baseURL = "/409_unix_site/";


/**
 * Returns functions needed on page setup
 */
function page_init(){
	// strip the a tags from having links to main pages
	stripATags();
}

