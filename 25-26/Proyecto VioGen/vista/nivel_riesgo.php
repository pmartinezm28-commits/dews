<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel de Riesgo</title>
</head>
    <?php
        if(isset($_POST["victima"])){
            $victima = $_POST["victima"];
            $agresor = $_POST["agresor"];

            $suma = $_POST["suma"];
            
        }
    ?>
<body>
        <h1>Nivel de Riesgo</h1>
        <p><?php echo "La victima ".$victima ;?> </p>
        <p><?php echo " Se encuentra en un nivel de riesgo: ". $cont_nivel_riesgo ?>   </p>
        <p><?php echo " Frente a su agresor ".$agresor ?>   </p>
        <p>
            <?php 
            $cont = 0;
                for($i = 0; $i < count($suma); $i++){
                    $cont += $suma[$i];
                } 
                echo "La suma de las letras griegas es: ". $cont;
            ?> 
        </p>

        <br/><br/>

</body>
</html>