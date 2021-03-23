<h1>Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'):?>
    <strong class="alert_green">Registro Completado Correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>     
    <strong class="alert_red">Registro Fallido, Introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSesion('register');?>

<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="apellidos">Apellidos</label>
    <input type="text" name="apellidos">

    <label for="email">Email</label>
    <input type="email" name="email">

    <label for="password">Contraseña</label>
    <input type="password" name="password">

    <input type="submit" value="Registrarse">
</form>