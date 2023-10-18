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
	renderView($main, templates, 'createAccount');

window.addEventListener('click', function(event) {
	if (event.target.matches('[data-view]')) {
		const view = event.target.dataset.view;

		console.log(view);

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
				renderView($main, templates, 'newUserWelcome');
			}
		} else if (formTitle === 'signIn') {
			handle = handleSignIn(form, users, database);

			if(handle === true) {
				renderView($main, templates, 'home');

				//UPDATE THIS TO:
				//check whether intake has been completed...if no, take them there
				//if yes, take them to the menu version
			}
		} else {
			
			const view = event.target.dataset.view;

			renderView($main, templates, view);
		}

	}


});

