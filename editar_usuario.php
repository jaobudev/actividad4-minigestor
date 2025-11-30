<?php
$data = json_decode(file_get_contents('data/usuarios.json'), true);
$id = $_GET['id'];

$usuario = array_filter($data, fn($u) => $u['id'] == $id);
$u = array_values($usuario)[0];

if ($_POST) {
    foreach ($data as &$item) {
        if ($item['id'] == $id) {
            $item['nombre'] = $_POST['nombre'];
        }
    }
    file_put_contents('data/usuarios.json', json_encode($data, JSON_PRETTY_PRINT));
    echo "<p>Usuario actualizado</p>";
}
?>

<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $u['nombre'] ?>" required>
    <button type="submit">Actualizar</button>
</form>