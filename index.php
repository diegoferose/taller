<!DOCTYPE html> 
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>TALLER NUMERO 1</h2>
          <form action="procesarFormulario.php" method="post">
            <table>
                <tr>
                    <td>
                      <label for="inputNombre">Nombre</label>  
                    </td>
                    <td>
                      <input type="text" id="inputNombre" name="inputNombre" placeholder="Digite Nombre">  
                    </td>
                </tr>
                <tr>
                    <td>
                       <label>Sexo:  </label> 
                    </td>
                    <td>
                        <input type="radio" id="radioHombre" name="radio" value="Masculino"> Masculino
                        <input type="radio" id="radioMujer" name="radio" value="Femenimo"> Femenino
                    </td>
                </tr>
                <tr>
                    <td>
                       <label for="inputEdad">Edad</label> 
                    </td>
                    <td>
                       <input type="number" id="inputEdad" name="inputEdad" placeholder="Digite la edad"> 
                    </td>
                </tr>
                <tr>
                    <td>
                       <input type="submit" value="Enviar">  
                    </td>   
                </tr>
            </table> 
              
        </form>
    </body>
</html>

