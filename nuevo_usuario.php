<?php
if ($_POST) {
    $data = json_decode(file_get_contents('data/usuarios.json'), true);
    $nuevo = [
        "id" => count($data) + 1,
        "nombre" => $_POST['nombre']
    ];
    $data[] = $nuevo;
    file_put_contents('data/usuarios.json', json_encode($data, JSON_PRETTY_PRINT));
    echo "<p>Usuario agregado correctamente</p>";
}
?>

<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <button type="submit">Guardar</button>
</form>