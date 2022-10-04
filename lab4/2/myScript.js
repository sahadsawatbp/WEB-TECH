var i = 1;
function ChangeLanguage(){
    if(i == 1){
        document.getElementById("l1").innerHTML = "First Name : ";
        document.getElementById("l2").innerHTML = "Last Name : ";
        document.getElementById("l3").innerHTML = "Country : ";
        document.getElementById("o0").innerHTML = "Select a country : ";
        document.getElementById("o1").innerHTML = "Thailand";
        document.getElementById("o2").innerHTML = "Vietnam";
        document.getElementById("o3").innerHTML = "Laos";
        document.getElementById("o4").innerHTML = "Malaysia";
        document.getElementById("o5").innerHTML = "Singapore";
        document.getElementById("o6").innerHTML = "Philippines";
        document.getElementById("o7").innerHTML = "Myanmar";
        document.getElementById("o8").innerHTML = "Cambodia";
        document.getElementById("o9").innerHTML = "Brunei";
        document.getElementById("button").innerHTML = "Change to Thai";
        i = 0;
    }else if(i == 0){
        document.getElementById("l1").innerHTML = "ชื่อ : ";
        document.getElementById("l2").innerHTML = "นามสกุล : ";
        document.getElementById("l3").innerHTML = "ประเทศ : ";
        document.getElementById("o0").innerHTML = "เลือกประเทศ : ";
        document.getElementById("o1").innerHTML = "ไทย";
        document.getElementById("o2").innerHTML = "เวียดนาม";
        document.getElementById("o3").innerHTML = "ลาว";
        document.getElementById("o4").innerHTML = "มาเลเซีย";
        document.getElementById("o5").innerHTML = "สิงคโปร์";
        document.getElementById("o6").innerHTML = "ฟิลิปปินส์";
        document.getElementById("o7").innerHTML = "เมียนมาร์";
        document.getElementById("o8").innerHTML = "กัมพูชา";
        document.getElementById("o9").innerHTML = "บรูไน";
        document.getElementById("button").innerHTML = "เปลี่ยนเป็นภาษาอังกฤษ";
        i = 1;
    }
}