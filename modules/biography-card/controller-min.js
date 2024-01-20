import{bios}from"./bioData.js";const form=document.querySelector(".controlsForm"),bioCard=document.querySelector("biography-card");function renderBio(t){return`\n\t\t<picture>\n\t\t\t<img src="images/${t.portrait}" alt="${t.alt}">\n\t\t</picture>\n\n\t\t<ul class="medium-voice bio-attributes">\n\t\t\t<li>\n\t\t\t\t<h3><strong>Type: </strong>${t.type}</h3>\n\t\t\t</li>\n\t\t\t<li>\n\t\t\t\t<h3><strong>Interests: </strong>${t.interests}</h3>\n\t\t\t</li>\n\t\t</ul>\n\n\t\t<text-content>\n\t\t\t<h3 class="large-voice">Biography:</h3>\n\n\t\t\t<p>${t.bioParagraph}</p>\n\n\t\t\t<p>${t.bioClosingSentence}</p>\n\t\t</text-content>\n\n\t\t<a class="button" href="?page=work">See his work</a>\n\t`}form.addEventListener("input",(function(t){let n=bios.find((function(n){return t.target.id===n.version}));bioCard.innerHTML=renderBio(n)}));