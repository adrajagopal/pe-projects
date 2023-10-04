const eventCalendar = {

	events: [],
	idNum : 0,
	print: function(note = "") {
		console.log(`--- ${note}`);
		console.log(`events: `, this.events);	
	},

	addEvent: function(title, month, day, hours, minutes) {
		var event = {
			id : `event${this.idNum++}`,
			eventName : title,
			date : new Date(2023, month - 1, day, hours, minutes),
			startTime : hours+(minutes/60)
		};
		this.events = [...this.events, event];
		this.print(`scheduled ${title}`);
	},

	cancelEvent: function(id) {
		this.print(`canceled ${this.events[id].eventName}`);
		this.events.splice(id, 1);
	},

	rescheduleEvent : function(id, newMonth, newDay, newHours, newMinutes) {
		var newDate = new Date(2023, newMonth - 1, newDay, newHours, newMinutes);
		var message = `rescheduled ${this.events[id].eventName} from ${this.events[id].date.toLocaleString('en-US')} to ${newDate.toLocaleString('en-US')}`;

		this.events[id].date = new Date(2023, newMonth - 1, newDay, newHours, newMinutes);

		this.print(message);
	},

	alreadyHappened: function(id){
		this.events[id].alreadyHappened = true;
	},

	updateEvent: function(id, newValue) {	
		var message = `changed "${this.events[id].eventName}" to "${newValue}" on the calendar`;
		
		this.events[id].eventName = newValue;

		this.print(message);
	}
}

eventCalendar.addEvent('Movie Night', 9, 9, 9, 30);
eventCalendar.rescheduleEvent(0, 10, 10, 10, 30);
eventCalendar.addEvent('Trivia', 11, 15, 18, 0);
console.log(eventCalendar.events[1].date.toLocaleTimeString('en-US'));

