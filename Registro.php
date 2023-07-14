<?php

 include("Conexion.php");

 
if (isset($_POST['RegistroPerfilUsuarios'])) {
    if(

        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['Cedula']) >= 1 &&
        strlen($_POST['Edad']) >= 1 &&
        strlen($_POST['correo']) >= 1 &&
        strlen($_POST['password']) >= 1 
)  { 

    $nombre = trim($_POST['nombre']);
    $Cedula = trim($_POST['Cedula']);
    $Edad = trim($_POST['Edad']);
    $correo = trim($_POST['correo']);
    $password = trim($_POST['password']);
    $fecha = date('d/m/y');

    $insertar= "INSERT INTO RegistroPefilUsuarios(nombre,Cedula,Edad,correo,contraseña,fecha,)

         VALUES('$nombre','$Cedula','$Edad','$correo','$password','$fecha')";

         $resultado = mysqli_query($conexion,$insertar);
            
         if($resultado){

                echo "<script> alert('TU informacion se Guardo Correctamente');
                    window.location='/'</script> ";
            }else{

                echo "<script> alert('TU informacion NO se Guardo con exito); window.history.go(-1); </script>";  
                       
                      
                          
                  
            }
        }         
    }   
?>