// question in slack --when i'm confused about "return", think about ---- what does this value turn into? "true", "false", an object, etc
// questiona bout initialize function
// constructor function calendar

//Constructor to create events within a calendar
function CalEvent(input) {

	this.id = input.id;
	this.eventName = input.title;
	this.date = new Date(2023, input.month - 1, input.day, input.hours, input.minutes);
	this.startTime = input.hours + (input.minutes/60);
}

//Constructor to create new calendars
function Calendar(name) {

	//variables to be used throughout the program
	this.events = [];
	this.idNum = 0;
	this.name = name;

	//functions to edit & update calendar
	this.addEvent = function(input) {

		input.id = this.idNum++;

		let event = new CalEvent(input);

		this.events = [...this.events, event];
		this.listEvents();
		this.addToStorage(this.name, this.events); //add to local storage
	};

	//functions to manage local storage

	this.addToStorage = function(key, value) {
		const stringifiedValue = JSON.stringify(value);

		localStorage.setItem(key, stringifiedValue);
	};

	this.getFromStorage = function() {
		const value = localStorage.getItem(this.name);

		const parsedValue = JSON.parse(value);

		console.log(parsedValue);
		return parsedValue;

	};

	//other functions

	this.listEvents = function() {
		console.log(this.events);
		//this doesn't need to retrieve from local storage bc that's done on initialize + addEvent
	};

	this.initialize = function() {
		if ( localStorage.getItem(this.name)) { //if there's data in local storage
			this.events = localStorage.getItem(this.name); //then get those events and add them
		}

		this.listEvents();
	};

	this.initialize();
}

// create local storage functions to work inside the calendar constructor
// create all the event calendar functionality inside the calendar constructor

//App is initialized - now start interacting with it

//example - a user submits a calendar event via form
const data = {
	title: "party",
	month: 10,
	day: 10,
	hours: 15,
	minutes: 0
}

const data1 = {
	title: "party",
	month: 10,
	day: 10,
	hours: 15,
	minutes: 0
}

const data2 = {
	title: "party",
	month: 10,
	day: 10,
	hours: 15,
	minutes: 0
}

const newCal = new Calendar('test calendar');

newCal.getFromStorage();

//functions to add to constructor



function deleteFromStorage(key) {
	localStorage.removeItem(key);
}

function clearStorage() {
	localStorage.clear();
}

// addToStorage, getFromStorage, deleteFromStorage, clearStorage
// addEvent, cancelEvent, rescheduleEvent, renameEvent, alreadyHappened





// const eventCalendar = {

// 	events: [],
// 	idNum : 0,
// 	print(note = "") {
// 		console.log(`--- ${note}`);
// 		console.log(`events: `, this.events);	
// 	},

// 	addEvent(title, month, day, hours, minutes, context) {
	
// 		let event = new CalEvent(title, month, day, hours, minutes, eventCalendar);

// 		this.events = [...this.events, event];
// 		this.print(`scheduled ${title}`);
// 	},

// 	cancelEvent(id) {
// 		this.print(`canceled ${this.events[id].eventName}`);
// 		this.events.splice(id, 1);
// 	},

// 	rescheduleEvent(id, newMonth, newDay, newHours, newMinutes) {
// 		var newDate = new Date(2023, newMonth - 1, newDay, newHours, newMinutes);
// 		var message = `rescheduled ${this.events[id].eventName} from ${this.events[id].date.toLocaleString('en-US')} to ${newDate.toLocaleString('en-US')}`;

// 		this.events[id].date = new Date(2023, newMonth - 1, newDay, newHours, newMinutes);

// 		this.print(message);
// 	},

// 	alreadyHappened(id){
// 		this.events[id].alreadyHappened = true;
// 	},

// 	renameEvent(id, newValue) {	
// 		var message = `renamed "${this.events[id].eventName}" to "${newValue}" on the calendar`;
		
// 		this.events[id].eventName = newValue;

// 		this.print(message);
// 	}
// }

// eventCalendar.addEvent('Movie Night', 9, 9, 9, 30);
// eventCalendar.rescheduleEvent(0, 10, 10, 10, 30);
// eventCalendar.addEvent('Trivia', 11, 15, 18, 0);
// eventCalendar.renameEvent(1, 'Game Night');
// console.log(eventCalendar.events[1].date.toLocaleTimeString('en-US'));
// eventCalendar.addEvent('Study block', 10, 4, 13, 45);
// eventCalendar.addEvent('Grounded - stay at home', 10, 10, 10, 30);
// eventCalendar.cancelEvent(0);