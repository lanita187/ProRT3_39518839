<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="<?php echo site_url('usuario/actualizar/'.$usuario->id); ?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>">
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $usuario->email; ?>">
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
