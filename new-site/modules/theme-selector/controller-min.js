import{palettes,body}from"./../../main.js";palettes.addEventListener("click",(function(e){if(e.target.matches(".color")){const t=document.querySelector(".palettes .active");let a=e.target.dataset.hue;document.cookie=`themeCode=${a}`,body.style.setProperty("--hue",a),t.classList.remove("active"),e.target.classList.add("active")}}));