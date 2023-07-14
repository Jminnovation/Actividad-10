<?php

$n =$_POST[ 'nombre'];

$E  =$_POST['Edad'];

$D =$_POST["Dia"];

$M =$_POST["Mes"];

$A =$_POST["AÑO"];

$C =$_POST["Cedula"];

$c =$_POST["correo"];


echo "TU, nombre es : ",$n," :

Tu, correo es : ",$c,"

Tu, Fecha de Nacimiento es : ",$D,"/ ",$M," /",$A," 

Tu, Cedula es : ",$C,"

Su, edad es : ",$E," Años";


$dia_actual= date("d");
$mes_actual= date("m");
$año_actual= date("Y");

?>

</br>

<?php

$E = $año_actual - $A;


if($mes_actual < $M){
  $E--;

}

elseif($mes_actual == $M){
if($dia_actual < $D){
  $E--;
  
}

}

echo "HOY ES EL : ",$dia_actual."/".$mes_actual."/".$año_actual;

?>

</br >

<?php

  if($E >= 18){
      
      echo "TU Edad Real Es : ".$E." Años, ! Por lo Tanto Eres mayor de edad.";
 }
else{ 
    
  echo "TU Edad Real Es : ".$E." Años, ! Por lo Tanto  NO Eres mayor de edad.";
  }
 

?>