const  axios  = require('axios');
const { message } = require('laravel-mix/src/Log');

require('./bootstrap');

/*
const form = document.getElementById('form');

const inputMessage= document.getElementById('input-message');

const boxMessage = document.getElementById('box-message');

form.addEventListener('submit',function e(){

    event.preventDefault();
    const userInput = inputMessage.value ;
    axios.post('/chat-message',{
        message : userInput
    })
  
});
*/

const channel = Echo.channel('public.sendMails.1');

channel.subscribed(()=>{
    console.log('subcribed');
}).listen('.send-mails',(event)=>{
    console.log(event);
   /* const t = document.createElement('li');
    t.textContent = event.message;
    
    boxMessage.append(t);
    */
    location.reload()
})