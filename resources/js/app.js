import './bootstrap';

// RESPONSIVE NAVBAR
const mobileNavWidth = 870;
const xsMobileNavWidth = 550;
const spanNavLinks = document.getElementById('spanNavLinks');
const searchBar = document.getElementById("navSearch");
// const hamburgerSearchIconFormless = document.getElementById('hamburger-no-input-button');
const hamburger = document.getElementById('hamburger');
const navDropDown = document.getElementById('navDropDown');
var mobileNavOpen = false;

function responsiveNabar(){
	if(document.body.clientWidth < xsMobileNavWidth){
		hamburger.classList.remove("hidden")
		hamburger.classList.add("flex");
		searchBar.classList.add("hidden");
		spanNavLinks.classList.remove("flex");
		spanNavLinks.classList.add("hidden");
	}
	else if(document.body.clientWidth <= mobileNavWidth){
			searchBar.classList.remove("hidden");
			spanNavLinks.classList.remove("flex");
			spanNavLinks.classList.add("hidden");
			hamburger.classList.remove("hidden");
			hamburger.classList.add("flex");
		}
	else if(mobileNavWidth < document.body.clientWidth){
	    	spanNavLinks.classList.remove("hidden");
	    	spanNavLinks.classList.add("flex");
	    	searchBar.classList.remove("hidden");
	    	hamburger.classList.add("hidden");
	    	hamburger.classList.remove("flex");
	    	navDropDown.classList.add("hidden");

	    	if(mobileNavOpen){
	    		mobileNavOpen = !mobileNavOpen;
	    	}
	    }
	else {
	    	spanNavLinks.classList.add("hidden");
	    	spanNavLinks.classList.remove("flex");
	    	navDropDown.classList.add("hidden");

	    	if(mobileNavOpen){
	    		mobileNavOpen = !mobileNavOpen;
	    	}
	}
}

function toggleMobileNavbar(mobileNavOpen){
	if (mobileNavOpen){
		navDropDown.classList.remove("hidden");
	}
	else {
		navDropDown.classList.add("hidden");
	}
}

hamburger.addEventListener('click', function(event){
	mobileNavOpen = !mobileNavOpen;
	toggleMobileNavbar(mobileNavOpen);
})

// STARTING FUNCTIONS
responsiveNabar();

// ON WINDOW RESIZE NAVBAR
window.addEventListener(
	'resize', 
	function(event) {responsiveNabar();},
	true
);