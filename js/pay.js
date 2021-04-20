/* eslint-env es6 */
/* eslint-disable */

const ccnum=document.getElementById('ccnum');
const month=document.getElementById('exMonth');
const year=document.getElementById('exYear');
const cvv=document.getElementById('cvv');
const btn=document.getElementById('btn');
btn.addEventListener('click', checkCard);

function checkCard(){
    
let cardNumberCheck;
let expiryDateCheck;
let cvvCheck;
let patt1 = /^(?:5[1-5][0-9]{14})$/;
let patt2= /^[0-9]{3,4}$/;
    
//card number check
if(ccnum.value.match(patt1)){
    cardNumberCheck = true;
} else {
    alert('Please check your card number'); 
    cardNumberCheck  = false;
}
    
// date check
let myDate = new Date();
if ((year.value>myDate.getFullYear())||((year.value==myDate.getFullYear())&&(month.value>myDate.getMonth()))){
    expiryDateCheck = true;
} else {
    alert('This card is expired'); 
    expiryDateCheck = false;
}
    
// security number check
if(cvv.value.match(patt2)){
   cvvCheck = true;
} else {
    alert('Please check your CVV'); 
    cvvCheck = false;
}
    
// if all 3 together
if((cardNumberCheck && expiryDateCheck && cvvCheck) == true){
document.getElementById("hidden").value = '1';
}
else {
document.getElementById("hidden").value = '-1';
}
}