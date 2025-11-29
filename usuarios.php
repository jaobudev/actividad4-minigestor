<?php
$usuarios = json_decode(file_get_contents('data/usuarios.json'), true);
echo "<h2>Lista de Usuarios</h2>";
foreach ($usuarios as $u) {
    echo "<p>".$u['nombre']."</p>";
}
?>