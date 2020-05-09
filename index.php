<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style.css">

    </head>
    <body>
        <form action="recibe.php" method="post">
            <!--nombre cliente-->
           <label for="nombre">Nombre:</label><input type="text" name="nombre"/>
            <!--Fecha de nacimiento -->
            <label for="fecha">Fecha de nacimiento: </label><input type="date" name="fecha"/>
            <!--Sexo cliente masculino-->
             <label for="s">Masculino</label><input type="radio" name="sexo" value="Masculino"/>
            <!--sexo cliente femenino-->
           <label for="s">Femenino</label> <input type="radio" name="sexo" value="Femenino"/>
           <!--enviar-->
           <input type="submit" value="Enviar" style="display:block;"/>
           <!--limpiar-->
           <input type="reset" value="Limpiar"/>
        </form>
             
    </body>
</html>
