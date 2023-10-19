//****************** IMPORTS
import {createElementVar, $header, $main, $footer, database} from './global.js';
import {renderScreen, templates} from './templates.js';
import {renderView, 
			setCurrentUser,
			handleAccountCreation, handleSignIn,
			handleSunkTaskDefinition,handleSunkTaskEstimation,
			handleGoalDefinition, handleGoalEstimation,
			renderValues

			//, add more
} from './functions.js';

//*************************** on app startup

	$header.innerHTML = '';
	$footer.innerHTML = '';
	renderView($main, templates, 'createAccount'); //RESET THIS TO CREATEACCOUNT WHEN DONE TESTING
	// setCurrentUser({username: 'derek', password: '1234'}, database); //USE THIS ONLY FOR TESTING
	
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
		var handle = null;

		if (formTitle === 'createAccount') {
			handle = handleAccountCreation(form, users, database);

			if (handle === true) {

				setTimeout(function () {renderView($main, templates, 'newUserWelcome')}, 2000);
			}
		} else if (formTitle === 'signIn') {
			handle = handleSignIn(form, users, database);

			if (handle === true) {
				renderView($main, templates, 'home');

				//UPDATE THIS TO:
				//check whether intake has been completed...if no, take them there
				//if yes, take them to the menu version
			}
		} else if (formTitle === 'defineSunkTasks') {
			handle = handleSunkTaskDefinition(form, database);

			if (handle === true) {
				renderScreen({template: 'estimateSunkTasks', dynamic: true});
			}
		} else if (formTitle === 'estimateSunkTasks') {
			handle = handleSunkTaskEstimation('selectedTasks', form, database);

			if (handle === true) {
				renderView($main, templates, 'goalsInstructions');
			}

		} else if (formTitle === 'defineGoalAreas') {
			handle = handleGoalDefinition(form, database);

			if (handle === true) {
				renderScreen({template: 'estimateGoalAreas', dynamic: true});
			}
		} else if (formTitle === 'estimateGoalAreas') {
			handle = handleGoalEstimation('selectedGoals', form, database);

			if (handle === true) {
				renderView($main, templates, 'intakeCompleted');
				renderValues('tasksWithTimes', 'goalsWithTimes', database);
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
