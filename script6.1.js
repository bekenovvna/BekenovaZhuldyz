//strike
function clickF(){
    this.parentNode.setAttribute("data-status", "done");
 }

let divItems = document.querySelectorAll("#tasks button")


for (var i = 0; i <divItems.length;i++){
    divItems[i].addEventListener("click",clickF)
}