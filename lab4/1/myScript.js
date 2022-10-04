function Calculate(){
    let x = document.getElementById("i1").value;
    let y = document.getElementById("i2").value;
    let v1 = document.createElement("p");
    document.getElementById("result").innerHTML = "Result : "+ (parseInt(x)+parseInt(y));
    let parent1 = document.getElementById("div1");
    parent1.appendChild(v1);
    let txt = document.createTextNode(x + " + " + y + " = " + (parseInt(x)+parseInt(y)));
    v1.appendChild(txt);
}