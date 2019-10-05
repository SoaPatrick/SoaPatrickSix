window.onload = function(){ 
	
	// open/close search
	document.getElementById('toggle-search-collapse').onclick = function() {
    	document.getElementById('search-collapse').classList.toggle('open');
    	document.getElementById('bubble-wrapper').classList.toggle('hidden');    	
		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera    
		document.getElementById('search-collapse--input').value = "";	    
	};	
	
	// toggle Settings from Navigation
	document.getElementById('toggle-settings').onclick = function() {
		document.getElementById('settings-window').classList.toggle('open');   	    
	};
	
	// Close Settings
	document.getElementById('settings-window__close').onclick = function() {
		document.getElementById('settings-window').classList.remove('open');   	    
	};	
};


// script to toggle between light and dark 
// mode and store setting in local storage
// ----------------------------------------
const toggleThemeSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
toggleThemeSwitch.addEventListener('change', switchTheme, false);

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'light');      
        localStorage.setItem('theme', 'light');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'dark');     
        localStorage.setItem('theme', 'dark');
    }    
}

const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);

    if (currentTheme === 'light') {	    
        toggleThemeSwitch.checked = true;
    }
}


// script to toggle between color themes 
// and store setting in local storage
// ----------------------------------------
const toggleColorSwitch = document.getElementById("color-switch");
toggleColorSwitch.addEventListener('click', switchColor, false);
	
function switchColor(e) {
	document.documentElement.setAttribute('data-color', e.target.value); 
	localStorage.setItem('color', e.target.value);	       
}

const currentColor = localStorage.getItem('color') ? localStorage.getItem('color') : null;

if (currentColor) {
    document.documentElement.setAttribute('data-color', currentColor);
    document.getElementById('switch--'+currentColor).checked = true;            
}


// make Settings draggagle
// ----------------------------------------
dragElement(document.getElementById("settings-window"));

function dragElement(elmnt) {
	var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
	if (document.getElementById(elmnt.id + "__header")) {
		// if present, the header is where you move the DIV from
		document.getElementById(elmnt.id + "__header").onmousedown = dragMouseDown;
	} else {
		// otherwise, move the DIV from anywhere inside the DIV
		elmnt.onmousedown = dragMouseDown;
	}

	function dragMouseDown(e) {
		e = e || window.event;
		e.preventDefault();
		// get the mouse cursor position at startup
		pos3 = e.clientX;
		pos4 = e.clientY;
		document.onmouseup = closeDragElement;
		// call a function whenever the cursor moves
		document.onmousemove = elementDrag;
	}

	function elementDrag(e) {
		e = e || window.event;
		e.preventDefault();
		// calculate the new cursor position
		pos1 = pos3 - e.clientX;
		pos2 = pos4 - e.clientY;
		pos3 = e.clientX;
		pos4 = e.clientY;
		// set the element's new position
		elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
		elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
	}

	function closeDragElement() {
		// stop moving when mouse button is released
		document.onmouseup = null;
		document.onmousemove = null;
	}
}
