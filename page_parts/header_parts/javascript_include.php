<?php
	$base_url = "/409_unix_site/";
	
	// TODO
	// make the list of js pages into an array
	$js_pages = new ArrayObject();

	$js_pages[0] = 'js/tab_manip.js';
	$js_pages[1] = 'js/expand_li.js';
	$js_pages[2] = 'js/strip_ahref.js';
	$js_pages[3] = 'js/ajax.js';
	$js_pages[4] = 'js/page_setup.js';
	$js_pages[5] = 'js/content.js';
	$js_pages[6] = 'js/flip_terminal.js';
	$js_pages[7] = 'js/tutorials.js';
	$js_pages[8] = 'js/accountreg.js';
	
	// // terminal js files
	$js_pages[9] = 'js/terminal/jsuix_gui.js';
	$js_pages[10] = 'js/terminal/jsuix_krnl.js';
	$js_pages[11] = 'js/terminal/jsuix_shell.js';
	$js_pages[12] = 'js/terminal/jsuix_cmd.js';
	$js_pages[13] = 'js/terminal/jsuix_vi.js';
	$js_pages[14] = 'js/terminal/jsuix_inv.js';
	$js_pages[15] = 'js/terminal/jsuix_man.js';
	$js_pages[16] = 'js/terminal/jsuix_rc.js';
	$js_pages[17] = 'js/terminal/jsuix_trycatch.js';
	
	// loop over the js pages
	foreach ($js_pages as $js){
		// echo out the js link
		echo "<script type='text/javascript' src='".$base_url.$js."'></script>";
	}
?>