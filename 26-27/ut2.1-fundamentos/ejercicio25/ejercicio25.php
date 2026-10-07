<!-- Crea una función leerArchivo($ruta) que intente abrir un archivo con fopen() y leer su contenido línea a línea.
Si el archivo no existe, lanza una excepción. Usa un bloque finally para garantizar que el archivo se cierra con fclose() si se llegó a abrir.
Prueba la función con un archivo existente y con una ruta inexistente. -->
<?php

function leerArchivo($ruta){
    $archivo = fopen("archivo.txt", "r");
    if (!file_exists($archivo)){
        throw new Exception("No existe el archivo");
    }
    while (($linea = fgets($archivo)) !== false){
        echo $linea;
    }    
    fclose($archivo);
}

try {
    leerArchivo("archivo.txt");
}
catch(Exception $e){
    echo "Error: " . $e->getMessage();
}