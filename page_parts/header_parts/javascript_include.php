<?php
	$base_url = "/409_unix_site/";
	
	// TODO
	// make the list of js pages into an array
	$js_pages = new ArrayObject();

	$js_pages.push('js/tab_manip.js');
	$js_pages.push('js/expand_li.js');
	$js_pages.push('js/strip_ahref.js');
	$js_pages.push('js/ajax.js');
	$js_pages.push('js/page_setup.js');
	$js_pages.push('js/tutorials.js');
	$js_pages.push('js/accountreg.js');
	
	// // terminal js files
	$js_pages.push('js/terminal/jsuix_gui.js');
	$js_pages.push('js/terminal/jsuix_krnl.js');
	$js_pages.push('js/terminal/jsuix_shell.js');
	$js_pages.push('js/terminal/jsuix_cmd.js');
	$js_pages.push('js/terminal/jsuix_vi.js');
	$js_pages.push('js/terminal/jsuix_inv.js');
	$js_pages.push('js/terminal/jsuix_man.js');
	$js_pages.push('js/terminal/jsuix_rc.js');
	$js_pages.push('js/terminal/jsuix_trycatch.js');
	
	// loop over the js pages
	foreach ($js_pages as $js){
		// echo out the js link
		echo "<script type='text/javascript' src='".$base_url.$js."'></script>";
	}
?>
>>>>>>> 28aabe65ce378ded4cc7b299673ea56f1d085d71
