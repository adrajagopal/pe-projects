function CalEvent(title, month, day, hours, minutes, context) {

	this.id = `a${context.idNum++}`;
	this.eventName = title;
	this.date = new Date(2023, month - 1, day, hours, minutes);
	this.startTime = hours + (minutes/60);

}

const eventCalendar = {

	events: [],
	idNum : 0,
	print(note = "") {
		console.log(`--- ${note}`);
		console.log(`events: `, this.events);	
	},

	addEvent(title, month, day, hours, minutes, context) {
	
		let event = new CalEvent(title, month, day, hours, minutes, eventCalendar);

		this.events = [...this.events, event];
		this.print(`scheduled ${title}`);
	},

	cancelEvent(id) {
		this.print(`canceled ${this.events[id].eventName}`);
		this.events.splice(id, 1);
	},

	rescheduleEvent(id, newMonth, newDay, newHours, newMinutes) {
		var newDate = new Date(2023, newMonth - 1, newDay, newHours, newMinutes);
		var message = `rescheduled ${this.events[id].eventName} from ${this.events[id].date.toLocaleString('en-US')} to ${newDate.toLocaleString('en-US')}`;

		this.events[id].date = new Date(2023, newMonth - 1, newDay, newHours, newMinutes);

		this.print(message);
	},

	alreadyHappened(id){
		this.events[id].alreadyHappened = true;
	},

	renameEvent(id, newValue) {	
		var message = `renamed "${this.events[id].eventName}" to "${newValue}" on the calendar`;
		
		this.events[id].eventName = newValue;

		this.print(message);
	}
}

eventCalendar.addEvent('Movie Night', 9, 9, 9, 30);
eventCalendar.rescheduleEvent(0, 10, 10, 10, 30);
eventCalendar.addEvent('Trivia', 11, 15, 18, 0);
eventCalendar.renameEvent(1, 'Game Night');
console.log(eventCalendar.events[1].date.toLocaleTimeString('en-US'));
eventCalendar.addEvent('Study block', 10, 4, 13, 45);
eventCalendar.addEvent('Grounded - stay at home', 10, 10, 10, 30);
eventCalendar.cancelEvent(0);

