<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí puedes agregar la lógica para verificar el usuario y la contraseña
    // Por ejemplo, puedes verificar contra una base de datos o un array de usuarios
    $usuarios = [
        'usuario1' => 'contraseña1',
        'usuario2' => 'contraseña2'
    ];

    if (isset($usuarios[$username]) && $usuarios[$username] == $password) {
        $_SESSION['username'] = $username;
        header('Location: bienvenido.php');
        exit();
    } else {
        $error = "Nombre de usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>