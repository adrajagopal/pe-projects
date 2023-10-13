const templates = { };

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