import {templates} from './templates.js';
import {createElementVar, renderView, setCurrentUser, clearCurrentUser, updateUsers, handleAccountCreation, handleSignIn} from './functions.js'

// window.localStorage.clear();

var database = window.localStorage;

//*************************** PAGE STRUCTURE
const $header = createElementVar('header inner-column');
const $main = createElementVar('main inner-column');
const $footer = createElementVar('footer inner-column');

//*************************** on app startup


// start with the sign-in page
//on submit, go to intake form the first time
	// go to menu after form completed
//on view = create-account, go to create-account

	$header.innerHTML = '';
	$footer.innerHTML = '';
	renderView($main, templates, 'signIn');

window.addEventListener('click', function(event) {
	if (event.target.matches('[data-view]')) {
		const view = event.target.dataset.view;

		renderView($main, templates, view);
	}
});

let users = [
	{username : 'derek', password : '1234'},
	{username: 'santa', password : 'claus'}
];





window.addEventListener('submit', function(event) {
	event.preventDefault();

	if (event.target.matches('[data-form]')) {
		const formTitle = event.target.dataset.form;
		const form = createElementVar('form');

		if (formTitle === 'createAccount') {
			var handle = handleAccountCreation(form, users, database);

			if (handle === true) {
				renderView($main, templates, 'home');
			}
		}

		if (formTitle === 'signIn') {
			handle = handleSignIn(form, users, database);

			if(handle === true) {
				renderView($main, templates, 'home');
			}
		}
	}


});

