
		<?php
			$base_url = "/409_unix_site/";
			
			// TODO
			// make the list of css pages into an array
			$css_pages = new ArrayObject();

			$css_pages.push('css/index.css');
			$css_pages.push('css/content.css');
			$css_pages.push('css/sidebar.css');
			$css_pages.push('css/terminal.css');
			$css_pages.push('css/nav_global.css');
			$css_pages.push('css/nav_local.css');
			$css_pages.push('css/accordian.css');
			$css_pages.push('css/tutorials.css');
			
			// loop over the css pages
			foreach ($css_pages as $css){
				// echo out the css link
				echo "<link type='text/css' rel='stylesheet' href='".$base_url.$css."' />";
			}
		?>

