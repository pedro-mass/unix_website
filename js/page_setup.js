/**
 * @author drom296
 */

function page_init(){
	// strip the a tags from having links to main pages
	stripATags();
	
	// Bring in the terminal
	swapElem('page_parts/terminal.php','terminal');
}
