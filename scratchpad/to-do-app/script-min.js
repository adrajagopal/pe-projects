var tweets=[],lastId=0;function addTweet(){var t={id:"t"+lastId++,username:username,handle:handle,profilePic:profilePic,content:content,flagged:!1};tweets=[...tweets,t],usernameInput.value="",handleInput.value="",contentInput.value=""}function showTweet(t){return`\n\t\t<li data-id="${t.id}">\n\t\t\t<tweet-card class="${t.flagged?"flagged":""}">\n\t\t\t\t<picture class="profile-photo">\n\t\t\t\t\t<img src="images/${t.profilePic}" alt="">\n\t\t\t\t</picture>\n\n\t\t\t\t<div class="identity">\n\t\t\t\t\t<p class="author">${t.username}</p>\n\t\t\t\t\t<p class="handle">@${t.handle}</p>\n\t\t\t\t</div>\n\n\t\t\t\t<p class="tweet-body">${t.content}</p>\n\n\t\t\t\t<div class="actions">\n\t\t\t\t\t<button class="hide">\n\t\t\t\t\t\t<picture>\n\t\t\t\t\t\t\t<img src="images/hide-content.svg" alt="Hide tweet">\n\t\t\t\t\t\t</picture>\n\t\t\t\t\t</button>\n\t\t\t\t\t<button class="flag">\n\t\t\t\t\t\t<picture>\n\t\t\t\t\t\t\t<img src="images/report-content.svg" alt="Flag tweet">\n\t\t\t\t\t\t</picture>\n\t\t\t\t\t</button>\n\t\t\t\t\t<button class="dox">\n\t\t\t\t\t\t<picture>\n\t\t\t\t\t\t\t<img src="images/dox.svg" alt="Dox author">\n\t\t\t\t\t\t</picture>\n\t\t\t\t\t</button>\n\t\t\t\t</div>\n\t\t\t</tweet-card>\n\t\t</li>\n\t`}function showFeed(){let t="<ul class='postFeed'>";tweets.forEach((function(e){t+=showTweet(e)})),t+="</ul>",output.innerHTML=t}function hideTweet(t){const e=tweets.filter((function(e){return e.id!=t}));tweets=[...e],showFeed()}function flagTweet(t){const e=tweets.find((function(e){return e.id===t}));e.flagged=!e.flagged,showFeed()}function doxUser(t){const e=tweets.find((function(e){return e.id===t}));alert(`The author of this tweet is ${e.username}. FUCK UP THEIR LIFE!!!!`)}const form=document.querySelector("form"),output=document.querySelector("output");var usernameInput=form.querySelector("#username"),handleInput=form.querySelector("#handle"),profilePicInput=form.querySelector("#profile-pic"),contentInput=form.querySelector("#content");let username=null,handle=null,profilePic=null,content=null;form.addEventListener("submit",(function(t){t.preventDefault(),username=usernameInput.value,handle=handleInput.value,profilePic=profilePicInput.value,content=contentInput.value,username&&handle&&profilePic&&content?(addTweet(),showFeed()):alert("Please fill out all the fields")})),output.addEventListener("click",(function(t){if("hide"===t.target.className){hideTweet(t.target.closest("li").dataset.id)}if("dox"===t.target.className){doxUser(t.target.closest("li").dataset.id)}if("flag"===t.target.className){flagTweet(t.target.closest("li").dataset.id)}}));