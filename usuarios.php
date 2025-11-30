<?php
$usuarios = json_decode(file_get_contents('data/usuarios.json'), true);
echo "<h2>Lista de Usuarios</h2>";

echo "<table border='1'>
        <tr><th>ID</th><th>Nombre</th></tr>";

foreach ($usuarios as $u) {
    echo "<tr><td>{$u['id']}</td><td>{$u['nombre']}</td></tr>";
}

echo "</table>";
?>