<body>
    <h1>Buscar Juegos</h1>
    <form method="GET" action="index.php?action=buscarJuegos">
        <input type="hidden" name="action" value="buscarJuegos">
        <label for="busqueda">Buscar por título o plataforma:</label>
        <input type="text" name="busqueda" placeholder="Escribe algo..." required>
        <button type="submit">Buscar</button>
    </form>

    <?php if (isset($juegos)): ?>
        <h2>Resultados de la Búsqueda</h2>
        <?php if (count($juegos) > 0): ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Plataforma</th>
                        <th>Año de Lanzamiento</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($juegos as $juego): ?>
                        <tr>
                        <td><?= $juego[3] ?></td>
                        <td><?= $juego[0] ?></td>
                        <td><?= $juego[1] ?></td>
                        <td><?= $juego[2] ?></td>  
                        <td>
                            <form action="index.php?action=modificarJuego" method="post">
                                <input type="hidden" name="id_juego" value="<?= $juego[4] ?>">
                                <input type="submit" value="Modificar">
                            </form>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No se encontraron resultados para "<?= $_GET["busqueda"] ?>".</p>
        <?php endif; ?>
    <?php endif; ?>
</body>

