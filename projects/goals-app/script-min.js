import{createElementVar,$header,$main,$footer,database}from"./global.js";import{renderScreen,templates}from"./templates.js";import{renderView,setCurrentUser,clearCurrentUser,updateUsers,handleAccountCreation,handleSignIn,taskData,renderTaskOption,renderTaskOptionList,handleSunkTaskDefinition}from"./functions.js";$header.innerHTML="",$footer.innerHTML="",renderView($main,templates,"defineSunkTasks"),setCurrentUser({username:"derek",password:"1234"},database);let users=[{username:"derek",password:"1234"},{username:"santa",password:"claus"}];window.addEventListener("click",(function(e){if(e.target.matches("[data-view]")){const t=e.target.dataset.view;console.log(t),renderView($main,templates,t)}})),window.addEventListener("submit",(function(e){if(e.preventDefault(),e.target.matches("[data-form]")){const a=e.target.dataset.form,n=createElementVar("form");var t=null;if("createAccount"===a)!0===(t=handleAccountCreation(n,users,database))&&setTimeout((function(){renderView($main,templates,"newUserWelcome")}),2e3);else if("signIn"===a)!0===(t=handleSignIn(n,users,database))&&renderView($main,templates,"home");else if("defineSunkTasks"===a)!0===(t=handleSunkTaskDefinition(n,database))&&renderScreen({template:"estimateSunkTasks",dynamic:!0});else if("estimateSunkTasks"===a)!0===t&&renderView($main,templates,"goalsInstructions");else{const t=e.target.dataset.view;renderView($main,templates,t)}}}));