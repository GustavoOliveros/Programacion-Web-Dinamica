let nombre = document.getElementById("nombre").innerText;

let codigo = document.getElementById("codigo").innerText;

let enlaces = document.querySelectorAll(".card-body a");

let href, arreglo;

let activo = false;

document.getElementById("boton-label").addEventListener("click", () => {   
    if(!activo){
        enlaces.forEach((enlace) => {
            href = enlace.getAttribute("href");
            href += "&nombre="+nombre;
            enlace.setAttribute("href",href);
        });
        activo = true;
    }else{
        enlaces.forEach((enlace) => {
            href = enlace.getAttribute("href");
            arreglo = href.split("&");
            enlace.setAttribute("href", arreglo[0]);
        });
        activo = false;
    }

});