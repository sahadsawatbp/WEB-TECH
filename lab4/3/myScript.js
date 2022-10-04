var i = 1;
function InsertInfo(){
    let table = document.getElementById("table0");
    let id = document.getElementById("i1").value;
    let name = document.getElementById("i2").value;
    let surname = document.getElementById("i3").value;
    let row = table.insertRow(-1);
    let cell,text,tnode;
    cell = row.insertCell(-1);
    text = i;
    tnode = document.createTextNode(text);
    cell.appendChild(tnode);
    cell = row.insertCell(-1);
    text = id;
    tnode = document.createTextNode(text);
    cell.appendChild(tnode);
    cell = row.insertCell(-1);
    text = name;
    tnode = document.createTextNode(text);
    cell.appendChild(tnode);
    cell = row.insertCell(-1);
    text = surname;
    tnode = document.createTextNode(text);
    cell.appendChild(tnode);
    i++;
}