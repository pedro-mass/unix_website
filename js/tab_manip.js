function showTab(){
	if (document.getElementById){
		var sidebar = document.getElementById('sidebar').style;
		sidebar.left = -175 + 'px';
		
		var hideTabButton = document.getElementById('hidetabbutton').style;
		hideTabButton.display = 'block';
		
		var showTabButton = document.getElementById('showtabbutton').style;
		showTabButton.display = 'none';
	}
}
		
function hideTab(){
	if (document.getElementById){
		var sidebar = document.getElementById('sidebar').style;
		sidebar.left = 0 + 'px'; 
		
		var hideTabButton = document.getElementById('hidetabbutton').style;
		hideTabButton.display = 'none';
		
		var showTabButton = document.getElementById('showtabbutton').style;
		showTabButton.display = 'block';
		
	}
}