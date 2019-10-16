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

// script to load YouTube Videos only on
// click on Preview Image
// ----------------------------------------
document.addEventListener("DOMContentLoaded",function() {
    var div, n,
        v = document.getElementsByClassName("youtube-wrapper__video");
    for (n = 0; n < v.length; n++) {
        div = document.createElement("div");
        div.setAttribute("data-id", v[n].dataset.id);
        div.innerHTML = ytThumb(v[n].dataset.id);
        div.onclick = ytIframe;
        v[n].appendChild(div);
    }
});

function ytThumb(id) {
	var thumbRes = (document.body.clientWidth > 640) ? 'maxresdefault.jpg' : 'hqdefault.jpg',
		thumbImg = '<img src="https://i.ytimg.com/vi/ID/'+thumbRes+'">',
		thumbBut = '<p class="video--play-btn"><svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%"><path class="video--play-btn__bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#212121" fill-opacity="0.8"></path><path d="M 45,24 27,14 27,34" fill="#fff"></path></svg></p>';
	return thumbImg.replace("ID", id) + thumbBut;
}


function ytIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "https://www.youtube-nocookie.com/embed/" + this.dataset.id + "?autoplay=1");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "1");
    iframe.setAttribute("mute", "1");
    iframe.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");
    this.parentNode.replaceChild(iframe, this);

}

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
