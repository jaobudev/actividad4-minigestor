<?php
$data = json_decode(file_get_contents('data/usuarios.json'), true);
$id = $_GET['id'];

$data = array_filter($data, fn($u) => $u['id'] != $id);

file_put_contents('data/usuarios.json', json_encode(array_values($data), JSON_PRETTY_PRINT));

echo "<p>Usuario eliminado</p>";
?>
