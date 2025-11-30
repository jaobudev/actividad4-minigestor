<?php
$data = json_decode(file_get_contents('data/usuarios.json'), true);
$id = $_GET['id'] ?? 0;

$usuario = array_filter($data, fn($u) => $u['id'] == $id);

if ($usuario) {
    $u = array_values($usuario)[0];
    echo "<h2>Detalle del Usuario</h2>";
    echo "<p>ID: {$u['id']}</p>";
    echo "<p>Nombre: {$u['nombre']}</p>";
} else {
    echo "<p>Usuario no encontrado</p>";
}
?>