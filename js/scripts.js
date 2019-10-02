window.onload = function(){ 
	
	// open/close search
	document.getElementById('toggle-search-collapse').onclick = function() {
    	document.getElementById('search-collapse').classList.toggle('open');
    	document.getElementById('bubble-wrapper').classList.toggle('hidden');    	
		document.getElementById('search-collapse--input').focus();
		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera    
		document.getElementById('search-collapse--input').value = "";	    
	};	
	
	document.getElementById('toggle-settings').onclick = function() {
    	document.getElementById('settings').classList.toggle('open');   	    
	};
	
	document.getElementById('close-settings').onclick = function() {
    	document.getElementById('settings').classList.toggle('open');   	    
	};		
};

// script to toggle between light and dark mode and store setting in local storage
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
toggleSwitch.addEventListener('change', switchTheme, false);

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'light');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'dark');     
    }    
}


function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'light');      
        localStorage.setItem('theme', 'light'); //add this
    }
    else {
        document.documentElement.setAttribute('data-theme', 'dark');     
        localStorage.setItem('theme', 'dark'); //add this
    }    
}

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'light') {	    
        toggleSwitch.checked = true;
    }
}
