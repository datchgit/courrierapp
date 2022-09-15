let btn_logout = document.getElementById('btn-logout')


if(btn_logout!=null){

    btn_logout.addEventListener('click',function e(){
        event.preventDefault();
        document.forms['form-logout'].submit();
    })
}



