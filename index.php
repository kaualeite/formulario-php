<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="datos.php" method="POST">
            <p>Nombre: <input type="text" name="nombre"></p>
            <p>Edad: <input type="number" name="edad"></p>
            <p>Ciudad: <select name="ciudad">
                <option>Barcelona</option>
                <option>Girona</option>
                <option>Lleida</option>
                <option>Tarragona</option></p>
            </select>
            <p>Sexo: 
            <p>Hombre <input type="radio" name="sexo" value="hombre">
                Mujer <input type="radio" name="sexo" value="mujer"></p></p>
            <input type="submit" name="enviar" value="enviar datos">
            
        </form>
    </body>
</html>
