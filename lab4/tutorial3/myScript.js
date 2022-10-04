
function myFunction(){
    let table = document.getElementById('table0');
    for (let ln = 0; ln < 5; ln++ ) {
    let row = table.insertRow(-1); //Row position 0,1,2,...,n  -1 = last
    let cell, text, tnode;
        
    for (let i = 0; i < 3; i++) {
        // create a new column
        cell = row.insertCell(-1);
        text = row.rowIndex + ', ' + i;
        tnode = document.createTextNode(text);
        // add TextNode to column
        cell.appendChild(tnode);
    }    
    }
}