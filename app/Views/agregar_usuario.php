<!DOCTYPE html>
<html>
<head>
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form action="<?php echo site_url('usuario/agregar'); ?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label>Email:</label>
        <input type="email" name="email">
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Agregar</button>
    </form>
</body>
</html>
