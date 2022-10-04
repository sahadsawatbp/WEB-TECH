var i = 1;
function change(){
    let pic1 = document.getElementById("p1");
    let pic2 = document.getElementById("p2");
    let pic3 = document.getElementById("p3");
    let pic4 = document.getElementById("p4");
    if(i == 1){
        pic1.style.transform = "translateX(205px)";
        pic2.style.transform = "translateY(205px)";
        pic3.style.transform = "translateY(-205px)";
        pic4.style.transform = "translateX(-205px)";
        i++;
    }
    else if(i == 2){
        pic1.style.transform = "translate(205px, 205px)";
        pic2.style.transform = "translate(-205px, 205px)";
        pic3.style.transform = "translate(205px, -205px)";
        pic4.style.transform = "translate(-205px, -205px)";
        
        i++;
    }
    else if(i == 3){
        pic1.style.transform = "translate(0, 205px)";
        pic2.style.transform = "translate(-205px, 0)";
        pic3.style.transform = "translate(205px, 0)";
        pic4.style.transform = "translate(0, -205px)";
        i++;
    }
    else if(i == 4){
        pic1.style.transform = "translate(0, 0)";
        pic2.style.transform = "translate(0, 0)";
        pic3.style.transform = "translate(0, 0)";
        pic4.style.transform = "translate(0, 0)";
        i = 1;
    }
}