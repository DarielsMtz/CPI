<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> CaribbeanProbiotics </title>
    <link rel="shortcut icon" href="imagenes/icono-png.png" />
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <!-- Contenedor Principal -->
    <div class="wrapp">

        <script>
        document.title = "Caribbean Probiotics - Inicio";
        </script>

        <header><?php include "./PHP/header.php"; ?></header>

        <!-- Contenido -->
        <div class="content">

            <?php
            $content = $_GET['content'] ?? '';

            switch ($content) {
                case '':
                    include './PHP/home.php';
                    break;
                case 'home':
                    include './PHP/home.php';
                    break;
                case 'resumen';
                    include './PHP/sobre_nosotros.php';
                    break;
                case 'sobre_nosotros':
                    include './PHP/sobre_nosotros.php';
                    break;
                case 'productos':
                    include './PHP/productos.php';
                    break;
                case 'distribuidores':
                    include './PHP/distribuidores.php';
                    break;
                case 'contacto':
                    include './PHP/contacto.php';
                    break;
                case 'ViyoRep':
                    include './PHP/producto1.php';
                    break;
                default:
                    echo '404 Error - Página no encontrada';
                    break;
            }
            ?>
        </div>

        <footer> <?php include "./PHP/footer.php"; ?> </footer>

    </div>
</body>

</html>