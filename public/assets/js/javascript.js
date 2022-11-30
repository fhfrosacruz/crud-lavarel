(function(win,doc){
    'use strict';

    function confirmDel(event){

        event.preventDefault();
        //console.log(event.target.parentNode.href);
        const token = doc.getElementsByName("_token")[0].value;

        if(confirm("Deseja mesmo apagar?")){
            const ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange = function(){

                if(ajax.readyState === 4 && ajax.status === 200){
                    //console.log('deu certo');
                    win.location.href="/";
                }
            };
            ajax.send();
            
        }else{
            return false;
        }

    }

    if(doc.querySelector('.del_for_js')){
        const btn = doc.querySelectorAll('.del_for_js');

        for(let i=0; i < btn.length; i++){
            btn[i].addEventListener('click', confirmDel, false);
        }
    }

})(window,document)