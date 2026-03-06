<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Pablo Martínez Masero">
    <title>Formulario Agresores</title>

    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <?php 
        if(isset($_POST["victima"])){
            $victima=$_POST["victima"];                       
        }
    ?>
    
    <h1>Formulario Agresor</h1>

    <form action="../controlador/contr_agresores.php" method="post">
        
        <div>
            <label for="nombre_agresor">Nombre:</label>
            <input type="text" name="nombre_agresor" id="nombre_agresor" required>
        </div>
        <br/><br/>
        <div>
            <label for="apellido1_agresor">Apellido1:</label>
            <input type="text" name="apellido1_agresor" id="apellido1_agresor" required>
        </div>
        <br/><br/>
        <div>
            <label for="apellido2_agresor">Apellido2:</label>
            <input type="text" name="apellido2_agresor" id="apellido2_agresor" required>
        </div>
        <br/><br/>
        <div>
            <label for="edad_agresor">Edad:</label>
            <input type="text" name="edad_agresor" id="edad_agresor" required>
        </div>
        <br/><br/>
        <div>
            <label for="telefono_agresor">Telefono:</label>
            <input type="text" name="telefono_agresor" id="telefono_agresor" required>
        </div>
        <br/><br/>
        <div>
            <label for="calle_agresor">Calle:</label>
            <input type="text" name="calle_agresor" id="calle_agresor"required>
            <label for="numero_agresor">Nº:</label>
            <input type="text" name="numero_agresor" id="numero_agresor" required>
        </div>
        <br/><br/>

        <div>
            <label for="documento_agresor">Documento:</label>
            <input type="text" name="documento_agresor" id="documento_agresor" required>
        </div>
        <br/><br/>
        
        <input type="hidden" name="victima" id="victima" value="<?php echo "$victima"?>" >


        <input type="submit" value="Enviar">
    </form>
    
    
</body>
</html>