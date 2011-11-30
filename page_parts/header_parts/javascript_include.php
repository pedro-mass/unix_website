<?php
	$base_url = "/409_unix_site/";
	
	// TODO
	// make the list of js pages into an array
	$js_pages = array();

	array_push($js_pages, 'js/tab_manip.js');
	array_push($js_pages, 'js/expand_li.js');
	array_push($js_pages, 'js/strip_ahref.js');
	array_push($js_pages, 'js/ajax.js');
	array_push($js_pages, 'js/page_setup.js');
	array_push($js_pages, 'js/tutorials.js');
	array_push($js_pages, 'js/accountreg.js');
	
	// // terminal js files
	array_push($js_pages, 'js/terminal/jsuix_gui.js');
	array_push($js_pages, 'js/terminal/jsuix_krnl.js');
	array_push($js_pages, 'js/terminal/jsuix_shell.js');
	array_push($js_pages, 'js/terminal/jsuix_cmd.js');
	array_push($js_pages, 'js/terminal/jsuix_vi.js');
	array_push($js_pages, 'js/terminal/jsuix_inv.js');
	array_push($js_pages, 'js/terminal/jsuix_man.js');
	array_push($js_pages, 'js/terminal/jsuix_rc.js');
	array_push($js_pages, 'js/terminal/jsuix_trycatch.js');
	
	// loop over the js pages
	foreach ($js_pages as $js){
		// echo out the js link
		echo "<script type='text/javascript' src='".$base_url.$js."'></script>";
	}
?>
