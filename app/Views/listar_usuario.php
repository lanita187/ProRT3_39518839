<!DOCTYPE html>
<html>
<head>
    <title>Listar Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <a href="<?php echo site_url('usuario/agregar'); ?>">Agregar Usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario->id; ?></td>
            <td><?php echo $usuario->nombre; ?></td>
            <td><?php echo $usuario->email; ?></td>
            <td>
                <a href="<?php echo site_url('usuario/editar/'.$usuario->id); ?>">Editar</a>
                <a href="<?php echo site_url('usuario/borrar/'.$usuario->id); ?>">Borrar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
