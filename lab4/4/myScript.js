function createCell(row,cell,i,j){
    let box1 = document.createElement("div");
    let box2 = document.createElement("div");
    box1.setAttribute("class","box1");
    box2.setAttribute("class","box2");
    cell = row.insertCell(-1);
    if((i%2) == 0 && (j%2) == 0){
        cell.appendChild(box1);
    }else if((i%2) == 0 && (j%2) == 1){
        cell.appendChild(box2);
    }else if((i%2) == 1 && (j%2) == 0){
        cell.appendChild(box2);
    }else if((i%2) == 1 && (j%2) == 1){
        cell.appendChild(box1);
    }
}


function AddElement(){
    let input = document.getElementById("input").value;
    let row,cell;
    let table = document.getElementById("table0");
    let input1 = input;
    for(let i=0;i<(input/8);i++){
        row = table.insertRow(-1);
        if(input1 > 8){
            for(let j=0;j<8;j++){
                createCell(row,cell,i,j);
            }
            input1 -= 8;
        }else{
            for(let j=0;j<input1;j++){
                createCell(row,cell,i,j);
            }
        }
    }
}
