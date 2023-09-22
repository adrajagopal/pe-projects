console.clear();const $form=document.querySelector("form"),$output=document.querySelector("output"),colorCheckbox=document.querySelector('[name="colorSelector"]'),lengthFeetInput=document.querySelector('[name="lengthFeet"]'),lengthInchesInput=document.querySelector('[name="lengthInches"]'),widthFeetInput=document.querySelector('[name="widthFeet"]'),widthInchesInput=document.querySelector('[name="widthInches"]');function convertToFloat(e,t){return Number(e)+Number(t)/12}function calculateArea(e,t){return e*t}function calculateGallons(e){return Math.ceil(e/350)}function clearMessage(){$output.innerHTML=""}function renderMessage(e,t){let n=`Your room is ${e} square feet, so you'll only need ${t} gallon to paint it.`;t>1&&(n=`Your room is ${e} square feet, so you'll need ${t} gallons to paint it.`),$output.innerHTML=`<p class="form-result">${n}</p>`}function handleForm(){const e=calculateArea(convertToFloat(lengthFeetInput.value,lengthInchesInput.value),convertToFloat(widthFeetInput.value,widthInchesInput.value));renderMessage(e,calculateGallons(e))}$form.addEventListener("submit",(function(e){e.preventDefault(),lengthFeetInput&&lengthInchesInput&&widthFeetInput&&widthInchesInput?handleForm():alert("Please enter all values.")})),colorCheckbox.addEventListener("click",(function(){colorCheckbox.checked?$output.innerHTML='<div class="color-picker">Choose your color</div>':$output.innerHTML=""})),window.addEventListener("click",(function(e){e.target.matches(".color-picker")}));