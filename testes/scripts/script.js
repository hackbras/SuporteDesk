$(document).ready(function(){
    $("#nome").blur(function(){
       // $("#nome").show();
        if ($("#nome").length>=2) {
        $("#nome").css("border","1px solid red");    
        }else{
            $("#nome").css("border","1px solid red");    
        }
    })
})

function validacao() {   
    if (document.formulario.nome.value == "") 
    {
        //alert('if');
        alert("preencha o nome.");
        document.formulario.nome.focus();
    }
    else if(document.formulario.mensagem.value==0){
    
        //alert('if else');
        alert("preencha a mensagem.");
        document.formulario.mensagem.focus();
    } 
    else{
        //alert('else');
        document.formulario.method="post";
        document.formulario.submit();
        //alert(<?php echo $status;?>);    
    }
}


function teste(){
    alert('teste');
}