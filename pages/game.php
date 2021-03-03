<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/game.css">
    <title>Document</title>
    <?php require_once '../clases/Table.php';
        if (intval($_POST['size']) < 8 || intval($_POST['size']) > 20) {
            header("Location: ..");
        } else {
            $table = new Table();
            $table->set_size(intval($_POST['size']));
        }
    ?>
</head>

<body>

    <?php
        $table->show_table()
    ?>
</body>

</html>