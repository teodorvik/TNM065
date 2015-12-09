
function toggleClass(element){
	var toggleClass = "hidden";
    var currentClass = element.children[1].className;
    if(currentClass.indexOf(toggleClass) > -1){ //has class
		newClass = currentClass.replace(toggleClass,"")
   	}else{
      	newClass = currentClass + " " + toggleClass;
   	}
   	element.children[1].className = newClass;
}