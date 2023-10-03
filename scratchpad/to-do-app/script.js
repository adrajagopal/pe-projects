const events = [];
var idNum = 0;


function print(note = "") {
	console.log(`--- ${note}`);
	console.log(`events: `, events);
}


function add(content) {
	var event = {
		id : `event${idNum++}`,
		event : content
	};
	events.push(event);
	print(`added ${content}`);
}

function remove(id) {
	print(`removed ${events[id].content}`);
	events.splice(id, 1);
}

function alreadyHappened(id) {
	events[id].alreadyHappened = true;
}

function update(id, newValue) {

	var message = `changed "${events[id].event}" to "${newValue}" to the calendar`;
	
	events[id].event = newValue;

	print(message);

}

add("dinner");
add("coffee date");
add("birthday party");
add("networking event");

update(2, "SURPRISE party");

