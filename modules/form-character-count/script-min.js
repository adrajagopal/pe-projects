console.clear();const $form=document.querySelector("form"),$input=document.querySelector("textarea"),$button=document.querySelector("button"),$output=document.querySelector("output");function createWordArray(t){return t.split(" ")}function countWords(t){return t.length}function renderMessage(t){$output.innerHTML=`\n\t\t<p class="small-voice"> ${t}words</p>\n\t\t<p class="small-voice">This is more of a venting tool...you can't actually submit your complain. Let it out, though!</p>\n\t`}function handleForm(){return countWords(createWordArray($input.value))}$button.classList.add("hiddenByJS"),$form.addEventListener("submit",(function(t){t.preventDefault()})),$input.addEventListener("input",(function(){console.log(handleForm()),handleForm()}));