

//abrir y cerrar la caja de login
window.onload = function() {

    document.querySelector(".closed-box").addEventListener("click",closed_log);
    document.getElementById("closed-box").addEventListener("click",closed_redirect);

    document.getElementById("user_login").addEventListener("click",open_log);

    //abrir y cerrar caja de recuperar contraseña
    document.getElementById("get_pass").addEventListener("click",redirect);

}


function open_log(){
    document.querySelector(".box-container-log").style.display="block";
}

function closed_log(){
    document.querySelector(".box-container-log").style.display="none";  
    console.log("pulsaste2")
}

function closed_redirect(){
    document.querySelector(".box-container-rec").style.display="none";
}


function redirect(){
    document.querySelector(".box-container-rec").style.display="block";
    document.querySelector(".box-container-log").style.display="none";
}

