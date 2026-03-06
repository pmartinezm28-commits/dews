<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Pablo Martínez Masero">
    <title>Formulario Incidentes</title>

</head>
<body>

    <h1>Formulario Incidentes</h1>    

    <!-- Comprobamos qué formulario ha mandado la información -->

    <?php 
        if(!empty($_POST)){
            /* $victima = explode(" ", $_POST["victima_agredida"]); */

            // Recogemos los datos de la víctima
            // Si viene desde el buscador
            if(isset($_POST["victima_agredida"])){
                $victima = $_POST["victima_agredida"];
            }
            //Si viene desde el formulario
            // Comprobamos si está vacía la variable para que no de problemas después de la búsqueda del agresor
            else if(isset($_POST["nombre_victima"])){
                $nombre_victima = trim($_POST["nombre_victima"]);
                $appellido1_victima = trim($_POST["apellido1_victima"]);
                $appellido2_victima = trim($_POST["apellido2_victima"]);
                $edad_victima = trim($_POST["edad_victima"]);
                $telefono_victima = trim($_POST["telefono_victima"]);
                $calle_victima = trim($_POST["calle_victima"]);
                $numero_direccion_victima = trim($_POST["numero_direccion_victima"]);
                $documento_victima = trim($_POST["documento_victima"]);
                $victima = $nombre_victima ." ". $appellido1_victima  ." ". $appellido2_victima ." ".$edad_victima." ".$telefono_victima." ".
                $calle_victima." ".$numero_direccion_victima." ".$documento_victima;
            }
            // Si vuelve
            else if (isset($_POST["victima"])){
                $victima = $_POST["victima"];
            }
        }
    ?>

    <form action="../controlador/contr_busc_agresores.php" method="post">
        <label for="buscador">Buscador de agresores: </label> <br>
            <input type="text" id="buscador" name="buscador" class="buscador" placeholder="Buscar" required>
            <input type="submit" class="submit" value="🔎">
            
        <input type="hidden" name="victima" id="victima" value="<?php echo "$victima" ?>"  >
    </form>    
    <br/><br/>
     
    <form action="../vista/form_agresor.php" method="post">
        <p>
            <?php if(isset($mensaje)){ 
                    echo $mensaje;
            }?>
        </p>
        
        <input type="hidden" name="victima" id="victima" value="<?php echo "$victima" ?>"  >
            <input type="submit" value="Formulario Agresores">
    </form>

    <form action="../controlador/controlador_incidentes.php" method="post">
        
        <input type="hidden" name="victima" id="victima" value="<?php echo "$victima" ?>"  >
        
         <!-- Recorremos el array de coincidencias y las mostramos  -->
                <?php if(isset($coincidencias))
                if(isset($coincidencias))
                foreach ($coincidencias as $i => $agresor): ?>
                    <input type="radio" name="agresor" id ="agresor" 
                    value='<?php echo"$agresor[0] $agresor[1] $agresor[2] $agresor[3] $agresor[4] $agresor[5] $agresor[6] $agresor[7]"; ?>' required>
                    <!-- El value manda como string -->
                    
                    <label> 
                         <?php echo"$agresor[0] $agresor[1]  $agresor[2] Edad: $agresor[3] | Dirección: $agresor[5] $agresor[6] | Documento:$agresor[7] <br/>"; ?>
                    </label>
                <?php endforeach?>  

                
                <?php if(isset($agresor)):?>

                    <input type="radio" name="agresor" id ="agresor" value="<?php echo $agresor ?>">

                <?php endif; ?>
                    

        <br/><br/>
                    
        
        <div>
            <h3>Victima agredida: </h3> 
            <p><?php 
            if(!empty($_POST)){
                if (isset($victima)){
                    echo "$victima";
                }
                else{
                    $victima = "";
                    $victima = $_POST["victima"];
                    echo "$victima";
                } 
            }
            ?></p>
        </div>

            <p>Examen</p>
            <input type="checkbox" id="alfa" name="suma[]" value=3>
            <label for="alfa">Alfa</label><br>
            <input type="checkbox" id="beta" name="suma[]" value=5>
            <label for="beta">Beta</label><br>
            <input type="checkbox" id="gamma" name="suma[]" value=8>
            <label for="gamma">Gamma</label><br>
            <input type="checkbox" id="delta" name="suma[]" value=13>
            <label for="delta">Delta</label><br>
            <input type="checkbox" id="epsilon" name="suma[]" value=21>
            <label for="epsilon">Epsilon</label>
            <br> <br/><br/>

            <h3>Factor 1: Historia de violencia</h3>
            <label>Violencia psicológica: 
                <select name="psicologica">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Violencia física: 
                <select name="fisica">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Sexo forzado: 
                <select name="sexual">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Uso de armas: 
                <select name="armas">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Amenazas: 
                <select name="amenazas">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Escalada de agresiones: 
                <select name="escalada">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>

            <h3>Factor 2: Incumplimiento de medidas judiciales</h3>
            <label>Quebrantamiento de órdenes: 
                <select name="cautelares">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>

            <h3>Factor 3: Características del agresor</h3>
            <label>Celos exagerados: 
                <select name="celos">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Conductas de control: 
                <select name="control">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Adicciones: 
                <select name="adicciones">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Antecedentes penales: 
                <select name="antecedentes">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Ideas de suicidio: 
                <select name="suicidio">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>

            <h3>Factor 4: Vulnerabilidad de la víctima</h3>
            <label>Discapacidad: 
                <select name="discapacidad">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Falta de apoyo: 
                <select name="sin_apoyo">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Víctima extranjera: 
                <select name="extranjera">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Menores a cargo: 
                <select name="menores">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>

            <h3>Factor 5: Circunstancias agravantes</h3>
            <label>Ruptura reciente: 
                <select name="rompimiento">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label><br>
            <label>Miedo a muerte: 
                <select name="miedo_muerte">
                <option value="no_apreciado" selected>No apreciado</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
                <option value="extremo">Extremo</option>
                </select>
            </label>
            <br><br>
            
        </div>
        <br/><br/>
        
         
        <input type="submit" value="Nivel de Riesgo">

    </form>
    
</body>
</html>