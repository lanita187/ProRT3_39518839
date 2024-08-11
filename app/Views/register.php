<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('register'); ?>
        <label for="username">Nombre de Usuario</label>
        <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>">
        <br>

        <label for="email">Correo Electrónico</label>
        <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>">
        <br>

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <br>

        <label for="password_confirm">Confirmar Contraseña</label>
        <input type="password" name="password_confirm" id="password_confirm">
        <br>

        <input type="submit" value="Registrarse">
    <?php echo form_close(); ?>
</body>
</html>
