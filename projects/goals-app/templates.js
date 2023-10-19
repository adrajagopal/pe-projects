import {
	taskData, renderTaskOptionList, renderTaskIncrementerList,
	goalData, renderGoalOptionList, renderGoalIncrementerList
 } from './functions.js';
import {database, $main} from './global.js';

export const templates = { };

export function renderScreen(options) {
	if (options.dynamic) {
		$main.innerHTML = templates[options.template]();
	} else {
		$main.innerHTML = templates[options.template];	
	}
}

templates.signIn = `
	<h1 class="xxl-voice" style="color: firebrick;">SIGN IN PAGE</h1>

	<form data-form="signIn">
		<label for="username">Enter username</label>
		<input id="username" type="text">

		<label for="password">Enter password</label>
		<input id="password" type="text">

		<button type="submit">Sign in</button>
	</form>

	<p>New here? <button data-view="createAccount">Create an account</button>.</p>
`;

templates.createAccount = `
	<h1 class="xxl-voice" style="color: dodgerblue;">CREATE ACCOUNT PAGE</h1>

	<form data-form="createAccount">
		<label for="username">Choose a username</label>
		<input id="username" type="text">

		<label for="password">Set password</label>
		<input id="password" type="text">

		<button type="submit">Create account</button>
	</form>

	<p>Existing user? <button data-view="signIn">Sign in</button>.</p>
`;

templates.newUserWelcome = `
	<h1 class="xxl-voice">Why use this app?</h1>

	<button class="link" data-view="intakeInstructions">Let's get started</button>

`;

//*****************INTAKE FORM FLOW

templates.intakeInstructions = `
	<h1 class="xxl-voice">How this works</h1>

	<button class="link" data-view="defineSunkTasks">Define my sunk tasks</button>
`;

templates.defineSunkTasks = `
	<h1 class="xxl-voice">Define your sunk tasks</h1>

	<form data-form="defineSunkTasks">

		${renderTaskOptionList(taskData)}

		<button type="submit">Submit and assign time to sunk tasks</button>
	</form>
`;

templates.estimateSunkTasks = function () {

	return `
	<h1 class="xxl-voice">Estimate your sunk tasks</h1>

	<form data-form="estimateSunkTasks">

		${renderTaskIncrementerList('selectedTasks', database)}

		<button type="submit">Go to the next section</button>
	</form>
`
};

templates.goalsInstructions = `
	<h1 class="xxl-voice">How this works</h1>

	<p>Let's fill out your goal areas now.</p>

	<p>Goal areas are broad -- career, school, self-development, exercise, diet, health.</p>

	<p>Pick the ones that are most important to you, and that you want to do every single day.</p>

	<button class="link" data-view="defineGoalAreas">Define my goal areas</button>
`;

templates.defineGoalAreas = `
	<h1 class="xxl-voice">Define your goal areas</h1>

	<form data-form="defineGoalAreas">

		${renderGoalOptionList(goalData)}

		<button type="submit">Assign time to goal areas</button>
	</form>
`;

templates.estimateGoalAreas = function () {

	return `
	<h1 class="xxl-voice">Estimate your goal areas</h1>

	<form data-form="estimateGoalAreas">

		${renderGoalIncrementerList('selectedGoals', database)}


		<button type="submit">Review and finalize</button>
	</form>
	`
};

templates.intakeCompleted = `
	<h1 class="xxl-voice">Nice job!</h1>

	<button class="link" data-view="yourDaySummarized">See how your day shakes out</button>
`;

//***************** HOME FLOW
templates.home = `
	<h1 class="xxl-voice" class="xxl-voice">Welcome back, Aditya</h1>

	<button class="link" data-view="newReflection">Add a reflection</button>
	<button class="link" data-view="reflectionHistory">See prior reflections</button>
	<button class="link" data-view="makeAdjustments">View/change tasks/goals and times</button>
`;


templates.yourDaySummarized = function() {
	return `
	<h1 class="xxl-voice">Here's how your day shakes out</h1>

	<p>There are 24 hours in a day.</p>

	<p>Your sunk tasks are estimated at <span>XX hours</span>.</p>	

	<p>Your goal areas are estimated at <span>YY hours</span>.</p>	

	<p>You're <span>YY hours short/long</span>.</p>	

	<button class="link" data-view="makeAdjustments">Make adjustments</button>
	<button class="link" data-view="home">Go home</button>
`
};

templates.makeAdjustments = `
	<h1 class="xxl-voice">Adjust your allocations</h1>

	<h2>Some tips for doing this</h2>
	<ul>
		<li>tip 1</li>
		<li>tip 2</li>
		<li>tip 3</li>
	</ul>

	<form data-form="makeAdjustments">


		<button type="submit" data-view="yourDaySummarized">Review your day</button>
	</form>
`;

//*****************NOTES FLOW

templates.newReflection = `
	<h1 class="xxl-voice">How did you do today?</h1>

	<h2>Tuesday, October 17th</h2>

	<form data-form="newReflection">
		<label>Rate your day</label>
		<input type="range">

		<label>Reflect on the day</label>
		<textarea name="" id="" cols="30" rows="10"></textarea>

		<button type="button" class="link" data-view="home">Discard</button>
		<button type="submit" data-view="reflectionSaved">Save note</button>
	</form>


`;

templates.reflectionSaved = `
	<h1 class="xxl-voice">Great reflection!</h1>

	<p>Every reflection is an opportunity to make small changes and improve tomorrow.</p>

	<button class="link" data-view="reflectionHistory">See your prior day reflections</button>
	<button class="link" data-view="home">Go home</button>
`;

templates.reflectionHistory = `
	<h1 class="xxl-voice">Your saved reflections</h1>

	<h2>Click to view a day.</h2>

	<ul>
		<li>day 1</li>
		<li>day 2</li>
		<li>day 3</li>
	</ul>

	<button class="link" data-view="home">Go home</button>
`;

templates.reflectionDetails = `
	<h1 class="xxl-voice">Your saved reflections</h1>

	<h2>Click to view a day.</h2>
	
	<ul>
		<li>day 1</li>
		<li>day 2</li>
		<li>day 3</li>
	</ul>

	<button class="link" data-view="home">Go home</button>
`;