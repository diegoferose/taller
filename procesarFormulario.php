<?php
$nombre = filter_input(INPUT_POST, 'inputNombre');
$genero = filter_input(INPUT_POST, 'radio');
$edad =  filter_input(INPUT_POST, 'inputEdad');
 if($edad>= 18 and $edad < 22){
     echo "Hola : "+$nombre." bienvenido(a) a la Chiquiteca";
                              }
 if($edad>= 22 and $edad < 40){
     echo "Hola : "+$nombre." bienvenido(a) a la Discoteca";
                              }
 if(edad>=40){
     header('Location: entradaViejoteca.php');
             }
