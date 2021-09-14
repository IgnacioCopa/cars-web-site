//array que contienen el nombre de las imagenes
var image= ["img/Toyota Hilux.jpg","img/ecosport.jpg","img/Renault Duster Oroch.png"];
var i= 0;
//botones de las imagenes del (1er Slider)
var next;
var back;
//
var btnclick, Current_position=false, Mouse_x, Mouse_y;




//cuando la pagina termine de cargar se ejecutara el codigo
window.addEventListener('load', function()
{
    next= document.getElementById("next");
    back= document.getElementById("back");

    btnclick= document.getElementById("P_click");

    //ejecutar slider (MANUAL)
    next.addEventListener('click',slider_next);
    back.addEventListener('click',slider_back);
    
    //ejecutar en intervalos de 2s(AUTO_SLIDER)
    setInterval(slider,2000);

    //---------- MOVER EL (2DO SLIDER)------------

    
/*
    btnclick.addEventListener("mousemove",function(mousePosition){

        Mouse_x= mousePosition.x;
        Mouse_y= mousePosition.y;

        console.log(Mouse_x+" , "+Mouse_y);

        //btnclick.onmouseup = E_mouse;
          
        //btnclick.onmousedown = P_mouse(Mouse_x);
        
    });
*/
    
});


//pasar de imagenes (automatico)
function slider()
{
    if(i<image.length)
    {
        document.getElementById("image").src=image[i];
        i++;
    }
    else{
        i=0;
    }
  
}

//pasar de imagenes (manual "<")
function slider_back()
{
    if(i>0)
    {
        i--;
        document.getElementById("image").src=image[i];
    }

    else if(i<=0)
    {
        i=image.length-1;
        document.getElementById("image").src=image[i];
    }

}

//pasar de imagenes (manual ">")
function slider_next()
{

    if(i<image.length-1)
    { 
        i++;
        document.getElementById("image").src=image[i];  
    }

    else if(i ==image.length-1)
    {
        i=0;
        document.getElementById("image").src=image[i];
    }
}

//---------(2DO SLIDER)---------
/*
var P_mouse = function(Mouse_x)
{

    btnclick.style.transform= 'translateX('+(-Mouse_x/5)+'px)';
   
    
}

var E_mouse = function()
{

    btnclick.style.transform= 'translateX(0px)';

}
*/



