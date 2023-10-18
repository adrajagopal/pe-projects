import {templates} from './templates.js';
import {createElementVar, renderView, 
			setCurrentUser, clearCurrentUser, updateUsers,
			handleAccountCreation, handleSignIn,
			taskData, renderTaskOption, renderTaskList, handleSunkTaskDefinition
			//, add more
} from './functions.js';

// window.localStorage.clear();

var database = window.localStorage;

//*************************** PAGE STRUCTURE
const $header = createElementVar('header inner-column');
const $main = createElementVar('main inner-column');
const $footer = createElementVar('footer inner-column');

//*************************** on app startup

	$header.innerHTML = '';
	$footer.innerHTML = '';
	renderView($main, templates, 'defineSunkTasks'); //RESET THIS TO CREATEACCOUNT WHEN DONE TESTING
	setCurrentUser({username: 'derek', password: '1234'}, database); //USE THIS ONLY FOR TESTING
	
	let users = [
		{username : 'derek', password : '1234'},
		{username: 'santa', password : 'claus'}
	];




//************************** event listeners

window.addEventListener('click', function(event) {
	if (event.target.matches('[data-view]')) {
		const view = event.target.dataset.view;

		console.log(view);

		renderView($main, templates, view);
	}
});







window.addEventListener('submit', function(event) {
	event.preventDefault();

	if (event.target.matches('[data-form]')) {
		const formTitle = event.target.dataset.form;
		const form = createElementVar('form');

		if (formTitle === 'createAccount') {
			var handle = handleAccountCreation(form, users, database);

			if (handle === true) {

				setTimeout(function () {renderView($main, templates, 'newUserWelcome')}, 2000);
			}
		} else if (formTitle === 'signIn') {
			handle = handleSignIn(form, users, database);

			if(handle === true) {
				renderView($main, templates, 'home');

				//UPDATE THIS TO:
				//check whether intake has been completed...if no, take them there
				//if yes, take them to the menu version
			}
		} else if (formTitle === 'defineSunkTasks') {
			handle = handleSunkTaskDefinition(form, database);

			if(handle ===true) {
				renderView($main, templates, 'estimateSunkTasks');
			}
		}

		else {
			
			const view = event.target.dataset.view;

			//UPDATE THIS TO:
			//actually handle each form similar to sign-in and acct creation
			//and leave this last bit just for link buttons
			//move the render function outside of the button and into the handle() logic -- avoid race condition

			renderView($main, templates, view);
		}

	}


});