
let sousdirections=document.getElementsByName('sousdirection[]');
let suivant_btn= document.getElementById('next');
let div = document.getElementById('services');



let sousdirections_service_table= new Array(sousdirections.length); 

 
sousdirections.forEach((element , index )=> { 
    element.addEventListener('change',()=>{
        if(element.checked==true){
            const xhr = new XMLHttpRequest();
            // Initialize the request
            xhr.open("GET", `/sousdirection/services/${element.value}`);
            // Send the request
            xhr.send();
            // Fired once the request completes successfully 
            xhr.onload = function(e) {
                // Check if the request was a success
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    // Get and convert the responseText into JSON
                    var response = JSON.parse(xhr.responseText); 
                    
                    if((sousdirections_service_table[index] == undefined)){
                        sousdirections_service_table[index]=response;
                        addlist(sousdirections_service_table[index],"services",index)
                      }                     
                   
                   
                   
                    }
                    
            }
               
            //create service 

          
        }else{
           
           
            console.log(div);
            delete sousdirections_service_table[index]
            removeList("services",index);
            console.log(sousdirections_service_table);
        }

        
    })
   
});


function addlist(element,table,index){
        let liste = document.createElement('ul');
        liste.setAttribute('class',"row g-3");
        liste.setAttribute('id',`${table}${index}`);
        liste.innerHTML = `<p></p>`;
        for(let i=0 ; i < element.length ; i++ ){
            //console.log(element[i]);
            let item = document.createElement('li');
            item.setAttribute('class','col-6')
            let label = document.createElement('label');
            label.innerText = element[i].nom
            let input = document.createElement('input');
            input.type = "checkbox";
            input.value=element[i].id;
            item.appendChild(input);
            item.appendChild(label);
            liste.appendChild(item);
            div.appendChild(liste);
            console.log(div)
        }
}


function removeList(table,index){
 
    let dellist = document.getElementById(`${table}${index}`);
    div.removeChild(dellist);
        
}

