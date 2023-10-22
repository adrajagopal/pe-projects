import {
	taskData, renderTaskOptionList, renderTaskIncrementerList,
	goalData, renderGoalOptionList, renderGoalIncrementerList,
	summarizeResults
 } from './functions.js';
import {database} from './global.js';

export const templates = { };

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

	<p>Because we all know there's a huge difference between knowing what you want to get done, and actually getting it done.</p>

	<button class="link" data-view="intakeInstructions">Let's get started</button>

`;

//*****************INTAKE FORM FLOW

templates.intakeInstructions = `
	<h1 class="xxl-voice">How this works</h1>

	<button class="link" data-view="defineSunkTasks" data-dynamic>Define my sunk tasks</button>
`;

templates.defineSunkTasks = function () {
	return `
	<h1 class="xxl-voice">Define your sunk tasks</h1>

	<form data-form="defineSunkTasks">

		${renderTaskOptionList(taskData)}

		<button type="submit">Submit and assign time to sunk tasks</button>
	</form>
	`
};

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

	<button class="link" data-view="defineGoalAreas" data-dynamic>Define my goal areas</button>
`;

templates.defineGoalAreas = function () {
	return `
	<h1 class="xxl-voice">Define your goal areas</h1>

	<form data-form="defineGoalAreas">

		${renderGoalOptionList(goalData)}

		<button type="submit">Assign time to goal areas</button>
	</form>
	`
};

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

	<button class="link" data-view="yourDaySummarized" data-dynamic>See how your day shakes out</button>
`;

//***************** HOME FLOW
templates.home = `
	<h1 class="xxl-voice" class="xxl-voice">Welcome back, Aditya</h1>

	<button class="link" data-view="newReflection" data-dynamic>Add a reflection</button>
	<button class="link" data-view="reflectionHistory">See prior reflections</button>
	<button class="link" data-view="makeAdjustments">View/change tasks/goals and times</button>
`;


templates.yourDaySummarized = function() {

	const results = summarizeResults('tasksWithTimes', 'goalsWithTimes', database);

	return `
	<h1 class="xxl-voice">Here's how your day shakes out</h1>

	<p>There are 24 hours in a day.</p>

	<p>Your sunk tasks are estimated at <span>${results.taskSum} hours</span>.</p>	

	<p>Your goal areas are estimated at <span>${results.goalSum} hours</span>.</p>	

	<p>${results.surplusMessage}</p>	

	<button class="link" data-view="makeAdjustments" data-dynamic>Make adjustments</button>
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

	<button class="link" data-view="reflectionHistory" data-dynamic>See your prior day reflections</button>
	<button class="link" data-view="home">Go home</button>
`;

templates.reflectionHistory = function () {
	return `
		<h1 class="xxl-voice">Your saved reflections</h1>

		<h2>Click to view a day.</h2>

		<ul>
			<li>day 1</li>
			<li>day 2</li>
			<li>day 3</li>
		</ul>

		<button class="link" data-view="home">Go home</button>
	`
};

templates.reflectionDetails = function () { 
	return `
		<h1 class="xxl-voice">Your saved reflections</h1>

		<h2>Click to view a day.</h2>
		
		<ul>
			<li>day 1</li>
			<li>day 2</li>
			<li>day 3</li>
		</ul>

		<button class="link" data-view="home">Go home</button>
	`
};