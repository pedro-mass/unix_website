
		<?php
			$base_url = "/409_unix_site/";
			
			// TODO
			// make the list of css pages into an array
			$css_pages = array();

			array_push($css_pages, 'css/index.css');
			array_push($css_pages, 'css/content.css');
			array_push($css_pages, 'css/sidebar.css');
			array_push($css_pages, 'css/terminal.css');
			array_push($css_pages, 'css/nav_global.css');
			array_push($css_pages, 'css/nav_local.css');
			array_push($css_pages, 'css/accordian.css');
			array_push($css_pages, 'css/tutorials.css');
			
			// loop over the css pages
			foreach ($css_pages as $css){
				// echo out the css link
				echo "<link type='text/css' rel='stylesheet' href='".$base_url.$css."' />";
			}
		?>

