
<?php
session_start();

// Página inicial
$pagina = isset($_GET['op'])
    ? strtolower($_GET['op'])
    : 'bienvenida';

// Páginas permitidas
$paginasPermitidas = [
    'bienvenida'
];

if (!in_array($pagina, $paginasPermitidas)) {
    $pagina = 'bienvenida';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Michilandia | Comida con amor y patitas</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilos propios -->
    <link href="../css/michilandia.css" rel="stylesheet">
</head>

<body>

    <!-- Menú principal -->
    <?php require_once __DIR__ . '/menu.php'; ?>

    <!-- Contenido -->
    <main>
        <?php
        require_once __DIR__ . '/' . $pagina . '.php';
        ?>
    </main>

    <!-- Pie de página -->
    <?php require_once __DIR__ . '/piepag.php'; ?>

    <!-- Bootstrap JS -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
