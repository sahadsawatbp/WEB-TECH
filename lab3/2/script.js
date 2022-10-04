function onlyLetters(str) {
    return /^[ก-๛a-zA-Z]+$/.test(str);
  }

function checkForm(){
    let checkcard = document.forms.myForm.card.value;
    let checkname = document.forms.myForm.name.value;
    let checklastname =  document.forms.myForm.lastname.value;
    let checkgender = document.forms.myForm.gender.value;
    let checkaddress = document.forms.myForm.address.value;
    let checksubdistrict = document.forms.myForm.subdistrict.value;
    let checkdistrict = document.forms.myForm.district.value;
    let checkprovince = document.forms.myForm.province.value;
    let checkpost = document.forms.myForm.postid.value;
    if(checkcard.length != 13 || isNaN(checkcard)){
        alert("กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง");
        return false;
    }else if(checkgender == "000"){
        alert("กรุณาเลือกเพศ");
        return false;
    }else if(checkname.length < 2 || checkname.length > 20 || onlyLetters(checkname) != true){
        alert("กรุณากรอกชื่อให้ถูกต้อง");
        return false;
    }else if(checklastname.length < 2 || checklastname.length > 20 || onlyLetters(checklastname) != true){
        alert("กรุณากรอกนามสกุลให้ถูกต้อง");
        return false;
    }else if(checkaddress.length < 5){
        alert("กรุณากรอกที่อยู่ให้ถูกต้อง");
        return false;
    }else if(checksubdistrict.length < 2 || onlyLetters(checksubdistrict) != true){
        alert("กรุณากรอกตำบลให้ถูกต้อง");
        return false;
    }else if(checkdistrict.length < 2 || onlyLetters(checkdistrict) != true){
        alert("กรุณากรอกอำเภอให้ถูกต้อง");
        return false;
    }else if(checkprovince == "000"){
        alert("กรุณาเลือกจังหวัด");
        return false;
    }else if(checkpost.length != 5 || isNaN(checkpost)){
        alert("กรุณากรอกรหัสไปรษณีย์ให้ถูกต้อง");
        return false;
    }
}
