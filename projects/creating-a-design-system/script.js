const button = document.querySelector('.menu-hamburger');
const nav = document.querySelector('.site-nav');
const exitMenuButton = document.querySelector('.exit-menu');
const body = document.querySelector('body');
let menuOpen = false;

nav.classList.add('closed');

function toggleMenu() {
	menuOpen = !menuOpen;
}

function updateMenuClasses() {
	if (menuOpen === true) {
		nav.classList.add('open');
		nav.classList.remove('closed');
		body.classList.add('noScroll');
	} else {
		nav.classList.remove('open');
		nav.classList.add('closed');
		body.classList.remove('noScroll');
	}
}

function closeMenu() {
	menuOpen = false;
	body.classList.remove('noScroll');
	updateMenuClasses();
}

button.addEventListener('click', function() {
	toggleMenu();
	updateMenuClasses();
});

exitMenuButton.addEventListener('click', function() {
	closeMenu();
});

window.addEventListener('resize', function() {
	if (window.innerWidth >= 850) {
		closeMenu();
	}
});
