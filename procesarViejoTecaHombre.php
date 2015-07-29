<?php

$camisa = filter_input(INPUT_POST, 'camisa');
$pantalon = filter_input(INPUT_POST, 'pantalon');
$zapatos = filter_input(INPUT_POST, 'Zapatos');
if(($camisa=="Seria manga larga" or $camisa=="Seria manga corta") and $pantalon=="De tela" and $zapatos=="En Cuero"){
    echo "Usted cumple con todos los requisitos, bienvenido a la viejoteca!";
                                                                                                                    }
else{echo "Lo sentimos, su atuendo no es el adecuado";}
