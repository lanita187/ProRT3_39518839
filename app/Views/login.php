<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <form action="<?php echo site_url('login_controller/autenticar'); ?>" method="post">
        <label>Email:</label>
        <input type="email" name="email">
        <br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
