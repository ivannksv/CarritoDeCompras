<h1>Gestión de categorías</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">
    Crear categoría.
</a>

<!-- Mostrar mensajes de éxito o error -->
<?php if(isset($_SESSION['categoria']) && $_SESSION['categoria'] == 'complete' ) : ?>
    <strong class="alert_green">La categoría se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['categoria']) && $_SESSION['categoria'] != 'complete' ) : ?>
    <strong class="alert_red">La categoría no se ha creado</strong>
<?php endif; ?>
<?php Utils::deleteSession('categoria'); ?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete' ) : ?>
    <strong class="alert_green">La categoría se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete' ) : ?>
    <strong class="alert_red">La categoría no se ha borrado</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>

<!-- Tabla para listar categorías -->
<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>ACCIONES</th>
    </tr>
    <?php while ($cat = $categorias->fetch_object()) : ?>
        <tr>
            <td><?= $cat->id; ?></td>
            <td><?= $cat->nombre; ?></td>
            <td>
                <!-- Enlaces para editar y eliminar -->
                <a href="<?=base_url?>categoria/editar&id=<?=$cat->id?>" class="button button-gestion">Editar</a>
                <a href="<?=base_url?>categoria/eliminar&id=<?=$cat->id?>" class="button button-gestion button-red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
