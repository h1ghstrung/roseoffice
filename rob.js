// Rose Office Building JS
// rob.js
var myForm = document.getElementById('formSubmission');
var theData = new FormData();

function placeOrder(form){
    form.submit(myForm);
    theData.append(form.usrname, form.usrname.value);
    theData.append(form.email, form.email.value);
    theData.append(form.phone, form.phone.value);
    alert(`Thank you for your interest. We will contact you soon.`)
}
