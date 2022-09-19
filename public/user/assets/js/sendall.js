

let inputSendAll = document.getElementById('send_all');

let label = document.getElementById('labelinputsendall');


let listinput = document.getElementsByName('courrier[]');



inputSendAll.addEventListener('change',function(){

   
    if((inputSendAll.checked==true)){

        for(i=0;i<listinput.length;i++){
            listinput[i].checked=true;
          
         }      
         label.textContent = "Tout décoher";
    }else{

        for(i=0;i<listinput.length;i++){
            listinput[i].checked=false; 
         }   
         label.textContent = "Tout coher";

    }
    
   

    
    
     
})

