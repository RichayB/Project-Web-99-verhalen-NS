/*jslint browser: true, devel: true, eqeq: true, plusplus: true, sloppy: true, vars: true, white: true*/

/*eslint-env browser*/

/*eslint 'no-console': 0*/


//Variables
var filterOptions = document.getElementById('filter_options');

var filterOpenButton = document.getElementById('filter_button');
var filterCloseButton = document.getElementById('filter_close_button');

var storyPanels = document.getElementsByClassName('story');



//Even listeners
filterOpenButton.addEventListener('click', openFilterOptions);
filterCloseButton.addEventListener('click', closeFilterOptions);

for (var i = 0 ; i < storyPanels.length; i++) {
	storyPanels.addEventListener('click', openStoryPage);
}

// Open story page
function openStoryPage() {
	window.open('https://oege.ie.hva.nl/~bikharr/99%20verhalen/login.php');
	console.log('123');
}

// Show filter options
function openFilterOptions() {
	filterOptions.style.display = 'flex';
}

// Hide filter options
function closeFilterOptions() {
	filterOptions.style.display = 'none';
}