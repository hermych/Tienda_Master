<h1>Gestionar Categorias</h1>
<a href="<?=base_url?>categoria/crear" class="button button-small">Crear categoria</a>
<table>
    <tr>
        <th>N°</th>
        <th>Nombre</th>
    </tr>
    <?php while($cat = $categorias->fetch_object()) : ?>
        <tr>
            <td><?=$cat->id;?></td>
            <td><?=$cat->nombre;?></td>
        </tr>
    <?php endwhile; ?>
</table>