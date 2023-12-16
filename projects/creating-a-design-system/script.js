const button = document.querySelector('.menu-hamburger');
const nav = document.querySelector('.site-nav');
const exitMenuButton = document.querySelector('.exit-menu');
let menuOpen = false;

nav.classList.add('closed');

function toggleMenu() {
	menuOpen = !menuOpen;
}

function updateNavClass() {
	if (menuOpen === true) {
		nav.classList.add('open');
		nav.classList.remove('closed');
	} else {
		nav.classList.remove('open');
		nav.classList.add('closed');
	}
}

function closeMenu() {
	menuOpen = false;
	updateNavClass();
}

button.addEventListener('click', function() {
	toggleMenu();
	updateNavClass();
});

exitMenuButton.addEventListener('click', function() {
	closeMenu();
});

window.addEventListener('resize', function() {
	if (window.innerWidth >= 850) {
		closeMenu();
	}
});
