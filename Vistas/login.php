<?php
    require_once("cabeza.html");
    session_start();
    echo "<script>console.log('PHP Session: " . json_encode($_SESSION) . "');</script>";
?>
<body>
<h1>Iniciar Sesión</h1>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
    <form method="POST" action="index.php?action=login">
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" name="nombre_usuario" required>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
<?php
    require_once("pie.html");
?>
