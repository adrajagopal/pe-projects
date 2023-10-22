import {createElementVar, $main} from './global.js';
import {templates} from './templates.js';

///////*************************** SUNK TASK FORMS

export const taskData = [
	{
		name : "sleep"
	},
	{
		name : "commute"
	},
	{
		name : "eat"
	},
	{
		name : "clean"
	}
];

export function renderTaskOption(task) {
	return `
		<li class="pill">
			<label for="${task.name}">${task.name}</label>
			<input id="${task.name}" type="checkbox">
		</li>
	`;
}

export function renderTaskOptionList(tasks) {
	var taskList = `<ul class="taskOptionList">`;

	tasks.forEach( function(task) {
		taskList += renderTaskOption(task);
	}); 

	taskList += `</ul>`;

	return taskList;
}

export function handleSunkTaskDefinition(form, database) {
	var checkedItems = form.querySelectorAll(':checked');

	var selectedTasks = [...checkedItems].map( function(item) {
		return item.id;
	})

	database.setItem('selectedTasks', JSON.stringify(selectedTasks));

	return true;
}

export function renderTaskIncrementer(task) {
	return `
		<li>
			<label for="${task}">${task}</label>
			<input id="${task}" type="number" min=1 required>
		</li>
	`;
}

export function renderTaskIncrementerList(selectedTasksArray, database) {
	const tasks = getListFromDatabase(selectedTasksArray, database);

	let incrementerList = `<ul class="taskIncrementerList">`;

	tasks.forEach( function(task) {
		incrementerList += renderTaskIncrementer(task);
	}); 

	incrementerList += `</ul>`;

	return incrementerList;
}

export function handleSunkTaskEstimation(selectedTaskArrayKey, form, database) {
	
	let tasks = getListFromDatabase(selectedTaskArrayKey, database);

	let tasksWithTimes = [];

	tasks.forEach( function(taskName) {	
		tasksWithTimes = [...tasksWithTimes, {task: taskName, value: form.querySelector(`#${taskName}`).value}];
	});

	database.setItem('tasksWithTimes', JSON.stringify(tasksWithTimes));

	return true;
}

///////*************************** GOAL FORMS

export const goalData = [
	{
		name : "exercise"
	},
	{
		name : "diet"
	},
	{
		name : "relaxation"
	},
	{
		name : "career"
	},
	{
		name : "relationships"
	}
];

export function renderGoalOption(goal) {
	return `
		<li class="pill">
			<label for="${goal.name}">${goal.name}</label>
			<input id="${goal.name}" type="checkbox">
		</li>
	`;
}

export function renderGoalOptionList(goals) {
	var goalList = `<ul class="goalOptionList">`;

	goals.forEach( function(goal) {
		goalList += renderGoalOption(goal);
	}); 

	goalList += `</ul>`;

	return goalList;
}

export function handleGoalDefinition(form, database) {
	var checkedItems = form.querySelectorAll(':checked');

	var selectedGoals = [...checkedItems].map( function(item) {
		return item.id;
	})

	database.setItem('selectedGoals', JSON.stringify(selectedGoals));

	return true;
}

export function renderGoalIncrementer(goal) {
	return `
		<li>
			<label for="${goal}">${goal}</label>
			<input id="${goal}" type="number" min=1 required>
		</li>
	`;
}

export function renderGoalIncrementerList(selectedGoalsArray, database) {
	const goals = getListFromDatabase(selectedGoalsArray, database);

	let incrementerList = `<ul class="goalIncrementerList">`;

	goals.forEach( function(goal) {
		incrementerList += renderGoalIncrementer(goal);
	}); 

	incrementerList += `</ul>`;

	return incrementerList;
}

export function handleGoalEstimation(selectedGoalArrayKey, form, database) {
	
	let goals = getListFromDatabase(selectedGoalArrayKey, database);

	let goalsWithTimes = [];

	goals.forEach( function(goalName) {	
		goalsWithTimes = [...goalsWithTimes, {goal: goalName, value: form.querySelector(`#${goalName}`).value}];
	});

	database.setItem('goalsWithTimes', JSON.stringify(goalsWithTimes));

	return true;
}

///////*************************** PROCESSING FINAL DATA

function sumValues(ArrayKey, database) {
	let taskList = getListFromDatabase(ArrayKey, database);

	let taskValues = [];

	taskList.forEach( function(task) {
		taskValues = [...taskValues, Number(task.value)];
	});

	var sum = taskValues.reduce((accumulator, currentValue) => {
		return accumulator + currentValue
	},0);

	return sum;
}


export function summarizeResults(taskArrayKey, goalArrayKey, database) {
	let taskSum = sumValues(taskArrayKey, database);

	let goalSum = sumValues(goalArrayKey, database);

	let totalTime = taskSum + goalSum;

	let timeDiff = 24 - totalTime;

	let surplusMessage = "";

	if (timeDiff > 0) {
		surplusMessage = `You have a buffer of ${timeDiff} hours in your day.`
	} else {
		surplusMessage = `You're ${timeDiff} hours short in your day.`
	}

	return {
		taskSum,
		goalSum,
		totalTime,
		timeDiff,
		surplusMessage
	};
}

///////*************************** REFLECTIONS

export function handleNewReflection(form) {
	let ratingInput = form.querySelector('#rating');
	let rating = ratingInput.value

	let noteInput = form.querySelector('#note');
	let note = noteInput.value;

	return {
		"rating" : rating,
		"note" : note
	};

}

export function updateReflectionList(newNote, notes, database) {
	
	initializeReflectionList(notes, 'notes', database);

	notes.push(newNote);

	const stringifiedNotes = JSON.stringify(notes);

	database.setItem('notes', stringifiedNotes);
}

export function initializeReflectionList(array, arrayKey, database) {

	if (database.getItem(arrayKey) != null && database.getItem(arrayKey) != '') {
		array = getListFromDatabase(arrayKey, database);
	} else {
		array = [];
	}

}

function renderReflectionCard(reflection) {
	return `
		<li class="reflection-card">
			<details>
				<summary class="medium-voice">
					${reflection.timeStamp}
					<div class="icon-container"><?php include(getFile("images/$faqIcon.svg")); ?></div>
				</summary>
				<p class="medium-voice">Your rating: ${reflection.rating}/5</p>
				<p class="medium-voice">Your reflection:</p>
				<p class="medium-voice">${reflection.note}</p>
			</details>
		</li>
	`;
}

export function renderReflectionList(arrayKey, database) {
	let reflectionList = getListFromDatabase(arrayKey, database)

	let view = `<ul class=reflectionList>`;

	reflectionList.forEach( function(reflection) {
		view += renderReflectionCard(reflection)
	});

	view += `</ul>`;

	return view;
}



///////*************************** DOCUMENT STRUCTURE

export function renderScreen(options) {
	if (options.dynamic != null) {
		$main.innerHTML = templates[options.template]();
	} else {
		$main.innerHTML = templates[options.template];
	}
}

///////*************************** USERS/DATABASE

export function getListFromDatabase(key, database) {
	var listString = database.getItem(key);

	return JSON.parse(listString);
}

export function setCurrentUser(user, database) {
	database.setItem('currentUser', user.username);

	createElementVar('header inner-column').innerHTML = `
		<p class="small-voice currentUser">Account: ${database.getItem('currentUser')}</p>
			`;
} 

export function clearCurrentUser(database) {
	database.setItem('currentUser', null);
}

export function updateUsers(users, database) {

	let stringifiedUsers = JSON.stringify(users);

	database.setItem('users', stringifiedUsers);
}

// function checkUser(credentials) {
// 	const userlistString = database.getItem('users');

// 	const parsedUsers = JSON.parse(userListString);

// 	parsedUsers.find( function(credentials) {
// 		return credentials.username === user.username;
// 	});
// }

///////*************************** ACCOUNT

export function handleAccountCreation(form, users, database) {

	let usernameInput = form.querySelector('#username');
	let passwordInput = form.querySelector('#password');

	const username = usernameInput.value;
	const password = passwordInput.value;

	if (username && password) {
		let user = { username, password };

		var userExists = users.find( function(item) {
			return item.username === user.username;
		});

		if (userExists) {
			alert('choose another username');
		} else {
			users = [...users, user];

			setCurrentUser(user, database);
			updateUsers(users, database);
			
			usernameInput.value = "";
			passwordInput.value = "";

			return true; //use this to load the next page
		}
	}

}

export function handleSignIn(form, users, database) {
	let usernameInput = form.querySelector('#username');
	let passwordInput = form.querySelector('#password');

	const username = usernameInput.value;
	const password = passwordInput.value;

	if (username && password) { //if both inputs have a valid value
		let user = { username, password }; //create an object to pass into checker

		var foundUser = users.find( function(item) { //check whether user exists in database
			return item.username === user.username;
		});

		if (foundUser) { //if user does exist in database
			if (foundUser.password === user.password) {
				setCurrentUser(user, database);
				alert('success!');
				return true; //use this to load the next page
			} else {
				alert('The password you entered does not match the username');
			}

		} else {
			
			alert("the username you entered does not exist");
		}
	} else {
		alert('please enter a username and password');
	}
}