import{createElementVar}from"./global.js";export const taskData=[{name:"sleep"},{name:"commute"},{name:"eat"},{name:"clean"}];export function renderTaskOption(e){return`\n\t\t<li class="pill">\n\t\t\t<label for="${e.name}">${e.name}</label>\n\t\t\t<input id="${e.name}" type="checkbox">\n\t\t</li>\n\t`}export function renderTaskOptionList(e){var t='<ul class="taskOptionList">';return e.forEach((function(e){t+=renderTaskOption(e)})),t+="</ul>"}export function handleSunkTaskDefinition(e,t){var n=[...e.querySelectorAll(":checked")].map((function(e){return e.id}));return t.setItem("selectedTasks",JSON.stringify(n)),!0}export function renderTaskIncrementer(e){return`\n\t\t<li>\n\t\t\t<label for="${e}">${e}</label>\n\t\t\t<input id="${e}" type="number" min=1 required>\n\t\t</li>\n\t`}export function renderTaskIncrementerList(e,t){const n=getListFromDatabase(e,t);let r='<ul class="taskIncrementerList">';return n.forEach((function(e){r+=renderTaskIncrementer(e)})),r+="</ul>",r}export function handleSunkTaskEstimation(e,t,n){let r=getListFromDatabase(e,n),a=[];return r.forEach((function(e){a=[...a,{task:e,value:t.querySelector(`#${e}`).value}]})),n.setItem("tasksWithTimes",JSON.stringify(a)),!0}export const goalData=[{name:"exercise"},{name:"diet"},{name:"relaxation"},{name:"career"},{name:"relationships"}];export function renderGoalOption(e){return`\n\t\t<li class="pill">\n\t\t\t<label for="${e.name}">${e.name}</label>\n\t\t\t<input id="${e.name}" type="checkbox">\n\t\t</li>\n\t`}export function renderGoalOptionList(e){var t='<ul class="goalOptionList">';return e.forEach((function(e){t+=renderGoalOption(e)})),t+="</ul>"}export function handleGoalDefinition(e,t){var n=[...e.querySelectorAll(":checked")].map((function(e){return e.id}));return t.setItem("selectedGoals",JSON.stringify(n)),!0}export function renderGoalIncrementer(e){return`\n\t\t<li>\n\t\t\t<label for="${e}">${e}</label>\n\t\t\t<input id="${e}" type="number" min=1 required>\n\t\t</li>\n\t`}export function renderGoalIncrementerList(e,t){const n=getListFromDatabase(e,t);let r='<ul class="goalIncrementerList">';return n.forEach((function(e){r+=renderGoalIncrementer(e)})),r+="</ul>",r}export function handleGoalEstimation(e,t,n){let r=getListFromDatabase(e,n),a=[];return r.forEach((function(e){a=[...a,{goal:e,value:t.querySelector(`#${e}`).value}]})),n.setItem("goalsWithTimes",JSON.stringify(a)),!0}function sumValues(e,t){let n=getListFromDatabase(e,t),r=[];return n.forEach((function(e){r=[...r,Number(e.value)]})),r.reduce(((e,t)=>e+t),0)}export function summarizeResults(e,t,n){let r=sumValues(e,n),a=sumValues(t,n),s=r+a,o=24-s,u="";return u=o>0?`You have a buffer of ${o} hours in your day.`:`You're ${o} hours short in your day.`,{taskSum:r,goalSum:a,totalTime:s,timeDiff:o,surplusMessage:u}}export function renderView(e,t,n){e.innerHTML=t[n]}export function getListFromDatabase(e,t){var n=t.getItem(e);return JSON.parse(n)}export function setCurrentUser(e,t){t.setItem("currentUser",e.username),createElementVar("header inner-column").innerHTML=`\n\t\t<p class="small-voice currentUser">Account: ${t.getItem("currentUser")}</p>\n\t\t\t`}export function clearCurrentUser(e){e.setItem("currentUser",null)}export function updateUsers(e,t){let n=JSON.stringify(e);t.setItem("users",n)}export function handleAccountCreation(e,t,n){let r=e.querySelector("#username"),a=e.querySelector("#password");const s=r.value,o=a.value;if(s&&o){let e={username:s,password:o};if(!t.find((function(t){return t.username===e.username})))return t=[...t,e],setCurrentUser(e,n),updateUsers(t,n),r.value="",a.value="",!0;alert("choose another username")}}export function handleSignIn(e,t,n){let r=e.querySelector("#username"),a=e.querySelector("#password");const s=r.value,o=a.value;if(s&&o){let e={username:s,password:o};var u=t.find((function(t){return t.username===e.username}));if(u){if(u.password===e.password)return setCurrentUser(e,n),alert("success!"),!0;alert("The password you entered does not match the username")}else alert("the username you entered does not exist")}else alert("please enter a username and password")}