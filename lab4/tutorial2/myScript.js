
        function addNode() {
            // <p>a new paragraph</p>
            let ptag = document.createElement("p");
            let txt = document.createTextNode("4. a new paragraph"+" sss");
            ptag.appendChild(txt);
            // select a parent node            
            let parent1 = document.getElementById("div1");
            parent1.appendChild(ptag); 
            
            /*  uncomment in step 2 **/
            // let childP1 = document.getElementById("p1");
            // parent1.insertBefore(ptag, childP1);
                       
        }
        function addNewImage() {
            // <img src="apples.jpg">
            let imgtag = document.createElement("img");
            let srcAttr = document.createAttribute("src");
            srcAttr.value ="apples.jpg";           
            imgtag.setAttributeNode(srcAttr);  
            // add to <body>
            document.body.appendChild(imgtag);                                   
        }
    
        function deleteNode() {
            let parent2 = document.getElementById("div1");
            let delPtag = document.getElementById("p1");
            parent2.removeChild(delPtag);
        }
