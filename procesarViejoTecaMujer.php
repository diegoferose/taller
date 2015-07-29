<?php

$blusa = filter_input(INPUT_POST, 'blusa');
$pantalon = filter_input(INPUT_POST, 'pantalon');
$zapatos = filter_input(INPUT_POST, 'Zapatos');

if($blusa=="Blusa escotada" and ($pantalon=="Falda corta" or $pantalon=="Pantalon de tela")and ($zapatos=="Tacones" or $zapatos=="Serio cerrado")){
    echo "Usted cumple con todos los requisitos, bienvenida a la viejoteca!";
                         }
 else {
    
    echo "Lo sentimos, su atuendo no es el adecuado";
      }                         

