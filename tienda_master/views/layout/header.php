<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css">
    <style>
       .header-announcement {
            background: linear-gradient(to right, #080071, #222222);
            color: #fff;
            text-align: center;
            padding: 5px 0;
            font-size: 18px; /* Aumenta el tamaño de la fuente */
            font-weight: bold; /* Hace el texto más grueso */
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 0;
            width: 100%;
            box-sizing: border-box;
            z-index: 1; /* Asegura que la banda esté por encima del contenido */
        }

        /* Elimina la imagen del camión */
        .header-announcement img {
            display: none; /* Oculta la imagen */
        }

        /* Estilos del header */
        #container {
            background-color: black;
        }
    </style>
</head>
<body>
    <div id="container">
        <!-- CABECERA -->
        <header>
            <div class="header-announcement">
                Envíos gratis a partir de $99,999
            </div>
            <div id="logo">
                <img src="<?= base_url ?>assets/img/logo.png" alt="Camiseta logo">
            </div>
        </header>

        <!-- MENU -->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="<?=base_url?>">Inicio</a>
                </li>
                <?php while ($cat = $categorias->fetch_object()) : ?>
                    <li>
                        <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                    </li>
                <?php endwhile; ?>


            </ul>

        </nav>

        <div id="content">

