<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra aluno</title>
</head>
<body>
    <?php
    include 'conexao.php';

    $id = $_GET['id'];
    $comandoSQL = "SELECT * FROM `notas`  WHERE  `id_aluno` = $id";

    foreach($conexao->query($comandoSQL) as $linha)
        $nota = $linha['valor'];
        echo "$nota <br>";
    ?>
</body>
</html>