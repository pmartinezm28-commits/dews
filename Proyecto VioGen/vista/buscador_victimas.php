<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Pablo Martínez Masero">
    
    <title>Buscador</title>

    <!--CAMBIAR NOMBRE A INDEX-->
</head>
<body>
    <h1>Página principal</h1>
    <form action="../controlador/contr_busc_victimas.php" method="post">
        <div>
            <label for="buscador">Buscador de victimas: </label> <br>
            <input type="text" id="buscador" name="buscador" class="buscador" placeholder="Buscar" required>
            <input type="submit" class="submit" value="🔎">
        </div>
    </form>
    <br/><br/><br/><br/><br/><br/>

    <!--Muestra todas las coincidencias del buscador-->
    <form action="../vista/form_incidente.php" method="post">
        <div>
            <label for="buscador">Víctimas Registradas:</label>
             <br/><br/>
                <input type="text" size="30" id="coincidencia" name="coincidencia" disabled="true" placeholder = "" 
                value = "<?php if(isset($mensaje)){ 
                        echo $mensaje;
                    }?>"
                >
                <br/><br/>
                <?php if(isset($victima)): ?>
                    <input type="radio" name="victima_agredida" id ="victima_agredida" 
                    value='<?php echo"$victima"; ?>' required>
                    <!-- El value manda como string -->
                    
                    <label> 
                         <?php echo"$victima <br/>"; ?>
                    </label>
                <?php endif; ?>    
            <br/><br/>
            

            <input type="submit" class="submit" value="Formulario Incidente">

        </div>
    </form>
    <br/><br/><br/><br/><br/><br/>
    <form action="../vista/form_victimas.html" method="post">
        
        <label for="buscador">Formularios Victimas: </label> <br/><br/>
        <input type="submit" class="submit" value="Formulario Víctima">

    </form>


   
</body>
</html>