export const templates = { };

templates.signIn = `
	<h1 class="xxl-voice" style="color: red;">SIGN IN PAGE</h1>

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
	<h1 class="xxl-voice" style="color: blue;">CREATE ACCOUNT PAGE</h1>

	<form data-form="createAccount">
		<label for="username">Choose a username</label>
		<input id="username" type="text">

		<label for="password">Set password</label>
		<input id="password" type="text">

		<button type="submit">Create account</button>
	</form>

	<p>Existing user? <button data-view="signIn">Sign in</button>.</p>
`;

templates.home = `
	<h1>Welcome!</h1>

`;

templates.newUserWelcome = `
	<h1>Why use this app?</h1>

	<button>Let's get started</button>

`;

//*****************INTAKE FORM FLOW

templates.intakeInstructions = `
	<h1>How this works</h1>

	<button>Define my sunk tasks</button>
`;

templates.defineSunkTasks = `
	<h1>Define your sunk tasks</h1>

	<button>Assign time to sunk tasks</button>
`;

templates.estimateSunkTasks = `
	<h1>Define your sunk tasks</h1>

	<button>Go to the next section</button>
`;

templates.goalsInstructions = `
	<h1>How this works</h1>

	<button>Define my goal areas</button>
`;

templates.defineGoalAreas = `
	<h1>Define your goal areas</h1>

	<button>Assign time to goal areas</button>
`;

templates.estimateGoalAreas = `
	<h1>Define your goal areas</h1>

	<button>Review your day</button>
`;

templates.intakeCompleted = `
	<h1>Nice job!</h1>

	<button>Review your day</button>
`;

//*****************DAY SUMMARY FLOW

templates.yourDaySummarized = `
	<h1>Here's how your day shakes out</h1>

	<p>There are 24 hours in a day.</p>

	<p>Your sunk tasks are estimated at <span>XX hours</span>.</p>	

	<p>Your goal areas are estimated at <span>YY hours</span>.</p>	

	<p>You're <span>YY hours short/long</span>.</p>	

	<button>Make adjustments</button>
	<button>Go home</button>
`;

templates.makeAdjustments = `
	<h1>Adjust your allocations</h1>

	<h2>Some tips for doing this</h2>
	<ul>
		<li>tip 1</li>
		<li>tip 2</li>
		<li>tip 3</li>
	</ul>

	<button>Review your day</button>
`;

//*****************NOTES FLOW

templates.newNote = `
	<h1>How did you do today?</h1>

	<h2>Tuesday, October 17th</h2>

	<label>Rate your day</label>
	<input type="range">

	<label>Reflect on the day</label>
	<textarea name="" id="" cols="30" rows="10"></textarea>>

	<button>Discard</button>
	<button>Save note</button>
`;

templates.noteSaved = `
	<h1>Great reflection!</h1>

	<p>Every reflection is an opportunity to make small changes and improve tomorrow.</p>

	<button>See your prior days</button>
`;

templates.noteHistory = `
	<h1>Your saved reflections</h1>

	<h2>Click to view a day.</h2>

	<ul>
		<li>day 1</li>
		<li>day 2</li>
		<li>day 3</li>
	</ul>
`;

templates.noteDetails = `
	<h1>Your saved reflections</h1>

	<h2>Click to view a day.</h2>
	
	<ul>
		<li>day 1</li>
		<li>day 2</li>
		<li>day 3</li>
	</ul>
`;

//*****************HOME MENU FLOW

templates.newNote = `
	<h1>Welcome back, Aditya</h1>

	<button>Add a reflection</button>
	<button>See prior reflections</button>
	<button>View/change tasks/goals and times</button>
`;



















