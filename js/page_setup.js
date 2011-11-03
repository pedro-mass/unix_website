/**
 * @author drom296
 */

function page_init(){
	// strip the a tags from having links to main pages
	stripATags();
	
	swapElem('page_parts/terminal.php','terminal');
}
