//****************** IMPORTS
import {$header, $footer, createElementVar, database} from './global.js';
import {renderScreen, getListFromDatabase,
			setCurrentUser,
			handleAccountCreation, handleSignIn,
			handleSunkTaskDefinition,handleSunkTaskEstimation,
			handleGoalDefinition, handleGoalEstimation,
			handleNewReflection, updateReflectionList

			//, add more
} from './functions.js';

//*************************** on app startup

	$header.innerHTML = '';
	$footer.innerHTML = '';
	renderScreen({template: 'home'}); //RESET THIS TO CREATEACCOUNT WHEN DONE TESTING
	setCurrentUser({username: 'derek', password: '1234'}, database); //USE THIS ONLY FOR TESTING
	
	let users = [
		{username : 'derek', password : '1234'},
		{username: 'santa', password : 'claus'}
	];

	let notes = [];

	if (database.getItem('notes') != null && database.getItem('notes') != '') {
		notes = getListFromDatabase('notes', database);
	}

//************************** event listeners

window.addEventListener('click', function(event) {
	if (event.target.matches('[data-view]')) {
		const view = event.target.dataset.view;

		const isDynamic = event.target.dataset.dynamic;

		renderScreen({template: view, dynamic: isDynamic});
	}
});

window.addEventListener('submit', function(event) {
	event.preventDefault();

	const formTitle = event.target.dataset.form;
	const form = createElementVar('form');
	var handle = null;

	if (event.target.matches('[data-form]')) {

		if (formTitle === 'createAccount') {
			handle = handleAccountCreation(form, users, database);

			if (handle === true) {

				setTimeout(function () {renderScreen({template: 'newUserWelcome'})}, 2000);
			}
		} else if (formTitle === 'signIn') {
			handle = handleSignIn(form, users, database);

			if (handle === true) {
				renderScreen({template: 'home'});

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
				renderScreen({template:'goalsInstructions'});
			}

		} else if (formTitle === 'defineGoalAreas') {
			handle = handleGoalDefinition(form, database);

			if (handle === true) {
				renderScreen({template: 'estimateGoalAreas', dynamic: true});
			}
		} else if (formTitle === 'estimateGoalAreas') {
			handle = handleGoalEstimation('selectedGoals', form, database);

			if (handle === true) {
				renderScreen({template:'intakeCompleted'});
			}
		} else if (formTitle === 'newReflection') {

			const timeStamp = event.target.dataset.timestamp;

			const formOutput = handleNewReflection(form); //add function

			const resultsArray = {timeStamp, rating : formOutput.rating, note : formOutput.note};

			updateReflectionList(resultsArray, notes, database);

			renderScreen({template: 'reflectionSaved'});
		}

		else {

			const view = event.target.dataset.view;

			const isDynamic = event.target.dataset.dynamic;

			renderScreen({template: view, dynamic: isDynamic});

			//UPDATE THIS TO:
			//actually handle each form similar to sign-in and acct creation
			//and leave this last bit just for link buttons
			//move the render function outside of the button and into the handle() logic -- avoid race condition

		}

	}


});
