//focus on the course input
document.getElementById('course').focus();
var validBool = false;
function checkForm(){
    
    resetBorders();
    var course= document.getElementById('course');
    var book= document.getElementById('book');
    var req = document.getElementById('request');
    var email = document.getElementById('email');
    var type = document.getElementsByName('type');
    validInt = 0;
    var rad= checkRadio(type);
    (rad != "false")? validInt++ :validBool=false; 
    (notEmpty(email.value))? validInt++:validBool =invalid(email);
    (notEmpty(req.value))? validInt++:validBool =invalid(req); 
    (notEmpty(book.value))? validInt++:validBool =invalid(book);
    (notEmpty(course.value))? validInt++:validBool = invalid(course); 
    
if (validInt == 5) {return true;}
else return false;
}
function checkRadio(type){
var valid=false;
var returnedVal;
    for (var i = 0; i < type.length; i++) {
        if (type[i].checked) {
            returnedVal = type[i].value;
            valid = true;
        }
    }
    if(valid){ return returnedVal; } 
    else {document.getElementsByTagName('fieldset')[0].style.border="2px solid red";
          return valid;}
}
function notEmpty(val){
    return (val != "" ); 
}
function invalid(element){
element.style.border="2px solid red";
element.focus();
return false;
}
function resetBorders(){
var inputs = document.getElementsByTagName('input');
var textareas = document.getElementsByTagName('textarea');
var fieldset = document.getElementsByTagName('fieldset');
clearBorder(inputs);
clearBorder(textareas);
clearBorder(fieldset);
}
function clearBorder(elements){
    for (var i = 0; i < elements.length; i++){
        elements[i].style.border="2px solid black";
    }
    }