function clearStorage(){localStorage.clear()}function CalEvent(t){this.id=t.id,this.eventName=t.title,this.date=new Date(2023,t.month-1,t.day,t.hours,t.minutes),this.startTime=t.hours+t.minutes/60}function Calendar(t){this.events=[],this.idNum=0,this.calendarKey=t;const e={title:"party",month:10,day:10,hours:15,minutes:0};this.addEvent=function(){e.id=this.idNum++;const t=new CalEvent(e);this.events=[...this.events,t],console.log(`event: ${t}`),this.listEvents(),this.saveEvents(this.events)},this.saveEvents=function(t){const e=JSON.stringify(t);localStorage.setItem(this.calendarKey,e)},this.deleteEvents=function(){localStorage.removeItem(this.calendarKey),console.clear(),this.events=[],this.saveEvents(),this.listEvents()},this.getFromStorage=function(){const t=localStorage.getItem(this.calendarKey),e=JSON.parse(t);return console.log(e),e},this.listEvents=function(){console.log(this.events)},this.initialize=function(){localStorage.getItem(this.calendarKey)&&(this.events=this.getFromStorage()),this.listEvents()},this.initialize()}const data1={title:"party",month:10,day:10,hours:15,minutes:0},data2={title:"party",month:10,day:10,hours:15,minutes:0},newCal=new Calendar("test calendar");