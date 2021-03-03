<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
    <?php require_once 'clases/Table.php' ?>
</head>

<body>
    <main>
        <h1>Segundo parcial de programacion</h1>
        <h2>Buscaminas</h2>
        <form action='pages/game.php' method='POST' >
            <strong>Por favor introduzca el tamaño del tablero</strong><br>
            <label>El tamaño debe ser mayor a 8 y menor a 20</label>
            <div>
                <input required type='number' name='size' >
                <input class='submit' type='submit' value='jugar' >
            </div>
        </form>
    </main>
</body>

</html>