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
        <h1>USTED ESTA A UN PASO DE ENTRAR</h1>
          <form action="procesarViejoTecaHombre.php" method="post">
              
            <table>  
                <h3>Selecione el tipo de prendas que lleva</h3> 
                <tr>
                    <td>
                        <label >Camisa</label> 
                    </td>
                    <td>
                        <select id="camisa" name="camisa">
                            <option value="Seria manga larga">Seria manga larga</option>
                            <option value="Seria manga corta">Seria manga corta</option>
                            <option value="Informal manga larga">Informal manga larga</option>
                            <option value="Informal manga corta">Informal manga corta</option>
                        </select>  
                    </td>
                </tr>
                <tr>
                    <td>
                       <label >Pantalon</label> 
                    </td>
                    <td>
                        <select id="pantalon" name="pantalon">
                            <option value="De tela">De tela</option>
                            <option value="Jean">Jean</option>
                            <option value="Pantaloneta">Pantaloneta</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label >Zapatos</label> 
                    </td>
                    <td>
                        <select id="zapatos" name="Zapatos">
                             <option value="De tela">De tela</option>
                             <option value="En Cuero">En Cuero</option>
                             <option value="Sintetico">Sintetico</option>
                        </select>
                    </td>
                </tr>   
            </table>
           <input type="submit" value="Enviar">  
          </form>
    </body>
</html>



