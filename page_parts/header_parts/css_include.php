		<?php
			$base_url = "/409_unix_site/";
			
			// TODO
			// make the list of css pages into an array
			$css_pages = new ArrayObject();

			$css_pages[0] = 'css/index.css';
			$css_pages[1] = 'css/content.css';
			$css_pages[2] = 'css/sidebar.css';
			$css_pages[3] = 'css/terminal.css';
			$css_pages[4] = 'css/nav_global.css';
			$css_pages[5] = 'css/nav_local.css';
			$css_pages[6] = 'css/accordian.css';
			$css_pages[7] = 'css/tutorials.css';
			
			// loop over the css pages
			foreach ($css_pages as $css){
				// echo out the css link
				echo "<link type='text/css' rel='stylesheet' href='".$base_url.$css."' />";
			}
		?>