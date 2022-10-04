function createCard(){
    let name = document.forms.myForm.name.value;
    let phone = document.forms.myForm.phone.value;
    let email = document.forms.myForm.email.value;
    let company = document.forms.myForm.company.value;
    if(name.length != 0) document.getElementById("p1").innerHTML = name; else {alert("Enter your name"); return false}
    if(phone.length != 0) document.getElementById("p2").innerHTML = phone; else {alert("Enter your phone number"); return false}
    if(email.length != 0) document.getElementById("p3").innerHTML = email; else {alert("Enter your e-mail"); return false}
    if(company.length != 0) document.getElementById("p4").innerHTML = company; else {alert("Enter your company"); return false}
}
