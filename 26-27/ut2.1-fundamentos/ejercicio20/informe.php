
<!-- Crea un archivo datos.php que contenga un array multidimensional con información de varios productos (nombre, precio, stock y categoría). 
 En otro archivo informe.php, inclúyelo con require y genera un informe HTML que:

Muestre todos los productos en una tabla.
Indique cuáles están agotados (stock igual a 0).
Calcule el valor total del inventario (precio × stock).
Muestre el producto más caro y el más barato usando funciones propias.
Agrupe los productos por categoría usando un array asociativo construido con un bucle.
 -->
<?php
    /** @var array $productos */ // Sirve para quitar un error de visual studio con require
    require 'datos.php';

    // Calcula la suma del precio de todos los productos del inventario
    function precioInventario(array $productos): int{
        $precioInventario = 0;
        foreach($productos as $producto){
            $precioInventario += $producto["precio"] * $producto["stock"] ;
        }
        return $precioInventario;
    }

    // Busca en el array parametrizado el producto de mayor precio
    function masCaro(array $productos): string{
        $masCaro = 0;
        $prod = "";
        foreach($productos as $producto){
            if($producto["precio"] > $masCaro){
                $masCaro = $producto["precio"];
                $prod = $producto["nombre"];
            } 
        }
        return $prod;
    }

    // Busca en el array parametrizado el producto de menor precio
    function masBarato(array $productos): string{
        $masBarato = 99999999999;
        $prod = "";
        foreach($productos as $producto){
            if($producto["precio"] < $masBarato){
                $masBarato = $producto["precio"];
                $prod = $producto["nombre"];
            } 
        }
        return $prod;
    }

    /* function agruparCatergorias(array $productos): array{
        $array_res = [];
        // Buscamos las diferentes categorias y las ponemos en un array aparte   
        foreach ($productos as $prod) {
            if(!array_key_exists($prod["categoria"], $array_res)){
                // Introducimos la categoria correspondiente sin duplicados en $array_res
                $array_res[$prod["categoria"]] = ""; 
            }
        }
        
        $array_claves = array_keys($array_res);
        echo "array aux: ";
        print_r($array_claves);
        echo "<br>";

        foreach ($productos as $prod) {
            foreach ($array_claves as $aux) {
                if( $aux == $prod["categoria"]){
                    $array_res[$prod["categoria"]] = $prod["nombre"];
                }
            }
        }
        return $array_res;
    } */

    function agrupar(array $productos, string $categoria): array{
        $array_resultado = [];
            foreach($productos as $prod){
                $array_resultado[$prod[$categoria]][] = $prod;
            }

        return $array_resultado;
    }

    /* function estaCategoria(string $categoria){return ($categoria) == null;}
    if(array_find_key($array_res, function ($categoria) {return ($categoria) == null;})){
        array_push($array_res, $prod["categoria"]);
    } */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { border: 1px solid #ccc; padding: .6rem; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h1>Ejercicio 20</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Precio Final</th>
            <th>Estado</th>
            <th>Categoria</th>

        </tr>
        <?php 
        foreach($productos as $producto): ?>          
            <tr>
                <td> <?= $producto["nombre"]  ?> </td>       
                <td> <?= $producto["precio"]  ?> </td>
                <td> <?= $producto["stock"]  ?> </td>
                <td> <?= $producto["precio"] * $producto["stock"]  ?> </td>          
                <td> <?= $producto["stock"] > 0 ? "Disponible" : "Agotado" ?> </td>   
                <td> <?= $producto["categoria"]  ?> </td>       
            </tr>
        <?php endforeach ?>
    </table>
    <p>
        <strong>Precio Inventario: </strong>
        <?php echo precioInventario($productos) ?>
    </p>

    <p>
        <strong>Precio más caro: </strong>
        <?php print_r(masCaro($productos))  ?>
    </p>

    <p>
        <strong>Precio más barato: </strong>
        <?php print_r(masBarato($productos)) ?>
    </p>

    <p><?php $array = agrupar($productos, "categoria"); 
        echo "array agrupar: ";
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        ?>
    </p>
</body>
</html>	