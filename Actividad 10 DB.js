console.log("loading javascript")

function sendform(){
    console.log("envio de formulario");

   let nameInfo = document.getElementById("nombre");

   let CedulaInfo = document.getElementById("Cedula");

    let EdadInfo = document.getElementById("Edad");

    let correoInfo = document.getElementById("correo");

   nameInfo = nameInfo.Value;
   CedulaInfo = CedulaInfo.Value;
   EdadInfo = EdadInfo.Value;
   correoInfo = correoInfo.Value;

   let personalInfo ={
   name:nameInfo,
   Cedula:CedulaInfo,
   Edad:EdadInfo,
   correo:correoInfo,

   }


alert("Tus datos fueron Guardados" + personalInfo.name + " y Cedula " + personalInfo.Cedula); 



let buttonform = document.getElementById("botons");
buttonform.addEventListener("click",sendform);


}

