<p>Limpia y organiza este código</p>
<pre class="language-php"><code><?php
// ============================================================
// poc2.php - Catálogo de cursos online
// Código mezclado: datos + negocio + presentación (a propósito)
// ============================================================

$cursos = [
    101 => ['titulo' => 'PHP básico',            'horas' => 40, 'precio' => 120.00, 'plazas' => 15, 'matriculados' => 12, 'categoria' => 'Backend'],
    102 => ['titulo' => 'JavaScript moderno',    'horas' => 60, 'precio' => 180.00, 'plazas' => 20, 'matriculados' => 20, 'categoria' => 'Frontend'],
    103 => ['titulo' => 'Bases de datos',        'horas' => 50, 'precio' => 150.00, 'plazas' => 18, 'matriculados' => 5,  'categoria' => 'Backend'],
    104 => ['titulo' => 'Diseño UX',             'horas' => 30, 'precio' => 90.00,  'plazas' => 12, 'matriculados' => 0,  'categoria' => 'Diseño'],
    105 => ['titulo' => 'Vue 3 en profundidad',  'horas' => 45, 'precio' => 210.00, 'plazas' => 10, 'matriculados' => 9,  'categoria' => 'Frontend'],
];

$categorias = [
    ['Backend',  'Desarrollo del lado servidor', 0.10],
    ['Frontend', 'Interfaces y experiencia',     0.05],
    ['Diseño',   'UX/UI y prototipado',          0.15],
];

// Calculamos el precio final con el descuento correspondiente
// Calculamos los ingresos potenciales

$totalCursos = count($cursos);
$cursosDisponibles = 0;
$totalHoras = 0;
$ingresosPotenciales = 0;

foreach ($cursos as $id => $curso) {
    if ($curso['matriculados'] < $curso['plazas']) {
        $cursosDisponibles++;
    }
    $totalHoras = $totalHoras + $curso['horas'];

    // Descuento según categoría (buscando en el array indexado)
    $descuento = 0;
    foreach ($categorias as $cat) {
        if ($cat[0] == $curso['categoria']) {
            $descuento = $cat[2];
        }
    }
    $precioConDescuento = $curso['precio'] - ($curso['precio'] * $descuento);
    $ingresosPotenciales = $ingresosPotenciales + ($precioConDescuento * $curso['plazas']);
}

function mostarEstado ($plazas, $matriculados){
    $libres = $plazas - $matriculados;
    $cadena = "";
    if ($matriculados >= $plazas) {
        $cadena = '<span class="completo">Completo</span>';
    } elseif ($libres <= 3) {
        $cadena = '<span class="ultimas">Últimas plazas</span>';
    } else {
        $cadena = '<span class="disponible">Disponible</span>';
    }
    return $cadena;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos online - Código mezclado</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 1000px; margin: 2rem auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { border: 1px solid #ccc; padding: .6rem; text-align: left; }
        th { background: #eee; }
        .completo  { color: #b00020; font-weight: bold; }
        .disponible{ color: #176b2c; font-weight: bold; }
        .ultimas   { color: #b06a00; font-weight: bold; }
        select { padding: .3rem; }
    </style>
</head>
<body>
    <h1>Catálogo de cursos online</h1>

    <p>
        <?php
        echo "Hay $totalCursos cursos, de los cuales $cursosDisponibles tienen plazas libres. ";
        echo "Se ofertan $totalHoras horas en total.";
        ?>
    </p>

    <p>
        <label for="categoria">Filtrar por categoría:</label>
        <select name="categoria" id="categoria">
            <option value="">-- Todas --</option>
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= $cat[0] ?>">
                    <?= $cat[0] ?> (<?= $cat[1] ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Categoría</th>
                <th>Horas</th>
                <th>Precio</th>
                <th>Plazas</th>
                <th>Estado</th>
                <th>Precio final</th>
                <th>Coste/hora</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cursos as $id => $curso): ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= htmlspecialchars($curso['titulo']) ?></td>
                    <td><?= $curso['categoria'] ?></td>
                    <td><?= $curso['horas'] ?> h</td>
                    <td><?= number_format($curso['precio'], 2, ',', '.') ?> €</td>
                    <td>
                        <?= $curso['matriculados'] ?> / <?= $curso['plazas'] ?>
                    </td>
                    <td>
                        <?= mostarEstado($curso['plazas'], $curso['matriculados'])?>
                    </td>
                    <td>
                        <?php
                        $descuento = 0;
                        foreach ($categorias as $cat) {
                            if ($cat[0] == $curso['categoria']) {
                                $descuento = $cat[2];
                            }
                        }
                        $precioFinal = $curso['precio'] - ($curso['precio'] * $descuento);
                        echo number_format($precioFinal, 2, ',', '.') . ' €';
                        if ($descuento > 0) {
                            echo ' <small>(-' . ($descuento * 100) . '%)</small>';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $costeHora = $curso['precio'] / $curso['horas'];
                        echo number_format($costeHora, 2, ',', '.') . ' €/h';
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        Ingresos potenciales (si se llenan todas las plazas, con descuento aplicado):
        <strong>
            <?php
            echo number_format($ingresosPotenciales, 2, ',', '.') . ' €';
            ?>
        </strong>
    </p>

    <p>
        Categorías disponibles en el catálogo:
        <strong>
            <?php
            $nombresCategorias = [];
            foreach ($categorias as $cat) {
                $nombresCategorias[] = $cat[0];
            }
            echo implode(' · ', $nombresCategorias);
            ?>
        </strong>
    </p>
</body>
</html></code></pre>
