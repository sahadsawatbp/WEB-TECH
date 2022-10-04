function AddToCart1(){
    let order = document.getElementById("orderlist");
    let elem = document.createElement("div");
    elem.setAttribute("class", "panel-body");
    let txt = document.createTextNode("แซลมอนซาชิมิ");
    let elem1 = document.createElement("div");
    elem1.setAttribute("class", "pull-right");
    let txt1 = document.createTextNode("x1");
    elem1.appendChild(txt1);
    elem.appendChild(txt);
    elem.appendChild(elem1);
    order.appendChild(elem);
}

function AddToCart2(){
    let order = document.getElementById("orderlist");
    let elem = document.createElement("div");
    elem.setAttribute("class", "panel-body");
    let txt = document.createTextNode("กระเพราหมูกรอบ");
    let elem1 = document.createElement("div");
    elem1.setAttribute("class", "pull-right");
    let txt1 = document.createTextNode("x1");
    elem1.appendChild(txt1);
    elem.appendChild(txt);
    elem.appendChild(elem1);
    order.appendChild(elem);
}

function AddToCart3(){
    let order = document.getElementById("orderlist");
    let elem = document.createElement("div");
    elem.setAttribute("class", "panel-body");
    let txt = document.createTextNode("ชาเขียว");
    let elem1 = document.createElement("div");
    elem1.setAttribute("class", "pull-right");
    let txt1 = document.createTextNode("x1");
    elem1.appendChild(txt1);
    elem.appendChild(txt);
    elem.appendChild(elem1);
    order.appendChild(elem);
}