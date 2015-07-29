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
          <form action="procesarViejoTecaMujer.php" method="post">
              
            <table>  
                <h3>Selecione el tipo de prendas que lleva</h3> 
                <tr>
                    <td>
                        <label >Blusa</label> 
                    </td>
                    <td>
                        <select id="blusa" name="blusa">
                            <option value="Blusa escotada">Blusa escotada</option>
                            <option value="Blusa no escotada">Blusa no escotada</option>
                        </select>  
                    </td>
                </tr>
                <tr>
                    <td>
                       <label >Pantalon</label> 
                    </td>
                    <td>
                        <select id="pantalon" name="pantalon">
                            <option value="Falda corta">Falda corta</option>
                            <option value="Falda larga">Falda larga</option>
                            <option value="Pantalon de tela">Pantalon de tela</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label >Zapatos</label> 
                    </td>
                    <td>
                        <select id="zapatos" name="Zapatos">
                             <option value="Tacones">Tacones</option>
                             <option value="Serio cerrado">Serio cerrado</option>
                             <option value="Tenis">Tenis</option>
                        </select>
                    </td>
                </tr>   
            </table>
           <input type="submit" value="Enviar">  
          </form>
    </body>
</html>

